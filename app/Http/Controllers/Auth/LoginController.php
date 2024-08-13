<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;

class LoginController extends Controller
{
    protected $rules = [
        'username' => 'required|string',
        'password' => 'required|string',
    ];

    protected $errors = [
        'username.required' => 'Username harus dimasukkan',
        'password.required' => 'Password harus dimasukkan',
    ];

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.signin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rememberMe = $request->rememberMe ? true : false;

        $credentials = $this->validate($request, $this->rules, $this->errors);
    
        $user = User::where('username', $credentials['username'])
                    ->first();
    
        // Setelah pengecekan, coba lakukan login dengan credentials yang ada
        if ($user && (
            Auth::attempt(['username' => $credentials['username'], 'password' => $credentials['password']]))) {

            $request->session()->regenerate();
        
            // Check if the authenticated user is not null before accessing the 'level' property
            if (Auth::user() && Auth::user()->level === 'Admin') {
                return redirect()->intended('/layanan');
            }
        
            // Handle other roles if needed
        }

        return back()->withErrors([
            'message' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('username'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if(Auth::user()->level === 'Admin') {
            Auth::logout();
    
            $request->session()->invalidate();
    
            $request->session()->regenerateToken();
    
            return redirect('/login');
        }
    }
}