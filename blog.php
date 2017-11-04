<!DOCTYPE html>
<html lang="en">

<?php include "./includes/preamble.php"; ?>

<head>
<title>Test</title>
</head>
  <body>

<?php include "./includes/header.php"; ?>
	
	<!-- +++++ Post +++++ -->
	<div id="white">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
				        <?php
                                           $file = file_get_contents("./blogs/" . $blogName . ".txt");
                                           $array = explode("\n",$file);
					   echo "<h1>" . $array[0] . "</h1>";
					   echo "<p><bd>" . $array[2] . "</bd></p>";
					   if($number_of_levels == 0) {
					       echo '<p><img class="img-responsive" src="./blogs/' . $blogName . '.jpg" alt=""></p>';
					   }
					   elseif($number_of_levels == 1) {
					       echo '<p><img class="img-responsive" src="../blogs/' . $blogName . '.jpg" alt=""></p>';
					   }
					   elseif($number_of_levels == 2) {
					       echo '<p><img class="img-responsive" src="../../blogs/' . $blogName . '.jpg" alt=""></p>';
					   }					   
                                        ?>
				        <?php
					   //echo "<p><bd>" . $array[4] . "</bd></p>";
					   $file = file_get_contents("./blogs/" . $blogName . ".txt");
					   $array = explode("\n",$file);
					   $i = 0;
					   foreach ($array as $paragraph) {
					      if ($paragraph != "" && $i > 4) {
					         echo "<p>" . $paragraph . "</p>";
					      }
					      $i = $i + 1;
					   }
					?>
					<br>
					<hr>
                                        <?php
					if($number_of_levels == 0) {
                                            echo '<p><a href="./">Back</a></p>';
                                        }
                                        elseif($number_of_levels == 1) {
                                            echo '<p><a href="../">Back</a></p>';
                                        }
                                        elseif($number_of_levels == 2) {
                                            echo '<p><a href="../../">Back</a></p>';
                                        }
					?>
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
