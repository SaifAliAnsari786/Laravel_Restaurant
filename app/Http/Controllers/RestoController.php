<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

// use Session;
use Illuminate\Support\Facades\Session;
// use Models\Resto;
use App\Models\Resto;
use App\Models\User;
use Crypt;




class RestoController extends Controller
{
    function add()
    {
        return view('add');
    }

    function create(Request $req)
    {
        $resto = new Resto;
        $resto->name=$req->input('name');
        $resto->email=$req->input('email');
        $resto->addres=$req->input('addres');
        $resto->save();
        $req->session()->flash('status','Restaurant submitted sucessfully');
        return redirect('list');
    }

    function list()
    {
        $data = Resto::all();
        return view('list',['data'=>$data]);
    }
    
    function home()
    {
        $data = Resto::all();
        return view('home',['resto'=>$data]);
    }
     
    function update(Request $req)
    {
        $resto = Resto::find($req->input('id'));
        $resto->name=$req->input('name');
        $resto->email=$req->input('email');
        $resto->addres=$req->input('addres');
        $resto->save();
        $req->session()->flash('status','Restaurant updated sucessfully');
        return redirect('list');
    }

    function edit($id)
    {
        $data = Resto::find($id);
        return view('edit',['data'=>$data]);
    }

    function delete($id)
    {
        $delete =  Resto::find($id)->delete();
        Session::flash('status','Restaurant Delete sucessfully');
        return redirect('list');
    }

    function register(Request $req)
    {
        // return $req->input();
        $user = new User;
        $user->name=$req->input('name');
        $user->email=$req->input('email');
        $user->password = Crypt::encrypt($req->input('password'));
        $user->save();
        $req->session()->put('user',$req->input('name'));
        return redirect('/');
    }

    function login(Request $req)
    {
        $user = User::where('email',$req->input('email'))->get();
        if( Crypt::decrypt($user[0]->password)==$req->input('password'))
        {
            $req->session()->put('user',$user[0]->name);
            return redirect('list');
        }
    }
        function logout(Request $req)
        {
            Session::flush();
        
            Auth::logout();

            return redirect('login');
        }
}
