<div class="container mt-4">
	<div class="row d-flex">
		<div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 text-left">
			<h3 lass="text-center" style="color:#656565">Employee Section</h3>
		</div>
		<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 text-right">
			<a href="<?php echo base_url(); ?>employee/empadd"><h3><button class="btn btn-success" style="border-radius:0%;"><i class="fas fa-plus-square"></i> Add Employee Records</button></h3></a>
		</div>
	</div>
	<div class="row table-responsive">
		<div class="col-12">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th scope="col" class="text-center">#</th>
						<th scope="col" class="text-center">Fullname <i class="fa fa-user"></i></th>
						<th scope="col" class="text-center">Email <i class="fa fa-at"></i></th>
						<th scope="col" class="text-center" >Contact <i class="fas fa-phone-square-alt"></i></th>
						<th scope="col" class="text-center" >Address <i class="fas fa-map-marker-alt"></i></th>
						<th scope="col" class="text-center">Joined <i class="fas fa-calendar-alt"></i></th>
						<th scope="col" class="text-center">Actions</th>
						
					</tr>
				</thead>
				<tbody>
					<?php 
						$count = 0;
						foreach ($employees as $emp) { 
					?>
					<tr>
						<th scope="row" class="text-center"><?php echo ++$count; ?></th>
						<td class="text-center"><?php echo $emp->name; ?></td>
						<td class="text-center"><?php echo $emp->email; ?></td>
						<td class="text-center"><?php echo $emp->mobile; ?></td>
						<td class="text-center"><?php echo $emp->address; ?></td>
						<td class="text-center"><?php echo $emp->doj; ?></td>
						<td class="text-center"><a href="<?php echo base_url(); ?>employee/empedit/<?php echo $emp->id; ?>"><button class="btn btn-success" style="border-radius:60px;"><i class="fas fa-pencil-alt"></i></button></a>
						<a href="<?php echo base_url(); ?>employee/empdelete/<?php echo $emp->id; ?>"><button class="btn btn-danger" style="border-radius:60px;"><i class="fas fa-trash"></i></button></a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>