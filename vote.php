<?php include ('head.php');?>
<?php include("sess.php");?>
<body>
	<?php include 'side_bar.php'; ?>
    <div id="wrapper">
    </div>
	<form method = "POST" action = "vote_result.php">
	<div class="col-lg-6">
	
                    <div class="panel panel-primary">
                        <div class="panel-heading"><center>
                            PRESIDENT</center>
                        </div>
                        <div class="panel-body" style = "background-color:; display:block;">
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'President'") or die(mysqli_errno());
							while($fetch = $query->fetch_array())
						{
						?>
                           <div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:50%;" height = "150px" width = "150px" class = "img"></center>
							
							<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "pres_id" class = "pres">Give Vote</center>
							</div>
	
						<?php
							}
						?>

						</div>
                       
                    </div>
     </div>
	
	
	
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Union Advisor</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Union Advisor'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:50%;" height = "150px" width = "150px" class = "img"></center>
						<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
						<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "ua_id" class = "ua">Give Vote</center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>SRC Chair Person</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'SRC Chair Person'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:50%;" height = "150px" width = "150px" class = "img"></center>
							<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "src_id" class = "src">Give Vote</center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	

     <hr/>
		
		<center><button class = "btn btn-success ballot" type = "submit" name = "submit">Submit Ballot</button></center>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</form>
</body>
<?php include ('script.php');
include ('footer.php');?>
  
  <script type = "text/javascript">
		$(document).ready(function(){
			$(".pres").on("change", function(){
				if($(".pres:checked").length == 1)
					{
						$(".pres").attr("disabled", "disabled");
						$(".pres:checked").removeAttr("disabled");
					}
				else
					{
						$(".pres").removeAttr("disabled");
					}
			});
			
	
			
			$(".ua").on("change", function(){
				if($(".ua:checked").length == 1)
					{
						$(".ua").attr("disabled", "disabled");
						$(".ua:checked").removeAttr("disabled");
					}
				else
					{
						$(".ua").removeAttr("disabled");
					}
			});
			
			$(".src").on("change", function(){
				if($(".src:checked").length == 1)
					{
						$(".src").attr("disabled", "disabled");
						$(".src:checked").removeAttr("disabled");
					}
				else
					{
						$(".src").removeAttr("disabled");
					}
			});
	
	
		});	
	</script>
</html>

