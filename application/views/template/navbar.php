<div id="navbar" class="navbar navbar-default ace-save-state">
	<div class="navbar-container ace-save-state" id="navbar-container">
		<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
		<span class="sr-only">Toggle sidebar</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>

		<div class="navbar-header pull-left">
		<a href="<?php echo site_url('dashboard') ?>" class="navbar-brand">
		<small><!-- <img src="#" height="15%"  width="20%"/> -->Surveyor</small>
		</a>
		</div>
<?php if (($this->session->userdata('username'))!=null){ ?>
		<div class="navbar-buttons navbar-header pull-right" role="navigation">
		<ul class="nav ace-nav">
			<li class="light-blue dropdown-modal">
			<a data-toggle="dropdown" href="#" class="dropdown-toggle">
<?php if (($this->session->userdata('foto'))==null){ ?>
	<img class="nav-user-photo" src="<?php echo base_url('ace-master/assets/images/avatars/avatar2.png') ?>" alt="Photo" />

<?php }else{?>
	<img class="nav-user-photo" src="<?php echo $this->session->userdata('foto')?>" alt="Photo" />
<?php } ?>

			<span class="user-info"><small>Welcome,</small><?php echo strtoupper($this->session->userdata('nama')); ?></span>
			<i class="ace-icon fa fa-caret-down"></i>
			</a>

				<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
<!--				<li>
<?php echo '<a href="javascript:void(0)" onclick="edit_pass('."'".$this->session->userdata('id')."'".')"><i class="ace-icon fa fa-user"></i>Profile</a>' ?>
				</li>
-->

				<li class="divider"></li>
				<li><a href="<?php echo site_url('login/logout') ?>"><i class="ace-icon fa fa-power-off"></i>Logout</a></li>
				</ul>
			</li>
		</ul>
		</div>
<?php } ?>


	</div><!-- /.navbar-container -->
</div>
