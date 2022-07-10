<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProjetoModel;

class Projeto extends BaseController
{
	private $atividadeModel;

	public function __construct()
	{
		$this->projetoModel = new ProjetoModel();
	}	

	public function index()
	{
		return view('projetos', [
		'projetos' => $this->projetoModel->paginate(10),
		'pager' => $this->projetoModel->pager 
		]);
	}

	public function delete($id)
	{
		if($this->projetoModel->delete($id)){
			echo view('messages', [
				'message' => 'Projeto excluído com sucesso!'
			]);
		}
	}

	public function create()
	{
		return view('form_projeto');	
	}

	public function store()
	{
		if($this->projetoModel->save($this->request->getPost())) {
			return view('messages', [
				'message' => "Projeto Cadastrado com Sucesso!"
			]);
		}else {
			echo "Erro ao Cadastrar o Projeto!";
		}
	}
}
