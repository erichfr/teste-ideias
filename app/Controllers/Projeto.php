<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProjetoModel;

class Projeto extends BaseController
{
	private $projetoModel;

	public function __construct()
	{
		$this->projetoModel = new ProjetoModel();
	}	

	public function create()
	{
		return view('form_projeto');	
	}

	public function store()
	{
		if($this->projetoModel->save($this->request->getPost())) {
			return view('messages', [
				'message' => "Projeto Salvo com Sucesso!"
			]);
		}else {
			echo "Erro ao Salvar o Projeto!";
		}
	}

	public function projetoId($id) 
	{
		return view('form_projeto', [
			'projeto' => $this->projetoModel->find($id)
		]);
	}
}
