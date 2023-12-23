
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
<h2 div style=""><strong>Recipies form</strong></h2>
 <form method="post" enctype="multipart/form-data">
<div class="row">
                  <div style="" class="span1 form-group">
                  <label>NAME:</label>
                  </div>
                <div class="span4 form-group">
                  <input style="width:30%" type="text" name="name" class="form-control" value="" id="name" placeholder="NAME"  data-msg="Please enter name" />
                  <div class="validation"></div>
                </div>
				<br>
               <div style="" class="span1 form-group">
                  <label>DESCRIPTION:</label>
                  </div>
                <div class="span4 form-group">
                  <input style="width:30%" type="text" name="desc" class="form-control" value="" id="desc" placeholder="DESC" data-rule="minlen:4" data-msg="Please enter description" />
                  <div class="validation"></div>
                </div>
                 <br>
				 <div class="row">
                  <div style="" class="span1 form-group">
                  <label>UPLOAD RECIPE PHOTO</label>
                  </div>
                <div class="span4 form-group">
  <input type="file"  name="image_url">
                <div class="validation"></div>
                </div>	
				<br>
				 <div style="" class="span1 form-group">
                  <label>CREATOR ID:</label>
                  </div>
                <div class="span4 form-group">
                  <input style="width:30%" type="text" name="creator_id" class="form-control" value="" id="creator_id" placeholder="CREATOR ID" data-rule="minlen:4" data-msg="Please enter creator id" />
                  <div class="validation"></div>
                </div>
				<br>
				<p class="text-center">
                    <button class="btn" input style="width:30%"type="submit" name="save" id="save">Submit Recipies</button>
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
	$desc=$_POST['desc'];
    @$creator_id = $_POST['creator_id'];
@$image_url= $_FILES['image_url']['name'];
	@$tmp_image= $_FILES['image_url']['tmp_name'];

    $path= 'upload/';
    $actualpath="$image_url";

move_uploaded_file($tmp_image, $path.$image_url);
$query = "INSERT INTO `recipe_table` (`name`,`desc`,`image_url`,`creator_id`) VALUES ('$name','$desc','$actualpath','$creator_id')";
$result = mysqli_query($con,$query);

	if($result==true)
			{
			    ?>
					<script>
						alert('Recipe added Successfully.');
						
					</script>
<?php
}
			else{
			   
			    ?>
					<script>
						alert('Recipe Not Added.');
					
					</script>
				
				<?php 
			}
}

else{
	   	echo ""; 
	}
	
	
	
	mysqli_close($con);
	
	
?>