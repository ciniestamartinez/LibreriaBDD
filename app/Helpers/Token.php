<?php

namespace App\Helpers;
use Firebase\JWT\JWT;

class Token{

    private $key;
    private $data;
    private $algorithm;

    public function __construct($data = null){
        $this->key = 'b.ijnJ#HOHJDFSOIH5_4687fgd768bh#'; 
        $this->data = $data;
        $this->algorithm = array('HS256');
    }
    
    public function encode(){
        return JWT::encode($this->data, $this->key);
    }

    public function decode($token){
        return JWT::decode($token, $this->key, $this->algorithm);
    }
}