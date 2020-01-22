<div class="">
    <div class="page-title" style="padding: 8px">
        <div class="title_left">
            <h1><i class="fa fa-cog"></i>  Konfigurasi Perpus</h1>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Perbarui profil perpus</h2>
                    <div class="clearfix"></div>
                </div> 
                <div class="x_content">
                    <div class="row">
                        <?php
                            $announce = $this->session->flashdata('announce');
                            if(!empty($announce)){
                                if($announce == 'Berhasil menyimpan data'){
                                    echo '
                                        <div class="alert alert-success">
                                        '.$announce.'
                                        </div>
                                    ';
                                }else{
                                    echo '
                                        <div class="alert alert-danger">
                                        '.$announce.'
                                        </div>
                                    ';
                                }
                            }
                        ?>
                            <form method="post" action="<?php echo base_url() ?>konfigurasi/simpan" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                <input type="hidden" readonly name="id" value="<?php echo $det->ID_PERPUS ?>">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Perpus
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="namaperpus" value="<?php echo $det->NAMA_P ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat Perpus
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="alamatperpus" value="<?php echo $det->ALAMAT_P ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">About
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="about" value="<?php echo $det->ABOUT ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Deskripsi
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="textarea" name="deskripsi" value="<?php echo $det->DESKRIPSI ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status Paket
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input name="statuspaket" class="form-control col-md-7 col-xs-12" value="<?php echo $det->STATUS_PAKET ?> " readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Gambar
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" name="foto" class="form-control">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <input type="submit" class="btn btn-success" name="submit" value="Simpan">
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
