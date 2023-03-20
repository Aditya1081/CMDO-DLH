@extends('admin.admin_master')
@section('admin')
 <main id="main" class="main">
    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Spesifikasi Alat</h5>

              <!-- General Form Elements -->
              <form>
              <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Kode Alat</label>
                  <div class="col-sm-9">
                    <input type="text" name="KodeAlat" value="{{$editData->KodeAlat}}" class="form-control">
                  </div>
                </div>
                <!-- <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Nama Alat</label>
                  <div class="col-sm-9">
                    <input type="text" name="NamaAlat" value="{{$editData->NamaAlat}}" class="form-control">
                  </div>
                </div> -->
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Brand</label>
                  <div class="col-sm-9">
                    <input type="text" name="Brand" value="{{$editData->Brand}}" class="form-control">
                  </div>
                </div><div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Model</label>
                  <div class="col-sm-9">
                    <input type="text" name="Model" value="{{$editData->Model}}" class="form-control">
                  </div>
                </div><div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Nomer Seri</label>
                  <div class="col-sm-9">
                    <input type="text" name="NoSeri" value="{{$editData->NoSeri}}" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label"></label>
                  <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary" style="margin-left: 247px;">Simpan</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->
        </div>
      </div>
    </section>
</main>
 @endsection