<form method="post" id="data-master"  enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="name"  required onkeypress='return harusHuruf(event)'>
    </div>
    <div class="form-group">
        <label>Harga</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    Rp.
                </div>
            </div>
            <input type="text" class="form-control uang" name="price" onkeypress="return hanyaAngka(event)" required>
        </div>
    </div>

    <div class="form-group">
        <label>Ketebalan</label>
        <input type="text" class="form-control" name="thickness"  required >
    </div>

    <div class="form-group">
        <label>Ukuran</label>
        <input type="text" class="form-control" name="size"  required >
    </div>



    <div class="form-group">
        <label>Gambar</label>
        <input type="file" name="image" id="image" onchange="loadPreview(this);" accept="image/png, image/jpeg" class="form-control">
    </div>

    <div class="form-group">
        <label for="profile_image"></label>
          <img id="preview_img" src="https://www.w3adda.com/wp-content/uploads/2019/09/No_Image-128.png" class="" width="200" height="150"/>

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
