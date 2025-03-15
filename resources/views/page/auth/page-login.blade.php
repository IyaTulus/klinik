@extends('livewire.layouts.main-layouts', ['title' => 'Login'])

@section('content')
    <div>
        <h1>Login</h1>
        @livewire('auth.login')
        <div>
            @error('username')
                {{ $message}}
            @enderror
            @error('password')
                {{ $message}}
            @enderror
        </div>
    </div>
@endsection