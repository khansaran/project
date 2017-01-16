
  <!-- Modal -->
  <div class="modal fade" id="ModalBrand" role="dialog">
    <div class="modal-dialog">
 <form actio="" class="form-horizontal" id="frminsertbrand">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ទំរង់បន្ថែមម៉ាកផលិតផល</h4>
        </div>
        <div class="modal-body">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group col-md-12 {{ $errors->has('name_kh') ? ' has-error' : '' }}">
                            <label for="name_kh" class="col-md-4 control-label">ឈ្មោះម៉ាកផលិតផល :</label>

                             <div class="col-md-8">
                                <input id="name" type="text" required="required" class="validate[required] form-control" name="name" value="{{ old('name') }}">
                                @if($errors->has('name'))
                                        <span style="color:red">{!!$errors->first('name')!!} </span>
                                @endif
                            </div>
            </div>
            <div class="form-group col-md-12 {{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">ស្ថានភាព :</label>

                            <div class="col-md-8">
                               <select name="status" id="status" class="form-control">
                                    <option value="1">ប្រើប្រាស់</option>
                                    <option value="0">មិនប្រើប្រាស់</option>
                                </select>

                                @if($errors->has('status'))
                                        <span style="color:red">{!!$errors->first('status')!!} </span>
                                @endif
                            </div>
            </div>
            <div class="form-group col-md-12 {{ $errors->has('ordering') ? ' has-error' : '' }}">
                            <label for="ordering" class="col-md-4 control-label"> លំដាប់ :</label>

                            <div class="col-md-8">
                                <input id="text" type="text" class="form-control" name="ordering" value="{{ old('ordering') }}">

                                @if($errors->has('menu_code'))
                                        <span style="color:red">{!!$errors->first('ordering')!!} </span>
                                @endif
                            </div>
            </div>
		</div>
        <div class="modal-footer">
		  <button class="btn btn-primary" id="save_brand" type="button" name="save"  value="2" data-dismiss="modal" ><i class="fa fa-sign-in"> </i> រក្សាទុក និង បិទ</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">បិទចោល</button>
        </div>
      </div>
    </form>
    </div>
  </div>