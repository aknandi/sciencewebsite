
<!DOCTYPE html>
<html lang="en">

<?php include "./includes/preamble.php"; ?>

  <body>

<?php include "./includes/header.php"; ?>

<br></br>
<H1 class="page-title"> <p style="text-align: center;"> Page Not Found </p></H1>


<?php http_response_code(404); ?>

    <!-- Bootstrap core JavaScript                                                                                                                                                                           
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=get_url('assets/js/bootstrap.min.js')?>"></script>
  </body>
</html>

