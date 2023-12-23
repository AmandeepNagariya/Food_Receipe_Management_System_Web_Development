<?php 
include('database.php');
if(isset($_POST['check_here']))
{

	$name = $_POST['name'];
	$user_id = $_POST['user_id'];
	$password= $_POST['password'];
	
	$check="SELECT * FROM `user_registration` WHERE `name` = '$name' AND `user_id` = '$user_id' ";
        $rs = mysqli_query($con,$check);
        $data = mysqli_num_rows($rs);
	
	if($data >0){
	    
	     ?>
					<script>
						alert('User Already Exist.');
						
					</script>
				
				<?php 
	}
	
}	
else{
	   	echo ""; 
	}
	?>
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
<html>
<body>
<h1 div style=""><div style="text-align:center"<strong>FOOD RECIPIES WEB APP</strong></h2>
<h2 div style=""><strong>Registration form</strong></h2>
<h4 div style="">Basic Details</h4>
 <form method="post" enctype="multipart/form-data">
<div class="row">
                  <div style="" class="span1 form-group">
                  <label>NAME:</label>
                  </div>
                <div class="span4 form-group">
                  <input style="width:30%" type="text" name="name" class="form-control" value="" id="name" placeholder="NAME" data-rule="minlen:4" data-msg="Please enter name" />
                  <div class="validation"></div>
                </div>
				<br>
               <div style="" class="span1 form-group">
                  <label>USER ID:</label>
                  </div>
                <div class="span4 form-group">
                  <input style="width:30%" type="text" name="user_id" class="form-control" value="" id="fname" placeholder="USER ID" data-rule="minlen:4" data-msg="Please enter father name" />
                  <div class="validation"></div>
                </div>
                 <br>
				 <div style="" class="span1 form-group">
                  <label>PASSWORD:</label>
                  </div>
                <div class="span4 form-group">
                  <input style="width:30%" type="password" name="password" class="form-control" value="" id="password" placeholder="PASSWORD" data-rule="minlen:4" data-msg="Please enter password /">
                  <div class="validation"></div>
                </div>
				<p class="text-center">
                    <button class="btn" input style="width:20%" type="submit" name="save" id="save">submit</button>
                  </p>
</div>
</form>
</body>
</html>
<?php 
include('database.php');



if(isset($_POST['save']))
{

	$name = $_POST['name'];
	$user_id = $_POST['user_id'];
	$password = $_POST['password'];
	
$query = "INSERT INTO `user_registration` (`name`,`user_id`,`password`) VALUES ('$name','$user_id','$password')";
$result = mysqli_query($con,$query);
	if($result==true)
			{
			    ?>
					<script>
						alert('User Registered Successfully.');
						window.open('login_form.php','_self');
					</script>
<?php
}
			else{
			   
			    ?>
					<script>
						alert('User Not Registered.');
					
					</script>
				
				<?php 
			}
}

else{
	   	echo ""; 
	}
	
	
	
	mysqli_close($con);
	
	
?>