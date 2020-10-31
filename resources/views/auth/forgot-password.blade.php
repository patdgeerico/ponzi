@extends('layouts.auth')

@section('title', 'Recover Password')


@section('content')
<div class="account-box">
    <div class="card m-b-30">
        <div class="card-body">
            <div class="card-title text-center">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('home/logo.jpeg') }}" alt="" class="" style="height: 50px">
                </a>
                <h5 class="mt-3"><b>Enter Your Email To Receive Recovery Email</b></h5>
            </div>
            @if (session('email'))
                <div style="text-align: center;
                font-size: 17px;
                font-weight: 700;
                color: red;">
                    {{ session('email') }}
                </div>
            @endif
            @if (session('status'))
                <div style="text-align: center;
                font-size: 17px;
                font-weight: 700;
                color: green;">
                    {{ session('status') }}
                </div>
            @endif
            <form class="form mt-5 contact-form" method="POST" action="{{ route('forgot.post') }}">
                @csrf
                <div class="form-group ">
                    <div class="col-sm-12">
                        <input class="form-control form-control-line" type="email" placeholder="Enter Email Address" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12 mt-4">
                        <button class="btn btn-success btn-block" type="submit">Recover Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
