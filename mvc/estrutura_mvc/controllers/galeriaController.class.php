<?php
class galeriaController extends Controller{
    public function index() {
        $data = ['qt'=>123];

        $this->loadTemplate('galeria',$data);
    }
}