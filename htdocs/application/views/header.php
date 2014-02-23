<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid" style="background-color:<?php echo $color[0]->bgcolor; ?>">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img id="logo" src="<?php echo base_url();  ?>image/ANIMOODtransparentSmall.png" alt="" style="width: 100%; margin-top: 5px;"/></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" id="nav-info">
            <li><?php echo $idnum; ?></li>
            <li><?php echo $name; ?></li>
            
          </ul>
       <form method = "post" action="search.php" class = "pull-down  navbar-right" id="search-form">
       <div class="input-group" id ="search-box">
       <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
       </form>
        </div>
      </div>
</div>