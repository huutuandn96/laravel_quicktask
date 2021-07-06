@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

<div style="margin-top: 20px;" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }} <br>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>New Task</h4>
                </div>

                <div class="card-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Task Form -->
                    <form action="{{route('task.index')}}" method="POST" class="form-horizontal">
                        @csrf
            
                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task" class="col-sm-3 control-label">Task</label>
            
                            <div class="col-sm-12">
                                <input type="text" name="name" id="task-name" class="form-control">
                            </div>
                        </div>
            
                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-plus"></i> Add Task
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
       
        <div class="col-md-8" style="margin-top: 30px;">
            <!-- Current Tasks -->
            @if (count($tasks) > 0)
            <div class="card">
                <div class="card-header">
                    Current Tasks
                </div>

                <div class="card-body">
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

                                    <td width="160px">
                                        <!-- TODO: Delete Button -->
                                        <form action="{{ route('task.destroy', ['task' => $task->id]) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-trash"></i> Delete
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