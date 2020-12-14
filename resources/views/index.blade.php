@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <a href="{{ route('section.create') }}" class="btn btn-blue btn-sm ml-1">
                        <i class="mdi mdi-plus"></i> Add Section
                    </a>
                </div>
                <h4 class="page-title">Todo List</h4>
            </div>
        </div>
    </div>

    @forelse($sections->chunk(3) as $chunk)
        <div class="row">
            @foreach($chunk as $section)
                <div class="col-lg-4">
                    <div class="card-box">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none"
                               data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical m-0 text-muted h3"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('section.edit', $section) }}">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>

                        <h4 class="header-title">{{ $section->name }}</h4>

                        <p class="sub-header">{{ $section->description }}</p>

                        <ul class="sortable-list tasklist list-unstyled" id="upcoming">
                            @forelse($section->tasks as $task)
                                <li id="task-{{ $loop->iteration }}">
                                    @if ($task->is_done)
                                        <span class="badge bg-soft-success text-danger float-right">Done</span>
                                    @else
                                        <span class="badge bg-soft-warning text-danger float-right">Todo</span>
                                    @endif


                                    <h5 class="mt-0">
                                        <a href="{{ route('sections.tasks.show', [$task, 'section' => $section]) }}" class="text-dark">{{ $task->name }}</a>
                                    </h5>

                                    <p>{{ $task->excerpt }}</p>

                                    <div class="clearfix"></div>

                                    <div class="row">
                                        <div class="col">
                                            <p class="font-13 mt-2 mb-0">
                                                <i class="mdi mdi-calendar"></i> {{ $task->created_at->diffForHumans() }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            @empty

                            @endforelse
                        </ul>

                        <a href="{{ route('sections.tasks.create', $section) }}"
                           class="btn btn-primary btn-block mt-3 waves-effect waves-light">
                            <i class="mdi mdi-plus-circle"></i> Add New
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @empty

    @endforelse
@endsection
