<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect, Storage;
use App\Models\User;

class AuthController extends Controller
{
    protected $request;
  
    public function __construct(Request $request)
    {
        
        $this->request = $request;
    }
    
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function registration()
    {
        return view('registration');
    }

    public function registration_verify()
    {
        //upload
        $filename=Storage::disk('public')->putFile('avatar',$this->request->file);

        $this->request->merge([
            'avatar' => $filename,
            'password' => bcrypt($this->request->password)
        ]);

        User::create(
            $this->request->except('file', '_token')
        );
        
        //dd($this->request->all());
        //dd($filename);

        return Redirect::route('app.login');
    }

    public function login_verify()
    {
        return view('login_verify');
    }
}
