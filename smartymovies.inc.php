<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here

        // Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/application'));

//die(APPLICATION_PATH);
//error_reporting(E_ALL);
    die(get_include_path());
set_include_path(APPLICATION_PATH . "/vendor/Smarty/libs" . PATH_SEPARATOR . get_include_path());

set_include_path(APPLICATION_PATH. "/models" . PATH_SEPARATOR . get_include_path());


include_once('smartymovies.inc.php');

$smarty = new Smarty_Movies();

echo "ok";

$smarty->assign('name','Ned');

$smarty->assign('page','page1');

$smarty->display('master.tpl');

die("done");
        ?>


    </body>
</html>
