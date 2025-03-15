@extends('livewire.layouts.main-layouts', ['title' => 'User'])

@section('content')
    <div>
        <h1>ADMIN - <span style="{{ auth()->user()->role == 'ADMIN' ? 'color: green;' : '' }}">{{ auth()->user()->name }}</span></h1>
        <div>
            @livewire('user.user-detail')
        </div>
        <div>
            @livewire('user.table-user')
        </div>
    </div>
@endsection