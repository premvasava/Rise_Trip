<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>    
</head>
<body>
   
   <form method="post" action="try.php">

     <select class="form-control" name="category" id="sel1" multiple>

           
             <?php
              include('conn.php');

         
              $tabledata="select U_id, U_email FROM user";
              $result=mysqli_query($conn,$tabledata);
            while($record=mysqli_fetch_array($result))  
              {
          ?>
         <p ><inpute type="checkbox" > <option>
           
          <?php echo $record['U_id']; ?>
                  <?php echo $record['U_email']; ?> 
          <?php      
              }
           ?>
         </option>
             </inpute></p>
                 </select>
</form>
    <input type="submit" name="Submit" value="Submit">
    
</body>
</html>