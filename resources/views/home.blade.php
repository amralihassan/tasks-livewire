@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Add Task</div>

                <div class="card-body">
                    {{-- add new task --}}
                    @livewire('add-task')
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Tasks</div>

                <div class="card-body" style="min-height:400px">
                   {{-- fetch all tasks --}}
                   @livewire('all-tasks')
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
