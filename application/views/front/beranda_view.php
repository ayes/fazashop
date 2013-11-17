
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Artist Management System">
    <meta name="author" content="Irfan Mahfudz Guntur - ayes@bsmsite.com">
    <link rel="shortcut icon" href="ivan/favicon.ico">

    <title>Faza Shop</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>template/default/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>template/default/css/ivan.css" rel="stylesheet">
     <link href="<?php echo base_url(); ?>template/default/css/carousel.css" rel="stylesheet">
     <link href="<?php echo base_url(); ?>template/default/css/docs.css" rel="stylesheet">

    
  </head>

  <body>

      
      
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" target="_blank" href="/">Faza Shop</a>
        </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
      
  
      
        </div><!--/.navbar-collapse -->
        
      </div>
    </div>

  
<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php echo base_url(); ?>source/images/s1.jpg">
         
        </div>
        <div class="item">
         <img src="<?php echo base_url(); ?>source/images/s2.jpg">
          
        </div>
        <div class="item">
         <img src="<?php echo base_url(); ?>source/images/s3.jpg">
         
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
    <div class="container">
        <div class="row">
        <div class="col-xs-6 col-md-3">
       <ul class="nav nav-pills nav-stacked">
  <li><a href="#">Home</a></li>
  <li><a href="#">Profile</a></li>
  <li><a href="#">Messages</a></li>
  
</ul>
  </div>    
            
            
            <div class="col-xs-6 col-sm-3">
         
           <div class="pin">
               <div title="<?= 'Personal Computer' ?>" class="well well-sm">
                   <small><?= character_limiter('Personal Computer', 28) ?></small>
           </div>
             <img class="img-rounded" src="<?php echo base_url(); ?>source/images/s4.jpg" width="100%">
             <p>Rp. 1.250.000</p>
             <p class="text-right">
               <button type="button" class="btn btn-default btn-sm">
  <span class="glyphicon glyphicon-eye-open"></span> Detail
</button>
               <button type="button" class="btn btn-default btn-sm">
  <span class="glyphicon glyphicon-shopping-cart"></span> Buy
</button>
           </p> 
                    </div>
            </div>
                    <div class="col-xs-6 col-sm-3">
                       <div class="pin">
               <div title="<?= 'Personal Computer' ?>" class="well well-sm">
                   <small><?= character_limiter('Personal Computer', 28) ?></small>
           </div>
             <img class="img-rounded" src="<?php echo base_url(); ?>source/images/s4.jpg" width="100%">
            <p>Rp. 1.250.000</p>
             <p class="text-right">
                 <button type="button" class="btn btn-default btn-sm">
  <span class="glyphicon glyphicon-eye-open"></span> Detail
</button>
               <button type="button" class="btn btn-default btn-sm">
  <span class="glyphicon glyphicon-shopping-cart"></span> Buy
</button>
           </p> 
                    </div>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                         <div class="pin">
               <div title="<?= 'Personal Computer' ?>" class="well well-sm">
                   <small><?= character_limiter('Personal Computer', 28) ?></small>
           </div>
             <img class="img-rounded" src="<?php echo base_url(); ?>source/images/s4.jpg" width="100%">
            <p>Rp. 1.250.000</p>
             <p class="text-right">
                 <button type="button" class="btn btn-default btn-sm">
  <span class="glyphicon glyphicon-eye-open"></span> Detail
</button>
               <button type="button" class="btn btn-default btn-sm">
  <span class="glyphicon glyphicon-shopping-cart"></span> Buy
</button>
           </p> 
                    </div>
                    </div>
            
            
             
           
            
            
               
            </div>
  

       
        
        
      
         
         <?php $this->load->view('inc/footer'); ?>
</div>
  


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url(); ?>template/default/js/bootstrap.min.js"></script>
  </body>
</html>
