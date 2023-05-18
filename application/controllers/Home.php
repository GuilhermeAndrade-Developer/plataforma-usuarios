<?php

class Home extends CI_Controller
{
	public function index()
	{
		$this->load->model('Usuarios_model');
		$records = $this->Usuarios_model->getRecords();
		$this->load->view('home', ['records' => $records]);
	}

	function create()
	{
		$this->load->view('create');
	}

	function save()
	{
		$this->form_validation->set_rules('nome', 'Nome', 'required');
		$this->form_validation->set_rules('telefone', 'Telefone', 'required');
		$this->form_validation->set_rules('endereco', 'Endereço', 'required');
		$this->form_validation->set_rules('cidade', 'Cidade', 'required');
		$this->form_validation->set_rules('pais', 'País', 'required');

		if ($this->form_validation->run()) {
			$data = $this->input->post();
			$this->load->model('Usuarios_model');

			if ($this->Usuarios_model->saveRecord($data)) {
				$this->session->set_flashdata('response', 'Usuário cadastrado com sucesso.');
			} else {
				$this->session->set_flashdata('response', 'Falha ao cadastrar usuário.');
			}
			return redirect('home');
		} else {
			$this->load->view('create');
		}
	}

	public function edit($record_id)
	{
		$this->load->model('Usuarios_model');
		$record = $this->Usuarios_model->getRecordById($record_id);
		$this->load->view('edit', ['record' => $record]);
	}

	public function update($record_id)
	{
		$this->form_validation->set_rules('nome', 'Nome', 'required');
		$this->form_validation->set_rules('telefone', 'Telefone', 'required');
		$this->form_validation->set_rules('endereco', 'Endereço', 'required');
		$this->form_validation->set_rules('cidade', 'Cidade', 'required');
		$this->form_validation->set_rules('pais', 'País', 'required');

		if ($this->form_validation->run()) {
			$data = $this->input->post();
			$this->load->model('Usuarios_model');

			if ($this->Usuarios_model->updateRecord($record_id, $data)) {
				$this->session->set_flashdata('response', 'Usuário Atualizado com sucesso.');
			} else {
				$this->session->set_flashdata('response', 'Falha ao Atualizar usuário.');
			}
			return redirect('home');
		} else {
			$this->load->view('edit');
		}
	}

	public function delete($record_id)
	{
		$this->load->model('Usuarios_model');
		if ($this->Usuarios_model->deleteRecord($record_id)) {
			$this->session->set_flashdata('response', 'Usuário Deletado com sucesso.');
		} else {
			$this->session->set_flashdata('response', 'Falha ao Deletar usuário.');
		}
		return redirect('home');
	}

}
