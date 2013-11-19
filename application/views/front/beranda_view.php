
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Faza Shop The Online Shopping Experience">
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
          <a class="navbar-brand" target="_blank" href="/"><?php echo $this->tools_model->getShopName(); ?></a>
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
                     <?php foreach ($this->tools_model->getBanners()->result() as $row)  : ?>
          <?php if ($row->id == 1) {
          $item = 'item active';
         } else {
             $item = 'item';
         } ?>
          <div class="<?php echo $item ;?>">
              <img src="<?php echo base_url().'fx-archive/images_banner/thumbs/'.$row->banner ?>">
        </div>
           <?php endforeach; ?>
        
       
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
    <div class="container">
        <div class="row">
        <div class="col-xs-6 col-md-3">
           <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Category</h3>
  </div>
               <div class="panel-body">
              <ul class="nav nav-pills nav-stacked">
   <?php foreach ($getCategory->result() as $row): ?>
<?php if ($this->beranda_model->getCountCategoryProduct($row->id) == 0) { ?>
<?php } else { ?>
<li><a href="<?php echo '/category/index/'.url_title(strtolower($row->category)).'/'.$row->id ;?>"><?php echo $row->category.' <span class="badge pull-right">'.$this->beranda_model->getCountCategoryProduct($row->id).'</span>'; ?></a></li>

   
    
    
    <?php } ?>
<?php endforeach; ?>         
</ul>            
    </div>
           </div>        
            

  

  </div>    
            
             <?php foreach ($getRandomProductsLimit as $row): ?>
            <div class="col-xs-6 col-sm-3">
         
           <div class="pin">
               <div title="<?php echo $row->name ?>" class="well well-sm">
                   <small><?php echo character_limiter($row->name, 28) ?></small>
           </div>
             <img class="img-rounded" src="<?php echo base_url(); ?>fx-archive/images_product/thumbs/<?php echo $row->picture; ?>" width="227px" height="170px">
             <p>Rp. <?php echo $row->price; ?></p>
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
                    
<?php endforeach; ?>              
             
           
            
            
               
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
