<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
        <div class="page-title">Akun</div>
    </div>
    <ol class="breadcrumb page-breadcrumb">
        <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i
                class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li class="active">User detail</li>
    </ol>
    <div class="btn btn-blue reportrange hide"><i class="fa fa-calendar"></i>&nbsp;<span></span>&nbsp;report&nbsp;<i
            class="fa fa-angle-down"></i><input type="hidden" name="datestart"/><input type="hidden" name="endstart"/>
    </div>
    <div class="clearfix"></div>
</div>
<div class="page-content">
  <div class="row justify-content-center">
    <div class="col-lg-12">
      <h3 class="text-primary">Detail Akun</h3>
        <ul id="generalTab" class="nav nav-tabs ul-edit responsive">
          <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
          <li><a href="#password" data-toggle="tab">Ganti Password</a></li>
        </ul>
        <div id="generalTabContent" class="tab-content responsive">
          <div id="profile" class="tab-pane fade in active">
            <div class="row justify-content-center">
              <div class="col-sm-4 col">
                <a href="#" class="">
                  <img class="img-thumbnail img-fluid" src="<?php
                    if($a = file_exists('upload/profil/'.$data->foto_adm)){
                      $gambar = base_url('upload/profil/'.$data->foto_adm);
                      } else {
                        $gambar =base_url('assets/admin/images/avatar/avatar5.png');
                      }
                      echo $gambar;?>" alt="foto user" >
                </a>
              </div>
              <div class="col-sm-8 col">
                <h4 class="m-0">
                  <i class="fa fa-user"></i> <?php echo $data->nama_adm;?>
                </h4>
                <hr>
                <div class="form-body form-horizontal">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-9 controls mb-5">
                      <input type="text" class="form-control" value="<?php echo $data->username_adm; ?>" readonly/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Phone</label>
                    <div class="col-sm-9 controls">
                      <input type="text" name="phone" class="form-control" value="<?php echo $data->cp_adm; ?>" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9 controls">
                      <input type="text" name="email" class="form-control" value="<?php echo $data->email_adm; ?>" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat</label>
                    <div class="col-sm-9 controls">
                      <textarea class="form-control" rows="5" name="alamat"><?php echo $data->alamat_adm; ?></textarea>
                    </div>
                  </div>
                </div>
                <button type="button" class=" mt-4 btn btn-block btn btn-secondary float-right btn-info" id="klik">Click To Update</button>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <div id="password" class="tab-pane fade in active">
                
          </div>
        </div>
    </div>
  </div>
</div>
<script>
    $(document).ready(function(){
        $('#akun').addClass('active');
        $('#profil').addClass('active');
    });
</script>