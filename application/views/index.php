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

	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact No</th>
      <th scope="col">Action <a type="button" class="btn btn-primary" href="<?php echo base_url(); ?>add_user">Add User</a></th>
    </tr>
  </thead>
  <tbody>
    <?php $i=01; ?>
    <?php if( !empty($users) ): ?>
      <?php foreach( $users as $users ): ?>
    <tr class="table-dark">
      <th scope="row"><?php echo $i; $i++; ?></th>
      <td><?php echo $users->name; ?></td>
      <td><?php echo $users->email; ?></td>
      <td><?php echo $users->contact_no; ?></td>
      <td>
      	<a href="<?php echo base_url(); ?>view/<?php echo $users->user_id; ?>" type="button" class="btn btn-outline-success">View</a>
      	<a href="<?php echo base_url(); ?>edit/<?php echo $users->user_id; ?>" type="button" class="btn btn-outline-info">Edit</a>
      	<a href="<?php echo base_url(); ?>delete/<?php echo $users->user_id; ?>" type="button" class="btn btn-outline-danger">Delete</a>
      </td>
    </tr>
  <?php endforeach; ?>
    <?php else: ?>
      <tr>
        <td>No Records Found</td>
      </tr>
    <?php endif; ?>
  </tbody>
  </table>
  </div> 


<?php include_once "footer.php"; ?>

