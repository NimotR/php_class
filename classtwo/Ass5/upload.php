<?php



if($_SERVER["REQUEST_METHOD"] == "POST"){

    $fname = $_REQUEST["fname"];
    $lname = $_REQUEST["lname"];
    $email = $_REQUEST["email"];

    $myfile = fopen("data/newfile.txt", "w") or die("Unable to open file!");
    $txt = "FirstName: $fname \nLastName: $lname \nEmail: $email \n";
    fwrite($myfile, $txt);
    fclose($myfile);


    #cv uploading
    if(isset($_FILES["cv"])  && $_FILES["cv"]["error"] == 0){
        //creating array for allowed image type  
         $qualified = array("pdf" => "application/pdf", "doc" => "application/pdf");
         //recieving the attributes in a variable
         $docname = $_FILES["cv"]["name"];
         $doctype = $_FILES["cv"]["type"];
         $docsize = $_FILES["cv"]["size"];

         //echo "<br>the name of the file " . $docname;//images (1).png
         //echo "<br>the filetype " . $doctype . "<br>";
         
        
         $maxfile = 5 * 1024 * 1024;
         //checking if $filesize > $maxsize if not it exist the string
         if($docsize > $maxfile) die("Error: File size is larger than the allowed limit. <br>");
 
         #checking the file type
         if(in_array($doctype, $qualified)){
             
             #checking if file exist
             if(file_exists("cv/".$docname)){
                 echo $docname . " already Exist <br>";
             }else {
 
                 #uploading the file
                 move_uploaded_file($_FILES["cv"]["tmp_name"], "cv/" . $docname);
                 echo "Your CV was uploaded successfully<br>";
             }
         }else {
             echo "There is a problem uploading your file. Please try again.<br>";
         }
    } else {
        #printing the type of error
        echo "Error: " . $_FILES["cv"]["error"];
    }




    #Image uploading

    if(isset($_FILES["photo"])  && $_FILES["photo"]["error"] == 0){
        //creating array for allowed image type  
         $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
         //recieving the attributes in a variable
         $filename = $_FILES["photo"]["name"];
         $filetype = $_FILES["photo"]["type"];
         $filesize = $_FILES["photo"]["size"];
         
         
         $maxsize = 500 * 1024;
         //checking if $filesize > $maxsize if not it exist the string
         if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.<br>");
 
         #checking the file type
         if(in_array($filetype, $allowed)){
             
             #checking if file exist
             if(file_exists("images/".$filename)){
                 echo $filename . " already Exist<br>";
             }else {
 
                 #uploading the file
                 move_uploaded_file($_FILES["photo"]["tmp_name"], "images/" . $filename);
                 echo "Your Image was uploaded successfully<br>";
             }
         }else {
             echo "There is a problem uploading your file. Please try again.<br>";
         }
    } else {
        #printing the type of error
        echo "Error: " . $_FILES["photo"]["error"];
    }

    
}

?>