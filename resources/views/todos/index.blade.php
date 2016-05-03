@extends('app')

@section('title','Show all todos')

@section('content')
    <div class="panel-heading">All Todos</div>


    @if(count($todos) > 0)

        <div class="panel-body">

            <div class="content table-responsive table-full-width">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Created</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($todos as $todo)
                        <tr>
                            <th>
                                {{ $todo->id }}
                            </th>

                            <th>
                                {{ $todo->name }}
                            </th>

                            <th>
                                {{ $todo->created_at->diffForHumans() }}
                            </th>

                            <th>
                                <a href="{{ route('todos.edit', $todo->id) }}"><i class="glyphicon-edit"></i></a>
                            </th>

                            <th>
                                {!! Form::open(['method' => 'DELETE',  'route'=> [ 'todos.destroy', $todo->id ] ]) !!}

                                {!! Form::submit('delete') !!}

                                {!! Form::close() !!}
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            @else

                <p>You have no todos</p>

                <a href="{{route('todos.create')}}">Create a Todo</a>

            @endif

        </div>




@endsection