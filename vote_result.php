<?php include ('head.php');?>
<?php include ('sess.php');?>

<body>
<?php include 'side_bar.php'; ?>
    <div id="row">
        <?php
			if(ISSET($_POST['submit']))
				{
					if(!ISSET($_POST['pres_id']))
					{
						$_SESSION['pres_id'] = "";
					}
					else
					{
						$_SESSION['pres_id'] = $_POST['pres_id'];
					}

					if(!ISSET($_POST['ua_id']))
					{
						$_SESSION['ua_id'] = "";
					}
					else
					{
						$_SESSION['ua_id'] = $_POST['ua_id'];
					}
					
					if(!ISSET($_POST['src_id']))
					{
						$_SESSION['src_id'] = "";
					}
					else
					{
						$_SESSION['src_id'] = $_POST['src_id'];
					}
					
					
				}
		?>
    </div>
			<center>
		  <div class="col-lg-8" style = "margin-left:25%; margin-right:25%;" >
		  <div class = "alert alert-info">
			<div class="panel-heading"><center>PRESIDENT</center></div>
			<br />
			<?php
				if(!$_SESSION['pres_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[pres_id]'")->fetch_array();
						
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			
			<div class = "alert alert-success">
			<div class="panel-heading"><center>UNION ADVISOR</center></div>
			<br/>
			<?php
				if(!$_SESSION['ua_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[ua_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
				
			</div>
			<div class = "alert alert-info" >
			<div class="panel-heading"><center>SRC Chair Person</center></div>
			<br />
			<?php
				if(!$_SESSION['src_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[src_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			
			<br />
			</div>
	</center>
                                    <div class="modal-body">
										<p><center>Are you sure you want to submit your Votes? </center></p>
                                    </div>
									
									<div class="modal-footer"><center>
								<a href = "submit_vote.php"><button type = "submit" class="btn btn-success"><i class="icon-check"></i>&nbsp;Yes</button></a>
								<a href = "vote.php"><button class="btn btn-danger" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Back</button></a>
									</center></div>
                                    <!-- /.modal-content -->
                                
                                <!-- /.modal-dialog -->
                            

</body>

<?php include ('script.php');
include ('footer.php');?>
</html>

