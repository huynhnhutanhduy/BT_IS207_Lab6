@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Hello. My name is Duy. I\'m Vietnamese.') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('This is just a demo. Below is my contact information') }}
                </div>
                <div>
                    {{ __('Email:')}}
                    <a href="mailto:19520060@gm.uit.edu.vn">19520060@gm.uit.edu.vn</a>
                </div>
                <div>
                    {{ __('Facebook')}}
                    <a href="https://www.facebook.com/duy.hnad">Anh Duy</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
