<form method="post" id="data-master"  enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label>Logo</label>
        <input type="file" name="logo" id="logo" onchange="loadPreviewLogo(this);" accept="image/png, image/jpeg" class="form-control">
    </div>

    <div class="form-group">
        <label for="profile_image"></label>
          <img id="preview_img_logo" src="https://www.w3adda.com/wp-content/uploads/2019/09/No_Image-128.png" class="" width="200" height="150"/>

    </div>

    <div class="form-group">
        <label>Banner</label>
        <input type="file" name="banner" id="banner" onchange="loadPreviewBanner(this);" accept="image/png, image/jpeg" class="form-control">
    </div>

    <div class="form-group">
        <label for="profile_image"></label>
          <img id="preview_img_banner" src="https://www.w3adda.com/wp-content/uploads/2019/09/No_Image-128.png" class="" width="200" height="150"/>

    </div>


      <input type="hidden" name="id" >

      <div class="col-md-12">
        <button type="submit" class="btn  pull-right btn btn-primary waves-effect"
            style="margin-top: 5px; margin-bottom: 10px;" id="simpan-data">
            SIMPAN <i class="far fa-save"></i></button>
        <button type="reset" class="btn  pull-right btn btn-danger waves-effect"
            style="margin-top: 5px; margin-right: 15px;">
            RESET <i class="fas fa-fresh"></i>
        </button>
    </div>

</form>
