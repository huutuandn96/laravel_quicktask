@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

<div style="margin-top: 20px;" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>New Task</h4>
                </div>
        
                <div class="card-body">
            
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
    </div>
</div>