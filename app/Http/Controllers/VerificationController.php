<?php

namespace App\Http\Controllers;

use App\Mail\OtpMail;
use App\Models\EmailVerification;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VerificationController extends Controller
{
    public function sendOtpThenInput(Request $request){
        $input =  $request->validate([
            'temp_name' => ['required', 'min:3', 'max:20'],
            'temp_password'=> ['required','min:8'],
            'repeat_password'=> ['required','min:8'],
            'temp_email' => ['required','email']
        ]);

        if($input['temp_password'] !== $input['repeat_password']){
            return back();
        }

        $otp = rand(100000, 999999);

        EmailVerification::updateOrCreate(
            ['email' => $input['temp_email']],
            [
                'name' => $input['temp_name'],
                'password' => bcrypt($input['temp_password']),
                'otp' => $otp,
                'expires_at' => Carbon::now()->addMinutes(5)
            ]
        );

        Mail::to($input['temp_email'])->send(new OtpMail($otp));

        return view('input_otp', ['temp_email' => $input['temp_email']]);
    }

    public function verifyOtpThenRegister(Request $request){
        $input = $request->validate([
            'otp_email' => 'required|email',
            'otp_code' => 'required'
        ]);

        $record = EmailVerification::where('email', $input['otp_email'])->first();

        if (!$record) {
            return response()->json(['message' => 'Email not found'], 404);
        }

        if ($record->expires_at->isPast()) {
            $record->delete();
            return response()->json(['message' => 'OTP expired'], 400);
        }

        if ($record->otp != $input['otp_code']) {
            return response()->json(['message' => 'Invalid OTP'], 400);
        }

        $user = $this->register($record['name'], $record['password'], $record['email']);
        auth()->guard()->login($user);

        $record->delete();

        return redirect('/dashboard');
    }

    private function register($username, $password, $email){
        $query_input = [
            'name'=> $username,
            'password' => $password,
            'email'=> $email
        ];

        return User::create($query_input);
    }
}
