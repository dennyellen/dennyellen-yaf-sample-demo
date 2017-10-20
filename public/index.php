<?php

use Yaf\Application;
// 验证yaf扩展已安装
if(!extension_loaded('yaf')){
     exit('Yaf is not loaded !');
}else{
    define('APPLICATION_PATH', dirname(__DIR__));
    $application = new Application( APPLICATION_PATH . "/conf/app.ini");
    $application->bootstrap()->run();
}