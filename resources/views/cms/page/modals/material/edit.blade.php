 <!-- Modal with form -->
 <div class="modal fade" id="editMaterial" tabindex="-1" role="dialog" aria-labelledby="formModal"
 aria-hidden="true">
 <div class="modal-dialog" role="document" style="max-width: 80%;">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="formModal">Edit Matrial</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
        <form method="post" id="data-edit"  enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="name" id="name_edit"  required onkeypress='return harusHuruf(event)'>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            Rp.
                        </div>
                    </div>
                    <input type="text" class="form-control uang" name="price" id="price_edit" onkeypress="return hanyaAngka(event)" required>
                </div>
            </div>

            <div class="form-group">
                <label>Ketebalan</label>
                <input type="text" class="form-control" name="thickness" id="thickness_edit"  required >
            </div>

            <div class="form-group">
                <label>Ukuran</label>
                <input type="text" class="form-control" name="size" id="size_edit" required >
            </div>



            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="image" id="image_edit" onchange="loadPreviewEdit(this);" accept="image/png, image/jpeg" class="form-control">
            </div>

            <div class="form-group">
                <label for="profile_image"></label>
                  <img id="preview_img_edit" src="https://www.w3adda.com/wp-content/uploads/2019/09/No_Image-128.png" class="" width="200" height="150"/>

            </div>



              <input type="hidden" name="id" id="id_edit">

              <div class="col-md-12">
                <button type="submit" class="btn  pull-right btn btn-primary waves-effect"
                    style="margin-top: 5px; margin-bottom: 10px;" id="simpan-edit">
                    SIMPAN <i class="far fa-save"></i></button>
                <button type="reset" class="btn  pull-right btn btn-danger waves-effect"
                    style="margin-top: 5px; margin-right: 15px;">
                    RESET <i class="fas fa-fresh"></i>
                </button>
            </div>

        </form>

     </div>
   </div>
 </div>
</div>
