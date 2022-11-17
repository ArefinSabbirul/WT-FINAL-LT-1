<?php
  session_start();

  if($_SERVER['REQUEST_SERVER']="POST")
  {
    $category=sanitize($_POST['category']);
    $unit=sanitize($_POST['unit']);
    $rate=sanitize($_POST['rate']);
    $isvalid=true;

    if(empty($category))
    {
      $_SESSION['category_error_msg']="Category can not be empty";
      $isvalid=false;
    }

    if(empty($unit))
    {
      $_SESSION['unit_error_msg']="Unit can not be empty";
      $isvalid=false;
    }

    if(empty($rate))
    {
      $_SESSION['rate_error_msg']="Rate can not be empty";
      $isvalid=false;
    }
    
    if($isvalid ===true)
    {
      $_SESSION['category_error_msg']="";
      $_SESSION['value_error_msg']="";
      $_SESSION['rate_error_msg']="";
    }
    else{
      header("Location: ../view/Lab7(2).php");
    }

  }

  function sanitize($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
  }
    
?>