	<div class="breadcrumbs ace-save-state" id="breadcrumbs">
		<ul class="breadcrumb">
			<li><i class="ace-icon fa fa-home home-icon"></i><a href="<?php echo site_url('dashboard') ?>">Home</a></li>
			<li class="active">User</li>
		</ul><!-- /.breadcrumb -->
	</div>

	<div class="page-content">
		<div class="page-header">
			<h1>Dashboard<small><i class="ace-icon fa fa-angle-double-right"></i> Master User</small></h1>
		</div><!-- /.page-header -->

		<div class="row">


			<div class="col-lg-12 col-sm-12 col-xs-12 widget-container-col" id="widget-container-col-1">
				<div class="widget-box" id="widget-box-1">

					<div class="widget-header">
						<h5 class="widget-title">Informasi</h5>
						<div class="widget-toolbar">

							<a href="#" data-action="collapse"><i class="ace-icon fa fa-chevron-up"></i></a>

						</div>
					</div>

					<div class="widget-body">
						<div class="widget-main">
							<p class="alert alert-info">
								Data Master User<br />
								Kolom Pencarian Menggunakan Nama, Username
							</p>
						</div>
					</div>

				</div>
			</div>

			<div class="col-xs-12">
				<span class="btn btn-sm btn-primary" data-rel="tooltip" title="Tambah Data" onclick="add_user()"><i class="glyphicon glyphicon-plus"></i> Add</span>
				<span class="btn btn-sm btn-success" data-rel="tooltip" title="Refresh" onclick="reload_table_user()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
			</div>

			<!--table>-->
			<div class="col-xs-12">
				<h3 class="header smaller lighter blue">Data Master</h3>
				<div class="clearfix">
					<div class="pull-right tableTools-container"></div>
				</div>
				<div class="table-header">
					User
				</div>

				<!-- div.table-responsive -->

				<!-- div.dataTables_borderWrap -->

				<div>

					<table id="table_user" class="table table-striped table-bordered table-hover">

						<thead>
							<tr>
								<th class="center">NO</th>
								<th>Nama Petugas</th>
								<th>Username</th>
								<th>Status</th>
								<th>AKSI</th>
							</tr>
						</thead>

						<tbody>
						</tbody>

					</table>
					<!--table>-->

				</div><!-- /.row -->
			</div><!-- /.page-content -->


			<!-- Bootstrap modalkat -->
			<div class="modal fade" id="modal_user" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">

						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h3 class="modal-title"></h3>
						</div>

						<div class="modal-body form">
							<form action="#" id="form_user" class="form-horizontal">
								<div class="form-body">
									<input type="hidden" value="" name="id" />

									<div class="form-group">
										<label class="control-label col-md-3">Nama Petugas</label>
										<div class="col-md-9">
											<input type="text" class="form-control input-sm" id="nama" name="nama" placeholder="Nama" />
											<span class="help-block"></span>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Username</label>
										<div class="col-md-9">
											<input type="text" class="form-control input-sm" id="uname" name="uname" />
											<span class="help-block"></span>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Password</label>
										<div class="col-md-9">
											<input type="password" class="form-control input-sm" id="passb" name="passb" />
											<span class="help-block"></span>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Status</label>
										<div class="col-md-9">
											<div class="radio">
												<label style="font-size: 14px;">
													<input type="radio" name="status" value="0"> Operator
												</label>

												<label style="font-size: 14px;">
													<input type="radio" name="status" value="1"> Administrator
												</label>

												<label style="font-size: 14px;">
													<input type="radio" name="status" value="2"> Surveyor
												</label>

											</div>
											<span class="help-block"></span>
										</div>
									</div>

								</div>
							</form>
						</div>

						<div class="modal-footer">
							<button type="button" id="btn_user" onclick="save_user()" class="btn btn-sm btn-primary">Save</button>
							<button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</button>
						</div>

					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
			<!-- End Bootstrap modalkat -->