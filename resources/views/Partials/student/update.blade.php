<div class="modal fade" id="modal-info{{$student->id}}">
 
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
                         {!! Form::open(['route' => ['students.update',$student],"method"=>"Put",])!!}

         <div class="card-body">
           <div class="form-group">
             <label for="exampleInputEmail1">Full name</label>
             <input type="text" value="{{$student->full_name}}" name="full_name" class="form-control" id="exampleInputEmail1" placeholder="Full name">
           </div>
           <div class="form-group">
             <label for="exampleInputPassword1">age</label>
             <input type="text" value="{{ $student->age }}" name="age" class="form-control" id="exampleInputPassword1" placeholder="age">
           </div>
           <div class="form-group">
             <label for="exampleInputPassword1">Yerars of experience </label>
             <input type="text" value="{{$student->number_years_experience}}" name="year_exp" class="form-control" id="exampleInputPassword1" placeholder="Years of exprence">
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