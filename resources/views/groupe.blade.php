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
              <li class="breadcrumb-item"><a href="#">groupes</a></li>
              <li class="breadcrumb-item active">groupes Dashbord</li>
              <button type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-default">New</button>
              <div class="modal fade" id="modal-default">
 
 <!-- /.edit-dialog -->
                     <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                         <h4 class="modal-title">Create new groupe</h4>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                         </div>
                         <div class="modal-body">
                         {!! Form::open(['route' => 'groupes.store',"method"=>"Post"])!!}

                         <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1"> name</label>
                    <input type="text"  name="name" class="form-control" id="exampleInputEmail1" placeholder=" name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">level</label>
                    <input type="text"  name="level" class="form-control" id="exampleInputPassword1" placeholder="Level">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">number of students </label>
                    <input type="text"  name="number_students" class="form-control" id="exampleInputPassword1" placeholder="Number  of students">
                  </div>
           
                </div>
<!-- /.card-body -->

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
{!! Form::close() !!}
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
                    <th> name</th>
                    <th> number </th>
                    <th>Number of students</th>
                    <th>L Operations  </th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($groupes as $groupe)      
                  <tr>
                    <td>{{$groupe->id}}</td>
                    <td>{{$groupe->name}}
                    </td>
                    <td>{{$groupe->level}}</td>
                    <td> {{$groupe->number_students}}</td>
                    <td>
                    <button type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-info{{$groupe->id}}">Edit</button>
                    <button type="button" class="btn btn-block btn-danger" data-toggle="modal" data-target="#modal-danger{{$groupe->id}}">Delete</button>
                    <div class="modal fade" id="modal-info{{$groupe->id}}">
 
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
                                {!! Form::open(['route' => ['groupes.update',$groupe],"method"=>"Put",])!!}

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Full name</label>
                    <input type="text" value="{{$groupe->name}}" name="name" class="form-control" id="exampleInputEmail1" placeholder="Full name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Speciality</label>
                    <input type="text" value="{{ $groupe->level }}" name="level" class="form-control" id="exampleInputPassword1" placeholder="Speciality">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">number of students </label>
                    <input type="text" value="{{$groupe->number_students}}" name="number_students" class="form-control" id="exampleInputPassword1" placeholder="Years of exprence">
                  </div>
           
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                {!! Form::close() !!}
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


          
                            <div class="modal fade" id="modal-danger{{$groupe->id}}">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Delete Teacher</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            {!! Form::open(['route' => ['groupes.destroy',$groupe],"method"=>"Delete"])!!}

            <div class="modal-body">
              <p>Delete &hellip; {{$groupe->full_name}}</p>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-outline-light">Delete</button>
            </div>
                {!! Form::close() !!}

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
