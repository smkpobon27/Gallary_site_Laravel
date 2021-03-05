@extends('user.app')

@section('main-content')
    <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
        <h4 class="d-flex justify-content-center">Create Your Profile</h4>
        <div class="col-lg-6 float-right">
            <a href="/user/profile" type="button" class="btn btn-danger float-right">View Profile</a>
        </div> <br><br>
        <div class="col-lg-1-6">
            <form action="{{ route('profile-store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">User Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}" id="" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" id="" placeholder=""
                        readonly>
                </div>
                <div class="form-group">
                    <label for="">About Yourself</label>
                    <textarea class="form-control" name="about" id="" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Profile Picture</label>
                    <input type="file" class="form-control-file" name="pic" id="" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
