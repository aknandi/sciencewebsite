<!DOCTYPE html>
<html lang="en">

  <?php include "./includes/preamble.php"; ?>

  <body>

 <?php include "./includes/header.php"; ?>
	
	
	<!-- +++++ Contact Section +++++ -->
	
	<div class="container pt">
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>CONTACT ME</h3>
				<hr>
				<p>Any feedback or suggestions?</p>
			</div>
		</div>
		<div class="row mt">	
			<div class="col-lg-8 col-lg-offset-2">
				<form action="./sendemail" method="POST" role="form">
				  <div class="form-group">
				    <input type="text" class="form-control" id="NameInputEmail1" placeholder="Your Name" name="name">
				    <br>
				  </div>
				  <div class="form-group">
				    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
				    <br>
				  </div>
				  <div class="form-group">
				    <input type="text" class="form-control" id="subjectEmail1" placeholder="Subject" name="subject">
				    <br>
				  </div>
				  <textarea class="form-control" rows="6" placeholder="Enter your text here" name="text"></textarea>
				    <br>
				  <button type="submit" class="btn btn-success">SUBMIT</button> <?php if (isset($_GET["sent"])){?> <p> Sent </p> <?php }?>
				</form>    			
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
	
	
 <?php include "./includes/footer.php"; ?>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
