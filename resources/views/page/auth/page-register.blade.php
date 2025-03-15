@extends('livewire.layouts.main-layouts', ['title' => 'Register'])

@section('content')
    <div>
        <h1>Register</h1>
        @livewire('auth.register')
        <div>
            @if (session()->has('status'))
                <div>
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
@endsection