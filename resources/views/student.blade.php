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
              <li class="breadcrumb-item"><a href="#">students</a></li>
              <li class="breadcrumb-item active">students Dashbord</li>
              <button type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-default">New</button>
                 @include('Partials.student.create')
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
                    <th>age</th>
                    <th>groupe</th>
                    <th>L Operations  </th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($students as $student)      
                  <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->full_name}}
                    </td>
                    <td>{{$student->age}}</td>
                    <td> {{$student->groupe}}</td>
                    <td>
                    <button type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-info{{$student->id}}">Edit</button>
                    <button type="button" class="btn btn-block btn-danger" data-toggle="modal" data-target="#modal-danger{{$student->id}}">Delete</button>
                 
                  @include("Partials.student.update")

       <!-- /.delete-dialog -->


                  @include("Partials.student.delete")

    

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
