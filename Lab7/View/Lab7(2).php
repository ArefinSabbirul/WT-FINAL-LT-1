<?php 
  session_start();
  ?>
<!DOCTYPE html>

<head> 
  <title>LabTask7</title>
</head>
<body>
    <h1>Page2[Conversion]<br></h1>
    <?php include 'header.php';?>
 
    <br>
    <h3>Conversion Rate:</h3>
    <form action="../Controller/Lab7(2)ac.php" method="post" nonvalidate>
    
            <label for category>Category :</label>               
           <input type="text" name="category" id="category">
           <?php echo isset($_SESSION['category_error_msg']) ? $_SESSION['category_error_msg']:"" ?><br>
          
            <label for unit >Unit :</label>  
            <input type="number" name="unit" id="unit">
            <?php echo isset($_SESSION['unit_error_msg']) ? $_SESSION['unit_error_msg']:"" ?><br>
          
            <label for rate>Rate :</label>          
            <input type="rate" name="rate" id="rate">
            <?php echo isset($_SESSION['rate_error_msg']) ? $_SESSION['rate_error_msg']:"" ?> <br>
            
            <input type="submit" id="submit" value="Submit"><br>
</form>
          
</body>
</html>