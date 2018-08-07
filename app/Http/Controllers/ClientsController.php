<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{

    public function cadastrar()
    {
    	//csrf-token - gerado no servidor e inserido no form do usuário
		$csrftoken = csrf_token();
		return view('admin.cliente.cadastrar')
				->with('csrftoken', $csrftoken)
				->with('name', 'Adriano');
    }

    public function exluir()
    {

    }

    public function editar()
    {

    }

}
