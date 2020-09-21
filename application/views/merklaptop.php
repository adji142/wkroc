<?php
    require_once(APPPATH."views/parts/Header.php");
    require_once(APPPATH."views/parts/Sidebar.php");
    $active = 'dashboard';
?>
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Merk Laptop</h2>
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
        <!-- /page content -->

        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="modal_">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Merk Laptop</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="post_" data-parsley-validate class="form-horizontal form-label-left">
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Merk<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="text" name="Merk" id="Merk" placeholder="Merk" class="form-control ">
                      <input type="hidden" name="id" id="id">
                      <input type="hidden" name="formtype" id="formtype" value="add">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Harga<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="number" name="Harga" id="Harga" placeholder="Harga" class="form-control " value="0">
                      <input type="hidden" name="N_Harga" id="N_Harga">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kondisi Fisik <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <select id="KondisiFisik" name="KondisiFisik" class="form-control" required>
                        <option value=""></option>
                        <?php
                          $rs = $this->db->query("select distinct kondisilain from tnilai where kodealternatif = 2")->result();
                          foreach ($rs as $key) {
                            echo "<option value = '".$key->kondisilain."'>".$key->kondisilain."</option>";
                          }
                        ?>
                      </select>
                      <input type="hidden" name="N_KondisiFisik" id="N_KondisiFisik">
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kelengkapan Fisik <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <select id="Kelengkapan" name="Kelengkapan" class="form-control" required>
                        <option value=""></option>
                        <?php
                          $rs = $this->db->query("select distinct kondisilain from tnilai where kodealternatif = 3")->result();
                          foreach ($rs as $key) {
                            echo "<option value = '".$key->kondisilain."'>".$key->kondisilain."</option>";
                          }
                        ?>
                      </select>
                      <input type="hidden" name="N_Kelengkapan" id="N_Kelengkapan">
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Ukuran Layar Fisik <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <select id="UkuranLayar" name="UkuranLayar" class="form-control" required>
                        <option value=""></option>
                        <?php
                          $rs = $this->db->query("select distinct kondisilain from tnilai where kodealternatif = 4")->result();
                          foreach ($rs as $key) {
                            echo "<option value = '".$key->kondisilain."'>".$key->kondisilain."</option>";
                          }
                        ?>
                      </select>
                      <input type="hidden" name="N_UkuranLayar" id="N_UkuranLayar">
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Daya Tahan Batrai <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <select id="DTBatrai" name="DTBatrai" class="form-control" required>
                        <option value=""></option>
                        <?php
                          $rs = $this->db->query("select distinct kondisilain from tnilai where kodealternatif = 5")->result();
                          foreach ($rs as $key) {
                            echo "<option value = '".$key->kondisilain."'>".$key->kondisilain."</option>";
                          }
                        ?>
                      </select>
                      <input type="hidden" name="N_DTBatrai" id="N_DTBatrai">
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">VGA <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <select id="VGA" name="VGA" class="form-control" required>
                        <option value=""></option>
                        <?php
                          $rs = $this->db->query("select distinct kondisilain from tnilai where kodealternatif = 6")->result();
                          foreach ($rs as $key) {
                            echo "<option value = '".$key->kondisilain."'>".$key->kondisilain."</option>";
                          }
                        ?>
                      </select>
                      <input type="hidden" name="N_VGA" id="N_VGA">
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Processor <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <select id="Processor" name="Processor" class="form-control" required>
                        <option value=""></option>
                        <?php
                          $rs = $this->db->query("select distinct kondisilain from tnilai where kodealternatif = 7")->result();
                          foreach ($rs as $key) {
                            echo "<option value = '".$key->kondisilain."'>".$key->kondisilain."</option>";
                          }
                        ?>
                      </select>
                      <input type="hidden" name="N_Processor" id="N_Processor">
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">RAM <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <select id="RAM" name="RAM" class="form-control" required>
                        <option value=""></option>
                        <?php
                          $rs = $this->db->query("select distinct kondisilain from tnilai where kodealternatif = 8")->result();
                          foreach ($rs as $key) {
                            echo "<option value = '".$key->kondisilain."'>".$key->kondisilain."</option>";
                          }
                        ?>
                      </select>
                      <input type="hidden" name="N_RAM" id="N_RAM">
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Hardisk <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <select id="Hardisk" name="Hardisk" class="form-control" required>
                        <option value=""></option>
                        <?php
                          $rs = $this->db->query("select distinct kondisilain from tnilai where kodealternatif = 9")->result();
                          foreach ($rs as $key) {
                            echo "<option value = '".$key->kondisilain."'>".$key->kondisilain."</option>";
                          }
                        ?>
                      </select>
                      <input type="hidden" name="N_Hardisk" id="N_Hardisk">
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Stok<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="number" name="Stok" id="Stok" placeholder="Stok" class="form-control " value="0">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Gambar<span class="required">*</span>
                    </label>
                    <input type="file" id="Attachment" name="Attachment" accept=".jpg , .jpeg , .png" />
                    <img src="" id="profile-img-tag" width="200" />
                    <textarea id="images" name="images" ></textarea>
                    <!-- style="display: none;" -->
                  </div>
                  <div class="ite" form-group>
                    <button class="btn btn-primary" id="btn_Save">Save</button>
                  </div>
                </form>
              </div>
              <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
              </div> -->

            </div>
          </div>
        </div>

<!-- <div class="modal hide" id="modal_" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            <div id="title_modal">Tambah Jenis Usaha
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </h5>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" enctype='application/json' id="post_">
          <div class="control-group">
            <label class="control-label">Jenis Usaha</label>
            <div class="controls">
              <input type="text" name="JenisUsaha" id="JenisUsaha" required="" placeholder="Jenis Usaha">
              <input type="hidden" name="id" id="id">
              <input type="hidden" name="formtype" id="formtype" value="add">
            </div>
          </div>
          <button class="btn btn-primary" id="btn_Save">Save</button>
        </form>
      </div>
    </div>
  </div>
</div> -->
<?php
  require_once(APPPATH."views/parts/Footer.php");
?>
<script type="text/javascript">
  $(function () {
        var _URL = window.URL || window.webkitURL;
        $(document).ready(function () {
          var where_field = '';
          var where_value = '';
          var table = 'users';

          $.ajax({
            type: "post",
            url: "<?=base_url()?>C_Merk/read",
            data: {'id':''},
            dataType: "json",
            success: function (response) {
              bindGrid(response.data);
            }
          });
        });
        // getnilai

        $('#Harga').focusout(function () {
          $.ajax({
            async : false,
            type: "post",
            url: "<?=base_url()?>C_Merk/GetBetween",
            data: {'Harga':$('#Harga').val()},
            dataType: "json",
            success: function (response) {
              if (response.success == true) {
                $('#N_Harga').val(response.resultnilai);
              }
            }
          });
        });

        $('#KondisiFisik').change(function () {
          $.ajax({
            async : false,
            type: "post",
            url: "<?=base_url()?>C_Merk/GetNilai",
            data: {'param':$('#KondisiFisik').val()},
            dataType: "json",
            success: function (response) {
              if (response.success == true) {
                if ($('#KondisiFisik').val() != "") {
                  $('#N_KondisiFisik').val(response.resultnilai);
                }
                else{
                  $('#N_KondisiFisik').val("");
                }
              }
            }
          });
        });

        $('#Kelengkapan').change(function () {
          $.ajax({
            async : false,
            type: "post",
            url: "<?=base_url()?>C_Merk/GetNilai",
            data: {'param':$('#Kelengkapan').val()},
            dataType: "json",
            success: function (response) {
              if (response.success == true) {
                if ($('#Kelengkapan').val() != "") {
                  $('#N_Kelengkapan').val(response.resultnilai);
                }
                else{
                  $('#N_Kelengkapan').val("");
                }
              }
            }
          });
        });

        $('#UkuranLayar').change(function () {
          $.ajax({
            async : false,
            type: "post",
            url: "<?=base_url()?>C_Merk/GetNilai",
            data: {'param':$('#UkuranLayar').val()},
            dataType: "json",
            success: function (response) {
              if (response.success == true) {
                if ($('#UkuranLayar').val() != "") {
                  $('#N_UkuranLayar').val(response.resultnilai);
                }
                else{
                  $('#N_UkuranLayar').val("");
                }
              }
            }
          });
        });

        $('#DTBatrai').change(function () {
          $.ajax({
            async : false,
            type: "post",
            url: "<?=base_url()?>C_Merk/GetNilai",
            data: {'param':$('#DTBatrai').val()},
            dataType: "json",
            success: function (response) {
              if (response.success == true) {
                if ($('#DTBatrai').val() != "") {
                  $('#N_DTBatrai').val(response.resultnilai);
                }
                else{
                  $('#N_DTBatrai').val("");
                }
              }
            }
          });
        });

        $('#VGA').change(function () {
          $.ajax({
            async : false,
            type: "post",
            url: "<?=base_url()?>C_Merk/GetNilai",
            data: {'param':$('#VGA').val()},
            dataType: "json",
            success: function (response) {
              if (response.success == true) {
                if ($('#VGA').val() != "") {
                  $('#N_VGA').val(response.resultnilai);
                }
                else{
                  $('#N_VGA').val("");
                }
              }
            }
          });
        });

        $('#Processor').change(function () {
          $.ajax({
            async : false,
            type: "post",
            url: "<?=base_url()?>C_Merk/GetNilai",
            data: {'param':$('#Processor').val()},
            dataType: "json",
            success: function (response) {
              if (response.success == true) {
                if ($('#Processor').val() != "") {
                  $('#N_Processor').val(response.resultnilai);
                }
                else{
                  $('#N_Processor').val("");
                }
              }
            }
          });
        });

        $('#RAM').change(function () {
          $.ajax({
            async : false,
            type: "post",
            url: "<?=base_url()?>C_Merk/GetNilai",
            data: {'param':$('#RAM').val()},
            dataType: "json",
            success: function (response) {
              if (response.success == true) {
                if ($('#RAM').val() != "") {
                  $('#N_RAM').val(response.resultnilai);
                }
                else{
                  $('#N_RAM').val("");
                }
              }
            }
          });
        });

        $('#Hardisk').change(function () {
          $.ajax({
            async : false,
            type: "post",
            url: "<?=base_url()?>C_Merk/GetNilai",
            data: {'param':$('#Hardisk').val()},
            dataType: "json",
            success: function (response) {
              if (response.success == true) {
                if ($('#Hardisk').val() != "") {
                  $('#N_Hardisk').val(response.resultnilai);
                }
                else{
                  $('#N_Hardisk').val("");
                }
              }
            }
          });
        });
        $('#post_').submit(function (e) {
          $('#btn_Save').text('Tunggu Sebentar.....');
          $('#btn_Save').attr('disabled',true);

          e.preventDefault();
          var me = $(this);

          $.ajax({
                type    :'post',
                url     : '<?=base_url()?>C_Merk/CRUD',
                data    : me.serialize(),
                dataType: 'json',
                success : function (response) {
                  if(response.success == true){
                    $('#modal_').modal('toggle');
                    Swal.fire({
                      type: 'success',
                      title: 'Horay..',
                      text: 'Data Berhasil disimpan!',
                      // footer: '<a href>Why do I have this issue?</a>'
                    }).then((result)=>{
                      location.reload();
                    });
                  }
                  else{
                    $('#modal_').modal('toggle');
                    Swal.fire({
                      type: 'error',
                      title: 'Woops...',
                      text: response.message,
                      // footer: '<a href>Why do I have this issue?</a>'
                    }).then((result)=>{
                      $('#modal_').modal('show');
                      $('#btn_Save').text('Save');
                      $('#btn_Save').attr('disabled',false);
                    });
                  }
                }
              });
            });
        $('.close').click(function() {
          location.reload();
        });
        $("#Attachment").change(function(){
          var file = $(this)[0].files[0];
          img = new Image();
          img.src = _URL.createObjectURL(file);
          var imgwidth = 0;
          var imgheight = 0;
          img.onload = function () {
            imgwidth = this.width;
            imgheight = this.height;
            $('#width').val(imgwidth);
            $('#height').val(imgheight);
          }
          readURL(this);
          encodeImagetoBase64(this);
          // alert("Current width=" + imgwidth + ", " + "Original height=" + imgheight);
        });
    function GetData(id) {
      var where_field = 'id';
      var where_value = id;
      var table = 'users';
      $.ajax({
            type: "post",
            url: "<?=base_url()?>C_Merk/read",
            data: {'id':id},
            dataType: "json",
            success: function (response) {
              $.each(response.data,function (k,v) {
                $('#Merk').val(v.Merk);
                $('#Harga').val(v.Harga);
                $('#KondisiFisik').val(v.KondisiFisik).change();
                $('#Kelengkapan').val(v.Kelengkapan).change();
                $('#UkuranLayar').val(v.UkuranLayar).change();
                $('#DTBatrai').val(v.DTBatrai).change();
                $('#VGA').val(v.VGA).change();
                $('#Processor').val(v.Processor).change();
                $('#RAM').val(v.RAM).change();
                $('#Hardisk').val(v.Hardisk).change();
                $('#N_Harga').val(v.N_Harga);
                $('#N_KondisiFisik').val(v.N_KondisiFisik);
                $('#N_Kelengkapan').val(v.N_Kelengkapan);
                $('#N_UkuranLayar').val(v.N_UkuranLayar);
                $('#N_DTBatrai').val(v.N_DTBatrai);
                $('#N_VGA').val(v.N_VGA);
                $('#N_Processor').val(v.N_Processor);
                $('#N_RAM').val(v.N_RAM);
                $('#N_Hardisk').val(v.N_Hardisk);
                $('#Stok').val(v.Stok);
                $('#images').val(v.images);

                $('#id').val(v.id);
                $('#formtype').val("edit");

                $('#modal_').modal('show');
              });
            }
          });
    }
    function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
            
          reader.onload = function (e) {
              $('#profile-img-tag').attr('src', e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
        }
      }
    function encodeImagetoBase64(element) {
      $('#images').val('');
        var file = element.files[0];
        var reader = new FileReader();
        reader.onloadend = function() {
          // $(".link").attr("href",reader.result);
          // $(".link").text(reader.result);
          $('#images').val(reader.result);
        }
        reader.readAsDataURL(file);
    }
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
                allowAdding:true,
                allowUpdating: true,
                allowDeleting: true,
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
                    dataField: "id",
                    caption: "#",
                    allowEditing:false
                },
                {
                    dataField: "Merk",
                    caption: "Merk",
                    allowEditing:false
                },
                {
                    dataField: "Stok",
                    caption: "Stok",
                    allowEditing:false
                },
                {
                    dataField: "Harga",
                    caption: "Harga",
                    allowEditing:false
                },
                {
                    dataField: "KondisiFisik",
                    caption: "Kondisi Fisik",
                    allowEditing:false
                },
                {
                    dataField: "Kelengkapan",
                    caption: "Kelengkapan",
                    allowEditing:false
                },
                {
                    dataField: "UkuranLayar",
                    caption: "Ukuran Layar",
                    allowEditing:false
                },
                {
                    dataField: "DTBatrai",
                    caption: "Daya Tahan Batrai",
                    allowEditing:false
                },
                {
                    dataField: "VGA",
                    caption: "VGA",
                    allowEditing:false
                },
                {
                    dataField: "Processor",
                    caption: "Processor",
                    allowEditing:false
                },
                {
                    dataField: "RAM",
                    caption: "RAM",
                    allowEditing:false
                },
                {
                    dataField: "Hardisk",
                    caption: "Hardisk",
                    allowEditing:false
                },
            ],
            onEditingStart: function(e) {
                GetData(e.data.id);
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
                      url     : '<?=base_url()?>C_Merk/CRUD',
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