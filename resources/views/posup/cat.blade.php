
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
 <form actio="" class="form-horizontal" id="popup-validation">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ទំរង់បន្ថែមម៉ឺនុយថ្មី</h4>
        </div>
        <div class="modal-body">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group{{ $errors->has('parent') ? ' has-error' : '' }}" >
                            <label for="password" class="col-md-4 control-label">ជ្រើសរើសម៉ឺនុយ  :</label>

                            <div class="col-md-6">
                               <select style="width:100% !important;" name="parent" id="parent" class="validate[required] form-control select2">
                                    <option value="0"> - - - - - ជ្រើសរើសម៉ឺនុយ - - - - - </option>
                                    <?php foreach($datashow as $datas){?> 
                                        <?php if($datas->parent==0){ ?>
                                            <option value="<?php echo $datas->cat_id;?>"><?php echo $datas->name_kh;?> </option>
                                        <?php } ?>
                                           <?php foreach($datashow as $subcat){ ?>
                                            <?php if($subcat->parent !=0 && ($subcat->parent == $datas->cat_id)){ ?>
                                             <option value="<?php echo $subcat->cat_id;?>"> -- <?php echo $subcat->name_kh;?></option>
                                             <?php }?>
                                            <?php }?>
                                   <?php }?>
                                </select>

                                @if($errors->has('menu_status'))
                                        <span style="color:red">{!!$errors->first('menu_status')!!} </span>
                                @endif
                            </div>
                        </div>
			<div class="form-group{{ $errors->has('name_kh') ? ' has-error' : '' }}" >
                            <label for="name_kh" class="col-md-4 control-label">ឈ្មោះម៉ឺនុយ :</label>

                            <div class="col-md-6">
                                <input id="name_kh" type="text" class="validate[required] form-control" name="name_kh" value="{{ old('name_kh') }}">
                                @if($errors->has('name_kh'))
                                        <span style="color:red">{!!$errors->first('name_kh')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}" >
                            <label for="password" class="col-md-4 control-label">ស្ថានភាព :</label>

                            <div class="col-md-6">
                               <select name="status" id="status" class="form-control">
                                    <option value="1">ប្រើប្រាស់</option>
                                    <option value="0">មិនប្រើប្រាស់</option>
                                </select>

                                @if($errors->has('status'))
                                        <span style="color:red">{!!$errors->first('status')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('ordering') ? ' has-error' : '' }}" >
                            <label for="ordering" class="col-md-4 control-label"> លំដាប់ :</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" name="ordering" value="{{ old('ordering') }}">

                                @if($errors->has('menu_code'))
                                        <span style="color:red">{!!$errors->first('ordering')!!} </span>
                                @endif
                            </div>
                        </div>
			</div>
        <div class="modal-footer">
		  <button class="btn btn-primary" id="save_cat"  type="button" name="save"  value="2" ><i class="fa fa-sign-in"> </i> រក្សាទុក និង បិទ</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">បិទចោល</button>
        </div>
      </div>
    </form>
    </div>
  </div>