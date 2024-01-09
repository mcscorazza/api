<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "TESTE GET OK!";
    }

    public function store(Request $request)
    {
        return "TESTE POST2 OK!";
    }

    public function show(Teste $teste)
    {
        //
    }

    public function update(Request $request, Teste $teste)
    {
        //
    }

    public function destroy(Teste $teste)
    {
        //
    }
}
