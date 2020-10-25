<div class="modal fade" id="modal-default">
 
 <!-- /.edit-dialog -->
                     <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                         <h4 class="modal-title">Create new student</h4>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                         </div>
                         <div class="modal-body">
                         {!! Form::open(['route' => 'students.store',"method"=>"Post"])!!}

<div class="card-body">
  <div class="form-group">
    <label for="exampleInputEmail1">Full name</label>
    <input type="text" name="full_name" class="form-control" id="exampleInputEmail1" placeholder="Full name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">age</label>
    <input type="text" name="age" class="form-control" id="exampleInputPassword1" placeholder="age">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Groupe </label>
    <select name="groupe">
         @foreach($groupes as $groupe)
            <option value="{{$groupe->id}}">{{$groupe->name}}</option>
         @endforeach
    </select>  </div>

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