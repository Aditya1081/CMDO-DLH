@extends('admin.admin_master')
@section('admin')
 <main id="main" class="main">
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Alat</h5>
                <a href="{{route('alat.add')}}">
                  <i class="bi bi-plus-circle-fill marginalat" style="font-size: 22px;"></i>
                </a>
                <a href="">
                  <i class="bi bi-printer-fill" style="font-size: 22px"></i>
                </a>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Alat</th>
                     <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($allDataAlat as $alat)
                  <tr>
                    <th scope="row">{{$alat->id}}</td>
                    <td>{{$alat->NamaAlat}}</td>
                    <td>
						      	<a href="{{route('alat.edit', $alat->id)}}" class="bi bi-pencil-fill marginalat" style="font-size: 21px"></a>
                    <a href="{{route('alat.delete', $alat->id)}}" class="bi bi-trash-fill marginalat" style="font-size: 21px"></a>
                    </td>
                  </tr>
                  @endforeach   
                </tbody>
              </table>
           <!-- .. -->
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
 @endsection