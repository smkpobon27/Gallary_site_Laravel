@extends('user.app')

@section('main-content')
    <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="col-lg-1-6">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset(Storage::disk('local')->url($profile->profile_pic)) }}"
                        class="img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                        width="200" height="100" alt="profile pic">
                </div>
                <div class="col-lg-6">
                    <a href="/user/profile/edit" type="button" class="btn btn-danger float-right">Edit Profile</a>
                </div>
            </div>

            <table class="table">
                <tbody style="margin-top: 20px;">
                    <tr>
                        <th>Username</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th>About</th>
                        <td>{{ $profile->bio }}</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
