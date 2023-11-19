@extends('layout.layout')

@section("title", 'Message')
@section('content')
    <div class="row">
        <div class="col-3">
            @include('shared.left-sildebar')
        </div>

        <div class="col-6">
        <div class="card">
            <section class="chat-area">
                {{-- <header class="card-header h-2">
                    <img class="me-3 avatar-sm rounded-circle" src="" alt="">
                    <div class="">
                        <span>M3LLOW</span>
                        <p>Active now</p>
                    </div>
                </header> --}}
                <header class="card-heard">
                    <img src="" class="me-3 avatar-sm rounded-circle" alt="">
                    <div>
                        <span>M3LLOW</span>
                        <p>Active now</p>
                    </div>
                </header>
                <div class="chat-box card-body">
                    <div class="chat outgoing">
                        <div class="details">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, labore!</p>
                        </div>
                    </div>
                    <div class="chat incoming">
                        <img class="me-3 avatar-sm rounded-circle" src="image/img-1.jpg" alt="">
                        <div class="details">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, labore!</p>
                        </div>
                    </div>
                    <div class="chat outgoing">
                        <div class="details">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, labore!</p>
                        </div>
                    </div>
                    <div class="chat incoming">
                        <img src="image/img-1.jpg" alt="">
                        <div class="details">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, labore!</p>
                        </div>
                    </div>
                    <div class="chat outgoing">
                        <div class="details">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, labore!</p>
                        </div>
                    </div>
                    <div class="chat incoming">
                        <img src="image/img-1.jpg" alt="">
                        <div class="details">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, labore!</p>
                        </div>
                    </div>
                </div>
                <form action="" class="typing-area card-footer">
                    <input type="text" placeholder="Type a message here...">
                    <button><i class="fa-brands fa-telegram"></i></button>
                </form>
            </section>
        </div>
        </div>
        <div class="col-3">
            @include('messages.right-message')
        </div>
    </div>
@endsection
