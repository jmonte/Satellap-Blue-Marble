<?php

class Api extends CI_Controller {

	function _construct() {
		
		$this->_construct();
		$this->output->cache(1000);
	}

	function missions( $page = 0 , $limit = 0 , $minimum = null , $maximum = null  ) {
		
		$this->load->model('ImageModel' , 'Images');
		$info = $this->Images->getMissions( $minimum , $maximum , $page, $limit  );
		echo json_encode( $info );

	}

	function geons( $page = 0 , $limit = 0 , $minimum = null , $maximum = null  ) {
		
		$this->load->model('ImageModel' , 'Images');
		$info = $this->Images->getGeons( $minimum , $maximum , $page, $limit  );
		// echo json_encode( $info );
		foreach( $info as $s  ) {
			echo $s['geon'] . ' ';
		} 
	}

	function feats( $page = 0 , $limit = 0 , $minimum = null , $maximum = null ) {
		$this->load->model('ImageModel' , 'Images');
		$info = $this->Images->getFeats( $minimum , $maximum , $page, $limit );
		echo json_encode( $info );
	}


	function images( $mission = "") {
		$this->load->model('ImageModel' , 'Images');
		$mission = strtoupper($mission);
		$info = $this->Images->getByMission($mission);
		echo json_encode( $info );	
	}

	function imagesGeon( $geon = "") {

		$this->load->model('ImageModel' , 'Images');
		$geon = urldecode(strtoupper($geon));
		$info = $this->Images->getByGeon($geon);
		echo json_encode( $info );	
	}

	function geon( $geon ) {
		$this->load->model('ImageModel' , 'Images');
		$geon = strtoupper($geon);
		$info = $this->Images->getByGeon($geon);
		echo json_encode( $info );	
	}


	function near( $lat , $lon){
		$this->load->model('ImageModel' , 'Images');
		$lat = (float) $lat;
		$lon = (float) $lon;
		echo json_encode($this->Images->nearest( $lat , $lon)  );	
	}


}