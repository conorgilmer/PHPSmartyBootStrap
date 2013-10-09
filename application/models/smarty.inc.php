<?php 

require_once('Smarty.class.php');

class Smarty_Movies extends Smarty {

   function __construct()
   {

        // Class Constructor.
        // These automatically get set with each new instance.

        parent::__construct();

        $this->setTemplateDir('application/view/smarty/templates/');
        $this->setCompileDir('application/view/smarty/templates_c/');
        $this->setConfigDir('application/view/smarty/configs/');
        $this->setCacheDir('application/view/smarty/cache/');

        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->assign('app_name', 'Guest Book');
   }

}

?>