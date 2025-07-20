<?php

namespace App\Modules\Users\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use App\Modules\Users\Services\UserService;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return "retorna todos";
    }

    public function findUnique($id)
    {
        Cache::put('user_acessado', $id);

        $valor = Cache::get('user_acessado');

        return $valor;
    }

    public function register(Request $data)
    {
        $this->userService->registerService($data->all());

        return response()->json([
            'message' => 'Usuário registrado com sucesso! O e-mail de boas-vindas será enviado.',
        ], 202); 
    }
}
