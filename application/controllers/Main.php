<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function avaliacao(){

		$nome 		= $this->input->post('nome');
		$nota		= $this->input->post('nota');
		$mensagem	= $this->input->post('mensagem');
		$serie_id 	= $this->input->post('serie_id');
		$data		= date('Y-m-d');

		$novo_registro = array(
			'nome' 		=> $nome,
			'nota'		=> $nota,
			'mensagem'	=> $mensagem,
			'serie_id'	=> $serie_id,
			'data'		=> $data
		);

		$this->consultdatabase->insert_register('avaliacoes', $novo_registro);

		$paginaAtual = $this->consultdatabase->select_attr_register('series', 'id', $serie_id);	
		
		redirect('detalhes/'.$paginaAtual['slug'], 'refresh');
	}

	public function busca_serie(){

		$pesquisa = $this->input->post('pesquisa');

		$query = $this->db->query('select * from series where nome like "%'.$pesquisa.'%" or categoria like "%'.$pesquisa.'%" or diretor like "%'.$pesquisa.'%"');
		$data['series'] = $query->result_array();

		$html = '';

		foreach($data['series'] as $item){

			$html .= '<div class="row p-3">
							<div class="col-lg-7">
								<img src="assets/capas/'.$item['imagem'].'" class="w-100">
							</div>
							<div class="col-lg-5">
								<p class="mb-0 font-weight-bold">
									'.$item['nome'].'
								</p>
								<p class="mb-3 font-weight-bold">
									Lançamento: '.$item['lancamento'].'
								</p>								
								<a href="detalhes/'.$item['slug'].'" class="btn  botao">
									Veja mais
								</a>
							</div>                  
						</div>';

		}

		$response = $html;

		echo json_encode($response, true);

	}

	public function index(){

		$query = $this->db->query('select * from series');
		$data['series'] = $query->result_array();

		$this->carrega_view('index', $data);
	}

	public function detalhes($slug){
		

		$query = $this->db->query('select * from series where slug = "'.$slug.'"');
		$data['serie'] = $query->row_array();

		$query = $this->db->query('select * from avaliacoes where serie_id = '.$data['serie']['id'].' order by id desc');
		$data['avaliacoes'] = $query->result_array();

		$query = $this->db->query('select * from series where categoria = "'.$data['serie']['categoria'].'" and id != "'.$data['serie']['id'].'"');
		$data['recomendacao'] = $query->result_array();
		
		$data['slug'] = $slug;
		$this->carrega_view('detalhes', $data);

		
	}

	public function carrega_view($view, $data = array()) {		

		$this->load->view('includes/header');
		$this->load->view($view, $data);
		$this->load->view('includes/footer');
	
	}
}
