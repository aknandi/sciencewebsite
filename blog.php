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
                                           $file = file_get_contents("./blogs/" . $blogName . ".txt");
                                           $array = explode("\n",$file);
					   $image_url = get_url("./blogs/" . $blogName . ".jpg");
					   if($index != sizeof($bloglisthumanreadable)-1) {
					      $blogNamePrevious = get_url('view') . "/" . $bloglisthumanreadable[$index+1];
					      echo '<span style="float:left;">';
					      echo "<p><a href='$blogNamePrevious'>&laquo; Previous article</a></p>";
					      echo '</span>';
					   }
					   if($index != 0) {
					      $blogNameNext = get_url('view') . "/" . $bloglisthumanreadable[$index-1];
					      echo '<span style="float:right;">';
					      echo "<p><a href='$blogNameNext'>Next article &raquo;</a></p>";
					      echo '</span>';
					   }
                                        ?>
					   <br></br>
					   <hr>
					   <h1><?=$array[0]?></h1>
					   <p><bd><?=$array[2]?></bd></p>
					   <p><img class="img-responsive" src="<?=$image_url?>" alt=""></p>
				        <?php
					   echo "<p><bd>" . $array[4] . "</bd></p>";
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
					<p><a href="<?=get_url('')?>">Back</a></p>
				</div>

			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /white -->
	
	
	
<?php include "./includes/footer.php"; ?>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=get_url('assets/js/bootstrap.min.js')?>"></script>
  </body>
</html>
