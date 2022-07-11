<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AtividadeModel;


class Atividade extends BaseController
{
	private $atividadeModel;

	public function __construct()
	{
		$this->atividadeModel = new AtividadeModel();
		
	}	

	public function index()
	{
		return view('atividades', [
		'atividades' => $this->atividadeModel->paginate(10),
		'pager' => $this->atividadeModel->pager 
		]);
	}

	public function delete($id)
	{
		if($this->atividadeModel->delete($id)){
			echo view('messages', [
				'message' => 'Atividade excluída com sucesso!'
			]);
		}
	}

	public function create()
	{
		return view('form');
			
	}

	public function store()
	{
		if($this->atividadeModel->save($this->request->getPost())) {
			return view('messages', [
				'message' => "Atividade Salva com Sucesso!"
			]);
		}else {
			echo "Erro ao Salvar Atividade!";
		}
	}

	public function edit($id)
	{
		return view('form', [
			'atividade' => $this->atividadeModel->find($id)
		]);
				
	}
}
