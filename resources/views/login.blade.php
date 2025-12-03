<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-light d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    
    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        
        <h3 class="card-title text-center mb-4">Login</h3>

        <form action="{{ route('verify-user') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="text" id="inputEmail" class="form-control" placeholder="Masukkan Email" required name="login-email"/>
            </div>

            <div class="mb-3">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Masukkan Password" required name="login-password" />
            </div>

            <button type="submit" class="btn btn-primary w-100 mb-3">Login</button>

            <div class="text-center">
                <p>Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
            </div>
        </form>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>