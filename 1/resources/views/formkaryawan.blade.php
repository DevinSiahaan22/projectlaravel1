{{-- panggil template dashboard --}}
 @extends('dashboard')

@section('content')


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Form Karyawan</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/addkaryawan" method="POST">
                {{ csrf_field() }}

                <div class="card-body">

                  <div class="form-group">
                    <label for="nama">nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Devin Delker">
                  </div>

                  <div class="form-group">
                    <label for="Telpon">Telpon</label>
                    <input type="text" name="telpon" class="form-control" id="telpon" placeholder="081318013254">
                  </div>

                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text"name="alamat" class="form-control" id="alamat" placeholder="Cirebon">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection