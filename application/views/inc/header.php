<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="UTF-8">
	<title>Employee Attendance</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/all.min.css">
</head>
<body style="background-color: skyblue">
	<nav class="navbar navbar-expand-lg navbar-dark bg-info">
		<a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/image/lg.png" width="30" height="30" class="d-inline-block align-top" alt="Logo"> Employee Attendance Management System</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarColor01">
			<ul class="navbar-nav mr-auto">
				<?php if ($this->session->has_userdata("username")) { ?>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>employee/dashboard">Employee Section</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>employee/attendance">Attendance Section</a>
				</li>
				<?php } ?>
			</ul>
			<ul class="navbar-nav align-content-center">
				<?php if ($this->session->has_userdata("username")) { ?>
				<li class="nav-item">					
					<a href="" class="nav-link">
						<img src="<?php echo base_url(); ?>assets/image/admin-icn.png" width="35" class="rounded-circle mr-2" alt="">
					</a>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link"><button class="btn btn-outline-secondary" style="border-radius:0%;"><?php echo $this->session->userdata("username"); ?></button></a>
				</li>
				<?php } ?>
				<li class="nav-item">
					<?php if (!$this->session->has_userdata("username")) { ?>
					<a class="nav-link" href="<?php echo base_url(); ?>user/login"><button class="btn btn-success" style="border-radius:0%;"><i class="fas fa-sign-in-alt"></i> Login</button></a>
					<?php } else { ?>
					<a class="nav-link" href="<?php echo base_url(); ?>user/logout"><button class="btn btn-danger" style="border-radius:0%;"><i class="fas fa-power-off"></i> </button></a>		
					<?php } ?>
				</li>
			</ul>
		</div>
	</nav>
