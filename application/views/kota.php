<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li><i class="ace-icon fa fa-home home-icon"></i><a href="<?php echo site_url('dashboard') ?>">Home</a></li>
		<li class="active">Kota / Kabupaten</li>
	</ul><!-- /.breadcrumb -->
	</div>

	<div class="page-content">
		<div class="page-header">
		<h1>Dashboard<small><i class="ace-icon fa fa-angle-double-right"></i> Master Data Kota / Kabupaten</small></h1>
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
	Data Master Kota/Kabupaten<br/>
	Kolom Pencarian Menggunakan Nama Kota / Kabupaten
	</p>
</div>
</div>

</div>
</div>

<div class="col-xs-12">
<div class="box">
<div class="box-body">
<!-- small box -->

        <button class="btn btn-info" onclick="add_kota()"><i class="glyphicon glyphicon-plus"></i> Add</button>
        <button class="btn btn-success" onclick="reload_table_kota()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
	<br/><br/>
                <table id="table_kota" class="table bg-green-active">
					    <thead>
						    <tr class="bg-fuchsia-active">
						        <th>No</th>
						        <th>Kota/Kabupaten</th>
						        <th>Provinsi</th>
						        <th>AKSI</th>
						    </tr>
					    </thead>
					<tbody>
					</tbody>
					<tfoot>
						    <tr class="bg-fuchsia-active">
						        <th>No</th>
						        <th>Kota/Kabupaten</th>
						        <th>Provinsi</th>
						        <th>AKSI</th>
						    </tr>
					</tfoot>
					</table>
	</div>
	</div>
	</div>
        <!-- /.col -->

<!-- Bootstrap modalkat -->
<div class="modal fade" id="modal_kota" role="dialog">
	<div class="modal-dialog">
	<div class="modal-content">

	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<h3 class="modal-title"></h3>
	</div>
            
	<div class="modal-body form">
	<form action="#" id="form_kota" class="form-horizontal">
	<div class="form-body">
	<input type="hidden" value="" name="id"/> 
	
	<div class="form-group">
	<label class="control-label col-md-3">Provinsi</label>
		<div class="col-md-6">
 	<input type="text" class="form-control input-sm" id="namaprov" name="namaprov" placeholder="Nama Provinsi" readonly="yes"/>
	<input type="hidden" name="idprov" id="idprov" class="form-control input-sm" readonly="yes"> 
		<span class="help-block"></span>
		</div>
	<div class="col-md-3">
	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal1"><i class="glyphicon glyphicon-search"></i>Cari</button>
	</div>
	</div>
	
	<div class="form-group">
	<label class="control-label col-md-3">Nama Kota/Kabupaten</label>
		<div class="col-md-9">
	<input type="text" name="nama" id="nama" class="form-control input-sm" Placeholder="Nama Kota/Kab...." required="required">
		<span class="help-block"></span>
		</div>
	</div>
	


	</div>
	</form>
	</div>

	<div class="modal-footer">
	<button type="button" id="btnSave" onclick="save_kota()" class="btn btn-primary">Save</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	</div>

	</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modalkat -->

			<!-- Modal -->
        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="width:800px">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Lookup Data Provinsi</h4>
                    </div>
                    <div class="modal-body">
                        <table id="lookup_prov" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama Provinsi</th>
                                </tr>
                            </thead>
                            <tbody>
 
<?php foreach ($prov as $k): ?>
                                    <tr class="pilih1" data-namaprov="<?php echo $k['namaprov']; ?>" data-idprov="<?php echo $k['id']; ?>">
                                        <td><?php echo $k['id']; ?></td>
                                        <td><?php echo $k['namaprov']; ?></td>
                                    </tr>
									
<?php endforeach ?>

                            </tbody>
                        </table>  
                    </div>
                </div>
            </div>
        </div>
