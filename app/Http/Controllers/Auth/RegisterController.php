<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


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
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'role' => ['required', 'max:255' ],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if (isset($data['image'])) { 
            $file = $data['image'];
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('image/', $filename);
        } else {
            $filename = null; 
        }

        if (isset($data['carte_professionnelle'])) { 
            $file = $data['carte_professionnelle'];
            $ext = $file->getClientOriginalExtension();
            $nomcarte = time() . '.' . $ext;
            $file->move('cart/', $nomcarte);
        } else {
            $nomcarte = null; 
        }

        return User::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'], 
            'username' => $data['username'],
            'role' => $data['role'],
            'carte_professionnelle' => $nomcarte,
            'image' => $filename,
            'num' => $data['num'],
            'date_naissance' => $data['date_naissance'],
            'specialite' => $data['specialite'],
            'sexe' => $data['sexe'],
            'verifie' => "non",
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }


    protected function registered(Request $request, $user)
    {
        auth()->logout();
        return redirect()->route('login')->with('error', 'Merci d\'attendre la vérification de votre compte.');
    }

}
