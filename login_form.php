<html>
<body>
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>

button {   
       background-color: #4CAF50;   
       width: 100%;  
        color: white;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
		 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    } 
	 
</style>   
</head>    
<body>    
    <center> <h1>Food Recipe Login Form</h1> </center>   
    <form method="post" action="action_form.php ">
        <div class="container">   
            <label>Userid : </label>   
            <input type="text" placeholder="Enter Username" name="userid" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <button type="submit" name="login">Login</button>   
            
        </div>   
    </form>  
</body>
</html>
<?php
if(isset($_POST['login'])) 
{
    $user_id=$_POST['user_id'];
    $password=$_POST['password'];
    
    include('database.php');
    
    	$result1 = mysqli_query($con, "SELECT * FROM `user_registration` WHERE user_id='$user_id' && password='$password'");
										//print_r($result1);
										$count = mysqli_num_rows($result1);
										
										$row = mysqli_fetch_array($result1);
    
   
	if($count == 1)
    {
         ?>
					<script>
						alert("login successful.");
						window.open('login_form.php','_self');
						
					</script>
				
				<?php 
    }
    else
    {
        ?>
					<script>
						alert("login failed.");
					
					</script>
				
				<?php
    }
}
?>

