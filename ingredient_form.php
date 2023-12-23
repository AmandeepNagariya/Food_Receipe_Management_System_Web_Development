
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
<h2 div style=""><strong>Ingredient form</strong></h2>
 <form method="post" enctype="multipart/form-data">
<div class="row">
                  <div style="" class="span1 form-group">
                  <label>ITEMS:</label>
                  </div>
                <div class="span4 form-group">
                  <input style="width:30%" type="text" name="items" class="form-control" value="" id="items" placeholder="ITEMS"  data-msg="Please enter name" />
                  <div class="validation"></div>
                </div>
				<br>
				<div style="" class="span1 form-group">
                  <label>AMOUNT:</label>
                  </div>
                <div class="span4 form-group">
                  <input style="width:30%" type="text" name="amount" class="form-control" value="" id="amount" placeholder="AMOUNT" data-rule="minlen:4" data-msg="Please enter amount" />
                  <div class="validation"></div>
                </div>
				<br>
               <div style="" class="span1 form-group">
                  <label>UNIT:</label>
                  </div>
                <div class="span4 form-group">
                  <input style="width:30%" type="text" name="unit" class="form-control" value="" id="unit" placeholder="UNIT" data-rule="minlen:4" data-msg="Please enter number of units" />
                  <div class="validation"></div>
                </div>
                 <br>
				 
				<br>
				
				 <div style="" class="span1 form-group">
                  <label>RECIPE ID:</label>
                  </div>
                <div class="span4 form-group">
                  <input style="width:30%" type="text" name="recipe_id" class="form-control" value="" id="recipe_id" placeholder="RECIPE ID"  data-msg="Please enter recipe id" />
                  <div class="validation"></div>
                </div>
				<br>
				<p class="text-center">
                    <button class="btn" input style="width:30%"type="submit" name="save" id="save">Submit Ingredients</button>
                  </p>
				
</div>
</form>
</body>
</html>
<?php 
include('database.php');


if(isset($_POST['save']))
{

	$items = $_POST['items'];
	$unit=$_POST['unit'];
	$amount=$_POST['amount'];
    @$recipe_id = $_POST['recipe_id'];


$query = "INSERT INTO `ingredient_table` (`items`,`unit`,`amount`,`recipe_id`) VALUES ('$items','$unit','$amount','$recipe_id')";
$result = mysqli_query($con,$query);
	if($result==true)
			{
			    ?>
					<script>
						alert('Ingredients added Successfully.');
						
					</script>
<?php
}
			else{
			   
			    ?>
					<script>
						alert('Ingredient Not Added.');
					
					</script>
				
				<?php 
			}
}

else{
	   	echo ""; 
	}
	
	
	
	mysqli_close($con);
	
	
?>