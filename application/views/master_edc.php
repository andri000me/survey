<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
        <li><i class="ace-icon fa fa-home home-icon"></i><a href="<?php echo site_url('dashboard') ?>">Home</a></li>
        <li class="active">EDC</li>
    </ul><!-- /.breadcrumb -->
</div>

<div class="page-content">
    <div class="page-header">
        <h1>Dashboard<small><i class="ace-icon fa fa-angle-double-right"></i> Master EDC</small></h1>
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
                            Data Master EDC<br />
                            Kolom Pencarian Menggunakan SN Awal, SN Update
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-xs-12">
            <span class="btn btn-sm btn-primary" data-rel="tooltip" title="Tambah Data" onclick="add_edc()"><i class="glyphicon glyphicon-plus"></i> Add</span>
            <span class="btn btn-sm btn-success" data-rel="tooltip" title="Refresh" onclick="reload_table_edc()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
        </div>

        <!--table>-->
        <div class="col-xs-12">
            <h3 class="header smaller lighter blue">Data Master</h3>
            <div class="clearfix">
                <div class="pull-right tableTools-container"></div>
            </div>
            <div class="table-header">
                EDC
            </div>

            <!-- div.table-responsive -->

            <!-- div.dataTables_borderWrap -->

            <div>

                <table id="table_edc" class="table table-striped table-bordered table-hover">

                    <thead>
                        <tr>
                            <th class="center">NO</th>
                            <th>Merk</th>
                            <th>Type</th>
                            <th>Part Number</th>
                            <th>SN Awal</th>
                            <th>SN Update</th>
                            <th>CRM</th>
                            <th>TID</th>
                            <th>Ket2</th>
                            <th>Warna</th>
                            <th class="action">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    </tbody>

                </table>
                <!--table>-->

            </div><!-- /.row -->
        </div><!-- /.page-content -->


        <!-- Bootstrap modalkat -->
        <div class="modal fade" id="modal_edc" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title"></h3>
                    </div>

                    <div class="modal-body form">
                        <form action="#" id="form_edc" class="form-horizontal">
                            <div class="form-body">
                                <input type="hidden" value="" name="id" />

                                <div class="form-group">
                                    <label class="control-label col-md-3">Merk</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control input-sm" id="merk" name="merk" />
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">Type</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control input-sm" id="tipe" name="tipe" />
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">Part Number</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control input-sm" id="partnum" name="partnum" />
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">SN Awal</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control input-sm" id="snawal" name="snawal" />
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">SN Update</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control input-sm" id="snupdate" name="snupdate" />
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">CRM</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control input-sm" id="crm" name="crm" />
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">TID</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control input-sm" id="tid" name="tid" />
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">Ket2</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control input-sm" id="ket2" name="ket2" />
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">Warna</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control input-sm" id="warna" name="warna" />
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" id="btn_edc" onclick="save_edc()" class="btn btn-sm btn-primary">Save</button>
                        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</button>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- End Bootstrap modalkat -->