@extends('user.app')

@section('main-content')
<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
    <div class="col-lg-1-6">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{asset('user/assets/img/portfolio/portfolio-1.jpg')}}" class="img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"  width="200" height="200" alt="profile pic">
            </div>
            <div class="col-lg-6">
                <a href="/user/edit/profile/1" type="button" class="btn btn-danger float-right">Edit Profile</a>
            </div>
        </div>

        <table class="table">
            <tbody style="margin-top: 20px;">
                <tr>
                    <th>Username</th>
                    <td>Image title</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>smk@gmail.com</td>
                </tr>
                <tr>
                    <th>About</th>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem a esse facere, quo, repellat culpa sequi laborum atque minima aperiam eaque sit cumque velit voluptatem, libero sunt provident distinctio autem?</td>
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