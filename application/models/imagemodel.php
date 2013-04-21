<?php

class ImageModel extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function insert( $data = array()) {
        
        $this->db->insert('image',$data);
    }
        

    function getMissions( $minimum = null , $maximum = null , $page = 0 , $limit = 0 ) {
         $where = "";
        if( $minimum ) {
            if( $where ) $where.= " AND ";
            else $where = "HAVING ";
            $maximum = (int) $minimum;
            $where.= "numImages >= " . $minimum;
        }
        if( $maximum ) {
            if( $where ) $where.= " AND ";
            else $where = "HAVING ";
            $maximum = (int) $maximum;
            $where.= "numImages <= " . $maximum;
        }

        $limitText = "";
        if( $page >= 0 && $limit > 0 ) {
            $page = (int) $page;
            $limit = (int) $limit;
            $limitText = " LIMIT ".($page * $limit).",${limit}";
            
        }

        $query = $this->db->query('SELECT DISTINCT mission, COUNT(id) AS numImages FROM `image` WHERE 1 GROUP BY mission '.$where .' ' . $limitText);
        $missions = $query->result_array();
        $result = array();
        foreach( $missions as $miss) {
            $result[] = $miss;
            
        }
        return $result;
    }


    function getGeons( $minimum = null , $maximum = null , $page = 0 , $limit = 0 ) {
        $where = "";
        if( $minimum ) {
            if( $where ) $where.= " AND ";
            else $where = "HAVING ";
            $maximum = (int) $minimum;
            $where.= "numImages >= " . $minimum;
        }
        if( $maximum ) {
            if( $where ) $where.= " AND ";
            else $where = "HAVING ";
            $maximum = (int) $maximum;
            $where.= "numImages <= " . $maximum;
        }

        $limitText = "";
        if( $page >= 0 && $limit > 0 ) {
            $page = (int) $page;
            $limit = (int) $limit;
            $limitText = " LIMIT ".($page * $limit).",${limit}";
            
        }

        $query = $this->db->query('SELECT DISTINCT geon, COUNT(id) AS numImages FROM `image` WHERE 1 GROUP BY geon '.$where .' ' . $limitText);
        $missions = $query->result_array();
        $result = array();
        foreach( $missions as $miss) {
            $result[] = $miss;
            
        }
        return $result;
    }

    function getFeats( $minimum = null , $maximum = null , $page = 0 , $limit = 0 ) {
        $where = "";
        if( $minimum ) {
            if( $where ) $where.= " AND ";
            else $where = "HAVING ";
            $maximum = (int) $minimum;
            $where.= "numImages >= " . $minimum;
        }
        if( $maximum ) {
            if( $where ) $where.= " AND ";
            else $where = "HAVING ";
            $maximum = (int) $maximum;
            $where.= "numImages <= " . $maximum;
        }
  

        $limitText = "";
        if( $page >= 0 && $limit > 0 ) {
            $page = (int) $page;
            $limit = (int) $limit;
            $limitText = " LIMIT ".($page * $limit).",${limit}";
            
        }

        $query = $this->db->query('SELECT DISTINCT feat, COUNT(id) AS numImages FROM `image` WHERE 1 GROUP BY feat '.$where .' ' . $limitText );
        $missions = $query->result_array();
        $result = array();
        foreach( $missions as $miss) {
            $result[] = $miss;
            
        }
        return $result;
    }

    function get( $id = 0 ) {
        $id = (int) $id;
        $query = $this->db->query("SELECT * FROM `image` WHERE id=${id} LIMIT 1" );
        $missions = $query->row_array();
        return $missions;
    }

    function getByMission( $mission ) {
        $mission = mysql_escape_string($mission);
        $query = $this->db->query("SELECT * FROM `image` WHERE mission='${mission}' ORDER by frame" );
        $missions = $query->result_array();
        return $missions;
    }

    function getByGeon( $geon ) {
        $geon = strtoupper(  mysql_escape_string($geon)  );
        $query = $this->db->query("SELECT * FROM `image` WHERE geon='${geon}' ORDER by frame" );
        $missions = $query->result_array();
        return $missions;
    }

    function nearest( $lat , $lon) {
        $query = $this->db->query("SELECT *, SQRT(
    POW(69.1 * (lat - ${lat}), 2) +
    POW(69.1 * (${lon} - lon) * COS(lat / 57.3), 2)) AS distance
FROM image HAVING distance < 25 ORDER BY distance;" );
        $images = $query->result_array();
        return $images;
    }
 }