
<!DOCTYPE html>
<html lang="en">
<head>

	<?php
	$rootdir="/vms";
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$rootdir";

	?>
<?php include_once("admin_header.php");?>
    <div class="wrapper theme-1-active pimary-color-green">
		<?php include_once("admin_top_menu.php");?>

		<?php include_once("admin_sidebar.php");?>



		<!-- Right Sidebar Backdrop -->
		<div class="right-sidebar-backdrop"></div>
		<!-- /Right Sidebar Backdrop -->


        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid">
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">contact</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#"><span>apps</span></a></li>
						<li class="active"><span>contact list</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->

				<!-- Row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="contact-list">
										<div class="row">
											<aside class="col-lg-2 col-md-4 pr-0">
												<div class="mt-20 mb-20 ml-15 mr-15">
													<a href="#myModal" data-toggle="modal"  title="Compose"    class="btn btn-success btn-block">
													Add new contact
													</a>
													<!-- Modal -->
													<div aria-hidden="true" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
																	<h4 class="modal-title" id="myModalLabel">Add New Contact</h4>
																</div>
																<div class="modal-body">
																	<form class="form-horizontal form-material">
																		<div class="form-group">
																			<div class="col-md-12 mb-20">
																				<input type="text" class="form-control" placeholder="Type name">
																			</div>
																			<div class="col-md-12 mb-20">
																				<input type="text" class="form-control" placeholder="Email">
																			</div>
																			<div class="col-md-12 mb-20">
																				<input type="text" class="form-control" placeholder="Phone">
																			</div>
																			<div class="col-md-12 mb-20">
																				<input type="text" class="form-control" placeholder="Designation">
																			</div>
																			<div class="col-md-12 mb-20">
																				<input type="text" class="form-control" placeholder="Age">
																			</div>
																			<div class="col-md-12 mb-20">
																				<input type="text" class="form-control" placeholder="Date of joining">
																			</div>
																			<div class="col-md-12 mb-20">
																				<input type="text" class="form-control" placeholder="Salary">
																			</div>
																			<div class="col-md-12 mb-20">
																				<div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Contact Image</span>
																					<input type="file" class="upload">
																				</div>
																			</div>
																		</div>
																	</form>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
																	<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
																</div>
															</div>
															<!-- /.modal-content -->
														</div>
														<!-- /.modal-dialog -->
													</div>
													<!-- /.modal -->
												</div>
												<ul class="inbox-nav mb-30">
													<li class="active">
														<a href="#">Work <span class="label label-primary ml-10">12</span></a>
													</li>
													<li>
														<a href="#">design <span class="label label-danger ml-10">20</span></a>
													</li>
													<li>
														<a href="#">family <span class="label label-warning ml-10">2</span></a>
													</li>
													<li>
														<a href="#">friends<span class="label label-info ml-10">30</span></a>
													</li>
													<li>
														<a href="#">office <span class="label label-success ml-10">2</span></a>
													</li>
												</ul>

												<a class="txt-success create-label  pa-15" href="javascript:void(0)" data-toggle="modal" data-target="#myModal_1">+ Create New Label</a>
												<div id="myModal_1" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
																<h5 class="modal-title" id="myModalLabel">Add Lable</h5>
															</div>
															<div class="modal-body">
																<form>
																	<div class="form-group">
																		<label class="control-label mb-10">Name of Label</label>
																		<input type="text" class="form-control" placeholder="Type name">
																	</div>
																	<div class="form-group">
																		<label class="control-label mb-10">Select Number of people</label>
																		<select class="form-control">
																			<option>All Contacts</option>
																			<option>10</option>
																			<option>20</option>
																			<option>30</option>
																			<option>40</option>
																			<option>Custom</option>
																		</select>
																	</div>
																</form>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-success waves-effect" data-dismiss="modal">Save</button>
																<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
															</div>
														</div>
														<!-- /.modal-content -->
													</div>
													<!-- /.modal-dialog -->
												</div>
											</aside>

											<aside class="col-lg-10 col-md-8 pl-0">
												<div class="panel pa-0">
												<div class="panel-wrapper collapse in">
												<div class="panel-body  pa-0">
													<div class="table-responsive mb-30">
														<table id="datable_1" class="table  display table-hover mb-30" data-page-size="10">
															<thead>
																<tr>
																	<th>No</th>
																	<th>Name</th>
																	<th>Email</th>
																	<th>Phone</th>
																	<th>Role</th>
																	<th>Joining date</th>
																	<th>Salery</th>
																	<th>Action</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>1</td>
																	<td><a href="#">Jens Brincker</a></td>
																	<td>jens@gmail.com</td>
																	<td>+123 456 789</td>
																	<td><span class="label label-danger">Designer</span> </td>
																	<td>12-10-2014</td>
																	<td>$1200</td>
																	<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
																</tr>
																<tr>
																	<td>2</td>
																	<td><a href="#">Mark Hay</a></td>
																	<td>markh@gmail.com</td>
																	<td>+234 456 789</td>
																	<td><span class="label label-info">Developer</span> </td>
																	<td>10-09-2014</td>
																	<td>$1800</td>
																	<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
																</tr>
																<tr>
																	<td>3</td>
																	<td><a href="#">Anthony Davie</a></td>
																	<td>nthonyavie@gmail.com</td>
																	<td>+345 456 789</td>
																	<td><span class="label label-success">Accountant</span></td>
																	<td>1-10-2013</td>
																	<td>$2200</td>
																	<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
																</tr>
																<tr>
																	<td>4</td>
																	<td><a href="#">David Perry</a></td>
																	<td>david@gmail.com</td>
																	<td>+456 456 789</td>
																	<td><span class="label label-inverse">HR</span></td>
																	<td>2-10-2016</td>
																	<td>$200</td>
																	<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
																</tr>
																<tr>
																	<td>5</td>
																	<td><a href="#">Alan Gilchrist</a></td>
																	<td>alan@gmail.com</td>
																	<td>+567 456 789</td>
																	<td><span class="label label-danger">Manager</span></td>
																	<td>10-9-2015</td>
																	<td>$1200</td>
																	<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
																</tr>
																<tr>
																	<td>6</td>
																	<td><a href="#">Sue Woodger</a></td>
																	<td>suew@gmail.com</td>
																	<td>+678 456 789</td>
																	<td><span class="label label-warning">Chairman</span></td>
																	<td>10-5-2013</td>
																	<td>$1500</td>
																	<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
																</tr>
																<tr>
																	<td>7</td>
																	<td><a href="#">Barry Croucher</a></td>
																	<td>barry@gmail.com</td>
																	<td>+123 456 789</td>
																	<td><span class="label label-danger">Designer</span></td>
																	<td>05-10-2012</td>
																	<td>$3200</td>
																	<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
																</tr>
																<tr>
																	<td>8</td>
																	<td><a href="#">Ian Vaughn</a></td>
																	<td>ian@gmail.com</td>
																	<td>+234 456 789</td>
																	<td><span class="label label-info">Developer</span></td>
																	<td>11-10-2014</td>
																	<td>$1800</td>
																	<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
																</tr>
																<tr>
																	<td>9</td>
																	<td><a href="#">Serena Fredrick</a></td>
																	<td>serena@gmail.com</td>
																	<td>+345 456 789</td>
																	<td><span class="label label-success">Accountant</span></td>
																	<td>12-5-2016</td>
																	<td>$100</td>
																	<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
																</tr>
																<tr>
																	<td>10</td>
																	<td><a href="#">Tim Gray</a></td>
																	<td>tim@gmail.com</td>
																	<td>+456 456 789</td>
																	<td><span class="label label-inverse">HR</span></td>
																	<td>18-5-2009</td>
																	<td>$4200</td>
																	<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
																</tr>
																<tr>
																	<td>11</td>
																	<td><a href="#">Jeremy Upton</a></td>
																	<td>jeremy@gmail.com</td>
																	<td>+567 456 789</td>
																	<td><span class="label label-danger">Manager</span></td>
																	<td>12-10-2010</td>
																	<td>$5200</td>
																	<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
																</tr>
																<tr>
																	<td>12</td>
																	<td><a href="#">Emily Hick</a></td>
																	<td>emily@gmail.com</td>
																	<td>+123 456 789</td>
																	<td><span class="label label-danger">Designer</span> </td>
																	<td>12-10-2014</td>
																	<td>$1200</td>
																	<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
																</tr>
																<tr>
																	<td>13</td>
																	<td><a href="#">Tom Armitage</a></td>
																	<td>tom@gmail.com</td>
																	<td>+234 456 789</td>
																	<td><span class="label label-info">Developer</span> </td>
																	<td>10-09-2014</td>
																	<td>$1800</td>
																	<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
																</tr>
																<tr>
																	<td>14</td>
																	<td><a href="#">Rhian Davies</a></td>
																	<td>rhian@gmail.com</td>
																	<td>+345 456 789</td>
																	<td><span class="label label-success">Accountant</span></td>
																	<td>1-10-2013</td>
																	<td>$2200</td>
																	<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												</div>
												</div>
											</aside>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
			</div>

			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
						<p>2017 &copy; Philbert. Pampered by Hencework</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->

        </div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

	<!-- JavaScript -->

    <!-- jQuery -->
    <script src="<?= $actual_link;?>/vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= $actual_link;?>/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- wysuhtml5 Plugin JavaScript -->
	<script src="<?= $actual_link;?>/vendors/bower_components/wysihtml5x/dist/wysihtml5x.min.js"></script>

	<script src="<?= $actual_link;?>/vendors/bower_components/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.js"></script>

	<!-- Fancy Dropdown JS -->
	<script src="<?= $actual_link;?>/dist/js/dropdown-bootstrap-extended.js"></script>

	<!-- Bootstrap Wysuhtml5 Init JavaScript -->
	<script src="<?= $actual_link;?>/dist/js/bootstrap-wysuhtml5-data.js"></script>

	<!-- Data table JavaScript -->
	<script src="<?= $actual_link;?>/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="<?= $actual_link;?>/dist/js/dataTables-data.js"></script>

	<!-- Slimscroll JavaScript -->
	<script src="<?= $actual_link;?>/dist/js/jquery.slimscroll.js"></script>

	<!-- Owl JavaScript -->
	<script src="<?= $actual_link;?>/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

	<!-- Switchery JavaScript -->
	<script src="<?= $actual_link;?>/vendors/bower_components/switchery/dist/switchery.min.js"></script>

	<!-- Init JavaScript -->
	<script src="<?= $actual_link;?>/dist/js/init.js"></script>

</body>

</html>
