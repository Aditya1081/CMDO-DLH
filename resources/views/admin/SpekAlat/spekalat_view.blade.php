@extends('admin.admin_master')
@section('admin')
 <main id="main" class="main">
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Spesifikasi Alat</h5>
                <a href="{{route('spekalat.add')}}">
                  <i class="bi bi-plus-circle-fill marginalat" style="font-size: 22px;"></i>
                </a>
                <!-- <a href="">
                  <i class="bi bi-printer-fill" style="font-size: 22px"></i>
                </a> -->
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Alat</th>
                    <th scope="col">Nama Alat</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Model</th>
                    <th scope="col">Nomer Seri</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($allDataSpekAlat as $spekalat)
                  <tr>
                    <th scope="row">{{$spekalat->id}}</td>
                    <td>{{$spekalat->KodeAlat}}</td>
                    <td>{{$spekalat->alat->NamaAlat}}</td>
                    <td>{{$spekalat->Brand}}</td>
                    <td>{{$spekalat->Model}}</td>
                    <td>{{$spekalat->NoSeri}}</td>
                    <td>
						      	<a href="{{route('spekalat.edit', $spekalat->id)}}" id="delete" class="bi bi-pencil-fill marginalat" style="font-size: 21px"></a>
                    <a href="{{route('spekalat.delete', $spekalat->id)}}" id="delete" class="bi bi-trash-fill marginalat" style="font-size: 21px"></a>
                    </td>
                  </tr>
                  @endforeach   
                </tbody>
              </table>
           
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
 @endsection