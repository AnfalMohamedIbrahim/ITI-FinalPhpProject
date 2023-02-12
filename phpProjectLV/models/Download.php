<?php
use ZipArchive;
class Download {
    
       private $count;

       private $verified; 
       private $zipFile;
       private $content;
      function __constructor($count,$verified,$fileDbContent){
        $this->count = $count;
    
        $this->verified = $verified;
        $this->content=$fileDbContent;
        // $this->pressedKeyCounter = $_SESSION['pressedKeyCounter'];

      }

      public  function generateRandomName(){
        $characters = array ('0','1','2','3','4','5','6','7','8','9',
                'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',
          'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
                         );
                    shuffle($characters);
                return implode("", array_slice($characters, 0,10));
    }

      public function verified(){
        if($this->verified = "true" && $this->count <=7){
        //  to do it at the same server which is i not 
        // persued by this solution :(
          // so i tried to put the content in dataBase
          // $this->createZipFile();
          $this->createAndDownloadingZipFileFromDb($this->content);
        }
      }


    private function createAndDownloadingZipFileFromDb ($zipFileContent) {
      $zip_file_name_with_location=getcwd()."//".$this->generateRandomName().".zip"; 
      touch($zip_file_name_with_location); // just create a zip file

           $this->zipFile = new ZipArchive;
        // open the archive and put in it the previous archive 
        $this->zipFile->open($zip_file_name_with_location); 
        // create the file with the content 
        $fHandler=fopen("readMe.md","a+");
        fwrite($fHandler,$zipFileContent);
        fclose($fHandler);
        $inserting_file_name_with_location=getcwd()."\\"."readMe.md";
        $inserting_file_name_without_location = "readMe.md";
        $this->zipFile->addFile($inserting_file_name_with_location, $inserting_file_name_without_location);
         
        $this->zipFile->close();

   
  }
    public function setNewCount()
      {
       return $newCount=$this->count++;
        
      
      }


}

 
      
       
  
  
