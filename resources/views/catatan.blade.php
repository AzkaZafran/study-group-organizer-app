@extends('layouts.app')

@section('current-navbar-active')
    <ul class="d-flex navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link cnavbar-text active" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link cnavbar-text" href="{{ route('friend-list') }}">Teman</a>
        </li>
    </ul>
@endsection

@section('title', 'Catatan')

@section('content')
    <div class="container">
        <div class="row gx-3 gy-3">
            <div class="col d-flex">
                <div class="card w-100 shadow p-3 mb-5">
                    <ul class="nav nav-catatan mb-3">
                        <li class="nav-item d-flex align-items-center">
                            <a class="nav-link cnav-text unselected"  href="{{ route('dashboard') }}"><</a>
                        </li>
                        <li class="nav-item">
                            <span class="cnav-text selected d-block">Nama Agenda</span>
                            <span class="cnav-text unselected d-block">Penyelenggara : teguh ryan</span>
                        </li>
                    </ul>
                    <div>
                        <div class="chat-container">
                            <div class="chat-bubble chat-bubble-left">
                                <div class="chat-sender">Azka Zafran</div>
                                <div class="chat-message">Halo, gimana kabar kamu?</div>
                                <div class="chat-time">14:30</div>
                            </div>                            
                            <div class="chat-bubble chat-bubble-right">
                                <div class="chat-message">Baik nih, lagi ngerjain tugas IMPAL</div>
                                <div class="chat-time">14:32</div>
                            </div>
                            <div class="chat-bubble chat-bubble-left">
                                <div class="chat-sender">Ahmad Pasha</div>
                                <div class="chat-message">Wah sama dong, butuh bantuan gak?</div>
                                <div class="chat-time">14:33</div>
                            </div>
                            <div class="chat-bubble chat-bubble-left">
                                <div class="chat-sender">Azka Zafran</div>
                                <div class="chat-message">Halo, gimana kabar kamu?</div>
                                <div class="chat-time">14:30</div>
                            </div>                            
                            <div class="chat-bubble chat-bubble-right">
                                <div class="chat-message">Baik nih, lagi ngerjain tugas IMPAL</div>
                                <div class="chat-time">14:32</div>
                            </div>
                            <div class="chat-bubble chat-bubble-left">
                                <div class="chat-sender">Ahmad Pasha</div>
                                <div class="chat-message">Wah sama dong, butuh bantuan gak?</div>
                                <div class="chat-time">14:33</div>
                            </div>
                            <div class="chat-bubble chat-bubble-left">
                                <div class="chat-sender">Azka Zafran</div>
                                <div class="chat-message">Halo, gimana kabar kamu?</div>
                                <div class="chat-time">14:30</div>
                            </div>
                            <div class="chat-bubble chat-bubble-right">
                                <div class="chat-message">Baik nih, lagi ngerjain tugas IMPAL</div>
                                <div class="chat-time">14:32</div>
                            </div>                            
                            <div class="chat-bubble chat-bubble-left">
                                <div class="chat-sender">Ahmad Pasha</div>
                                <div class="chat-message">Wah sama dong, butuh bantuan gak?</div>
                                <div class="chat-time">14:33</div>
                            </div>                            
                        </div>
                        <div class="chat-input-area">
                            <form class="chat-input-form">
                                <div class="d-flex align-items-end gap-2">
                                    <!-- <button type="button" class="btn btn-outline-secondary btn-icon" title="Attach file">
                                        <i class="bi bi-paperclip"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary btn-icon" title="Add emoji">
                                        <i class="bi bi-emoji-smile"></i>
                                    </button> -->
                                    <textarea class="form-control chat-input" rows="1" placeholder="Ketik pesan..."></textarea>
                                    <button type="submit" class="btn btn-primary btn-send">
                                        <i class="bi bi-send-fill"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection