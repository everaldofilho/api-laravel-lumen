<?php


namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;

class UsuarioController
{
    public function __invoke()
    {
        return response()->json([Usuario::all(), 'teste'=>Auth::user()->nome]);
    }
}