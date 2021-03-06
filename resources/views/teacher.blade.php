@extends("layouts.admin")
@section("content")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Teachers</a></li>
              <li class="breadcrumb-item active">Teachers Dashbord</li>
              <button type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-default">New</button>
                 @include('Partials.teacher.create')
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Full name</th>
                    <th>Spiciality(s)</th>
                    <th>years of exprience</th>
                    <th>L Operations  </th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($teachers as $teacher)      
                  <tr>
                    <td>{{$teacher->id}}</td>
                    <td>{{$teacher->full_name}}
                    </td>
                    <td>{{$teacher->speciality}}</td>
                    <td> {{$teacher->number_years_experience}}</td>
                    <td>
                    <button type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-info{{$teacher->id}}">Edit</button>
                    <button type="button" class="btn btn-block btn-danger" data-toggle="modal" data-target="#modal-danger{{$teacher->id}}">Delete</button>
                 
                  @include("Partials.teacher.update")

       <!-- /.delete-dialog -->


                  @include("Partials.teacher.delete")

    

                    </td>
                  </tr>
               

                  @endforeach
                  
</tbody>
</table>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>   
                  

        @endsection
