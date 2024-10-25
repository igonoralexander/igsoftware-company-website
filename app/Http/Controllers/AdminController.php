<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

use App\Models\Admin;

use App\Models\Cart;
use App\Models\RegisterUser;
use App\Models\Product;
use App\Models\Category;
use App\Models\Profile;
use App\Models\Order;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login');
    }

    public function allusers()
    {
        $users = RegisterUser::All();
        return view('admin.allusers', compact('users'));
    }

    public function viewusers($id)
    {
        $users = RegisterUser::find($id);

        $prof = RegisterUser::where('id', $id)->first();

        return view('admin.singleuser', compact(['users', 'prof']));
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
        $request-> validate([
            'username'     => 'required',
            'password'  => 'required|min:8'
            ]);

            $admin = Admin::where('username', '=', $request->username)->first();
            if ($admin)
            {
                if (Hash::check($request->password, $admin->password))
                    {
                        $request->session()->put('AdmLogId', $admin->id);
                        return redirect ('/dashboard')->with ('Success', 'Login Successfull, Welcome');
                    }
                    else
                    { 
                        return back ()->with('status', 'Password is incorrect', "error");           
                    }
            } 
            else

            {
                return back ()->with('status', 'Email Not Found', "error");           
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        return view('admin.dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
