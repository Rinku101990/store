<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Home Banners</h1><br />
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">add Banners</li>
      </ol>
      <div class="row">
        <!-- left column -->
        <div class="col-md-5">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
            <a href="<?php echo base_url('admin/banners');?>" class="btn btn-default btn-sm"><i class="fa fa-eye"></i> View Banners</a>
              <?php $success= $this->session->flashdata('message'); if(!empty($success)) { ?>
                  <?php echo $this->session->flashdata('message'); ?>
              <?php } ?>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" id="formHomeSlider" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="home_slider_title">Slider Title</label>
                  <input type="text" class="form-control" id="home_slider_title" name="home_slider_title" placeholder="Enter Home Slider Name" required="required">
                </div>
                <div class="form-group">
                  <label for="userfile">Slider Images</label>
                  <input type="file" name="userfile" id="userfile">
                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="form-group">
                  <label for="home_slider_desc">Slider Description</label>
                  <textarea class="form-control" id="home_slider_desc" name="home_slider_desc" placeholder="Enter Home Slider Description"></textarea>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Create Banner</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
    </section>
  </div>
  <!-- /.content-wrapper -->