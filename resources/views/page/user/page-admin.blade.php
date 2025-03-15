@extends('livewire.layouts.main-layouts', ['title' => 'Admin'])

@section('content')
    <div>
        <h1>ADMIN - <span style="{{ auth()->user()->role == 'ADMIN' ? 'color: green;' : '' }}">{{ auth()->user()->name }}</span></h1>
        @livewire('user.table-admin')
    </div>
@endsection