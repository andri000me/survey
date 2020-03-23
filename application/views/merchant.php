<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li><i class="ace-icon fa fa-home home-icon"></i><a href="<?php echo site_url('dashboard1') ?>">Home</a></li>
		<li class="active">Merchant</li>
	</ul><!-- /.breadcrumb -->
	</div>

	<div class="page-content">
		<div class="page-header">
		<h1>Dashboard<small><i class="ace-icon fa fa-angle-double-right"></i> Master Data Merchant</small></h1>
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
	Data Master Merchant<br/>
	Kolom Pencarian Menggunakan Nama Merchant
	</p>
</div>
</div>

</div>
</div>

<div class="col-xs-12">
<div class="box">
<div class="box-body">
<!-- small box -->

        <button class="btn btn-info" onclick="add_merc()"><i class="glyphicon glyphicon-plus"></i> Add</button>
        <button class="btn btn-success" onclick="reload_table_merc()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
	<br/><br/>
                <table id="table_merc" class="table bg-green-active">
					    <thead>
						    <tr class="bg-fuchsia-active">
						        <th>No</th>
						        <th>Nama</th>
						        <th>Alamat</th>
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
						        <th>Nama</th>
						        <th>Alamat</th>
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
<div class="modal fade" id="modal_merc" role="dialog">
	<div class="modal-dialog">
	<div class="modal-content">

	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<h3 class="modal-title"></h3>
	</div>
            
	<div class="modal-body form">
	<form action="#" id="form_merc" class="form-horizontal">
	<div class="form-body">
	<input type="hidden" value="" name="id"/> 
	

	<div class="form-group">
	<label class="control-label col-md-3">Nama Merchant</label>
		<div class="col-md-9">
	<input type="text" name="nama" id="nama" class="form-control input-sm" Placeholder="Nama Merchant...." required="required">
		<span class="help-block"></span>
		</div>
	</div>

	<div class="form-group">
	<label class="control-label col-md-3">Alamat</label>
		<div class="col-md-9">
	<input type="text" name="alamat" id="alamat" class="form-control input-sm" Placeholder="Alamat Merchant...." required="required">
		<span class="help-block"></span>
		</div>
	</div>

	<div class="form-group">
	<label class="control-label col-md-3">Kota/Kab</label>
		<div class="col-md-6">
 	<input type="text" class="form-control input-sm" id="namakota" name="namakota" placeholder="Nama Kota" readonly="yes"/>
	<input type="hidden" name="idkota" id="idkota" class="form-control input-sm" readonly="yes"> 
		<span class="help-block"></span>
		</div>
	<div class="col-md-3">
	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal2"><i class="glyphicon glyphicon-search"></i>Cari</button>
	</div>
	</div>
	


	</div>
	</form>
	</div>

	<div class="modal-footer">
	<button type="button" id="btnSave" onclick="save_merc()" class="btn btn-primary">Save</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	</div>

	</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modalkat -->

		<!-- Modal -->
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="width:800px">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Lookup Data Kota</h4>
                    </div>
                    <div class="modal-body">
                        <table id="lookup_kota" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama Kota/Kab</th>
									<th>Nama Provinsi</th>
                                </tr>
                            </thead>
                            <tbody>
 
<?php foreach ($kota as $d): ?>
                                    <tr class="pilih2" data-namakota="<?php echo $d['nama_kota']; ?>" data-idkota="<?php echo $d['id']; ?>"data-namaprov="<?php echo $d['namaprov']; ?>">
                                        <td><?php echo $d['id']; ?></td>
                                        <td><?php echo $d['nama_kota']; ?></td>
										<td><?php echo $d['namaprov']; ?></td>
                                    </tr>

<?php endforeach ?>

                            </tbody>
                        </table>  
                    </div>
                </div>
            </div>
        </div>
