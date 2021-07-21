<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name_korean' => ['required', 'string', 'max:255'],
            'name_english' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'age' => ['required'],
            'gender' => ['required'],
            'nationality' => ['required'],
            'occupation' => ['required'],
            'reason' => ['required'],
            'purpose' => ['required'],
            'phone' => ['required'],
            'city' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
           'name_korean' => $data['name_korean'],
            'name_english' => $data['name_english'],
            'email' => $data['email'],
            'age' => $data['age'],
            'gender' => $data['gender'],
            'nationality' => $data['nationality'],
            'occupation' => $data['occupation'],
            'reason' => $data['reason'],
            'purpose' => $data['purpose'],
            'phone' => $data['phone'],
            'city' => $data['city'],
            'idioma_materno' => $data['idioma_materno'],
            'codigo_postal' => $data['codigo_postal'],
            'direccion' => $data['direccion'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
