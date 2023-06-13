<?php


namespace App\Http\Controllers;
use App\Models\UserDetail;
use Illuminate\Http\Request;

class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    
    public function create()
    {
        return view('user_detail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
       //UserDetail::create($request->all());
       $request->validate([
        'fullname'=>'required',
        'email'=>'required|email',
        'phone'=>'required',
       

    ]);
       $detail= new UserDetail();
       $detail->fullname=$request->input('fullname');
       $detail->phone=$request->input('phone');
       $detail->email=$request->input('email');
       $detail->address=$request->input('address');

       $detail->user_id=auth()->id();
      
       $detail->save();
       return redirect()->route('education.create');
    }

    /**
     * Display the specified resource.
     * 
     */
    public function show(UserDetail $userDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 
     */
    public function edit(UserDetail $userDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, UserDetail $userDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * 
     */
    public function destroy(UserDetail $userDetail)
    {
        //
    }
}
