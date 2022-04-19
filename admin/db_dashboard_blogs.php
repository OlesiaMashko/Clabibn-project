<?php

require_once 'dbConfig.php'; 

try {

    if (isset($_POST["blogname"]) && isset($_POST["subheader"]) && isset($_POST["date"]) && isset($_POST["author"]) && isset($_POST["blog"])) {
        $blogname = $_POST['blogname'];
        $subheader = $_POST['subheader'];
        $date = $_POST['date'];
        $author = $_POST['author'];
        $blog = $_POST['blog'];

            // Get file info 
            $fileName = basename($_FILES["image"]["name"]); 
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
             
            // Allow certain file formats 
            $allowTypes = array('jpg','png','jpeg','gif'); 
            if(in_array($fileType, $allowTypes)){ 
                $image = $_FILES['image']['tmp_name']; 
                $imgContent = addslashes(file_get_contents($image)); 
             
                $insert = $db->query("INSERT INTO blog (header, subheader, image, date, author, description) VALUES ('$blogname', '$subheader', '$imgContent', '$date', '$author', '$blog')");
                                   
                    echo "<h1 style='text-align:center;background-color:#fff;color:#333;margin-top:10%;'>Blog Added Successfully!</h1>";
                    header( "refresh:3;url=admin_dashboard.php" );
         
                if($insert){ 
                    $status = 'success'; 
                    $statusMsg = "File uploaded successfully."; 
                }else{ 
                    $statusMsg = "File upload failed, please try again."; 
                }  
            }else{ 
                $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
           } 

    }

  

} catch (PDOException $e) {
    echo "Connection failed! " . $e->getMessage();
}