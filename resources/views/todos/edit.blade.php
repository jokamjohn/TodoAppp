@extends('app')

@section('title','Show all todos')

@section('content')


    <div class="panel-heading">Edit Todo</div>
    <div class="panel-body">

        {!! Form::model($todo,[ 'method' => 'PATCH',  'route' => [ 'todos.update', $todo->id ] ]) !!}

        @include('todos.form')

        <div class="form-group">
            {!!Form::submit('Update', ['class' => 'btn btn-primary']) !!}
        </div>

        {!!Form::close()!!}


    </div>

@endsection