<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateUserController extends Controller
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

    public function loginAction(Request $request){
        //
        $rec = DB::table('user_logins')
        ->where('username','=',$request->input('username'))
        ->where('password','=',$request->input('password'))
        ->count();

        if($rec > 0 ){
            $query = DB::table('user_logins')
        ->where('username','=',$request->input('username'))
        ->where('password','=',$request->input('password'))
        ->get();
        $request->session()->put('ssusername',$request->input('username'));
        return view('index');
        }
        else{
            return "Invalid UserName Or Password";
        }

    }

    public function showEmployeeAction(Request $request){
     
        $query = DB::table('Employee')->get();
        return view('ShowEmployee',['data'=>$query])->with('no', 1);
        
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
        //dd($request);
        $request->validate([
            'email'=>'required'
            ,'username'=>'required'
            ,'password'=>'required'
            ,'password-repeat'=>'required'
        ]);

        $query = DB::table('user_logins')->insert([
            'email'=>$request->input('email')
            ,'username'=>$request->input('username')
            ,'password'=>$request->input('password')
        ]);

        if($query){
            return back()->with('success','User Created!!!');
        }
        else{
            return back()->with('fail','Can\'t Create User Somthing Wrong!!');
        }
    }

    public function storeEmployee(Request $request)
    {
        
        $request->validate([
            'firstname'=>'required'
            ,'lastname'=>'required'
        ]);

        $query = DB::table('Employee')->insert([
            'email'=>$request->input('email')
            ,'firstname'=>$request->input('firstname')
            ,'lastname'=>$request->input('lastname')
        ]);

        if($query){
            return back()->with('success','Created Success!!!');
        }
        else{
            return back()->with('fail','Can\'t Create Something Wrong!!');
        }
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
