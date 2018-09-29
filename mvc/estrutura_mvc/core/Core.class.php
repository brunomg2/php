<?php 
class Core {

    public function run() {
        $url = '/';
        
        if(isset($_GET['url'])):
            $url .= filter_input(INPUT_GET,'url',FILTER_DEFAULT);
        endif;
        
        $params = [];

        if(!empty($url) && $url != '/'):
            $url = explode('/',$url);
            array_shift($url);

            $currentController = $url[0].'Controller';
            array_shift($url);

            if(isset($url[0]) && !empty($url[0])):
                $currentAction = $url[0];
                array_shift($url);
            else:
                $currentAction = 'index';
            endif;

            if(count($url) > 0):
                $params = $url;
            endif;
        else:
            $currentController = 'homeController';
            $currentAction = 'index';
        endif;
        
        $controller =  new $currentController();
        call_user_func_array(array($controller, $currentAction), $params);
        
    }
}