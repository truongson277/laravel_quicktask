<!-- resources/views/tasks.blade.php -->

@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form -->
        {!! Form::open(['method' => 'POST', 'url' => 'task', 'class' => 'form-horizontal']) !!}
            {!! Form::token() !!}
            <div class="form-group">
                {!! Form::label('task', 'Task', ['class' => 'col-sm-3 control-label']) !!} 
                <div class="col-sm-6">
                    {!! Form::text($name = 'name', $value = null, ['id' => 'task-name', 'class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    {!! Form::submit(trans('message.addtask'), ['class' => 'btn btn-default']) !!}
                </div>
            </div>
        {!! Form::close() !!}
    </div>
    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Task</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $task->name }}</div>
                                </td>

                                <td>
                                    <tr>
                                        <!-- Task Name -->
                                        <td class="table-text">
                                            <div>{{ $task->name }}</div>
                                        </td>

                                        <!-- Delete Button -->
                                        <td>
                                            {!! Form::open(['method' => 'POST', 'routes' => ['web.task', 'id' => $task->id]]) !!}
                                                {!! Form::token() !!};
                                                {!! Form::submit('Delete') !!};
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
