<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\MentorCat;
use App\User;
use Illuminate\Support\Facades\Hash;
class MentorshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
      /**
     * Display a listing of the resource.
     *
     * Mentorship Category create view
     */
    public function users()
    {
       $data = User::all();
       return view('mentor.addusers',compact('data'));
    }
    /**
     * Display a listing of the resource.
     *
     * Mentorship Category save data
     */
    public function storeusers(Request $request)
    {
        

        $data = new User();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->category = $request->input('category');
        $data->password = Hash::make('12345678');
        $data->save();
        return back()->with('status','success');
    }

      /**
     * Display a listing of the resource.
     *
     * Mentorship Category create view
     */
    public function category()
    {
       $data = MentorCat::all();
       return view('mentor.addusers',compact('data'));
    }
    /**
     * Display a listing of the resource.
     *
     * Mentorship Category save data
     */
    public function storecategory(Request $request)
    {
        $data = new MentorCat();
        $data->name = $request->input('name');
        $data->desc = $request->input('desc');
        $data->status = 'Active';
        $data->save();
        return back()->with('status','success');
    }
}
