<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><?php echo $this->tools_model->getShopName(); ?></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php $attributes = array('class' => 'navbar-form navbar-right', 'role' => 'search'); ?>
            <?php echo form_open('product/search', $attributes); ?>
                <div class="form-group">
                    <input type="text" name='keyword' class="form-control" placeholder="Search your product" required="required">
                </div>&nbsp;
                <?php echo form_submit('Search','Search', 'class="btn btn-warning"');?>
            <?php echo form_close(); ?>
        </div><!--/.navbar-collapse -->
    </div>
</div>