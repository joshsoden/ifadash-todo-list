@extends('layouts.app')

@section('header', "Your current todos")

@section('content')
    <p>Content section test</p>
    @livewire('todo-list')
@endsection
