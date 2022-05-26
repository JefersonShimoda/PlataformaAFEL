<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        if ($request->tipo == "associado") {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'cpf' => ['required', 'cpf'],
                'telefone' => ['required', 'celular_com_ddd'],
                'cep' => ['required', 'formato_cep'],
                'cid' => ['required', 'max:3'],
                'nascimento' => ['required', 'date_format:d/m/Y'],
            ]);
        } else {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'cpf' => ['required', 'cpf'],
                'telefone' => ['required', 'celular_com_ddd'],
                'cep' => ['required', 'formato_cep'],
            ]);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tipo' => $request->tipo,
            'sexo' => $request->sexo,
            'cpf' => $request->cpf,
            'telefone' => $request->telefone,
            'cep' => $request->cep,
            'cid' => $request->tipo == "associado" ? $request->cid : null,
            'obs' => $request->tipo == "associado" ? $request->obs : null,
            'nascimento' => $request->tipo == "associado" ? $request->nascimento : null,
            'escola' =>  $request->tipo == "associado" ? $request->escola : null,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
