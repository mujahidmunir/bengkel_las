<form class="needs-validation" id="data-master" novalidate="">
    @csrf
    <div class="card-body">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Nama</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="name" required="">
          <div class="invalid-feedback">
            Siapa Nama Anda ?
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Email</label>
        <div class="col-sm-9">
          <input type="email" name="email" class="form-control" required="">
          <div class="invalid-feedback">
            Oh tidak ! Email anda tidak valid.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Password</label>
        <div class="col-sm-9">
          <input type="password" name="password" class="form-control" required="">
          <div class="invalid-feedback">
            Silahkan isi password anda.
          </div>
        </div>
      </div>

    </div>
    <div class="card-footer text-right">
      <button class="btn btn-primary">Submit</button>
    </div>
  </form>
