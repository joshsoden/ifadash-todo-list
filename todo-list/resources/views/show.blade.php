@extends('layouts.app')

@section('header', "Your current todos")

@section('content')
    @livewire('todo-list')
    <div class="divider"></div>
    @livewire('todo-create')
@endsection
