<?php
  session_start();
  if($_SERVER['REQUEST_SER']="POST")
  {
    $category=sanitize($_POST['caegory']);
    $value=sanitize($_POST['value']);
    $isvalid=true;

    if(empty($category))
    {
      $_SESSION['category_error_msg']="Category can not be empty";
      $isvalid=false;
    }

    if(empty($value))
    {
      $_SESSION['value_error_msg']="Value can not be empty";
      $isvalid=false;
    }
    
    if($isvalid ===true)
    {
      $_SESSION['category_error_msg']="";
      $_SESSION['value_error_msg']="";
    }
    else{
      header("Location: ../view/Lab7(1).php");
    }

  }

  function sanitize($input_data)
  {
    $iuput_data = trim($input_data);
    $input_data = stripslashes($input_data);
    $input_data = htmlspecialchars($input_data);
    return $input_data;
  }
    
?>