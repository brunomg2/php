<?php
class Controller {

    public function loadViewInTemplate($viewName,$viewData = null) {
        if(!empty($viewData)):
            extract($viewData);
        endif;
        require_once "views/{$viewName}.php";
    }

    public function loadTemplate($viewName,$viewData = null) {
        require_once "views/template.php";
    }

}