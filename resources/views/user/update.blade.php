@extends('layouts.app')
@section('content')
    @livewire('user-update',  ['idx' => $id])
@endsection