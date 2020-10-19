<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/vendors/DataTables/DataTables/css/jquery.dataTables.min.css">
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
                    <a href="#" style="float: right;" data-target="#modal-add" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Add</a>
                </div>
                <div class="portlet-body">
                    <div class="row">
                    <input type="hidden" class="csrfname_token" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table id="table-prodi" class="table table-hover table-striped table-bordered table-advanced">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Prodi</th>
                                            <th>Nama Prodi</th>
                                            <th>Date Created</th>
                                            <th>Update Created</th>
                                            <th>Actions</th>
                                        </tr>
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
                <?php echo form_open('prodi/create',['class' => "form-body form-horizontal"]); ?>
                    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
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
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>
<script src="<?php echo base_url() ?>assets/admin/vendors/DataTables/DataTables/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
        $('#data-master').addClass('active');
        $('#prodi').addClass('active');
        getDataProdi();

        $('#table-prodi').on('click','tr td #btn_hapus_prodi',function(){
            let kd_prodi = $(this).attr('data-id');
            let csrfName = $('.csrfname_token').attr('name');
            let csrfHash = $('.csrfname_token').val();

            let dataJson = {
                [csrfName]: csrfHash,
                kd_prodi: kd_prodi
            };

            Swal.fire({
                title: 'Apakah yakin?',
                text: "untuk menghapus data prodi!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'iya, saya yakin!'
            }).then((result) => {
                if(result.value){
                   $.ajax({
                        type: "POST",
                        dataType: "JSON",
                        url: "<?php echo base_url('prodi/delete') ?>",
                        data: dataJson,
                        success: function(respon){
                            $('.csrfname_token').val(respon.token);
                            if(respon.status == true){
                                Swal.fire(
                                    'Active!',
                                    respon.messege,
                                    'success'
                                );
                            }else {
                                Swal.fire(
                                    'Active!',
                                    respon.messege,
                                    'success'
                                );
                            }
                            getDataProdi();
                        },error: function(e){
                            Swal.fire(
                                'Active',
                                "Server errors",
                                'errors'
                            );
                        }
                   });
                }
            });
        });

        function getDataProdi(){
            $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
            {
                return {
                    "iStart": oSettings._iDisplayStart,
                    "iEnd": oSettings.fnDisplayEnd(),
                    "iLength": oSettings._iDisplayLength,
                    "iTotal": oSettings.fnRecordsTotal(),
                    "iFilteredTotal": oSettings.fnRecordsDisplay(),
                    "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                    "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                };
            };
            var t = $("#table-prodi").DataTable({
                destroy : true,
                initComplete: function() {
                    var api = this.api();
                        $('#mytable_filter input')
                                .off('.DT')
                                .on('keyup.DT', function(e) {
                                    if (e.keyCode == 13) {
                                        api.search(this.value).draw();
                            }
                        });
                    },
                    oLanguage: {
                        sProcessing: "loading..."
                    },
                    processing: true,
                    serverSide: true,
                    ajax: {"url": "<?= base_url('prodi/request_data') ?>", "type": "POST"},
                    columns: [
                        {
                            "data": "kd_prodi",
                            "orderable": true
                        },
                        {"data": "kd_prodi"},
                        {"data": "nama"},
                        {"data": "date_created"},
                        {"data": "update_created"},
                        {"data": "view"}
                    ],
                    order: [[1,'asc']],
                    rowCallback: function(row, data, iDisplayIndex) {
                        var info = this.fnPagingInfo();
                        var page = info.iPage;
                        var length = info.iLength;
                        var index = page * length + (iDisplayIndex + 1);
                        $('td:eq(0)', row).html(index);
                    }
            });
        }
        
    });
</script>