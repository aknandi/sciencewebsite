    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
	  <?php
	  if ($number_of_levels == 0) {
	     echo '<a class="navbar-brand" href="./">Science For Everyone</a>';
	  }
	  elseif ($number_of_levels == 1) {
	     echo '<a class="navbar-brand" href="../">Science For Everyone</a>';
	  }
	  elseif ($number_of_levels == 2) {
	     echo '<a class="navbar-brand" href="../../">Science For Everyone</a>';
	  }
	  ?>

        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
	  <?php
	  if ($number_of_levels == 0) {
	     echo '<li><a href="./">Home</a></li>';
	     echo '<li><a href="about">About</a></li>';
	     echo '<li><a href="contact">Contact</a></li>';
	  }
	  elseif ($number_of_levels == 1) {
	     echo '<li><a href="../">Home</a></li>';
	     echo '<li><a href="../about">About</a></li>';
	     echo '<li><a href="../contact">Contact</a></li>';
	  }
	  elseif ($number_of_levels == 2) {
	     echo '<li><a href="../../">Home</a></li>';
	     echo '<li><a href="../../about">About</a></li>';
	     echo '<li><a href="../../contact">Contact</a></li>';
	  }
	  ?>
          </ul>
        </div>
      </div>
    </div>