@extends('layouts.admin')

@section('content')
    <section class="create py-5 col-6 mx-auto">

        <div class="container">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>
            @endif


            <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control"
                        @error('title')   
                   is-invalid @enderror placeholder="" aria-describedby="helpId">
                    <small id="titleHelper" class="text-muted">Type the title of a new project</small>
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="cover_image" class="form-label">Image</label>
                    <input type="text" name="cover_image" id="cover_image" class="form-control"
                        @error('content')
                        is-invalid
                    @enderror placeholder=""
                        aria-describedby="helpId">
                    <small id="cover_imageHelper" class="text-muted">Upload image</small>
                    @error('cover_image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                        cols="30" rows="5" placeholder="Type a description">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Add</button>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-primary text-decoration-none">Go to project
                    table</a>
        </div>
    </section>
@endsection
