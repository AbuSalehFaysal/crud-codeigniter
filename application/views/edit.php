<?php include_once "header.php"; ?>
<div class="container">

	 <?php if ( $this->session->flashdata('success') ) { ?>
	    <div class="alert alert-success" role="alert">
	    <h6><?php echo $this->session->flashdata('success'); ?></h6></div>
	 <?php } ?>

	 <?php if ( $this->session->flashdata('error') ) { ?>
	    <div class="alert alert-danger" role="alert">
	    <h6><?php echo $this->session->flashdata('error'); ?></h6></div>
	 <?php } ?>




	<form action="<?php echo base_url(); ?>update" method="post">
  <fieldset>
    <legend>User Information Form</legend>
    
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input name="name" type="text" class="form-control" value="<?php echo $users->name; ?>">
      
    </div>

    <div class="form-group">
      
      <input name="user_id" type="hidden" class="form-control" value="<?php echo $users->user_id; ?>">
      
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Email</label>
      <input name="email" type="text" class="form-control" value="<?php echo $users->email; ?>">
      <small class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Contact No</label>
      <input name="contact_no" type="text" class="form-control" value="<?php echo $users->contact_no; ?>">
      <small class="form-text text-muted">We'll never share your contact no with anyone else.</small>
    </div>
	
	<div>
		<tr>
		<button class="btn btn-info btn-lg">Update</button>
		<a type="button" class="btn btn-danger btn-lg" href="<?php echo base_url(); ?>">Cancel</a>
		
		</tr>
	</div>
</form>
</div>
<br>

<?php include_once "footer.php"; ?>