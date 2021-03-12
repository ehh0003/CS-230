<?php

require 'dbhandler.php';
session_start();

//define a unit that we can use later on
//this is to upload KB
define('KB', 1024);
define('MB',1048576);

if(isset($_POST['gallery-submit'])){

$file = $_FILES['gallery-image'];
$file_name = $file['name'];
$file_tmp_name = $file['tmp_name'];
$file_error = $file['error'];
$file_size = $file['size'];


$title = $_POST['title'];
$descript=  $_POST['descript'];




//This will strip away all the info and leave the extension and convert to lowercase for comparison
$ext = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
$allowed = array('jpg','jpeg','png','svg');


//if file upload error then take back to profile page
if($file_error !==0){
    header("Location: ../admin.php?error=UploadError");
    exit();
}
if(!in_array($ext, $allowed)){
    header("Location: ../admin.php?error=InvalidType");
    exit();

}

if($file_size > 4*MB){
    header("Location: ../admin.php?error=FileSizeExceeded");
    exit();
}

//true adds more entropy to the end to make more unique
else{
    $new_name = uniqid('',true).".".$ext;

    $destination = '../gallery/'.$new_name;
    $sql = "INSERT INTO gallery (title, descript, picpath) VALUES (?,?,?)"; 
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../admin.php?error=SQLInjection");
        exit();
    }else{

        mysqli_stmt_bind_param($stmt, "sss",$title, $descript, $destination);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

    move_uploaded_file($file_tmp_name, $destination);
    header("Location: ../admin.php?success=GalleryUpload");
    exit();
    }
}
}
else{
    header("Location: ../admin.php");
    exit();
}