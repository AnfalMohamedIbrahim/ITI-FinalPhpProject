<?php

class Upload {
    private $filename;
     private $destination;
     private  $extension ;
     private  $file;
     private $size;
     private $content;

    function __constructor($fileName,$destination,$extension,$temp,$size,$content){
        $this->filename = $fileName;
        $this->destination = $destination ;
        $this->extension = $extension;
        $this->file = $temp;
        $this->size =$size;
        $this->content = $content;
    }

    public function checkZipFile(){
      if(!in_array($this->extension, ['zip'])){
       echo "your uploaded file isn't a zip file";
    }
    else {
        return $this->extension;
    }
    }

    public function transferFileFromTempAndUpload (){
                if (move_uploaded_file($this->file, $this->destination)) {
              echo $this->filename; 
                echo "File is ready to upload";
            }
        else {
            echo "Failed to upload file.";
        }
        return $this->filename;
    }
    public function getSize(){
        return $this->size;
    }

    public function getContent()
    {
        return $this->content;
    }
    

}