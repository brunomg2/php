<?php
class homeController extends Controller{
    public function index() {
        $data = [
            'quantidade' => 5,
            'nome' => 'Bruno',
            'idade' => 22
        ];
        $this->loadTemplate('home',$data);
    }
}