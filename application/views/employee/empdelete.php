<div class="container mt-4">
	<div class="row d-flex ml-2 text-center">
		<div class="col"></div>

		<div class="col-6">
			<h3 style="color:#656565">Remove Employee's Record</h3>
			<br>
			<h5 style="color:red;">Are you sure you want to remove this data?</h5>
		</div>

		<div class="col"></div>
	</div>
	<?php if ($this->session->flashdata("empdelete")) { ?>
	<div class="row d-flex mt-4 ml-2 alert alert-success">
		<?php echo $this->session->flashdata("empdelete"); ?>
	</div>
	<?php } ?>
	<?php if ($this->session->flashdata("empdeletenot")) { ?>
	<div class="row d-flex mt-4 ml-2 alert alert-danger">
		<?php echo $this->session->flashdata("empdeletenot"); ?>
	</div>
	<?php } ?>
	<div class="row d-flex mt-4 ml-2">
		<div class="col"></div>

		<div class="col-6">
			<?php echo form_open_multipart("employee/empremove"); ?>
			<div class="form-group text-center">
				<b>Name:</b>&nbsp;&nbsp;<?php echo $employee->name; ?>
			</div>
			<div class="form-group text-center">
				<b>Address:</b>&nbsp;&nbsp;<?php echo $employee->address; ?>
			</div>
			<div class="form-group text-center">
				<b>Email:</b>&nbsp;&nbsp;<?php echo $employee->email; ?>
			</div>
			<div class="form-group text-center">
				<b>Mobile:</b>&nbsp;&nbsp;<?php echo $employee->mobile; ?>
			</div>
			<div class="form-group text-center">
				<b>Date of Birth:</b>&nbsp;&nbsp;<?php echo $employee->dob; ?>
			</div>
			<div class="form-group text-center">
				<b>Date of Joining:</b>&nbsp;&nbsp;<?php echo $employee->doj; ?>
			</div>
			<div class="form-group text-center">
				<b>Status:</b>&nbsp;&nbsp;<?php echo $employee->status == '1' ? 'Active' : 'Not Active'; ?>
			</div>
			<div class="form-group text-center">
				<input type="hidden" name="id" value="<?php echo $employee->id; ?>">
				<button type="submit" class="btn btn-danger" style="border-radius: 0%;">Confirm</button>
				<a href="<?php echo base_url(); ?>employee/dashboard" class="btn btn-dark" style="border-radius: 0%;">Go Back</a>
			</div>
			<?php echo form_close(); ?>
		</div>

		<div class="col"></div>
	</div>
</div>
