<?php
//know your mobile phone and broswer
class DetectBrowser{
    private $devices;
    private $browsers;
    private $browsersLength;
    private $devicesLength;
    private $user;

    public function __construct(){
        $this->devices =  array('ipad','android','silk','blackberry','touch','iphone');
        $this->browsers = array('firefox','chrome','opera','msie','safari','blackberry','trident');
        $this->browsersLength = count($this->browsers);
        $this->devicesLength = count($this->devices);
        $this->user = $_SERVER['HTTP_USER_AGENT'];
        $this->user = strtolower($this->user);
    }
    //find user devices
    public function DeviceName(){
        for($i = 0; $i < $this->devicesLength; $i++){
            if(strstr($this->user,$this->devices[$i])){
                return $this->devices[$i];
            }
        }
    }

    //find the user browser
    public function BrowserName(){
        for($i = 0; $i<$this->browsersLength;$i++){
            if(strstr($this->user,$this->browsers[$i])){
                return $this->browsers[$i];
            }
        }
    }
}



?>