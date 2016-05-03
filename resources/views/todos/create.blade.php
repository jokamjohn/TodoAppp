@extends('app')

@section('title','Create To do')

@section('content')

    <div class="panel-heading">Create Todo</div>
    <div class="panel-body">

        {!! Form::open([ 'route' => 'todos.store' ]) !!}

        @include('todos.form')

        <div class="form-group">
            {!!Form::submit('Create Todo', ['class' => 'btn btn-primary']) !!}
        </div>

        {!!Form::close()!!}

    </div>

@endsection