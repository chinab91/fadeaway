<?php
class Request extends CI_Controller {
    public function get(){
        $json = array();
        $json['content'] = "json test";
        
        $encoded = json_encode($json);
        die($encoded);
    }
}
