<!DOCTYPE html>
<html lang="en">

<?php include "./includes/preamble.php"; ?>

  <body>

<?php include "./includes/header.php"; ?>
	
	<!-- +++++ Post +++++ -->
	<div id="white">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
				        <?php
                                           $file = file_get_contents("./blogs/" . $_GET["blog"] . ".txt");
                                           $array = split("\n",$file);
					   echo "<h1>" . $array[0] . "</h1>";
					   echo "<p><bd>" . $array[2] . "</bd></p>";
                                        ?>
					<!--<p><bd>1 August 2017</bd></p>-->
					<p><img class="img-responsive" src="./blogs/<?=$_GET["blog"]?>.jpg" alt=""></p>
					<?php
					   $file = file_get_contents("./blogs/" . $_GET["blog"] . ".txt");
					   $array = split("\n",$file);
					   $i = 0;
					   foreach ($array as $paragraph) {
					      if ($paragraph != "" && $i > 2) {
					         echo "<p>" . $paragraph . "</p>";
					      }
					      $i = $i + 1;
					   }
					?>
					<br>
					<hr>
					<p><a href="./"># Back</a></p>
				</div>

			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /white -->
	
	
	
<?php include "./includes/footer.php"; ?>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
