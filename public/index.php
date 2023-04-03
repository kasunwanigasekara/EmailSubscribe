<?php
require_once __DIR__.'/../vendor/autoload.php';

use EmailVerication\controller\email;
use EmailVerication\controller\renderpages;






$page =new renderpages();

$page->loadHome();

if(isset($_POST['email']) and $_POST['email']<>'')
{
    $newemail=new email($_POST['email']);
    $newemail->addEmail();
    $newemail->sendEmail();





    


}













?>