@extends('layouts.dashboard')

@section('page-title', 'Create Section')

@section('content')
    <div class="row mt-3 justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    {{ Form::open(['route' => 'section.store']) }}

                    <div class="form-group mb-3">
                        <label for="example-input-normal">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="example-textarea">Description</label>
                        <textarea class="form-control" rows="5" name="description"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary waves-effect waves-light">Create</button>

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
