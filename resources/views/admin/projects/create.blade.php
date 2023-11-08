@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        <form action="{{ route('admin.projects.store') }}" method="POST"></form>
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Name</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="titleHelper" class="text-muted">Type the title of a new project</small>
        </div>

        <div class="mb-3">
            <label for="cover_image" class="form-label">Image</label>
            <input type="text" name="cover_image" id="cover_image" class="form-control" placeholder=""
                aria-describedby="helpId">
            <small id="cover_imageHelper" class="text-muted">Upload image</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Image</label>
            <input type="text" name="description" id="description" class="form-control" placeholder=""
                aria-describedby="helpId">
            <small id="descriptionHelper" class="text-muted">Type the description of the new project</small>
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
        <a href="{{ route('admin.project.index') }}" class="btn btn-primary text-decoration-none">Go to project table</a>
    </div>
@endsection
