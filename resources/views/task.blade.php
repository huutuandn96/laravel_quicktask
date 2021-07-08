@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

<div id="new-task-box" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>      
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>@lang('task.newTask')</h4>
                </div>
        
                <div class="card-body">
                    <!-- Show errors-->
                    @include('common.errors')

                    <!-- New Task Form -->
                    <form action="{{ route('task.index') }}" method="POST" class="form-horizontal">
                        @csrf
            
                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task" class="col-sm-3 control-label">@lang('task.task')</label>
            
                            <div class="col-sm-12">
                                <input type="text" name="name" placeholder="{{ trans('task.enterTaskInput') }}" id="task-name" class="form-control">
                            </div>
                        </div>
            
                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-plus"></i> @lang('task.addTask')
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current Tasks -->
            @if (count($tasks) > 0)
                <div id="current-task-box" class="card">
                    <div class="card-header">
                        @lang('task.currentTask')
                    </div>

                    <div class="card-body">
                        <table class="table table-striped task-table">

                            <!-- Table Headings -->
                            <thead>
                                <th>@lang('task.task')</th>
                                <th class="delete-btn">&nbsp;</th>
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
                                            <!-- TODO: Delete Button -->
                                            <form action="" method="POST">
                                                @csrf
                                    
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i> @lang('task.deleteTask')
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
