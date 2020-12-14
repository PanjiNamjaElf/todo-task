@extends('layouts.dashboard')

@section('page-title', 'Task Details')

@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-xl-8 col-lg-7">
            <div class="card d-block">
                <div class="card-body">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none text-muted"
                           data-toggle="dropdown" aria-expanded="false">
                            <i class='mdi mdi-dots-horizontal font-18'></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('sections.tasks.edit', [$section, $task]) }}" class="dropdown-item">
                                <i class='mdi mdi-pencil-outline mr-1'></i> Edit
                            </a>

                            <a href="{{ route('sections.tasks.destroy', [$section, $task]) }}" class="dropdown-item text-danger">
                                <i class='mdi mdi-delete-outline mr-1'></i> Delete
                            </a>
                        </div>
                    </div>

                    <div class="custom-control custom-checkbox float-left">
                        <input type="checkbox" class="custom-control-input" id="completedCheck" @if ($task->is_done) checked @endif>
                        <label class="custom-control-label" for="completedCheck">
                            Mark as done
                        </label>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-4">
                            <p class="mt-2 mb-1 text-muted">Task Name</p>
                            <div class="media">
                                <i class='mdi mdi-briefcase-check-outline font-18 text-success mr-1'></i>
                                <div class="media-body">
                                    <h5 class="mt-1 font-size-14">
                                        {{ $task->name }}
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p class="mt-2 mb-1 text-muted">Created on</p>
                            <div class="media">
                                <i class='mdi mdi-calendar-month-outline font-18 text-success mr-1'></i>
                                <div class="media-body">
                                    <h5 class="mt-1 font-size-14">
                                        {{ $task->created_at->diffForHumans() }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h5 class="mt-3">Description:</h5>

                    <p class="text-muted mb-4">{{ $task->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
