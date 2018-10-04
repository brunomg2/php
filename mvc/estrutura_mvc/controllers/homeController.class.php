<?php
class homeController extends Controller{
    public function index() {
        $anuncios = new Anuncios;
        $usuarios = new Usuarios;
        
        $data = [
            'quantidade' => $anuncios->getQuantidade(),
            'nome' => $usuarios->getName(),
            'idade' => $usuarios->getIdade()
        ];
        $this->loadTemplate('home',$data);
    }
}