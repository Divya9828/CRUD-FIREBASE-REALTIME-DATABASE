<?php
session_start();
include "dbconfig.php";

if(isset($_POST['insert']))
{
  $postData = [
    'email'=>$_POST['email'],
    'password'=>$_POST['password']
  ];
  $ref_table="register";
  $postRef = $database->getReference($ref_table)->push($postData);
  if($postRef)
  {
    $_SESSION['status']="Added Successfully";
    header('Location:index.php');
  }
  else
  {   
    $_SESSION['status']="Not added";
    header('Location:index.php');
  }
  
}

if(isset($_POST['update']))
{
  $id=$_POST['id'];
  $postData = [
    'email'=>$_POST['email'],
    'password'=>$_POST['password']
  ];
  $ref_table="register/".$id;
  $update = $database->getReference($ref_table)->update($postData);
  if($update)
  {
    $_SESSION['status']="Update Successfully";
    header('Location:index.php');
  }
  else
  {   
    $_SESSION['status']="Not updated";
    header('Location:index.php');
  }
}


if(isset($_POST['delete']))
{
  $id=$_POST['delete'];
  $ref_table="register/".$id;
  $delete = $database->getReference($ref_table)->remove();
  if($delete)
  {
    $_SESSION['status']="Delete Successfully";
    header('Location:index.php');
  }
  else
  {   
    $_SESSION['status']="Not Deleted";
    header('Location:index.php');
  }
}
?>