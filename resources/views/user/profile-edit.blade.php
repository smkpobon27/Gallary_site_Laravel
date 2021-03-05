@extends('user.app')

@section('main-content')
    <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="col-lg-1-6">
            <form action="{{ route('profile-update') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="">Edit User Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}" id="" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" id="" placeholder=""
                        readonly>
                </div>
                <div class="form-group">
                    <label for="">Edit About Yourself</label>
                    <textarea class="form-control" name="about" id="" rows="3">{{ $profile->bio }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Change Profile Picture</label>
                    <input type="file" class="form-control-file" name="pic" id="" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
