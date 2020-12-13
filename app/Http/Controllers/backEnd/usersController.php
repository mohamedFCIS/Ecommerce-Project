<?php

namespace App\Http\Controllers\backEnd;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('backEnd.users.userShow', ["users" => $users]);
        // return view("posts.userProfile",["posts"=>$posts, "user"=>$user]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => "required |min:5| max:60",

            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'country' => 'required',
            // 'password' => 'required|confirmed|min:6',

        ]);


        $user = new User();
        $name = request("name");
        $email = request("email");
        $phone = request("phone");
        $password = request("psw");
        $country = request("country");
        $user->name = $name;
        $user->email = $email;
        $user->phone = $phone;
        $user->password = $password;
        $user->country = $country;
        $user->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

        return view('backEnd.users.userEdit', ['user' => $user]);
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
        // dd($id);
        $user = User::find($id);
        $name = request("name");
        $email = request("email");
        $phone = request("phone");
        $password = request("psw");
        $country = request("country");

        $user->update([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'country' => $country,
            'password' => $password
        ]);
        return redirect("users");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
}
