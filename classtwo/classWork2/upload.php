<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
   if(isset($_FILES["photo"])  && $_FILES["photo"]["error"] == 0){
       //creating array for allowed image type  
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        //recieving the attributes in a variable
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];

        //selecting the extension of the file path
        //$ext = pathinfo($filename, PATHINFO_EXTENSION);

        //echo "File Name: " . $_FILES["photo"]["name"] . "<br>";
        //echo "File Type: " . $_FILES["photo"]["type"] . "<br>";
        //echo "File Size: " . ($_FILES["photo"]["size"] / 1024) . " KB<br>";
        
        //checking if value in $ext exist in the array $allowed if not it exist the string 
        //if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
        
        
        $maxsize = 5 * 1024 * 1024;
        //checking if $filesize > $maxsize if not it exist the string
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

        #checking the file type
        if(in_array($filetype, $allowed)){
            
            #checking if file exist
            if(file_exists("uploads/".$filename)){
                echo $filename . " already Exist";
            }else {

                #uploading the file
                move_uploaded_file($_FILES["photo"]["tmp_name"], "uploads/" . $filename);
                echo "Your file was uploaded successfully";
            }
        }else {
            echo "There is a problem uploading your file. Please try again.";
        }
   } else {
       #printing the type of error
       echo "Error: " . $_FILES["photo"]["error"];
   }
}

?>