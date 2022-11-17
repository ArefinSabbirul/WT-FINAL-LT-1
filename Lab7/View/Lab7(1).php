
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LabTask7</title>
</head>
<body>
    <h1>Page1[Home]<br></h1>
    <?php include 'header.php';?>
    
    <br>
    <h3>Converter:</h3>
    <form action="../Controller/Lab7(1)ac.php" method="post" nonvalidate>
      <table>
        <tr>
          <td>
            <label for category>Select Category :</label>           
          </td>
          <td>
            <select name="catagory" placehoder="Select a value", id="catagory">
              <option value="Select a value">Select a value</option>
            </select>
            <?php echo isset($_SESSION['category_error_msg'])? $_SESSION['category_error_msg']:""?> <br>
          </td>
        </tr>
     
        <tr>
          <td>
            <label for value >Value:</label>
          </td>
          <td>
            <input type="value"name="value" id="value">
            <?php echo isset($_SESSION['value_error_msg'])? $_SESSION['value_error_msg']:""?> <br>
          </td>
          <td>
            <input type="submit" id="submit" value="Submit"><br>
          </td>
        </tr>
        <tr>
          <td>
              <label for result>Result:</label>
          </td>         
          <td>
            <input type="number" name="result" id="result">
           
          </td>
        </tr>
       
      </table>
    </form>
</body>
</html>



