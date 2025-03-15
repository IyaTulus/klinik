@extends('livewire.layouts.main-layouts', ['title' => 'Home'])

@section('content')
    <div>
        <h1>Home - <span style="{{ auth()->user()->role == 'ADMIN' ? 'color: green;' : '' }}">{{ auth()->user()->name }}</span></h1>
    </div>
@endsection