@extends('user.app')

@section('main-content')
    <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="col-lg-1-6">
            <h2 class="text-center">Upload Image</h2>
            <form action="{{ route('upload-image') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" id="" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control" name="description" id="" rows="3"></textarea>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="form-group col-lg-6">
                        <label for="">Category</label>
                        <select class="form-control" name="category" id="">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ Str::ucfirst($category->name) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="">Privacy</label>
                        <select class="form-control" name="privacy" id="">
                            <option value="1">Public</option>
                            <option value="2">Private</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Upload Image</label>
                    <input type="file" class="form-control-file" name="image" id="" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
