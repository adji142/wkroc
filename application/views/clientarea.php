<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AIS SYSTEM! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>Assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>Assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>Assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url();?>Assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>Assets/build/css/custom.min.css" rel="stylesheet">

    <script src="<?php echo base_url();?>Assets/devexpress/jquery.min.js"></script>
    
    <script>window.jQuery || document.write(decodeURIComponent('%3Cscript src="js/jquery.min.js"%3E%3C/script%3E'))</script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/devexpress/dx.common.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/devexpress/dx.light.css" />
    <script src="<?php echo base_url();?>Assets/devexpress/jszip.min.js"></script>
    <script src="<?php echo base_url();?>Assets/devexpress/dx.all.js"></script>
  </head>

  <body class="login">
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Sistem .....</h3>
              </div>

              <div class="title_right">
                <div class="col-md-3 col-sm-3  form-group row pull-right top_search">
                  <div class="input-group">
                    <a href="<?php echo base_url(); ?>Home/login" class="form-control" placeholder="Search for...">Login</a>
                    <!-- <span class="input-group-btn">
                        <button class="btn btn-secondary" type="button">Go!</button>
                    </span> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Isikan data sesuai dengan kebutuhan Anda <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- Smart Wizard -->
                    <p>Silahkan isikan sesuai dengan kebutuhan anda, sistem kami akan merekomendasikan sesuai kebutuhan anda</p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                Step 1<br />
                                <small>Data Diri</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                Step 2<br />
                                <small>Harga</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                Step 3<br />
                                <small>Kondisi Fisik</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                                Step 4<br />
                                <small>Kelengkapan</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-5">
                            <span class="step_no">5</span>
                            <span class="step_descr">
                                Step 5<br />
                                <small>Ukuran Layar</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-6">
                            <span class="step_no">6</span>
                            <span class="step_descr">
                                Step 6<br />
                                <small>Daya Tahan Batrai</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-7">
                            <span class="step_no">7</span>
                            <span class="step_descr">
                                Step 7<br />
                                <small>VGA</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-8">
                            <span class="step_no">8</span>
                            <span class="step_descr">
                                Step 8<br />
                                <small>Processor</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-9">
                            <span class="step_no">9</span>
                            <span class="step_descr">
                                Step 9<br />
                                <small>RAM</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-10">
                            <span class="step_no">10</span>
                            <span class="step_descr">
                                Step 10<br />
                                <small>Kapasitas Penyimpanan</small>
                            </span>
                          </a>
                        </li>
                      </ul>
                      <div id="step-1">
                        <form class="form-horizontal form-label-left">

                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="Nama" name="Nama" required="required" class="form-control  ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Email <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="mail" id="Email" name="Email" required="required" class="form-control ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">No Tlp</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="NoTlp" class="form-control col" type="text" name="NoTlp">
                            </div>
                          </div>
                        </form>

                      </div>
                      <div id="step-2">
                        <h2 class="StepTitle">Step 2 HARGA</h2>
                        <p>Seberapa Penting Harga barang dalam pemilihan Laptop idaman anda ?</p>
                        <br>
                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align"></label>
                          <div class="col-md-6 col-sm-6 ">
                            <div id="gender" class="btn-group" data-toggle="buttons">
                              <label class="btn btn-danger" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="harga" id="harga" value="1" class="join-btn"> &nbsp; Sangat Tidak Penting &nbsp;
                              </label>
                              <label class="btn btn-warning" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="harga" id="harga" value="2" class="join-btn"> &nbsp; Tidak Penting &nbsp;
                              </label>
                              <label class="btn btn-success" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="harga" id="harga" value="3" class="join-btn"> &nbsp; Penting &nbsp;
                              </label>
                              <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="harga" id="harga" value="4" class="join-btn"> Sangat Penting
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="step-3">
                        <h2 class="StepTitle">Step 3 Kondisi Fisik</h2>
                        <p>Seberapa Penting Kondisi Fisik barang dalam pemilihan Laptop idaman anda ?</p>
                        <br>
                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align"></label>
                          <div class="col-md-6 col-sm-6 ">
                            <div id="gender" class="btn-group" data-toggle="buttons">
                              <label class="btn btn-danger" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="KondisiFisik" id="KondisiFisik" value="1" class="join-btn"> &nbsp; Sangat Tidak Penting &nbsp;
                              </label>
                              <label class="btn btn-warning" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="KondisiFisik" id="KondisiFisik" value="2" class="join-btn"> &nbsp; Tidak Penting &nbsp;
                              </label>
                              <label class="btn btn-success" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="KondisiFisik" id="KondisiFisik" value="3" class="join-btn"> &nbsp; Penting &nbsp;
                              </label>
                              <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="KondisiFisik" id="KondisiFisik" value="4" class="join-btn"> Sangat Penting
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="step-4">
                        <h2 class="StepTitle">Step 4 Kelengkapan Unit </h2>
                        <p>Seberapa Penting Kelengkapan Unit barang dalam pemilihan Laptop idaman anda ?</p>
                        <br>
                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align"></label>
                          <div class="col-md-6 col-sm-6 ">
                            <div id="gender" class="btn-group" data-toggle="buttons">
                              <label class="btn btn-danger" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="Kelengkapan" id="Kelengkapan" value="1" class="join-btn"> &nbsp; Sangat Tidak Penting &nbsp;
                              </label>
                              <label class="btn btn-warning" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="Kelengkapan" id="Kelengkapan" value="2" class="join-btn"> &nbsp; Tidak Penting &nbsp;
                              </label>
                              <label class="btn btn-success" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="Kelengkapan" id="Kelengkapan" value="3" class="join-btn"> &nbsp; Penting &nbsp;
                              </label>
                              <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="Kelengkapan" id="Kelengkapan" value="4" class="join-btn"> Sangat Penting
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="step-5">
                        <h2 class="StepTitle">Step 5 Ukuran Layar </h2>
                        <p>Seberapa Penting Ukuran Layar barang dalam pemilihan Laptop idaman anda ?</p>
                        <br>
                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align"></label>
                          <div class="col-md-6 col-sm-6 ">
                            <div id="gender" class="btn-group" data-toggle="buttons">
                              <label class="btn btn-danger" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="UkuranLayar" id="UkuranLayar" value="1" class="join-btn"> &nbsp; Sangat Tidak Penting &nbsp;
                              </label>
                              <label class="btn btn-warning" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="UkuranLayar" id="UkuranLayar" value="2" class="join-btn"> &nbsp; Tidak Penting &nbsp;
                              </label>
                              <label class="btn btn-success" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="UkuranLayar" id="UkuranLayar" value="3" class="join-btn"> &nbsp; Penting &nbsp;
                              </label>
                              <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="UkuranLayar" id="UkuranLayar" value="4" class="join-btn"> Sangat Penting
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="step-6">
                        <h2 class="StepTitle">Step 6 Daya Tahan Batrai </h2>
                        <p>Seberapa Penting Daya Tahan Batrai barang dalam pemilihan Laptop idaman anda ?</p>
                        <br>
                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align"></label>
                          <div class="col-md-6 col-sm-6 ">
                            <div id="gender" class="btn-group" data-toggle="buttons">
                              <label class="btn btn-danger" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="DTBatrai" id="DTBatrai" value="1" class="join-btn"> &nbsp; Sangat Tidak Penting &nbsp;
                              </label>
                              <label class="btn btn-warning" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="DTBatrai" id="DTBatrai" value="2" class="join-btn"> &nbsp; Tidak Penting &nbsp;
                              </label>
                              <label class="btn btn-success" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="DTBatrai" id="DTBatrai" value="3" class="join-btn"> &nbsp; Penting &nbsp;
                              </label>
                              <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="DTBatrai" id="DTBatrai" value="4" class="join-btn"> Sangat Penting
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="step-7">
                        <h2 class="StepTitle">Step 7 VGA </h2>
                        <p>Seberapa Penting VGA (Graphic Card) barang dalam pemilihan Laptop idaman anda ?</p>
                        <br>
                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align"></label>
                          <div class="col-md-6 col-sm-6 ">
                            <div id="gender" class="btn-group" data-toggle="buttons">
                              <label class="btn btn-danger" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="VGA" id="VGA" value="1" class="join-btn"> &nbsp; Sangat Tidak Penting &nbsp;
                              </label>
                              <label class="btn btn-warning" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="VGA" id="VGA" value="2" class="join-btn"> &nbsp; Tidak Penting &nbsp;
                              </label>
                              <label class="btn btn-success" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="VGA" id="VGA" value="3" class="join-btn"> &nbsp; Penting &nbsp;
                              </label>
                              <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="VGA" id="VGA" value="4" class="join-btn"> Sangat Penting
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="step-8">
                        <h2 class="StepTitle">Step 8 Processor </h2>
                        <p>Seberapa Penting Processor barang dalam pemilihan Laptop idaman anda ?</p>
                        <br>
                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align"></label>
                          <div class="col-md-6 col-sm-6 ">
                            <div id="gender" class="btn-group" data-toggle="buttons">
                              <label class="btn btn-danger" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="Processor" id="Processor" value="1" class="join-btn"> &nbsp; Sangat Tidak Penting &nbsp;
                              </label>
                              <label class="btn btn-warning" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="Processor" id="Processor" value="2" class="join-btn"> &nbsp; Tidak Penting &nbsp;
                              </label>
                              <label class="btn btn-success" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="Processor" id="Processor" value="3" class="join-btn"> &nbsp; Penting &nbsp;
                              </label>
                              <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="Processor" id="Processor" value="4" class="join-btn"> Sangat Penting
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="step-9">
                        <h2 class="StepTitle">Step 9 RAM </h2>
                        <p>Seberapa Penting RAM barang dalam pemilihan Laptop idaman anda ?</p>
                        <br>
                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align"></label>
                          <div class="col-md-6 col-sm-6 ">
                            <div id="gender" class="btn-group" data-toggle="buttons">
                              <label class="btn btn-danger" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="RAM" id="RAM" value="1" class="join-btn"> &nbsp; Sangat Tidak Penting &nbsp;
                              </label>
                              <label class="btn btn-warning" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="RAM" id="RAM" value="2" class="join-btn"> &nbsp; Tidak Penting &nbsp;
                              </label>
                              <label class="btn btn-success" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="RAM" id="RAM" value="3" class="join-btn"> &nbsp; Penting &nbsp;
                              </label>
                              <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="RAM" id="RAM" value="4" class="join-btn"> Sangat Penting
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="step-10">
                        <h2 class="StepTitle">Step 10 Kapasitas Penyimpnan </h2>
                        <p>Seberapa Penting Kapasitas Penyimpnan barang dalam pemilihan Laptop idaman anda ?</p>
                        <br>
                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align"></label>
                          <div class="col-md-6 col-sm-6 ">
                            <div id="gender" class="btn-group" data-toggle="buttons">
                              <label class="btn btn-danger" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="KapasitasPenyimpnan" id="KapasitasPenyimpnan" value="1" class="join-btn"> &nbsp; Sangat Tidak Penting &nbsp;
                              </label>
                              <label class="btn btn-warning" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="KapasitasPenyimpnan" id="KapasitasPenyimpnan" value="2" class="join-btn"> &nbsp; Tidak Penting &nbsp;
                              </label>
                              <label class="btn btn-success" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="KapasitasPenyimpnan" id="KapasitasPenyimpnan" value="3" class="join-btn"> &nbsp; Penting &nbsp;
                              </label>
                              <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                <input type="radio" name="KapasitasPenyimpnan" id="KapasitasPenyimpnan" value="4" class="join-btn"> Sangat Penting
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End SmartWizard Content -->
                  </div>
                </div>
              </div>
            </div>

            <div class="Row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Rekomendasi</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="dx-viewport demo-container">
                        <div id="data-grid-demo">
                          <div id="gridContainer">
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
  </body>
</html>
<!-- jQuery -->
<!-- <script src="<?php echo base_url();?>Assets/vendors/jquery/dist/jquery.min.js"></script> -->
<!-- Bootstrap -->
<script src="<?php echo base_url();?>Assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>Assets/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?php echo base_url();?>Assets/vendors/nprogress/nprogress.js"></script>
<!-- jQuery Smart Wizard -->
<script src="<?php echo base_url();?>Assets/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
<!-- Custom Theme Scripts -->
<script src="<?php echo base_url();?>Assets/build/js/custom.min.js"></script>
<script type="text/javascript">
    $(function () {
        // Handle CSRF token
        $.ajaxSetup({
            beforeSend:function(jqXHR, Obj){
                var value = "; " + document.cookie;
                var parts = value.split("; csrf_cookie_token=");
                if(parts.length == 2)
                Obj.data += '&csrf_token='+parts.pop().split(";").shift();
            }
        });
        $(document).ready(function () {
            $.ajax({
                type: "post",
                url: "<?=base_url()?>C_Proses/GetHasilUji",
                data: {'Email':''},
                dataType: "json",
                success: function (response2) {
                  bindGrid(response2.data);
                }
              });
        });
        $('.buttonFinish').click(function () {
          // alert();
          var Nama                = $('#Nama').val();
          var Email               = $('#Email').val();
          var NoTlp               = $('#NoTlp').val();

          var harga               = $("input[name='harga']:checked").val();
          var KondisiFisik        = $("input[name='KondisiFisik']:checked").val();
          var Kelengkapan         = $("input[name='Kelengkapan']:checked").val();
          var UkuranLayar         = $("input[name='UkuranLayar']:checked").val();
          var DTBatrai            = $("input[name='DTBatrai']:checked").val();
          var VGA                 = $("input[name='VGA']:checked").val();
          var Processor           = $("input[name='Processor']:checked").val();
          var RAM                 = $("input[name='RAM']:checked").val();
          var KapasitasPenyimpnan = $("input[name='KapasitasPenyimpnan']:checked").val();

          $.ajax({
            async : false,
            type: "post",
            url: "<?=base_url()?>C_Proses/GenerateProcess",
            data: {Nama:Nama,Email:Email,NoTlp:NoTlp,harga:harga,KondisiFisik:KondisiFisik,Kelengkapan:Kelengkapan,UkuranLayar:UkuranLayar,DTBatrai:DTBatrai,VGA:VGA,Processor:Processor,RAM:RAM,KapasitasPenyimpnan:KapasitasPenyimpnan},
            dataType: "json",
            success: function (response) {
              // bindGrid(response.data);
              $.ajax({
                async : false,
                type: "post",
                url: "<?=base_url()?>C_Merk/Read",
                data: {'id':''},
                dataType: "json",
                success: function (responseMerk) {
                  if (responseMerk.success == true) {
                    $.each(responseMerk.data,function (k,v) {
                      var hasil = parseFloat(v.UT_Harga) + parseFloat(v.UT_KondisiFisik) + parseFloat(v.UT_Kelengkapan) + parseFloat(v.UT_UkuranLayar) + parseFloat(v.UT_DRBatrai) + parseFloat(v.UT_VGA) + parseFloat(v.UT_Processor) + parseFloat(v.UT_RAM) + parseFloat(v.UT_Hardisk);
                      console.log(hasil);
                      $.ajax({
                        type: "post",
                        url: "<?=base_url()?>C_Proses/appendhasil",
                        data: {'NoUji':response.NoUji,Nama:Nama,Email:Email,NoTlp:NoTlp,hasil:hasil,'id':v.id},
                        dataType: "json",
                        success: function (responseAppend) {
                          $.ajax({
                            type: "post",
                            url: "<?=base_url()?>C_Proses/GetHasilUji",
                            data: {'NoUji':response.NoUji},
                            dataType: "json",
                            success: function (responseHasil) {
                              bindGrid(responseHasil.data);
                            }
                          });
                        }
                      });
                    });
                  }
                }
              });
            }
          });
        });
        // end Handle CSRF token
        $('#loginform').submit(function (e) {
            $('#btn_login').text('Tunggu Sebentar...');
            $('#btn_login').attr('disabled',true);

            e.preventDefault();
            var me = $(this);
            // alert(me.serialize());
            $.ajax({
                type: "post",
                url: "<?=base_url()?>Auth/Log_Pro",
                data: me.serialize(),
                dataType: "json",
                success:function (response) {
                    if(response.success == true){
                        location.replace("<?=base_url()?>Home")
                    }
                    else{
                        if(response.message == 'L-01'){
                            Swal.fire({
                              type: 'error',
                              title: 'Oops...',
                              text: 'User dan password tidak sesuai dengan database!',
                              // footer: '<a href>Why do I have this issue?</a>'
                            }).then((result)=>{
                                $('#username').val('');
                                $('#password').val('');
                                $('#btn_login').text('Login');
                                $('#btn_login').attr('disabled',false);
                            });
                        }
                        else if(response.message == 'L-02'){
                            Swal.fire({
                              type: 'error',
                              title: 'Oops...',
                              text: 'User tidak di temukan!',
                              footer: '<a href>Why do I have this issue?</a>'
                            }).then((result)=>{
                                $('#username').val('');
                                $('#password').val('');
                                $('#btn_login').text('Login');
                                $('#btn_login').attr('disabled',false);
                            });
                        }
                        else{
                            Swal.fire({
                              type: 'error',
                              title: 'Oops...',
                              text: 'Undefine Error Contact your system administrator!',
                              footer: '<a href>Why do I have this issue?</a>'
                            }).then((result)=>{
                                $('#username').val('');
                                $('#password').val('');
                                $('#btn_login').text('Login');
                                $('#btn_login').attr('disabled',false);
                            });
                        }
                    }
                }
            });
        });

    function bindGrid(data) {

      $("#gridContainer").dxDataGrid({
        allowColumnResizing: true,
            dataSource: data,
            keyExpr: "id",
            showBorders: true,
            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,
            showBorders: true,
            paging: {
                enabled: false
            },
            editing: {
                mode: "row",
                // allowAdding:true,
                // allowUpdating: true,
                // allowDeleting: true,
                texts: {
                    confirmDeleteMessage: ''  
                }
            },
            searchPanel: {
                visible: true,
                width: 240,
                placeholder: "Search..."
            },
            export: {
                enabled: true,
                fileName: "Daftar Jenis Usaha"
            },
            columns: [
                {
                    dataField: "Rank",
                    caption: "#",
                    allowEditing:false,
                    visible : false
                },
                {
                    dataField: "Merk",
                    caption: "Merk Laptop",
                    allowEditing:false
                },
                {
                    dataField: "Hasil",
                    caption: "Bobot",
                    allowEditing:false
                }
                // {
                //     dataField: "FileItem",
                //     caption: "Action",
                //     allowEditing:false,
                //     cellTemplate: function(cellElement, cellInfo) {
                //         var LinkAccess = "<button id = "+cellInfo.data.id+" class='badge badge-primary fullspek'>Spesifikasi</button>";
                //         cellElement.append(LinkAccess);
                //     }
                //   },
            ],
            onEditingStart: function(e) {
                // GetData(e.data.id);
            },
            onInitNewRow: function(e) {
                // logEvent("InitNewRow");
                $('#modal_').modal('show');
            },
            onRowInserting: function(e) {
                // logEvent("RowInserting");
            },
            onRowInserted: function(e) {
                // logEvent("RowInserted");
                // alert('');
                // console.log(e.data.onhand);
                // var index = e.row.rowIndex;
            },
            onRowUpdating: function(e) {
                // logEvent("RowUpdating");
                
            },
            onRowUpdated: function(e) {
                // logEvent(e);
            },
            onRowRemoving: function(e) {
              id = e.data.id;
              Swal.fire({
                title: 'Apakah anda yakin?',
                text: "anda akan menghapus data di baris ini !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
              }).then((result) => {
                if (result.value) {
                  var table = 'app_setting';
                  var field = 'id';
                  var value = id;

                  $.ajax({
                      type    :'post',
                      url     : '<?=base_url()?>C_Alternatif/CRUD',
                      data    : {'id':id,'formtype':'delete'},
                      dataType: 'json',
                      success : function (response) {
                        if(response.success == true){
                          Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                      ).then((result)=>{
                            location.reload();
                          });
                        }
                        else{
                          Swal.fire({
                            type: 'error',
                            title: 'Woops...',
                            text: response.message,
                            // footer: '<a href>Why do I have this issue?</a>'
                          }).then((result)=>{
                            location.reload();
                          });
                        }
                      }
                    });
                  
                }
                else{
                  location.reload();
                }
              })
            },
            onRowRemoved: function(e) {
              // console.log(e);
            },
        onEditorPrepared: function (e) {
          // console.log(e);
        }
        });

        // add dx-toolbar-after
        // $('.dx-toolbar-after').append('Tambah Alat untuk di pinjam ');
    }
    });
</script>