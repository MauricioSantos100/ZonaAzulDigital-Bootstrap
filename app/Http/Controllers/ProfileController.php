<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;

use App\Models\VeiculoModel as VeiculoModel;
use App\Models\EstacionamentoModel as EstacionamentoModel;
use App\Models\UsuarioModel as UsuarioModel;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this -> veiculo = new VeiculoModel();
        $this -> usuario = new UsuarioModel();
        $this -> estacionamento = new EstacionamentoModel();
    }
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        $quantVeiculos = $this -> veiculo -> all() -> count();
        $quantEstacionamentos = $this -> estacionamento -> all() -> count();
        $quantUsuarios = $this -> usuario -> all() -> count();
      
        return view('profile.edit', compact('quantVeiculos', 'quantEstacionamentos', 'quantUsuarios'));

    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {
        if (auth()->user()->id == 1) {
            return back()->withErrors(['not_allow_profile' => __('You are not allowed to change data for a default user.')]);
        }

        auth()->user()->update($request->all());

        return back()->withStatus(__('Profile successfully updated.'));
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        if (auth()->user()->id == 1) {
            return back()->withErrors(['not_allow_password' => __('You are not allowed to change the password for a default user.')]);
        }

        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withPasswordStatus(__('Password successfully updated.'));
    }
}
