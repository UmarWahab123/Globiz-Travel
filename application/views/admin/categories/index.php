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
        <li class="active">Categories</li>        
      </ol>

      <div class="panel panel-primary">
          <div class="panel-heading">
            <h2 class="panel-title"> <?php echo is_null($this->uri->segment('4')) ? 'Add' : 'Edit'; ?> Category</h2>
          </div>  
          <div class="panel-body">
            <form class="form" action="admin/save_category" method="POST">
              <input type="hidden" name="id" value="<?php echo !is_null($this->uri->segment('4')) ? $this->uri->segment('4') : ''; ?>">
            <div class="row">
              <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" value="<?php echo isset($category) ? $category->name : set_value('name'); ?>" class="form-control" placeholder="Enter Category Name..." required="" autocomplete="off">
                  <?php echo form_error('name', '<span class="text-danger">','</span>' ); ?>
                </div>
              </div>
              <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="form-group">
                  <label>Slug</label>
                  <input type="text" name="slug" value="<?php echo isset($category) ? $category->slug : set_value('slug'); ?>" class="form-control" disabled placeholder="Slug Auto Generate" autocomplete="off">
                   <?php echo form_error('slug', '<span class="text-danger">','</span>' ); ?>
                </div>    
              </div>
              <div class="col-md-2 col-sm-2 col-xs-12">
                <div class="form-group" style="margin-top: 24px;">
                  <input type="submit" name="submit" class="btn btn-success" value="<?php echo is_null($this->uri->segment('4')) ? 'Save' : 'Update'; ?>">
                </div>
              </div>
            </div>
            </form>
          </div>
      </div> 
      <div class="table-responsive">
        <table class="table table-bordered" id="list">
          <thead>
            <tr>
              <th>Ser</th>
              <th>Name</th>
              <th>Slug</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

            <?php $count=1; foreach ($categories as $category) { ?>

            <tr>
              <td><?php echo $count++; ?></td>
              <td><?php echo $category->name; ?></td>
              <td><?php echo $category->slug; ?></td>
              <td style="width: 18%">
                <a href="admin/categories/edit/<?php echo $category->id;?>" class="btn btn-info btn-sm">Edit</a> 
                <a href="admin/categories/delete/<?php echo $category->id;?>" class="btn btn-danger btn-sm delete_btn">Delete</a>
              </td>
            </tr>
             <?php  } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
    
    