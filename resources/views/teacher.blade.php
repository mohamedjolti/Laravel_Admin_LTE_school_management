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
              <div class="modal fade" id="modal-default">
 
 <!-- /.edit-dialog -->
                     <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                         <h4 class="modal-title">Create new Teacher</h4>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                         </div>
                         <div class="modal-body">
                         <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Full name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Full name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Speciality</label>
                    <input type="text" name="speciality" class="form-control" id="exampleInputPassword1" placeholder="Speciality">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Yerars of experience </label>
                    <input type="text" name="year_exp" class="form-control" id="exampleInputPassword1" placeholder="Years of exprence">
                  </div>
           
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
                         </div>
                         <div class="modal-footer justify-content-between">
                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                         </div>
                     </div>
                     <!-- /.modal-content -->
                     </div>
                     </div>
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
                    <button type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-info">Edit</button>
                    <button type="button" class="btn btn-block btn-danger" data-toggle="modal" data-target="#modal-danger{{$teacher->id}}">Delete</button>
                    <div class="modal fade" id="modal-info">
 
        <!-- /.edit-dialog -->
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title">Default Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                <form role="form" method="POST" >

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Full name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Full name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Speciality</label>
                    <input type="text" name="speciality" class="form-control" id="exampleInputPassword1" placeholder="Speciality">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Yerars of experience </label>
                    <input type="text" name="year_exp" class="form-control" id="exampleInputPassword1" placeholder="Years of exprence">
                  </div>
           
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
                                </div>
                                <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                            </div>
                            </div>

       <!-- /.delete-dialog -->


          
                            <div class="modal fade" id="modal-danger{{$teacher->id}}">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Delete Teacher</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Delete &hellip; {{$teacher->full_name}}</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-outline-light">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

    

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
