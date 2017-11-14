    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
	  <?php
	  //echo '<a class="navbar-brand" href="./"><span class="navbar-brand-p">P</span>articles Of Science</a>';
	  ?>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
	    <li><a href="<?= get_url('') ?>">Home</a></li>
	    <li><a href="<?= get_url('about') ?>">About</a></li>
	    <li><a href="<?= get_url('contact') ?>">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>