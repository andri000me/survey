<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login Page</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<meta name="google-site-verification" content="OGaL8SsTex_CnNlzpV_htTAqJi1YZlsNrpVGRLHxVY8">
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url('ace-master/assets/css/bootstrap.min.css') ?>" />
		<link rel="stylesheet" href="<?php echo base_url('ace-master/assets/font-awesome/4.5.0/css/font-awesome.min.css') ?>" />

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url('ace-master/assets/css/fonts.googleapis.com.css') ?>" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url('ace-master/assets/css/ace.min.css') ?>"/>

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url('ace-master/assets/css/ace-rtl.min.css') ?>" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

<body class="login-layout">
<div class="main-container">
<div class="main-content">
<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
		<div class="login-container">

			<div class="center">
			<h1 class="blue" id="id-company-text"> BANK</h1>
			<h1><!--<img src="<?php echo base_url('ace-master/assets/images/gallery/logo3.png') ?>" height="50%"  width="10%"/>-->
			<span class="white" id="id-text2"> </span><span class="red"> </span>
			</h1>

			
			</div>

			<div class="space-6"></div>

			<div class="position-relative">
				<div id="login-box" class="login-box visible widget-box no-border">
				<div class="widget-body">

				<div class="widget-main">
					<h4 class="header blue lighter bigger">
					<i class="ace-icon fa fa-coffee green"></i>
					Please Enter Your Information
					</h4>

				<div class="space-6"></div>

				<form action="#" id="form_login" enctype="multipart/form-data">

				<label class="block clearfix">
				<span class="block input-icon input-icon-right">
				<input type="text" class="form-control" name="username" id="username" placeholder="Username" />
				<i class="ace-icon fa fa-user"></i>
				</span>
				</label>

				<label class="block clearfix">
				<span class="block input-icon input-icon-right">
				<input type="password" class="form-control" name="password" id="password" placeholder="Password" />
				<i class="ace-icon fa fa-lock"></i>
				</span>
				</label>

				<div class="space"></div>

				<div class="clearfix">
				<label class="inline">
				<input type="checkbox" class="ace" />
				<span class="lbl"> Remember Me</span>
				</label>

<button type="button" id="btnLogin" onclick="login()" class="width-35 pull-right btn btn-sm btn-primary"><i class="ace-icon fa fa-key"></i><span class="bigger-110">Sign In</span></button>

				</div>

				<div class="space-4"></div>

				</form>



				</div><!-- /.widget-main -->

				<div class="toolbar clearfix">
				<div>
				<a href="https://miladiyyah.id/" target="_blank" class="forgot-password-link">@dispenda 2020</a>
				</div>


				</div>


				</div><!-- /.widget-body -->
				</div><!-- /.login-box -->

		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.main-content -->
</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?php echo base_url('ace-master/assets/js/jquery-2.1.4.min.js') ?>"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<!--		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url('ace-master/assets/js/jquery.mobile.custom.min.js') ?>"+"<"+"/script>");
		</script>
-->

		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='ace-master/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>


		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>

<script type="text/javascript">
function login()
{
    $('#btnLogin').text('loging in...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;
        // Get form
        var form = $('#form_login')[0];
        var data = new FormData(form);

        url = "<?php echo site_url('login/ajax_login')?>";
    $.ajax({
        url : url,
        type: "POST",
        enctype: 'multipart/form-data',
	data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
        dataType: "JSON",
        success: function(data)
        {

 	if (data.status===false) {
		swal({
		  title: "Error!",
		  text: (data.kliru),//"Error GTK!",
		  icon: "warning",
		});

	}else{
		window.location=data.url;

		swal({
			title: "Good job!",
			text: (data.kliru),//"Error GTK!",
			icon: "success",
			timer: 3000,
			showConfirmButton: true
		});



            }

            $('#btnLogin').text('Sign In'); //change button text
            $('#btnLogin').attr('disabled',false); //set button enable 


        }
    });
}

</script>

<!-- Global site tag (gtag.js) - Google Analytics
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-105340081-16"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-105340081-16');
</script>

<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="1c2cd79c-98ef-4802-a64c-870661ff6269";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

-->

</body>
</html>
