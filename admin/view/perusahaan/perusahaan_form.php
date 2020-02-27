<?php include 'model/perusahaan/perusahaan_edit.php' ?>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profil Toko</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Beranda</a></li>
              <li class="breadcrumb-item active">Profil Toko</li>
            </ol>
          </div>
         </section>


    <section class="content">
      <div class="row">
        <div class="col-12">
       <div class="card card-default">
         <div class="card-header">
           <h3 class="card-title">Profil Toko</h3>
           <!-- <p>Teks Ini akan tampil dan hilang . </p> -->
           <div class="float-right">
           <button onclick = "GFG_Run();" class="btn btn-info btn-sm" id="btnedit"> <i class="fas fa-edit"></i> Edit</button>
          </div>
         </div>

         <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
           <div class="card-body">
             <div class="form-group row">
               <label for="nama_merek" class="col-sm-2 control-label">Nama Toko</label>
               <div class="col-sm-4">
               <input type="hidden" class="form-control" name="id_profil" id="" value="<?php echo $result['id_profil']; ?>"  readonly="true">
                 <input type="text" class="form-control" name="nama" id="" value="<?php echo $result['nama']; ?>"  readonly="true">
               </div>
               <div class="col-sm-6">
                 <input type="text" class="form-control" name="slogan" value="<?php echo $result['slogan']; ?>" readonly="true">
               </div>
             </div>


             <div class="form-group row">
               <label for="nama_merek" class="col-sm-2 control-label">Alamat</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" name="alamat" value="<?php echo $result['alamat']; ?>" readonly="true" >
               </div>
             </div>

             <div class="form-group row">
               <label for="nama_merek" class="col-sm-2 control-label">No Hp</label>
               <div class="col-sm-4">
                 <input type="text" class="form-control" name="no_hp" value="<?php echo $result['no_hp']; ?>" readonly="true" >
               </div>
               <label for="nama_merek" class="col-sm-1 control-label">Email</label>
               <div class="col-sm-4">
                 <input type="text" class="form-control" name="email" value="<?php echo $result['email']; ?>" readonly="true" >
               </div>
             </div>
             

             <div class="form-group row">
               <label for="nama_merek" class="col-sm-2 control-label">Tentang</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" name="detail" value="<?php echo $result['detail']; ?>" readonly="true" >
               </div>
             </div>

            
             <div class="form-group row">
               <label for="" class="col-sm-2 control-label">Foto</label>
               <div class="col-sm-3">
                <img src="upload/toko/<?php echo $result['logo']; ?>"alt="" width="200px">
               </div>

               <div class="col-sm-4"  style="display: none;">
                 <input type="file"  class="form-control" name="logo" value="" id="f_logo">
                 <span >*Biarkan kosong jika tidak mengganti logo</span>
               </div>
             </div>

             <div class="form-group row">
              <div class="col-12">
              <div class="float-right">
                    <button type="button" class="btn btn-default" id="btncancel" name="batal" value="batal"  style="display: none;">Batal</button>
                    <button type="submit" class="btn btn-primary" id="btnshow" name="kirim" value="kirim"  style="display: none;">Simpan</button>
                </div>
              </div>
             </div>

            
           </div>
         </form>
       </div>
       </div>
        </div>
      
 
    </section>
  </div>

  
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script> 

$(function () {
        $("#btnedit").on('click', function () {
          $("#btnedit").hide();
            $("#btnshow").show();
            $("#btncancel").show();

        });
    });

function GFG_Run() { 
  $('input').attr('readonly', false); 
  document.getElementById("GFG_down").innerHTML="Read-Only attribute enabled"; 
  $('').hide();
} 
</script>

<script>
$(document).ready(function(){   
  $(document).on('click','.btn1', function(){
    $('select').hide();
  });
});
</script>

    


