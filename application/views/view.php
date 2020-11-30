<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
</head>
<body>
<div class="container">

<div class="card text-white bg-info mb-3" style="max-width: 20rem;">
  <div class="card-header"><?php echo $users->name; ?></div>
  <div class="card-body">
    <h4 class="card-title"><?php echo $users->email; ?></h4>
    <p class="card-text"><?php echo $users->contact_no; ?></p>
  </div>
</div>

</div>
</body>
</html>