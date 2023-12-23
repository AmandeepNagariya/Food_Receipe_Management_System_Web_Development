
<?php 
session_start();
	if(isset($_SESSION['uid']))
{
$button_value = "SAVE";

}
else
{
	header('location: login_form.php');
}


?>
<?php 
include('database.php');
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		
		$d="0";
		
		$button_value = "UPDATE";
		
		$record = mysqli_query($con, "SELECT * FROM `recipe_table` WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			
		  
		}
		
	}
	

	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		$qry = "DELETE FROM `recipe_table` WHERE id = '$id'";
	
	$run = mysqli_query($con,$qry);

	if($run == true)
		{
			
			?>
			<script type="text/javascript">
				alert('Data Deleted');

				window.open('action_form.php','_self')
			</script>

			<?php

		}
	else
		{
			?>
			<script type="text/javascript">

				alert('Data not Deleted');
				window.open('action_form.php','_self')
			</script>

			<?php
		}
	}
	
	
	?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keyword" content="">
  <title>Action Form</title>

  <!-- Favicons -->
  <link href="img/c1.png" rel="icon">
  <link href="img/c1.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
<link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME ICONS STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM STYLES-->
    <link href="assets/css/style.css" rel="stylesheet" />
	
  <link rel="stylesheet" type="text/css" href="assets/DataTables-1.10.18/css/jquery.dataTables.css"/>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
  <section id="container">
    

         </ul>
          </li>
          
         
          
   
          
		 
         
    
          
          
         
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
      <div class="row">
          <div class="col-lg-12 main-chart">
            <!--CUSTOM CHART START -->
			<h2 align="center" style="color:#4ECDC4;font-weight:bold;">Food Recipes Webapp Action Form</h2> <br>
			
              <form method="post" class="form-horizontal style-form "enctype="multipart/form-data">
			  
			  
				  <div class="form-group">
                    
                  </div>

               <div class="form-group">
                    <label for="name" class="control-label col-lg-2 lab" style="color:black;font-size:14px;font-weight:bold;">Name</label>
                    <div class="col-lg-8">
                     
				    <input style="font-size:12px;" class="form-control" name="name" value="<?php if (isset($n['name'])){ echo $n['name'];}?>" required></input>
                    </div>
				  <div class="form-group">
                    <label for="description" class="control-label col-lg-2 lab" style="color:black;font-size:14px;font-weight:bold;">Description</label>
                    <div class="col-lg-8">
                     
				    <input style="font-size:12px;" class="form-control" name="desc" value="<?php if (isset($n['desc'])){ echo $n['desc'];}?>" required></input>
                    </div>
                    <div class="form-group">
                    <label for="image_url" class="control-label col-lg-2 lab" style="color:black;font-size:14px;font-weight:bold;">Image</label>
                    <div class="col-lg-8">
                     
				    <input type="file" class="form-control" name="image_url" value="<?php if (isset($n['image_url'])){ echo $n['image_url'];}?>" ></input>
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="creator_id" class="control-label col-lg-2 lab" style="color:black;font-size:14px;font-weight:bold;">Creator Id</label>
                    <div class="col-lg-8">
                     
				    <input style="font-size:12px;" class="form-control" name="creator_id" value="<?php if (isset($n['creator_id'])){ echo $n['creator_id'];}?>" required></input>
                    </div>
				  
                  </div>
				  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <input style="font-size:12px;" type="submit" class="btn btn-primary" name="save" value="<?php echo $button_value; ?>"></input>
					  <button style="font-size:12px;" type="button" class="btn btn-warning"><a href="login_form.php" style="color:white;">BACK</a></button>
					  <button style="font-size:12px;" type="reset" class="btn btn-danger">CLEAR</button>
					  
					  <div class="container">	
	               </div>	
					 </div>
					 
                  </div>
              </form>
		<div class="row">
				  <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="my" class="table table-striped table-bordered table-hover" style="font-size:15px;">
                                    <thead>
                                       <tr><th class="table-dark">Action</th>
                                            <th class="table-dark">ID.</th>
                                            <th class="table-dark">Name</th>
                                            <th class="table-dark">Description</th>
                                            <th class="table-dark">Image URL</th>
                                            <th class="table-dark">Creator Id</th>
                                           

                                        </tr>
                                    </thead>
                                    <tbody>
        <!-- /row -->
		<?php 
										$id= 1;
										include('database.php');
										$query4 = "SELECT * FROM `recipe_table` ORDER BY id DESC";
										
										$output4 = mysqli_query($con,$query4);
											while($rows = mysqli_fetch_array($output4)){
										?>
										
										<tr>
										   <td style="font-weight:bold;" class="table-light">
                                            <a style="width:80px" href="action_form.php?edit=<?php echo $rows['id'];?>" title="Edit" class="btn btn-success">Edit</a>
                                            <a style="width:80px; margin-top:5px;" href="action_form.php?delete=<?php echo $rows['id'];?>" onclick="return confirm('Delete This Records ?');" title="Delete" class="btn btn-danger">Delete</a>		
											</td>  
                                           <td style="font-weight:bold;"  class="table-light"><?php echo $rows['id'];?></td>
                                           <td style="font-weight:bold;" class="table-light"><?php echo $rows['name'];?></td>
                                           <td style="font-weight:bold;" class="table-light"><?php echo $rows['desc'];?></td>
										   <td style="font-weight:bold;" class="table-light"><img src="<?php echo 'upload/'.$rows['image_url'];?>" width="100px" height="100px"/></td>
                                           <td style="font-weight:bold;" class="table-light"><?php echo $rows['creator_id'];?></td>


                                        </tr>
                                        <?php 
} ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
				 
				 
				</div>
				
				
				
           
            <!-- /. PAGE INNER  -->
       
            
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
             
          </div>
          <!-- /col-lg-3 -->
        </div>
		
        <!-- /row -->
      </section>
    </section>
      </section>
   
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  
 <script type="text/javascript" src="assets/DataTables-1.10.18/js/jquery.dataTables.js"></script>
<script>
$(document).ready( function () {
    $('#my').DataTable();
} );


</script>
  
   
    <!-- METISMENU SCRIPTS -->
    
    <!-- CUSTOM SCRIPTS -->
    
</body>

</html>
<?php 
include('database.php');


//print_r($result);exit();
if(isset($_POST['save']))
{
	
	
	
	//print_r($_POST);exit();

   $name = $_POST['name'];
	$desc=$_POST['desc'];
@$creator_id = $_POST['creator_id'];
	@$image_url= "img".$_FILES['image_url']['name'];
	

move_uploaded_file($_FILES['image_url']['tmp_name'],$_FILES['image_url']['name']);
		if($_POST['save']=="SAVE"){

$query = "INSERT INTO `recipe_table` (`name`,`desc`,`image_url`,`creator_id`) VALUES ('$name','$desc','$image_url','$creator_id')";$result = mysqli_query($con,$query);
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


		else
		{
			$id1=$id;
    	
    
    	    
    	         $query=	"UPDATE `recipe_table` SET  name='$name',desc='$desc',creator_id='$creator_id' WHERE id=$id1";

	if (mysqli_query($con,$query)) 
		{
		    
          //echo "New record created successfully";
      	?>
			<script type="text/javascript">
						alert('Data updated Successfully.');

				 window.open('action_form.php','_self');
			
			</script>

			<?php
		   
		} 
		else 
      {
          
     ?>
			<script type="text/javascript">
				alert('Data not updated.');
				 window.open('action_form.php','_self');
			
			</script>

			<?php
          
      }
		}
}
		





?>


<!--script of validation start-->
