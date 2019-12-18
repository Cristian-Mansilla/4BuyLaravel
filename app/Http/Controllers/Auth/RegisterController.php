<?php

namespace App\Http\Controllers\Auth;

use App\Ciudad;
use App\User;
use App\Http\Controllers\Controller;
use App\Provincia;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

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
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'pais' => ['required'],
            'provincia' => ['required'],
            'user' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'img_perfil' => ['required'],
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
        $imageName = time() . '-' . $data['img_perfil']->getClientOriginalExtension();
        $data['img_perfil']->move(
        base_path() . '/public/upload', $imageName
        );


        return User::create([
            'nombre' => $data['name'],
            'apellido' => $data['surname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'img_perfil' => $imageName,
            'pais_id' => $data['pais'],
            'provincia_id' => $data['provincia'],
            'usuario' => $data['user'],
        ]);
    }


}
