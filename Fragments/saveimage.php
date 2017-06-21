<?php
include("conn.php");
session_start();
  $user_id = $_SESSION['id'];  
function GetImageExtension($imagetype)
{
 if(empty($imagetype)) return false;
 switch($imagetype)
 {
   case 'image/bmp': return '.bmp';
   case 'image/gif': return '.gif';
   case 'image/jpeg': return '.jpg';
   case 'image/png': return '.png';
   default: return false;
 }
}

if (!empty($_FILES["uploadedimage"]["name"])) {


   $file_name=$_FILES["uploadedimage"]["name"];
   $temp_name=$_FILES["uploadedimage"]["tmp_name"];
   $imgtype=$_FILES["uploadedimage"]["type"];

   $ext= GetImageExtension($imgtype);
   $imagename=date("d-m-Y")."-".time().$ext;
   $target_path = "assets/img/".$imagename;


   if(move_uploaded_file($temp_name, $target_path)) {
   $query_upload="UPDATE passenger SET images_path = '$target_path' WHERE PASS_ID='$user_id'";
   mysqli_query($con, $query_upload) or die("error in $query_upload == ----> ".mysqli_error($con)); 
   header('Location: main_member.php');
  }else{
   exit("Error While uploading image on the server");
 }


}
else{
   echo "<script> alert('asd'); </script>";
}
?>
