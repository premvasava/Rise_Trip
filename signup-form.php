<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <link rel="stylesheet" type="text/css" href="signup.css">
    
    <div class="registerbox"> 
     <h1> Register form</h1>
     
      <form action='registraction.php' method='post'>            
            
            <p><label for="username"> <b>Name</b></label></p>
            <input type="text" placeholder="enter name" name="username" required />
            
            
            <p><label for="useremail"> <b>Email</b></label></p>
            <input type="email" placeholder="enter email" name="useremail" required />
            
            
            <p><label for="usermobile"> <b>Mobile no:</b></label></p>
            <input type="tel" value="" placeholder="enter your mobile number" name="usermobile" pattern="^\d{10}$" required />
            
            
            <p>
            <label for="userpassword"> <b>Password:</b></label>
            <input type="password" placeholder="enter your password " name="userpassword"
            pattern="{8,}" required /></p>
            
            
            <input type="submit" name="" value="submit">
          </form>
          <p>Already have an account?<a href= "loginform.html"> sign up </a> </p>
          </div>   
    
</body>
</html>