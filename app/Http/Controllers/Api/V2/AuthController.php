<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Http\Resources\ResourceWrapper;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Validator;
use Mail;

class AuthController extends Controller
{
    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
            'date_of_birth' => 'required|date',
            'occupation' => 'required|max:255',
            'institution' => 'required|max:255',
            'study_program' => 'max:255',
            'generation' => 'max:255',
            'email' => 'required|unique:users|email|max:255',
            'password' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return ResourceWrapper::make(false, 400, 'Data invalid!', null);
        }

        $user = new User;
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->date_of_birth = $request->date_of_birth;
        $user->occupation = $request->occupation;
        $user->institution = $request->institution;
        $user->study_program = $request->study_program;
        $user->generation = $request->generation;
        $user->is_admin = false;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $response = [
            'id' => $user->id,
        ];

        return ResourceWrapper::make(true, 200, 'Registered successfully!', $response);
    }

    public function login(Request $request) {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::user(); 
            $token =  $user->createToken('auth_token')->plainTextToken;

            $response = [
                'id' => $user->id,
                'admin' => $user->is_admin,
                'access_token' => $token,
                'token_type' => 'Bearer',
            ];
   
            return ResourceWrapper::make(true, 200, 'Login successfully!', $response);
        } 
        else{ 
            return ResourceWrapper::make(false, 401, 'Credentials do not match.', null);
        }
    }

    public function logout(Request $request) {
        Auth::user()->tokens()->delete();
        return ResourceWrapper::make(true, 200, 'Logout successfully!', null);
    }

    public function forget_password(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
        ]);
        if ($validator->fails()) {
            return ResourceWrapper::make(false, 400, 'Data invalid!', null);
        }

        $token = Str::random(64);

        DB::table('password_reset_tokens')->insert([
            'email'         => $request->email,
            'token'         => $token,
            'created_at'    => Carbon::now(),
        ]);

        Mail::send('change-pass.forget-pass', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return ResourceWrapper::make(true, 200, 'Password reset link sent!', null);
    }

    public function reset_password_form ($token) {
        return view('change-pass.reset-pass', compact('token'));
    }

    public function reset_password(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'password' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            return ResourceWrapper::make(false, 400, 'Data invalid!', null);
        }

        $updatePassword = DB::table('password_reset_tokens')->where(['email' => $request->email, 'token' => $request->token])->first();
        if (!$updatePassword) {
            return ResourceWrapper::make(false, 400, 'Invalid token!', null);
        }

        $user = User::where('email', '=', $request->email)->update([
            'password' => Hash::make($request->password),
        ]);

        DB::table('password_reset_tokens')->where(['email'=> $request->email])->delete();
        return ResourceWrapper::make(true, 200, 'Reset password success!', null);
    }
}
