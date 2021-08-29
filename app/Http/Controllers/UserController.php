<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Database\Eloquent\Builder;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::with('roles')->get();
        $users = User::all()->reject(function ($user) {
                    return $user->email_verified_at !== null;
                })->map(function ($user) {
                    $newUser[] = $user->full_name;
                    $newUser[] = $user->email; 
                    return $newUser;
                });
        dd($users);

        $users = User::has('posts', '>=', 3)->get(); //atleast one relation should be their
        
        $users = User::whereHas('posts', function (Builder $query) {
                                    $query->where('delayed', 1);
                                },'>=', 2)->get();
        $users = User::doesntHave('posts')->get();

        $users = User::whereDoesntHave('posts')->get();



        // foreach ($users as $user) {
        //     dd($user->posts
        //             // ()
        //             // ->where('name', 'admin')
        //             // ->where(function (Builder $query) {
        //             //     return $query->where('name', 'admin');
        //             // })
        //             // ->get() 
        //         );
        // }
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
