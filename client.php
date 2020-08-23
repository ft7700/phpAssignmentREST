<?php 

    $id = 0;
    $username ="";
    $email ="";
    
    require_once ('DBConn.php');
    $db = DBConn::getInstance();
   
   
    
    
    $mysqli = $db->getConnection(); 
    $sql_query = "SELECT * FROM users";
    $result = $mysqli->query($sql_query); 
         
?>
<html lang="en">
  <head>
    <title>Rest API Client Side Demo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

    <div class="container">
      <h2>Rest API Client Side</h2>
      <form class="form-inline" action="" method="POST">
        <div class="form-group">
          <label for="name">Existing user database</label>
          
        </div>
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
      </form>
      <p>&nbsp;</p>
      <h3>
         <?php 
         if (isset($_POST['submit'])) {
         while ($row = mysqli_fetch_array($result)){ { ?>
		<tr>
                        <td><?php echo $row['id']; ?></td>
			<td><?php echo $row['username']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['password']; ?></td>
                        
		</tr>
                <br>
        
         <?php }} }?>
                
      </h3>
    </div>
  </body>
</html>