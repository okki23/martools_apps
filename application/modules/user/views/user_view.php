 
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                 
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Manajemen User
                            </h2>
                            <br>
                            <a href="javascript:void(0);" id="addmodal" class="btn btn-primary waves-effect">  <i class="material-icons">add_circle</i>  Tambah Data </a>
 
                        </div>
                        <div class="body">
                                
                            <div class="table-responsive">
                               <table class="table table-bordered table-striped table-hover js-basic-example" id="example" >
  
                                    <thead>
                                        <tr>
                                           
                                            <th style="width:5%;">Username</th>  
                                            <th style="width:5%;">Nama Pegawai</th>  
                                            <th style="width:10%;">Opsi</th> 
                                        </tr>
                                    </thead> 
                                </table> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         


        </div>
    </section>

   
    <!-- form tambah dan ubah data -->
    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Form Tambah Data</h4>
                        </div>
                        <div class="modal-body">
                              <form method="post" id="user_form" enctype="multipart/form-data">   
                                 
                                    <input type="hidden" name="id" id="id"> 
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="username" id="username" class="form-control" placeholder="Username" />
                                        </div>
                                    </div>
                                    <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="nama_karyawan" id="nama_karyawan" class="form-control" readonly="readonly" >
                                                    <input type="hidden" name="id_karyawan" id="id_karyawan" readonly="readonly">
                                                    
                                                </div>
                                                <span class="input-group-addon">
                                                    <button type="button" onclick="CariKaryawan();" class="btn btn-primary"> Pilih Karyawan... </button>
                                                </span>
                                    </div>           
                                    <div class="form-group">
                                        <div class="form-line">
                                            <span class="label label-danger">* Kosongkan Apabila Tidak Mengganti Password </span>
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" /> 
                                        </div>
                                    </div>
                                 

                                   <button type="button" onclick="Simpan_Data();" class="btn btn-success waves-effect"> <i class="material-icons">save</i> Simpan</button>

                                   <button type="button" name="cancel" id="cancel" class="btn btn-danger waves-effect" onclick="javascript:Bersihkan_Form();" data-dismiss="modal"> <i class="material-icons">clear</i> Batal</button>
                             </form>
                       </div>
                     
                    </div>
                </div>
    </div>

    

    <!-- modal cari karyawan -->
    <div class="modal fade" id="CariKaryawanModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" >Cari Jabatan</h4>
                        </div>
                        <div class="modal-body">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">X Tutup</button>

                                <br>
                                <hr>

                                 <table width="100%" class="table table-bordered table-striped table-hover " id="daftar_karyawan" >
  
                                    <thead>
                                        <tr>  
                                            <th style="width:98%;">NIP </th> 
                                            <th style="width:98%;">Nama </th> 
                                         </tr>
                                          
                                    </thead> 
                                    <tbody id="daftar_karyawan">

                                </tbody>
                                </table> 
                       </div>
                     
                    </div>
                </div>
    </div>

 
 
   <script type="text/javascript">
    
    function CariKaryawan(){
        $("#CariKaryawanModal").modal({backdrop: 'static', keyboard: false,show:true});
    } 
    $('#daftar_karyawan').DataTable( {
            "ajax": "<?php echo base_url(); ?>karyawan/fetch_karyawan"           
    });

    var daftar_karyawan = $('#daftar_karyawan').DataTable();
     
     $('#daftar_karyawan tbody').on('click', 'tr', function () {
         
         var content = daftar_karyawan.row(this).data()
         console.log(content);
         $("#nama_karyawan").val(content[1]);
         $("#id_karyawan").val(content[4]);
         $("#CariKaryawanModal").modal('hide');
     } );
       
     function Ubah_Data(id){
        $("#defaultModalLabel").html("Form Ubah Data");
        $("#defaultModal").modal('show');
 
        $.ajax({
             url:"<?php echo base_url(); ?>user/get_data_edit/"+id,
             type:"GET",
             dataType:"JSON", 
             success:function(result){  
                 $("#defaultModal").modal('show'); 
                 $("#id").val(result.id);
                 $("#username").val(result.username); 
                 $("#id_karyawan").val(result.id_karyawan);
                 $("#nama_karyawan").val(result.nama); 
             }
         });
     }
 
     function Bersihkan_Form(){
        $(':input').val(''); 
     }

     function CariAdminPPPU(){
        $("#ModalCariAdminPPPU").modal({backdrop: 'static', keyboard: false,show:true});
     }

     

     function Hapus_Data(id){
        if(confirm('Anda yakin ingin menghapus data ini?'))
        {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo base_url('user/hapus_data')?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
               
               $('#example').DataTable().ajax.reload(); 
               
                $.notify("Data berhasil dihapus!", {
                    animate: {
                        enter: 'animated fadeInRight',
                        exit: 'animated fadeOutRight'
                    }  
                 },{
                    type: 'success'
                    });
                 
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
   
    }
    }
    
   
    $('.thumbnail').on('click',function(){
        $('.modal-body').empty();
        var title = $(this).parent('a').attr("title");
        $('.modal-title').html(title);
        $($(this).parents('div').html()).appendTo('.modal-body');
        $('#Prev').modal({show:true});
    });
  
    function Simpan_Data(){
        //setting semua data dalam form dijadikan 1 variabel 
         var formData = new FormData($('#user_form')[0]); 

          
         //validasi form sebelum submit ke controller
         var username = $("#username").val();
        
        
          
         if(username == ''){
            alert("Username Belum anda masukkan!");
            $("#username").parents('.form-line').addClass('focused error');
            $("#username").focus();
          
         }else{

            //transaksi dibelakang layar
            $.ajax({
             url:"<?php echo base_url(); ?>user/simpan_data_user",
             type:"POST",
             data:formData,
             contentType:false,  
             processData:false,   
             success:function(result){ 
                
                 $("#defaultModal").modal('hide');
                 $('#example').DataTable().ajax.reload(); 
                 $('#user_form')[0].reset();
                 
                 $.notify("Data berhasil disimpan!", {
                    animate: {
                        enter: 'animated fadeInRight',
                        exit: 'animated fadeOutRight'
                 } 
                 },{
                    type: 'success'
                });
             }
            }); 

         }

    }
     

     $('.datepicker').bootstrapMaterialDatePicker({
        format: 'YYYY-MM-DD',
        clearButton: true,
        weekStart: 1,
        time: false
     });

     
       $(document).ready(function() {
           
        $("#addmodal").on("click",function(){
            $("#defaultModal").modal({backdrop: 'static', keyboard: false,show:true});
            $("#method").val('Add');
            $("#defaultModalLabel").html("Form Tambah Data");
        });
        
         
        $('#example').DataTable( {
            "ajax": "<?php echo base_url(); ?>user/fetch_user" 
        });

       
     
         
      });
  
        
         
    </script>