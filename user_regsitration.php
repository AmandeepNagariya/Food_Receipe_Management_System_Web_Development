<?php 
include('food_recipe_db.php');



if(isset($_POST['check_here']))
{

	$name = $_POST['name'];
	$user_id = $_POST['user_id'];
	$password= $_POST['password'];
	
	$check="SELECT * FROM `user_registration` WHERE `name` = '$name' AND `user_id` = '$user_id' AND `password` = '$password' AND `dob` = '$dob'";
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
	   	echo "user registered successfully"; 
	}
	?>
<html>
<h1 div style=""><div style="text-align:center"<strong>FOOD RECIPIES WEB APP</strong></h2>
<h2 div style=""><strong>Registration form</strong></h2>
<h4 div style="">Basic Details</h4>
 <form method="post" enctype="multipart/form-data">
<div class="row">
<div class="row">
                  <div style="text-align:ce" class="span1 form-group">
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
                </div>	
                 <br>
				 <div style="" class="span1 form-group">
                  <label>PASSWORD:</label>
                  </div>
                <div class="span4 form-group">
                  <input style="width:30%" type="text" name="password" class="form-control" value="" id="password" placeholder="PASSWORD" data-rule="minlen:4" data-msg="Please enter father name" />
                  <div class="validation"></div>
                </div>
				<p class="text-center">
                    <button class="btn" type="submit" name="save" id="save">submit</button>
                  </p>
</div>
</form>
</html>