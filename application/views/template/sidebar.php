<div id="sidebar" class="sidebar responsive ace-save-state">
	<script type="text/javascript">
		try {
			ace.settings.loadState('sidebar')
		} catch (e) {}
	</script>

	<div class="sidebar-shortcuts" id="sidebar-shortcuts">
		<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
			<span class="btn btn-success"></span>
			<span class="btn btn-info"></span>
			<span class="btn btn-warning"></span>
			<span class="btn btn-danger"></span>
		</div>
	</div><!-- /.sidebar-shortcuts -->

	<ul class="nav nav-list">

		<li class="active">
			<a href="<?php echo site_url('dashboard') ?>"><i class="menu-icon fa fa-tachometer"></i><span class="menu-text"> Dashboard </span></a>
			<b class="arrow"></b>
		</li>

		<li class="">
			<a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-briefcase red"></i>
				<span class="menu-text"> Data Master </span>
				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">

				<li class="">
					<a href="<?php echo site_url('provinsi') ?>">
						<i class="menu-icon fa fa-book green"></i>
						Provinsi
					</a>
					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="<?php echo site_url('kota') ?>">
						<i class="menu-icon fa fa-book green"></i>
						Kota
					</a>
					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="<?php echo site_url('merchant') ?>">
						<i class="menu-icon fa fa-book green"></i>
						Merchant
					</a>
					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="<?php echo site_url('master_edc') ?>">
						<i class="menu-icon fa fa-book green"></i>
						EDC
					</a>
					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="<?php echo site_url('data_user') ?>">
						<i class="menu-icon fa fa-users blue"></i>
						User
					</a>
					<b class="arrow"></b>
				</li>

			</ul>
		</li>

		<li class="">
				<a href="<?php echo site_url('test_scanner') ?>">
					<i class="menu-icon fa fa-edit blue"></i>
				Testing</a>
			<b class="arrow"></b>
		</li>

	</ul><!-- /.nav-list -->

	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>
</div>