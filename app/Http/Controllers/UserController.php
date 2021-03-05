<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    //show the profile of a speficif user by clicking on image link
    public function portfolioDetails()
    {

        return view('user.portfolio-details');
    }
    //create user profile
    public function profileCreate()
    {
        $user = User::find(Auth::user()->id);
        return view('user.profile-create', compact('user'));
    }
    //Store user profile
    public function profileStore(Request $request)
    {
        if ($request->hasFile('pic')) {
            $imageName = $request->pic->store('public/images');
        }
        $profile = new Profile;
        $profile->bio = $request->about;
        $profile->user_id = Auth::user()->id;
        $profile->profile_pic = $imageName;
        $profile->save();

        return redirect(route('profile-show'));
    }
    //Show user profile
    public function profileShow()
    {
        $user = User::find(Auth::user()->id);
        $profile = Profile::where('user_id', Auth::user()->id)->first();
        //return compact('user', 'profile');
        return view('user.profile', compact('user', 'profile'));
    }
    //Edit user profile
    public function profileEdit()
    {
        $user = User::find(Auth::user()->id);
        $profile = Profile::where('user_id', Auth::user()->id)->first();

        return view('user.profile-edit', compact('user', 'profile'));
    }
    //Update user profile
    public function profileUpdate(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->save();

        if ($request->hasFile('pic')) {
            $imageName = $request->pic->store('public/images');
        }
        $profile = Profile::where('user_id', Auth::user()->id)->first();
        $profile->bio = $request->about;
        $profile->profile_pic = $imageName;
        $profile->save();

        return redirect(route('profile-show'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
