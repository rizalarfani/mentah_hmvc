<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
        <div class="page-title">Data Prodi</div>
    </div>
    <ol class="breadcrumb page-breadcrumb">
        <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Data master</a>&nbsp;&nbsp;<i
                class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li class="active">Prodi</li>
    </ol>
    <div class="btn btn-blue reportrange hide"><i class="fa fa-calendar"></i>&nbsp;<span></span>&nbsp;report&nbsp;<i
            class="fa fa-angle-down"></i><input type="hidden" name="datestart"/><input type="hidden" name="endstart"/>
    </div>
    <div class="clearfix"></div>
</div>
<div class="page-content">
    <div class="row">
        <div class="col-sm-12">
            <div class="portlet box">
                <div class="portlet-header">
                    <div class="caption">Data Prodi</div>
                    <a href="#" data-target="#modal-add" data-toggle="modal" class="btn btn-red" style="float:right;">Add</a>
                </div>
                <div class="portlet-body">
                    <div class="row mbm">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table id="table_id"
                                        class="table table-hover table-striped table-bordered table-advanced tablesorter display">
                                    <thead>
                                        <tr>
                                            <th width="9%">No</th>
                                            <th>Kode Prodi</th>
                                            <th>Nama Prodi</th>
                                            <th>Actions</th>
                                        </tr>
                                    <tbody id="datables-prodi">

                                    </tbody>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal-add" tabindex="-1" role="dialog" aria-labelledby="modal-header-primary-label" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-header-primary">
                <button type="button" data-dismiss="modal" aria-hidden="true"
                        class="close">&times;</button>
                <h4 id="modal-header-primary-label" class="modal-title">Tambah data prodi</h4></div>
            <div class="modal-body">
                <?php echo form_open('belakang/prodi/tambah',['class' => "form-body form-horizontal"]); ?>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Kode Prodi</label>
                        <div class="col-sm-10 controls mb-5">
                            <input type="text" name="kode_prodi" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama prodi</label>
                        <div class="col-sm-10 controls mb-5">
                            <input type="text" name="nama_prodi" class="form-control"/>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>
<script src="<?php echo base_url()?>assets/admin/vendors/DataTables/media/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url()?>assets/admin/vendors/DataTables/media/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url()?>assets/admin/vendors/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script src="<?php echo base_url()?>assets/admin/js/table-datatables.js"></script>
<script>
    $(document).ready(function(){
        $('#data-master').addClass('active');
        $('#prodi').addClass('active');


    
    });
</script>