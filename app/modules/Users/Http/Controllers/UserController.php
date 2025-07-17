<?php

namespace App\Modules\Users\Http\Controllers;

use Illuminate\Routing\Controller;

class UserController extends Controller
{

    public function index()
    {
        return "retorna todos";
    }

    public function findUnique($id)
    {
        return "encontrou $id";
    }
}
