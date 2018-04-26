<?php

ini_set("display_errors","1");
ERROR_REPORTING(E_ALL);
include_once('detect.php');

class User{
    private $detector;

    public function __construct(){
        $this->detector = new DetectBrowser(); 
        echo " Your Device name is <strong> {$this->detector->DeviceName()} </strong> <br/>";
        echo "Your Browser name is  <strong> {$this->detector->BrowserName()} </strong><br/>";
    }
}
$deviceInformation = new User();
?>