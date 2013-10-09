
        <?php
        // put your code here

        // Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/application'));

//die(APPLICATION_PATH);
//error_reporting(E_ALL);
   // die(get_include_path());
set_include_path(APPLICATION_PATH . "/vendor/Smarty/libs" . PATH_SEPARATOR . get_include_path());

set_include_path(APPLICATION_PATH. "/models" . PATH_SEPARATOR . get_include_path());


include_once('smartymovies.inc.php');

$smarty = new Smarty_Movies();
//die ("ook");

//echo "ok";
$pageAction = isset($_GET['action']) ? $_GET['action'] : 'home';

switch($pageAction) {
    case 'createmovies':
        $smarty->assign('page','page1');
        $smarty->assign('pageTitle', 'DSA Movies Page Create Movies');
        
        break;
  
    
    default:

        $smarty->assign('page','front');
        $smarty->assign('pageTitle', 'DSA Movies Page');
        break;
    
}

$smarty->assign('name','DSA Movies');


$smarty->display('master.tpl', $pageAction);

//die("done");
        ?>


    </body>
</html>
