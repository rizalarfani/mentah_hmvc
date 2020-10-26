
<!-- DataTables -->
<link
    href="<?php echo base_url()?>assets/adminto/assets/plugins/datatables/dataTables.bootstrap4.min.css"
    rel="stylesheet" type="text/css" />
<link
    href="<?php echo base_url()?>assets/adminto/assets/plugins/datatables/buttons.bootstrap4.min.css"
    rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link
    href="<?php echo base_url()?>assets/adminto/assets/plugins/datatables/responsive.bootstrap4.min.css"
    rel="stylesheet" type="text/css" />

<!-- END wrapper -->

<!-- Required datatable js -->
<script
    src="<?php echo base_url()?>assets/adminto/assets/plugins/datatables/jquery.dataTables.min.js">
</script>
<script
    src="<?php echo base_url()?>assets/adminto/assets/plugins/datatables/dataTables.bootstrap4.min.js">
</script>

<!--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">-->
	<!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">-->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.bootstrap4.min.css">

	<!--<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>-->
	<!--<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>-->
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap4.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js"></script>
<div class="container-fluid">
    <div class="row">

        <div class="col-lg-12">
            <div class="card-box table-responsive">
                <table class="table" id="datatable">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Nik</th>
                            <th>Jk</th>
                            <th>Kecamatan</th>
                            <th>Kelurahan</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Kontak</th>
                            <th>Produk</th>
                            <th>Jenis Usaha</th>
                            <th>Kategori</th>
                            <th>Nama Produk</th>
                            <th>Jumlah Laku / bulan (unit)</th>
                            <th>Harga Jual</th>
                            <th>Asset</th>
                            <th>Omset</th>
                            <th>Tenaga Kerja (L)</th>
                            <th>Tenaga Kerja (P)</th>
                            <th>Pemasaran</th>
                            <th>Alat</th>
                            <th>Jml. Gas</th>
                            <th>Lembaga Keuangan</th>
                            <th>Izin</th>
                            <th>Qrcode</th>
                            <th>Surveyor</th>
                            <th>Koordinat</th>
                            <th>Foto Produk</th>
                            <th>Date</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                </table>
            </div>

        </div>
    </div>
</div>




<script type="text/javascript">
    $(document).ready(function() {
      var table =  $('#datatable').DataTable({
						"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
						"dom": 'Blfrtip',
        "buttons": [ 'copy', 'excel', 'pdf', 'colvis' ],
            "processing": true,
            "serverSide": true,
            "order": [],

            "ajax": {
                "url": "<?php echo site_url('Belakang/ukm/req_data/'.$this->u3)?>",
                "type": "POST"
            },
            "columnDefs": [{
                "targets": [-1],
                "orderable": false,
            }]
        });
        
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );

    });
</script>

</body>

</html>