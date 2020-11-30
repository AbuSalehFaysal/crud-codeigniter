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




	<form action="<?php base_url(); ?>user_data" method="post">
  <fieldset>
    <legend>User Information Form</legend>
    
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input name="name" type="text" class="form-control" placeholder="Enter your name here">
      
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Email</label>
      <input name="email" type="text" class="form-control" placeholder="Enter your email here">
      <small class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Contact No</label>
      <input name="contact_no" type="text" class="form-control" placeholder="Enter your contatct no here">
      <small class="form-text text-muted">We'll never share your contact no with anyone else.</small>
    </div>
	
	<div>
		<tr>
		<button class="btn btn-info btn-lg">Submit</button>
		<a type="button" class="btn btn-danger btn-lg" href="<?php echo base_url(); ?>">Cancel</a>
		
		</tr>
	</div>
</form>
</div>
<br>

<?php include_once "footer.php"; ?>