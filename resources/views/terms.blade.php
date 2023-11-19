@extends('layout.layout')
@section('title', 'Terms')
@section('content')
    <div class="row">
        <div class="col-3">
            @include('shared.left-sildebar')
        </div>
        <div class="col-6">
            <h1>Terms</h1>
            <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ut neque quam asperiores ipsa. Enim magnam
                illo
                deleniti sequi laudantium mollitia voluptate, impedit autem omnis. Quas a harum quis autem.
            </div>
        </div>
        <div class="col-3">

            @include('shared.search-bar')
            @include('shared.follow-box')
        </div>
    </div>
@endsection
