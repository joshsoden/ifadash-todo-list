@extends('layouts.app')

@section('header', "Your current todos")

@section('content')
    @livewire('todo-create')
    @livewire('todo-list')
@endsection
