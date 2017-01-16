
  <!-- Modal -->
  <div class="modal fade" id="MyTagImage" role="dialog">
    <div class="modal-dialog">
 <form actio="" class="form-horizontal" id="tabimage">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ទំរង់បន្ថែមកាសំគាល់</h4>
        </div>
        <div class="modal-body">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group col-md-12 {{ $errors->has('name') ? ' has-error' : '' }}" >
               ​​​ <label for="name" class="col-md-3 control-label">កាសំគាល់ :</label>
				<div class="col-md-9">
                    <input id="name" required="required" type="text" class="validate[required] form-control" name="name" value="{{ old('name') }}">
                    @if($errors->has('name'))
                        <span style="color:red">{!!$errors->first('name')!!} </span>
                    @endif
                </div>
            </div>  
		</div>
        <div class="modal-footer">
		  <button class="btn btn-primary" id="save_tag"  type="button" name="save"  value="2" ><i class="fa fa-sign-in"> </i> រក្សាទុក និង បិទ</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">បិទចោល</button>
        </div>
      </div>
    </form>
    </div>
  </div>