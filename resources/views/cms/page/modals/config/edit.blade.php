 <!-- Modal with form -->
 <div class="modal fade" id="editConfig" tabindex="-1" role="dialog" aria-labelledby="formModal"
 aria-hidden="true">
 <div class="modal-dialog" role="document" style="max-width: 80%;">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="formModal">Edit Produk</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
        <form method="post" id="data-edit"  enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Logo</label>
                <input type="file" name="logo" id="logo_edit" onchange="loadPreviewLogoEdit(this);" accept="image/png, image/jpeg" class="form-control">
            </div>

            <div class="form-group">
                <label for="profile_image"></label>
                  <img id="preview_img_logo_edit" src="https://www.w3adda.com/wp-content/uploads/2019/09/No_Image-128.png" class="" width="200" height="150"/>

            </div>

            <div class="form-group">
                <label>Banner</label>
                <input type="file" name="banner" id="banner_edit" onchange="loadPreviewBannerEdit(this);" accept="image/png, image/jpeg" class="form-control">
            </div>

            <div class="form-group">
                <label for="profile_image"></label>
                  <img id="preview_img_banner_edit" src="https://www.w3adda.com/wp-content/uploads/2019/09/No_Image-128.png" class="" width="200" height="150"/>

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
