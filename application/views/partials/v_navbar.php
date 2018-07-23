<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">MyComp.INC</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url() ?>"><i class="glyphicon glyphicon-home"></i> Home</a></li>
            <li><a href="<?php echo base_url() ?>why/why"><i class="glyphicon glyphicon-tasks"></i> Why</a></li>
            <li><a href="<?php echo base_url() ?>services/services"><i class="glyphicon glyphicon-cog"></i> Services</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-info-sign"></i> Info <span class="caret"></span></a>
              <ul class="dropdown-menu">
              	 <li><a href="<?php echo base_url() ?>about/about"><i class="glyphicon glyphicon-user"></i> About</a></li>
                <li><a href="<?php echo base_url() ?>contact/contact"><i class="glyphicon glyphicon-envelope"></i> Contact</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
