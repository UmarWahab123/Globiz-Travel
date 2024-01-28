
	<div class="container" style="margin-top: 140px">
	<div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h3 class="text-center"><b><?php echo SITE_TITLE; ?></b></h3>
        	<?php if(!empty($invalid)){ ?>
            	<div class="alert alert-danger">
            		<i class="glyphicon glyphicon-exclamation-sign"></i> Invalid email or password, try again!
            	</div>
        	<?php } ?>

            <div class="panel panel-primary login_panel">
				<div class="panel-heading text-center">
					<h3 class="panel-title text-center">Admin Login</h3>
				</div>
                <div class="panel-body">
                    <form role="form" action="admin/login" method="POST">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Enter E-mail" name="email" type="text" value="<?php echo set_value('email'); ?>" required>
                                <?php echo form_error('email', '<span class="text-danger">','</span>' ); ?>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Enter Password" name="password" type="password" required="">
                                <?php echo form_error('password', '<span class="text-danger">','</span>' ); ?>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-danger btn-block" name="submit" type="submit" value="Login">
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
