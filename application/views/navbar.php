<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="<?php echo base_url(); ?>Hello">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">      
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>Hello/Programming">Programming</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>Hello/Marketing">Marketing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>Hello/Design">Design</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>Hello/Content">Content</a>
      </li>      
      
    </ul>
    <form class="form-inline my-2 my-lg-0" action="<?php echo base_url(); ?>Hello/Search">
      <?php if(isset($keyword)){ ?>
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="input" value="<?php echo $keyword ?>" autofocus>
      <?php }else{ ?>
 <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="input">
      <?php } ?>
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>