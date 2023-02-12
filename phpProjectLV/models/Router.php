<?php

class Router{


    private $pages = array ("login","payment","registeration","notFoundPage","uploadPage");
    private $requestedPage;

    public function route()
    {
        // to route to the whole Pages in the app 
        if(isset($_GET["view"])&& in_array($_GET["view"],$this->pages)){
            $this->requestedPage=$_GET["view"];
            // nested if to manage the download route 
            if($this->requestedPage == "download" && $_SESSION["purchased"]="true"){
                $this->requestedPage = "download";
            } 
        }
         // to manage the download page not to be copied or opened
        else{
            $this->requestedPage ="notFoundPage";
        }
        // to make the routes easier to go 
        $this->getUrl();
    }
    
    private function getUrl(){
        require_once("./views/".$this->requestedPage.".php");
    }
    









}