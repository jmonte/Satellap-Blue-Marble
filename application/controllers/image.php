<?php

class Image extends CI_Controller {
	
	function index() {


		$this->load->view('image/index');
		
		
	}

	function insert() {
		$this->load->model('ImageModel' , 'Images');

		$obj = json_decode(file_get_contents('./1.json'));
		foreach( $obj as $img  ) {
			$img = (array) $img;
			$this->Images->insert(	$img );	
		}
		
	}

	function missions() {
		$this->load->model('ImageModel' , 'Images');
		$info = $this->Images->getGeons();
		echo '<select>';
		foreach($info as $i) {
			echo '<option value="'.$i['geon'].'">'. $i['geon'].'('.$i['numImages'].')</option>';
		}
		echo '</select>';

	}

	function images( $mission){ 
		$this->load->model('ImageModel' , 'Images');
		echo json_encode($this->Images->getByMission( $mission )  );
	}

	function near( $lat , $lon){
		$this->load->model('ImageModel' , 'Images');
		$lat = (float) $lat;
		$lon = (float) $lon;
		echo json_encode($this->Images->nearest( $lat , $lon)  );	
	}

	function view( $id ) {

		$this->load->model('ImageModel' , 'Images');
		$image = $this->Images->get($id);
		$data = $image;
		$this->load->view('image/view' , $data);
	}

}