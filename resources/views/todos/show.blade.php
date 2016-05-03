@extends('app')

@section('title','Show Todo')

@section('content')

    <div class="panel-heading">Todo</div>
    <div class="panel-body">


        <p>{{ $todo->name }}</p>

        <p>{{ $todo->text }}</p>




    </div>

@endsection