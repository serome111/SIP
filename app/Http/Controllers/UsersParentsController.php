<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\parents;
use App\Models\users_parents;
use Illuminate\Http\Request;

class UsersParentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.parents.assing',[
            'parents' => parents::latest('updated_at')->get(),
            'users' => User::latest('updated_at')->get(),
            'users_parents' => users_parents::select('users.name AS user', 'users.cardid AS civilregis','parents.name AS parent','parents.cardid AS identificacion')
                ->join('users', 'users.id', '=', 'users_parents.user_id')
                ->join('parents', 'parents.id', '=', 'users_parents.parent_id')
                ->get()
        ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('assing.index')->with('status', 'Modulo en desarrollo, contacte con el desarrollador XD');
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
