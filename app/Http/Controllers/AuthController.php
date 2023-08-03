<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    
    public function login(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = request(['email', 'password']);
        // dd($credentials);

        // if (!$token = auth()->attempt($credentials)) {
        //     return response()->json(['Email atau Password salah!'], 401);
        // }

        // return 
        // $this->respondWithToken($token);
        if (auth()->attempt($credentials)) {
            $token = Auth::guard('api')->attempt($credentials);
            return response()->json([
                'success' => true,
                'message' => 'Login Berhasil!',
                'token' => $token
            ]);
            // Auth::guard('api')->attempt($credentials);
            // dd($token);
            // $token = Auth::guard('api')->attempt($credentials);

            // cookie()->queue(cookie('token', $token, 60));
            // return redirect('/dashboard');
        }

        return response()->json([
            'success' => false,
            'message' => 'Email atau Password salah!'
        ]);
        // return back()->withErrors(['error' => 'Email atau Password Salah!']);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 3600
        ]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_member' => 'required',
            'no_hp' => 'required',	
            'email' => 'required|email',	
            'password' => 'required|same:konfirmasi_password',
            'konfirmasi_password' => 'required|same:password'
        ]);

        if ($validator->fails()) {
            return response()->json(
                $validator->errors(),
                422
            );
        }

        $input = $request->all();
        $input['password'] = bcrypt($request->password);
        unset($input['konfirmasi_password']);
        $member = Member::create($input);
        // $member = mem$member::create($request->all());
        return response()->json([
            'data' => $member
        ]);
    }

    public function login_member()
    {
        return view('auth.login_member');
    }

    public function login_member_action(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            // dd($validator->errors()->toArray());
            Session::flash('errors', $validator->errors()->toArray());
            return view('auth.login_member');
        }
        $credentials = $request->only('email', 'password');
        $member = Member::where('email', $request->email)->first();

        if ($member) {
            if (Auth::guard('webmember')->attempt($credentials)) {
            // if (Hash::check($request->password, $member->password)) {
                $request->session()->regenerate();
                // echo "Login Berhasil";
                return redirect('/');
            } else {
                Session::flash('failed', 'Password salah!');
                return redirect('/login_member');
            }
        } else {
            Session::flash('failed', 'Email tidak ditemukan!');
            return redirect('/login_member');
        }
    }

    public function register_member()
    {
        return view('auth.register_member');
    }

    public function register_member_action(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nama_member' => 'required',
            'no_hp' => 'required',	
            'email' => 'required|email',	
            'password' => 'required|same:konfirmasi_password',
            'konfirmasi_password' => 'required|same:password'
        ]);

        if ($validator->fails()) {
            // dd($validator->errors()->toArray());
            Session::flash('errors', $validator->errors()->toArray());
            return view('auth.register_member');
            // return response()->json(
            //     $validator->errors(),
            //     422
            // );
        }

        $input = $request->all();
        $input['password'] = bcrypt($request->password);
        unset($input['konfirmasi_password']);
        Member::create($input);

        // $member = mem$member::create($request->all());
        Session::flash('success', 'Akun Berhasil Dibuat!');
        return view('auth.login_member');
    }

    public function logout()
    {
        Session::flush();
        return redirect('/login');
        // auth()->logout();
        // return response()->json(['message' => 'Successfully logged out']);
    }

    public function logout_member()
    {
        Auth::guard('webmember')->logout();
        Session::flush();
        return redirect('/');
    }
}
