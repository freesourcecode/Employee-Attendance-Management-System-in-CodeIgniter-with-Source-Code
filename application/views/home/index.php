<div class="container">
	<div class="row pt-4">
		<div class="col"></div>

		<div class="col-10 text-center">
			<img src="<?php echo base_url(); ?>assets/image/lg.png" alt="">
		<h2 style="color:#656565" class="text-center">Employee Attendance Management System</h2>
		</div>

		<div class="col"></div>
	</div>

	<hr>

	<div class="row">
		<div class="col-4">
		<h3 style="color:#656565" class="text-center">Total Employees: <span class="badge badge-warning"><?php include 'empcount.php'?></span></h3>
		</div>

		<div class="col-4">
			<h3 style="color:#656565" class="text-center">Active Employees: <span class="badge badge-warning"><?php include 'actccount.php'?></span></h3>
		</div>

		<div class="col-4">
		<h3 style="color:#656565" class="text-center">In-Active Employees: <span class="badge badge-warning"><?php include 'inactcount.php'?></span></h3>
		</div>
	</div>
	
</div>