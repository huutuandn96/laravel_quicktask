@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

<div id="new-task-box" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>@lang('task.newtask')</h4>
                </div>
        
                <div class="card-body">
            
                    <!-- New Task Form -->
                    <form action="{{route('task.index')}}" method="POST" class="form-horizontal">
                        @csrf
            
                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task" class="col-sm-3 control-label">@lang('task.task')</label>
            
                            <div class="col-sm-12">
                                <input type="text" name="name" id="task-name" class="form-control">
                            </div>
                        </div>
            
                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-plus"></i> @lang('task.addtask')
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
