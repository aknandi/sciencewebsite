<!DOCTYPE html>
<html lang="en">

  <?php include "./includes/preamble.php"; ?>

  <body>

  <?php include "./includes/header.php"; ?>


  <?php
     $bloglist = array("genomeediting","gravitationalwaves","leptonuniversality");
     $row = 0;
     foreach ($bloglist as $blog) {
        $file = file_get_contents("./blogs/" . $blog . ".txt");
        $array = split("\n",$file);
     ?>
	<div id="<?= ($row % 2 == 0) ? "grey" : "white"?>">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
				  <div class="newWrapper">
				    <div class="person1" style="float:left; display:inline-block; ">

				      <span style="float:left;width: 30%;"> 
					<a href="blog.php?blog=<?=$blog?>"><img class="img-responsive" src="./blogs/<?=$blog?>.jpg" /></a>           
				      </span>
				      <span style="float:right;width: 65%;">
					<h3><a href="blog.php?blog=<?=$blog?>"><?=$array[0]?></a></h3>
				      </span>
				      
				    </div>
				  </div>
				</div>

			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /grey -->
  
   <?php
   $row = $row + 1;
   }
   ?>
	
  <?php include "./includes/footer.php"; ?>
	
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
