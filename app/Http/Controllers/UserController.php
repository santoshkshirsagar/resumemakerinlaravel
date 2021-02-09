<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->checkAdmin();
        $users = \App\Models\User::get();
        return view('users.index', compact('users'));
    }
    private function checkAdmin(){
        if(Auth::check()){
            if(Auth::user()->role!='Admin'){
                abort(401);
            }
        }else{
            return redirect(route('login'));
        }
    }
    public function export(){
        $this->checkAdmin();
        $users = \App\Models\User::get();
        
        header("Content-type: application/csv");
        header("Content-Disposition: attachment; filename=\"data".".csv\"");
        header("Pragma: no-cache");
        header("Expires: 0");
        $handle = fopen('php://output', 'w');

        $row=array();
        $row['id']="User Id";
        $row['name']="Name";
        $row['email']="Email";
        $row['registrationDate']="Registration Date";
        fputcsv($handle, $row);
        foreach($users as  $user){
            $row=array();
            //$json = json_encode($user);
            $row['id']=$user->id;
            $row['name']=$user->name;
            $row['email']=$user->email;
            $row['registrationDate']=$user->created_at;
            fputcsv($handle, $row);
        }
        fclose($handle);
        exit;

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
        //
    }

    public function avatar(Request $request)
    {
        //
        $validated=$request->validate([
            "image" => "required|image|max:500000"
        ]);
        //$imagepath = $request->image->storePublicly('image');
        //$imagepath = request('image')->storePublicly('avatars');
        $imagepath = $request->file('image')->store('avatars', 'public');
        Auth::user()->image=$imagepath;
        Auth::user()->save();
        return redirect(url('home'));
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
    public function edit($id)
    {
        //
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
