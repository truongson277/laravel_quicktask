<!-- resources/views/tasks.blade.php -->

@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="card">   
        <div class="card-header">
            {{ trans('message.task') }}
        </div>
        <div class="card-body">
            <div class="card form-group">
                <div class="card-header">
                    {{ trans('message.newtask') }}
                </div>
                <div class="card-body">
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
            </div>
            @if (count($tasks))
                <div class="card form-group">
                    <div class="card-header">
                        {{ trans('message.currenttask') }}
                    </div>

                    <div class="card-body">
                        <table class="table table-striped">

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
                                        <!-- Delete Button -->
                                            {!! Form::open(['method' => 'DELETE', 'url' => "task/$task->id"]) !!}
                                                {!! Form::token() !!}
                                                {!! Form::submit('Delete') !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        <div>
    </div>
@endsection
