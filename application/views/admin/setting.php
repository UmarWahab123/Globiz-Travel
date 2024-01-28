<div class="container">
  <div class="row">
    <div class="col-md-12">

      <?php if($this->session->flashdata('alert')){ ?>
        <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <i class="glyphicon glyphicon-check "></i> <?php echo $this->session->flashdata('alert'); ?>
        </div>
      <?php } ?>

      <ol class="breadcrumb">
        <li><a href="admin">Home</a></li>
        <li class="active">Setting</li>        
      </ol>

      <div class="panel panel-primary">
          <div class="panel-heading">
            <h2 class="panel-title"> Edit Setting</h2>
          </div>  
          <div class="panel-body">
            <form class="form" action="admin/setting" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-2 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Logo</label>
                  <label for="logo_img">
                    <img src="uploads/<?php echo !empty($setting->logo) ? $setting->logo : 'avatar.jpg' ?>" class="img-thumbnail" id="logo" style="width:150px;height: 110px;object-fit: cover;" >
                  </label>
                  <input type="file" name="image" id="logo_img" class="form-control hidden" accept="image/*"onchange="document.getElementById('logo').src = window.URL.createObjectURL(this.files[0])">
                </div>
              </div>
              <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Contact</label>
                  <input type="text" name="contact" value="<?php echo isset($setting) ? $setting->contact : set_value('contact'); ?>" class="form-control" placeholder="Enter contact..." required="" autocomplete="off">
                  <?php echo form_error('contact', '<span class="text-danger">','</span>' ); ?>
                </div>
              </div>
              <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" name="address" value="<?php echo isset($setting) ? $setting->address : set_value('address'); ?>" class="form-control" placeholder="Enter address..." required="" autocomplete="off">
                  <?php echo form_error('address', '<span class="text-danger">','</span>' ); ?>
                </div>
              </div>
              <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Whatsapp</label>
                  <input type="text" name="whatsapp" value="<?php echo isset($setting) ? $setting->whatsapp : set_value('whatsapp'); ?>" class="form-control" placeholder="Enter whatsapp..." required="" autocomplete="off">
                  <?php echo form_error('whatsapp', '<span class="text-danger">','</span>' ); ?>
                </div>
              </div>
              <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" value="<?php echo isset($setting) ? $setting->email : set_value('email'); ?>" class="form-control" placeholder="Enter email..." required="" autocomplete="off">
                  <?php echo form_error('email', '<span class="text-danger">','</span>' ); ?>
                </div>
              </div>
              <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Company Email</label>
                  <input type="text" name="company_email" value="<?php echo isset($setting) ? $setting->company_email : set_value('company_email'); ?>" class="form-control" placeholder="Enter company_email..." required="" autocomplete="off">
                  <?php echo form_error('company_email', '<span class="text-danger">','</span>' ); ?>
                </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>About Us</label>
                  <textarea name="about_us" id="summernote" class="form-control" placeholder="Enter Description..." autocomplete="off" required><?php echo isset($setting) ? $setting->about_us : set_value('about_us'); ?></textarea>
                  <?php echo form_error('about_us', '<span class="text-danger">','</span>' ); ?>
                </div>    
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Banner</label>
                  <label for="banner">
                    <img src="uploads/<?php echo !empty($setting->home_banner) ? $setting->home_banner : 'avatar.jpg' ?>" class="img-thumbnail" id="home_banner" style="width:150px;height: 110px;object-fit: cover;display: block;" >
                  </label>
                  <input type="file" name="image" id="banner" class="form-control hidden" accept="image/*"onchange="document.getElementById('home_banner').src = window.URL.createObjectURL(this.files[0])">
                </div>
              </div>
              <div class="col-md-2 col-sm-2 col-xs-12">
                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-success" value="Save">
                </div>
              </div>
            </div>
            </form>
          </div>
      </div> 
      
    </div>
  </div>
</div>
    
    