<?php $this->load->view('front/obj/header'); ?>
<body>
<?php $this->load->view('front/obj/navbar'); ?>

  
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
            
             <?php foreach ($getProductDetail as $row): ?>
    <div class="col-xs-6 col-sm-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Order Product</h3>
            </div>
            <div class="panel-body">
                <h1><?php echo $row->name; ?></h1>
                
                Code : <?php echo $row->id; ?><br />
                Price : <?php echo 'Rp. '.number_format($row->price, 0, ',', '.'); ?><br />
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">How To Order</h3>
            </div>
            <div class="panel-body">
                <h4>Berikut ini adalah cara prosedur pemesanan lewat sms</h4>
                <hr />
                <ol>
                    <li>Sms code barang yang akan dipesan dan alamat lengkap ke 0812-5302-4526.</li>
                    <li>Anda akan menerima balasan jumlah transfer dan keterangan lainnya.</li>
                    <li>Transfer ke rek. kami dengan detail nomer rekening dibawah ini.</li>
                    <li>Setelah transfer, segera konfirmasi dan sertakan alamat kirim melalui sms.</li>
                    <li>Barang akan dikirim via JNE. no. resi pengiriman akan disms kepada semua pemesan/penerima.</li>
                </ol>
                <br />
                <h4>Berikut ini adalah cara prosedur pembelian langsung ke toko / showroom (COD)</h4>
                <hr />
                <ol>
                    <li>Langsung datang ke showroom yang berlokasi di Jl. KH. Abul Hasan Gang 2 NO.35 RT 14 Samarinda (Belakang Apotik Murni)</li>
                    <li>Jam buka kami adalah setiap hari Senin – Jumat pk.09.00 – pk. 15.00 dan Sabtu – Minggu pk. 10.00-14.00, kami buka setiap hari</li>
                    <li>Kami menerima pembayaran cash, debit, ataupun kartu kredit dari segala macam bank di Indonesia</li>
                </ol>
            </div>
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
