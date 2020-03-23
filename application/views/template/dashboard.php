<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager 
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KDGVN9V');</script>
<!-- End Google Tag Manager -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Dashboard</title>

    <meta name="description" content="Aplikasi Surveyor" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="author" content="Miladiyyah">
    <meta name="keyword" content="payment, gateway, dompet, pulsa, info, informasi, software, software house, komputer, probolinggo, komputer probolinggo, web, cctv, hardware, laptop, netbook, aplikasi">

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?php echo base_url('ace-master/assets/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('ace-master/assets/font-awesome/4.5.0/css/font-awesome.min.css') ?>" />

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="<?php echo base_url('ace-master/assets/css/jquery-ui.custom.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('ace-master/assets/css/chosen.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('ace-master/assets/css/colorbox.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('ace-master/assets/css/select2.min.css') ?>" />
    <!-- text fonts
		<link rel="stylesheet" href="<?php echo base_url('ace-master/assets/css/fonts.googleapis.com.css') ?>" />-->

    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo base_url('ace-master/assets/css/ace.min.css') ?>" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
    <link rel="stylesheet" href="<?php echo base_url('ace-master/assets/css/ace-skins.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('ace-master/assets/css/ace-rtl.min.css') ?>" />

    <!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="<?php echo base_url('ace-master/assets/js/ace-extra.min.js') ?>"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('adminlte/plugins/datatables/dataTables.bootstrap.css') ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.3/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css">




    <!-- Morris charts -->
    <link rel="stylesheet" href="<?php echo base_url('adminlte/plugins/morris/morris.css'); ?>">

    <!-- datepicker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-datepicker/css/datepicker.css'); ?>">

</head>

<body class="no-skin">

    <?php $this->load->view('template/navbar'); ?>


    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
            try {
                ace.settings.loadState('main-container')
            } catch (e) {}
        </script>


        <?php $this->load->view('template/sidebar'); ?>



        <div class="main-content">
            <div class="main-content-inner">
                <?php echo $main_view; ?>
            </div>
        </div><!-- /.main-content -->

        <div class="footer">
            <div class="footer-inner">
                <div class="footer-content">
                    <span class="action-buttons">
                        <a href="#"><i class="ace-icon fa fa-coffee light-blue bigger-150"></i></a>
                    </span>
                    <span class="bigger-120">Aplikasi.<span class="blue bolder">Surveyor</span> &copy; 2020</span>
                    <span class="action-buttons">
                        <a href="#"><i class="ace-icon fa fa-coffee light-blue bigger-150"></i></a>
                    </span>
                </div>
            </div>
        </div>
        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>

        <!-- Bootstrap profil -->
        <div class="modal fade" id="modal_pass" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title">Data Profile</h3>
                    </div>

                    <div class="modal-body form">
                        <form action="#" id="form_pass" enctype="multipart/form-data" class="form-horizontal">
                            <input type="hidden" value="" name="id" />
                            <div class="form-body">

                                <div id="pesan"></div>

                                <input type="hidden" value="" name="id_pass" />

                                <div class="form-group">
                                    <label class="control-label col-md-3">Nama Petugas</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control input-sm" id="namag" name="namag" placeholder="Nama" />
                                        <span class="help-block"></span>
                                    </div>

                                </div>


                                <div class="form-group">
                                    <label class="control-label col-md-3">Username</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control input-sm" id="usernameg" name="usernameg" />
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" name="passg" id="passg" class="form-control input-sm" Placeholder="Password...." required="required">
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">Password Konfirmasi</label>
                                    <div class="col-md-9">
                                        <input type="password" name="passlg" id="passlg" class="form-control input-sm" Placeholder="Password...." required="required">
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control input-sm" id="email_mitra" name="email_mitra" />
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">No HP</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control input-sm" id="nohp_mitra" name="nohp_mitra" />
                                        <span class="help-block"></span>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="control-label col-md-3">Foto Profile</label>
                                    <div class="col-md-9">
                                        <input type="hidden" class="form-control" id="iddoc" name="iddoc">
                                        <span class="label label-danger"> *.jpg/*.png (Max. 2MB, Minimal. 160x160 pixel) </span>
                                        <input type="file" name="user_filefoto" id="user_filefoto" size="100" />
                                        <span class="help-block"></span>
                                    </div>
                                </div>


                            </div>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" id="btn_pass" onclick="save_pass()" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- End Bootstrap profile -->


        <!--</div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script src="<?php echo base_url('ace-master/assets/js/jquery-2.1.4.min.js') ?>"></script>

        <!-- <![endif]-->

        <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
        <!--		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url('ace-master/assets/js/jquery.mobile.custom.min.js') ?>'>"+"<"+"/script>");
		</script>
-->
        <script type="text/javascript">
            if ('ontouchstart' in document.documentElement) document.write("<script src='ace-master/assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        </script>


        <script src="<?php echo base_url('ace-master/assets/js/bootstrap.min.js') ?>"></script>
        <!-- ace scripts -->
        <script src="<?php echo base_url('ace-master/assets/js/ace-elements.min.js') ?>"></script>
        <script src="<?php echo base_url('ace-master/assets/js/ace.min.js') ?>"></script>

        <!-- page specific plugin scripts -->
        <script src="<?php echo base_url('ace-master/assets/js/jquery.colorbox.min.js') ?>"></script>

        <!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->

        <!-- page specific plugin scripts -->
        <script src="<?php echo base_url('ace-master/assets/js/jquery.dataTables.min.js') ?>"></script>
        <script src="<?php echo base_url('ace-master/assets/js/jquery.dataTables.bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url('ace-master/assets/js/dataTables.buttons.min.js') ?>"></script>
        <script src="<?php echo base_url('ace-master/assets/js/select2.min.js') ?>"></script>
        <script src="<?php echo base_url('ace-master/assets/js/buttons.flash.min.js') ?>"></script>
        <script src="<?php echo base_url('ace-master/assets/js/buttons.html5.min.js') ?>"></script>
        <script src="<?php echo base_url('ace-master/assets/js/buttons.print.min.js') ?>"></script>
        <script src="<?php echo base_url('ace-master/assets/js/buttons.colVis.min.js') ?>"></script>
        <!--		<script src="<?php echo base_url('ace-master/assets/js/dataTables.select.min.js') ?>"></script>-->
        <script src="<?php echo base_url('ace-master/assets/js/spinbox.min.js') ?>"></script>


        <script src="<?php echo base_url('ace-master/assets/js/jquery-ui.custom.min.js') ?>"></script>
        <script src="<?php echo base_url('ace-master/assets/js/jquery.ui.touch-punch.min.js') ?>"></script>
        <script src="<?php echo base_url('ace-master/assets/js/chosen.jquery.min.js') ?>"></script>

        <script src="<?php echo base_url('ace-master/assets/js/jquery.easypiechart.min.js') ?>"></script>
        <script src="<?php echo base_url('ace-master/assets/js/jquery.sparkline.index.min.js') ?>"></script>
        <script src="<?php echo base_url('ace-master/assets/js/jquery.flot.min.js') ?>"></script>
        <script src="<?php echo base_url('ace-master/assets/js/jquery.flot.pie.min.js') ?>"></script>
        <script src="<?php echo base_url('ace-master/assets/js/jquery.flot.resize.min.js') ?>"></script>

        <script src="<?php echo base_url('ace-master/assets/js/bootbox.js') ?>"></script>


        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- DataTables -->
        <!--<script src="https://code.jquery.com/jquery-3.3.1.js"></script>--->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
        <!--<script src="<?php echo base_url('adminlte/plugins/datatables/dataTables.bootstrap.min.js') ?>"></script>-->
        <script src="https://cdn.datatables.net/rowreorder/1.2.3/js/dataTables.rowReorder.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
        <!-- Morris.js charts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo base_url('adminlte/plugins/morris/morris.min.js') ?>"></script>
        <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>

        <!-- datepicker -->
        <script src="<?php echo base_url('assets/bootstrap-datepicker/js/bootstrap-datepicker.js'); ?>"></script>
        <!-- ! -->

        <script type="text/javascript">
            $('[data-rel=tooltip]').tooltip();
            $('[data-rel=popover]').popover({
                html: true
            });
            $('#modal-wizard-container').ace_wizard();
            $('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
        </script>

        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function($) {
                var $overflow = '';
                var colorbox_params = {
                    rel: 'colorbox',
                    reposition: true,
                    scalePhotos: true,
                    scrolling: false,
                    previous: '<i class="ace-icon fa fa-arrow-left"></i>',
                    next: '<i class="ace-icon fa fa-arrow-right"></i>',
                    close: '&times;',
                    current: '{current} of {total}',
                    maxWidth: '100%',
                    maxHeight: '100%',
                    onOpen: function() {
                        $overflow = document.body.style.overflow;
                        document.body.style.overflow = 'hidden';
                    },
                    onClosed: function() {
                        document.body.style.overflow = $overflow;
                    },
                    onComplete: function() {
                        $.colorbox.resize();
                    }
                };

                $('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
                $("#cboxLoadingGraphic").html("<i class='ace-icon fa fa-spinner orange fa-spin'></i>"); //let's add a custom loading icon
                $('.select2').css('width', '200px').select2({
                    allowClear: true
                })
                $('#spinner1').ace_spinner({
                    value: 0,
                    min: 0,
                    max: 100,
                    step: 1,
                    btn_up_class: 'btn-info',
                    btn_down_class: 'btn-info'
                })

                $(document).one('ajaxloadstart.page', function(e) {
                    $('#colorbox, #cboxOverlay').remove();
                    $('[class*=select2]').remove();
                });


                $('#myTab a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                    //if($(e.target).attr('href') == "#home") doSomethingNow();
                })

            })
        </script>

        <!--<script type="text/javascript">
$(function () {
	CKEDITOR.replace('ckeditor');
});
</script>
-->

        <script type="text/javascript">
            jQuery(function($) {

                if (!ace.vars['touch']) {
                    $('.chosen-select').chosen({
                        allow_single_deselect: true
                    });
                    //resize the chosen on window resize
                    $(window)
                        .off('resize.chosen')

                        .on('resize.chosen', function() {
                            $('.chosen-select').each(function() {
                                var $this = $(this);
                                $this.next().css({
                                    'width': $this.parent().width()
                                });
                            })
                        }).trigger('resize.chosen');

                    //resize chosen on sidebar collapse/expand
                    $(document).on('settings.ace.chosen', function(e, event_name, event_val) {
                        if (event_name != 'sidebar_collapsed') return;
                        $('.chosen-select').each(function() {
                            var $this = $(this);
                            $this.next().css({
                                'width': $this.parent().width()
                            });
                        })
                    });


                }

            });
        </script>

        <script>
            $('#datepicker').datepicker({
                format: "yyyy-mm-dd",
                autoclose: true
            });
        </script>

        <!-- Data Logs -->
        <script type="text/javascript">
            var table_datalogs;
            $(document).ready(function() {

                //datatables
                table = $('#table_datalogs').DataTable({

                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "order": [], //Initial no order.
                    "rowReorder": {
                        "selector": "td:nth-child(2)"
                    },
                    "responsive": true,
                    // Load data for the table's content from an Ajax source
                    "ajax": {
                        "url": "<?php echo site_url('data_logs/ajax_list') ?>",
                        "type": "POST"

                    },

                    //Set column definition initialisation properties.
                    "columnDefs": [

                        //            { "responsivePriority": 1, "targets": [ 0 ] },
                        //            { "responsivePriority": 2, "targets": [ 2 ] },
                        //            { "responsivePriority": 3, "targets": [ 8 ] },

                        {
                            "targets": [-1], //last column
                            "orderable": false, //set not orderable
                        },
                    ],

                });

            });

            function reload_table_datalogs() {
                $('#table_datalogs').DataTable().ajax.reload();
            }
        </script>

        <script type="text/javascript">
            $(document).on('click', '.pilih1', function(e) {
                document.getElementById("namaprov").value = $(this).attr('data-namaprov');
                document.getElementById("idprov").value = $(this).attr('data-idprov');
                $('#myModal1').modal('hide');
            });

            //tabel lookup 
            $(function() {
                $("#lookup_prov").dataTable();
            });
        </script>

        <script type="text/javascript">
            $(document).on('click', '.pilih2', function(e) {
                document.getElementById("namakota").value = $(this).attr('data-namakota');
                document.getElementById("idkota").value = $(this).attr('data-idkota');
                $('#myModal2').modal('hide');
            });

            //tabel lookup 
            $(function() {
                $("#lookup_kota").dataTable();
            });
        </script>

        <script>
            $('#myModal1').on('hidden.bs.modal', function(e) {
                $('body').addClass('modal-open');
            });

            $('#myModal2').on('hidden.bs.modal', function(e) {
                $('body').addClass('modal-open');
            });
        </script>

        <!--Master User -->
        <script type="text/javascript">
            var save_user_method; //for save method string
            var table_user;

            $(document).ready(function() {

                //datatables
                table = $('#table_user').DataTable({

                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "order": [], //Initial no order.
                    "rowReorder": {
                        "selector": "td:nth-child(2)"
                    },
                    "responsive": true,
                    // Load data for the table's content from an Ajax source
                    "ajax": {
                        "url": "<?php echo site_url('data_user/ajax_list') ?>",
                        "type": "POST"
                    },

                    //Set column definition initialisation properties.
                    "columnDefs": [

                        //            { "responsivePriority": 1, "targets": [ 0 ] },
                        //          { "responsivePriority": 2, "targets": [ 2 ] },
                        //        { "responsivePriority": 3, "targets": [ 5 ] },
                        {
                            "targets": [-1], //last column
                            "orderable": false, //set not orderable
                        },
                    ],

                });

            });

            function reload_table_user() {

                $('#table_user').DataTable().ajax.reload();

            }

            function add_user() {
                save_user_method = 'add';
                $('#form_user')[0].reset(); // reset form on modals
                $('.form-group').removeClass('has-error'); // clear error class
                $('.help-block').empty(); // clear error string
                $('#modal_user').modal('show'); // show bootstrap modal
                $('.modal-title').text('Add Master User'); // Set Title to Bootstrap modal title
            }

            function save_user() {
                $('#btn_user').text('saving...'); //change button text
                $('#btn_user').attr('disabled', true); //set button disable 
                var url;

                if (save_user_method == 'add') {
                    url = "<?php echo site_url('data_user/ajax_add') ?>";
                } else {
                    url = "<?php echo site_url('data_user/ajax_update') ?>";
                }

                // ajax adding data to database
                $.ajax({
                    url: url,
                    type: "POST",
                    data: $('#form_user').serialize(),
                    dataType: "JSON",
                    success: function(data) {

                        if (data.status === false) {
                            swal({
                                title: "Error!",
                                text: (data.kliru),
                                icon: "warning",
                            });
                            $('#btn_user').text('Save'); //change button text
                            $('#btn_user').attr('disabled', false); //set button enable 
                        } else {
                            $('#modal_user').modal('hide');
                            swal({
                                title: "Good job!",
                                text: (data.kliru),
                                icon: "success",
                            });
                            reload_table_user();

                        }
                        $('#btn_user').text('Save'); //change button text
                        $('#btn_user').attr('disabled', false); //set button enable 


                    }
                });
            }

            function edit_user(id) {
                save_user_method = 'update';
                $('#form_user')[0].reset(); // reset form on modals
                $('.form-group').removeClass('has-error'); // clear error class
                $('.help-block').empty(); // clear error string

                //Ajax Load data from ajax
                $.ajax({
                    url: "<?php echo site_url('data_user/ajax_edit/') ?>/" + id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {
                        //var checked_option_radio = $('input:radio[name=status]:checked').val();

                        $('[name="id"]').val(data.id);
                        $('[name="nama"]').val(data.nama_petugas);
                        $('[name="uname"]').val(data.username);
                        $('[name="uname"]').attr('readonly', 'readonly');
                        $('#modal_user').modal('show'); // show bootstrap modal when complete loaded
                        $('.modal-title').text('Reset Password'); // Set title to Bootstrap modal title

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error get data from ajax');
                    }
                });
            }



            function edit_pass(id) {
                $('#form_pass')[0].reset(); // reset form on modals
                $('.form-group').removeClass('has-error'); // clear error class
                $('.help-block').empty(); // clear error string

                //Ajax Load data from ajax
                $.ajax({
                    url: "<?php echo site_url('user/ajax_editpass') ?>/" + id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {
                        $('[name="id_pass"]').val(data.id);
                        $('[name="namag"]').val(data.nama_petugas);
                        $('[name="usernameg"]').val(data.username);
                        $('[name="email_mitra"]').val(data.email);
                        $('[name="nohp_mitra"]').val(data.nohp);
                        $('[name="usernameg"]').attr('readonly', 'readonly');
                        $('#modal_pass').modal('show'); // show bootstrap modal when complete loaded
                        $('.modal-title').text('Edit Password'); // Set title to Bootstrap modal title
                        swal({
                            title: "Info",
                            text: "Kosongkan Password jika tidak ingin mengganti!",
                            icon: "info",
                        });

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error get data from ajax');
                    }
                });
            }

            function save_pass() {
                $('#btn_pass').text('Saving...'); //change button text
                $('#btn_pass').attr('disabled', true); //set button disable 
                var url;
                var form1 = $('#form_pass')[0];
                var data = new FormData(form1);
                url = "<?php echo site_url('user/ajax_updatepass') ?>";



                // ajax adding data to database
                $.ajax({
                    url: url,
                    type: "POST",
                    enctype: 'multipart/form-data',
                    data: data,
                    processData: false,
                    contentType: false,
                    cache: false,
                    timeout: 600000,
                    dataType: "JSON",
                    success: function(data) {

                        if (data.status === false) {
                            swal({
                                title: "Error!",
                                text: (data.kliru), //"Error GTK!",
                                icon: "warning",
                            });
                            $('#btn_pass').text('Save'); //change button text
                            $('#btn_pass').attr('disabled', false); //set button enable 

                        } else {
                            $('#modal_pass').modal('hide');
                            swal({
                                title: "Good job!",
                                text: (data.kliru), //"Error GTK!",
                                icon: "success",
                            });

                        }

                        $('#btn_pass').text('Save'); //change button text
                        $('#btn_pass').attr('disabled', false); //set button enable 


                    }
                });
            }
        </script>
        <!--Master User -->

        <!--Master EDC -->
        <script type="text/javascript">
            var save_edc_method; //for save method string
            var table_edc;

            $(document).ready(function() {

                //datatables
                table = $('#table_edc').DataTable({

                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "order": [], //Initial no order.
                    "rowReorder": {
                        "selector": "td:nth-child(2)"
                    },
                    "responsive": true,
                    // Load data for the table's content from an Ajax source
                    "ajax": {
                        "url": "<?php echo site_url('master_edc/ajax_list') ?>",
                        "type": "POST"
                    },

                    //Set column definition initialisation properties.
                    "columnDefs": [

                        //            { "responsivePriority": 1, "targets": [ 0 ] },
                        //          { "responsivePriority": 2, "targets": [ 2 ] },
                        //        { "responsivePriority": 3, "targets": [ 5 ] },
                        {
                            "targets": [-1], //last column
                            "orderable": false, //set not orderable
                        },
                    ],

                });

                $('#btn-filterus').click(function() { //button filter event click
                    reload_table_prov(); //just reload table
                });
                $('#btn-resetus').click(function() { //button reset event click
                    $('#form-filterus')[0].reset();
                    reload_table_prov(); //just reload table
                });
            });

            function reload_table_edc() {
                $('#table_edc').DataTable().ajax.reload();
            }

            function add_edc() {
                save_edc_method = 'add';
                $('#form_edc')[0].reset(); // reset form on modals
                $('.form-group').removeClass('has-error'); // clear error class
                $('.help-block').empty(); // clear error string
                $('#modal_edc').modal('show'); // show bootstrap modal
                $('.modal-title').text('Add Master EDC'); // Set Title to Bootstrap modal title
            }

            function save_edc() {
                $('#btn_edc').text('saving...'); //change button text
                $('#btn_edc').attr('disabled', true); //set button disable 
                var url;

                if (save_edc_method == 'add') {
                    url = "<?php echo site_url('master_edc/ajax_add') ?>";
                } else {
                    url = "<?php echo site_url('master_edc/ajax_update') ?>";
                }

                // ajax adding data to database
                $.ajax({
                    url: url,
                    type: "POST",
                    data: $('#form_edc').serialize(),
                    dataType: "JSON",
                    success: function(data) {

                        if (data.status === false) {
                            swal({
                                title: "Error!",
                                text: (data.kliru),
                                icon: "warning",
                            });
                            $('#btn_edc').text('Save'); //change button text
                            $('#btn_edc').attr('disabled', false); //set button enable 
                        } else {
                            $('#modal_edc').modal('hide');
                            swal({
                                title: "Good job!",
                                text: (data.kliru),
                                icon: "success",
                            });
                            reload_table_edc();

                        }
                        $('#btn_edc').text('Save'); //change button text
                        $('#btn_edc').attr('disabled', false); //set button enable 
                    }
                });
            }

            function edit_edc(id) {
                $('#form_edc')[0].reset(); // reset form on modals
                $('.form-group').removeClass('has-error'); // clear error class
                $('.help-block').empty(); // clear error string

                //Ajax Load data from ajax
                $.ajax({
                    url: "<?php echo site_url('master_edc/ajax_edit') ?>/" + id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {
                        $('[name="id"]').val(data.id);
                        $('[name="merk"]').val(data.merk);
                        $('[name="tipe"]').val(data.tipe);
                        $('[name="partnum"]').val(data.part_number);
                        $('[name="snawal"]').val(data.sn_awal);
                        $('[name="snupdate"]').val(data.sn_update);
                        $('[name="crm"]').val(data.crm);
                        $('[name="tid"]').val(data.tid);
                        $('[name="ket2"]').val(data.ket2);
                        $('[name="warna"]').val(data.warna);
                        // $('[name="snupdate"]').attr('readonly', 'readonly');
                        $('#modal_edc').modal('show'); // show bootstrap modal when complete loaded
                        $('.modal-title').text('Edit Master EDC'); // Set title to Bootstrap modal title
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error get data from ajax');
                    }
                });
            }
        </script>
        <!--Master EDC -->

        <!--Master Provinsi -->
        <script type="text/javascript">
            var save_prov_method; //for save method string
            var table_prov;

            $(document).ready(function() {

                //datatables
                table = $('#table_prov').DataTable({

                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "order": [], //Initial no order.
                    "rowReorder": {
                        "selector": "td:nth-child(2)"
                    },
                    "responsive": true,
                    // Load data for the table's content from an Ajax source
                    "ajax": {
                        "url": "<?php echo site_url('provinsi/ajax_list') ?>",
                        "type": "POST"

                    },

                    //Set column definition initialisation properties.
                    "columnDefs": [

                        //            { "responsivePriority": 1, "targets": [ 1 ] },
                        //            { "responsivePriority": 2, "targets": [ 2 ] },

                        {
                            "targets": [-1], //last column
                            "orderable": false, //set not orderable
                        },
                    ],

                });



            });

            function reload_table_prov() {

                $('#table_prov').DataTable().ajax.reload();

            }

            function add_prov() {
                save_prov_method = 'add';
                $('#form_prov')[0].reset(); // reset form on modals
                $('.form-group').removeClass('has-error'); // clear error class
                $('.help-block').empty(); // clear error string
                $('#modal_prov').modal('show'); // show bootstrap modal
                $('.modal-title').text('Add Master Provinsi'); // Set Title to Bootstrap modal title
            }

            function save_prov() {
                $('#btn_prov').text('saving...'); //change button text
                $('#btn_prov').attr('disabled', true); //set button disable 
                var url;

                if (save_prov_method == 'add') {
                    url = "<?php echo site_url('provinsi/ajax_add') ?>";
                } else {
                    url = "<?php echo site_url('provinsi/ajax_update') ?>";
                }

                // ajax adding data to database
                $.ajax({
                    url: url,
                    type: "POST",
                    data: $('#form_prov').serialize(),
                    dataType: "JSON",
                    success: function(data) {

                        if (data.status === false) {
                            swal({
                                title: "Error!",
                                text: (data.kliru),
                                icon: "warning",
                            });
                            $('#btn_prov').text('Save'); //change button text
                            $('#btn_prov').attr('disabled', false); //set button enable 
                        } else {
                            $('#modal_prov').modal('hide');
                            swal({
                                title: "Good job!",
                                text: (data.kliru),
                                icon: "success",
                            });
                            reload_table_prov();

                        }
                        $('#btn_prov').text('Save'); //change button text
                        $('#btn_prov').attr('disabled', false); //set button enable 


                    }
                });
            }

            function edit_prov(id) {
                save_prov_method = 'update';
                $('#form_prov')[0].reset(); // reset form on modals
                $('.form-group').removeClass('has-error'); // clear error class
                $('.help-block').empty(); // clear error string

                //Ajax Load data from ajax
                $.ajax({
                    url: "<?php echo site_url('provinsi/ajax_edit/') ?>/" + id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {
                        //var checked_option_radio = $('input:radio[name=status]:checked').val();

                        $('[name="id"]').val(data.id);
                        $('[name="namaprov"]').val(data.namaprov);
                        $('#modal_prov').modal('show'); // show bootstrap modal when complete loaded
                        $('.modal-title').text('Edit Master Provinsi'); // Set title to Bootstrap modal title
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error get data from ajax');
                    }
                });
            }
        </script>
        <!--Master Provinsi -->

        <!--Master Kota-->
        <script type="text/javascript">
            var save_kota_method; //for save method string
            var table_kota;

            $(document).ready(function() {

                //datatables
                table = $('#table_kota').DataTable({

                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "order": [], //Initial no order.
                    "rowReorder": {
                        "selector": "td:nth-child(2)"
                    },
                    "responsive": true,
                    // Load data for the table's content from an Ajax source
                    "ajax": {
                        "url": "<?php echo site_url('kota/ajax_list') ?>",
                        "type": "POST"

                    },

                    //Set column definition initialisation properties.
                    "columnDefs": [

                        //            { "responsivePriority": 1, "targets": [ 1 ] },
                        //            { "responsivePriority": 2, "targets": [ 2 ] },

                        {
                            "targets": [-1], //last column
                            "orderable": false, //set not orderable
                        },
                    ],

                });
            });

            function reload_table_kota() {
                $('#table_kota').DataTable().ajax.reload();
            }

            function add_kota() {
                save_kota_method = 'add';
                $('#form_kota')[0].reset(); // reset form on modals
                $('.form-group').removeClass('has-error'); // clear error class
                $('.help-block').empty(); // clear error string
                $('#modal_kota').modal('show'); // show bootstrap modal
                $('.modal-title').text('Add Master Kota'); // Set Title to Bootstrap modal title
            }

            function save_kota() {
                $('#btn_kota').text('saving...'); //change button text
                $('#btn_kota').attr('disabled', true); //set button disable 
                var url;

                if (save_kota_method == 'add') {
                    url = "<?php echo site_url('kota/ajax_add') ?>";
                } else {
                    url = "<?php echo site_url('kota/ajax_update') ?>";
                }

                // ajax adding data to database
                $.ajax({
                    url: url,
                    type: "POST",
                    data: $('#form_kota').serialize(),
                    dataType: "JSON",
                    success: function(data) {

                        if (data.status === false) {
                            swal({
                                title: "Error!",
                                text: (data.kliru),
                                icon: "warning",
                            });
                            $('#btn_kota').text('Save'); //change button text
                            $('#btn_kota').attr('disabled', false); //set button enable 
                        } else {
                            $('#modal_kota').modal('hide');
                            swal({
                                title: "Good job!",
                                text: (data.kliru),
                                icon: "success",
                            });
                            reload_table_kota();

                        }
                        $('#btn_kota').text('Save'); //change button text
                        $('#btn_kota').attr('disabled', false); //set button enable 


                    }
                });
            }

            function edit_kota(id) {
                save_kota_method = 'update';
                $('#form_kota')[0].reset(); // reset form on modals
                $('.form-group').removeClass('has-error'); // clear error class
                $('.help-block').empty(); // clear error string

                //Ajax Load data from ajax
                $.ajax({
                    url: "<?php echo site_url('kota/ajax_edit/') ?>/" + id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {
                        //var checked_option_radio = $('input:radio[name=status]:checked').val();

                        $('[name="id"]').val(data.id);
                        $('[name="namaprov"]').val(data.namaprov);
                        $('[name="idprov"]').val(data.id_prov);
                        $('[name="nama"]').val(data.nama_kota);
                        $('#modal_kota').modal('show'); // show bootstrap modal when complete loaded
                        $('.modal-title').text('Edit Master Kota'); // Set title to Bootstrap modal title
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error get data from ajax');
                    }
                });
            }
        </script>
        <!--Master Kota-->

        <!--Master Merchant-->
        <script type="text/javascript">
            var save_merc_method; //for save method string
            var table_merc;

            $(document).ready(function() {

                //datatables
                table = $('#table_merc').DataTable({

                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "order": [], //Initial no order.
                    "rowReorder": {
                        "selector": "td:nth-child(2)"
                    },
                    "responsive": true,
                    // Load data for the table's content from an Ajax source
                    "ajax": {
                        "url": "<?php echo site_url('merchant/ajax_list') ?>",
                        "type": "POST"

                    },

                    //Set column definition initialisation properties.
                    "columnDefs": [

                        //            { "responsivePriority": 1, "targets": [ 1 ] },
                        //            { "responsivePriority": 2, "targets": [ 2 ] },

                        {
                            "targets": [-1], //last column
                            "orderable": false, //set not orderable
                        },
                    ],

                });



            });

            function reload_table_merc() {

                $('#table_merc').DataTable().ajax.reload();

            }

            function add_merc() {
                save_merc_method = 'add';
                $('#form_merc')[0].reset(); // reset form on modals
                $('.form-group').removeClass('has-error'); // clear error class
                $('.help-block').empty(); // clear error string
                $('#modal_merc').modal('show'); // show bootstrap modal
                $('.modal-title').text('Add Master Merchant'); // Set Title to Bootstrap modal title
            }

            function save_merc() {
                $('#btn_merc').text('saving...'); //change button text
                $('#btn_merc').attr('disabled', true); //set button disable 
                var url;

                if (save_merc_method == 'add') {
                    url = "<?php echo site_url('merchant/ajax_add') ?>";
                } else {
                    url = "<?php echo site_url('merchant/ajax_update') ?>";
                }

                // ajax adding data to database
                $.ajax({
                    url: url,
                    type: "POST",
                    data: $('#form_merc').serialize(),
                    dataType: "JSON",
                    success: function(data) {

                        if (data.status === false) {
                            swal({
                                title: "Error!",
                                text: (data.kliru),
                                icon: "warning",
                            });
                            $('#btn_merc').text('Save'); //change button text
                            $('#btn_merc').attr('disabled', false); //set button enable 
                        } else {
                            $('#modal_merc').modal('hide');
                            swal({
                                title: "Good job!",
                                text: (data.kliru),
                                icon: "success",
                            });
                            reload_table_merc();

                        }
                        $('#btn_merc').text('Save'); //change button text
                        $('#btn_merc').attr('disabled', false); //set button enable 


                    }
                });
            }

            function edit_merc(id) {
                save_merc_method = 'update';
                $('#form_merc')[0].reset(); // reset form on modals
                $('.form-group').removeClass('has-error'); // clear error class
                $('.help-block').empty(); // clear error string

                //Ajax Load data from ajax
                $.ajax({
                    url: "<?php echo site_url('merchant/ajax_edit/') ?>/" + id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {
                        //var checked_option_radio = $('input:radio[name=status]:checked').val();

                        $('[name="id"]').val(data.id);
                        $('[name="nama"]').val(data.nama_merc);
                        $('[name="alamat"]').val(data.alamat);
                        $('[name="namakota"]').val(data.nama_kota);
                        $('[name="idkota"]').val(data.idkota);
                        $('#modal_merc').modal('show'); // show bootstrap modal when complete loaded
                        $('.modal-title').text('Edit Master Merchant'); // Set title to Bootstrap modal title
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error get data from ajax');
                    }
                });
            }
        </script>
        <!--Master Merchant-->

</body>

</html>