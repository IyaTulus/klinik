@extends('livewire.layouts.main-layouts', ['title' => 'Upload Content'])

@section('content')
    <div>
        <h1>Uplod Kontent - <span style="{{ auth()->user()->role == 'ADMIN' ? 'color: green;' : '' }}">{{ auth()->user()->name }}</span></h1>
        @livewire('content.data')
    </div>
@endsection