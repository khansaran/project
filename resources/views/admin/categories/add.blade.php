@extends('layouts.admin')

@section('content')                                   
   <div class="page-content">
    <div class="row">
        <div class="col-lg-12">
            
            <div class="panel panel-default">
                <div class="panel-heading"><i style="font-size: 20px;" class="fa fa-home"> </i> {{ trans('translate.ADD_PRODUCT_CATEGORY') }} 
                    <button style="float: right;margin-top: -3px;" onclick="FunctionAddParentTab()">
                        {{ trans('translate.ADD_PARENT_TAB') }}
                    </button>
                </div>
                @if(Session::has('message'))
                <div class="breadLine" style="text-align: center;margin-top: -25px;">
                <i class="fa fa-save"> </i> <span style="color:green">{!!Session::get('message')!!} </span>
                </div>
                @endif
                <div class="panel-body">
                    {!! Form::open(array('url' => 'admin/category/insert','enctype'=>'multipart/form-data','file'=>'true','class'=>'form-horizontal','id'=>'popup-validation')) !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('parent') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">{{ trans('translate.SUB_PRODUCT_CATEGORY') }} :</label>

                                <div class="col-md-7">
                                   <select name="parent" id="parent" class="form-control">
                                        <option value="0">{{ trans('translate.PLEASE_SELECT_SUB_CATEGORY') }} </option>
                                        <?php foreach($datashow as $datas){?> 
                                            <?php if($datas->parent==0){ ?>
                                        <option value="<?php echo $datas->menu_id;?>"> + <?php echo $datas->menu_name_en;?> -- <?php echo $datas->menu_name_kh;?> </option>
                                            <?php } ?>
                                               <?php foreach($datashow as $subcat){ ?>
                                                <?php if($subcat->parent !=0 && ($subcat->parent == $datas->menu_id)){ ?>
                                                 <option value="<?php echo $subcat->menu_id;?>"> &nbsp;&nbsp;==> <?php echo $subcat->menu_name_en;?> -- <?php echo $subcat->menu_name_kh;?></option>
                                                 <?php }?>
                                                <?php }?>
                                       <?php }?>
                                    </select>

                                    @if($errors->has('menu_status'))
                                            <span style="color:red">{!!$errors->first('menu_status')!!} </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('parent_tab_id') ? ' has-error' : '' }}">
                                <label for="parent_tab_id" class="col-md-4 control-label">{{ trans('translate.SUB_PRODUCT_CATEGORY') }} :</label>

                                <div class="col-md-7">
                                   <select name="parent_tab_id" id="parent_tab" class="form-control">
                                        <option value="0">{{ trans('translate.PLEASE_SELECT_SUB_CATEGORY') }} </option>
                                        <option value="-1" onclick="FunctionAddParentTab()" >{{ trans('translate.ADD_PARENT_TAB') }} </option>
                                        <?php foreach($datatab as $datatabs){?> 
                                        <option value="<?php echo $datatabs->menu_tab_id;?>"> + <?php echo $datatabs->name_en;?> -- <?php echo $datatabs->name_kh;?> </option>
                                            
                                       <?php }?>
                                    </select>

                                    @if($errors->has('parent_tab_id'))
                                            <span style="color:red">{!!$errors->first('parent_tab_id')!!} </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('menu_name_en') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">{{ trans('translate.NAME_ENGLISH') }} :</label>

                                <div class="col-md-7">
                                    <input type="text" class="validate[required] form-control" name="menu_name_en" value="">
                                    @if($errors->has('menu_name_en'))
                                            <span style="color:red">{!!$errors->first('menu_name_en')!!} </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('menu_name_kh') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">{{ trans('translate.NAME_KHMER') }} :</label>

                                <div class="col-md-7">
                                    <input type="text" class="validate[required] form-control" name="menu_name_kh" value="">
                                    @if($errors->has('menu_name_kh'))
                                            <span style="color:red">{!!$errors->first('menu_name_kh')!!} </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('menu_code') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">{{ trans('translate.CODE_CATEGORY') }} :</label>

                                <div class="col-md-7">
                                    <input id="text" type="text" class="validate[required] form-control" name="menu_code" value="">

                                    @if($errors->has('menu_code'))
                                            <span style="color:red">{!!$errors->first('menu_code')!!} </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('font_icon') ? ' has-error' : '' }}">
                                <label for="font_icon" class="col-md-4 control-label">{{ trans('translate.FONT_ICON') }} :</label>

                                <div class="col-md-7">
                                    <input id="text" type="text" class="form-control" name="font_icon" value="">

                                    @if($errors->has('font_icon'))
                                            <span style="color:red">{!!$errors->first('font_icon')!!} </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                <label for="image" class="col-md-4 control-label">{{ trans('translate.IMAGE') }} :</label>

                                <div class="col-md-7">
                                    <input id="text" type="file" class="form-control" name="image" value="">

                                    @if($errors->has('image'))
                                            <span style="color:red">{!!$errors->first('image')!!} </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">{{ trans('translate.STATUS') }} :</label>

                                <div class="col-md-7">
                                   <select name="status" id="status" class="form-control">
                                        <option value="1">{{ trans('translate.STATUS') }}</option>
                                        <option value="0">{{ trans('translate.UNSTATUS') }}</option>
                                    </select>

                                    @if($errors->has('status'))
                                            <span style="color:red">{!!$errors->first('status')!!} </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('ordering') ? ' has-error' : '' }}">
                                <label for="ordering" class="col-md-4 control-label"> {{ trans('translate.ORDERING') }} :</label>

                                <div class="col-md-7">
                                    <input id="text" type="text" class="form-control" name="ordering" value="">

                                    @if($errors->has('menu_code'))
                                            <span style="color:red">{!!$errors->first('ordering')!!} </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button class="btn btn-primary" type="submit" name="save"  value="2"><i class="fa fa-sign-in"> </i> {{ trans('translate.SAVE_CLOSE') }}</button>
				<button class="btn btn-primary" type="submit" name="save"  value="3"><i class="fa fa-check-circle-o"> </i>{{ trans('translate.SAVE_NEW') }}</button>
				<a href="{{ url('/admin/category') }}"><button class="btn btn-danger" type="button"><i class="fa fa-times"> </i>  {{ trans('translate.CANCEL') }}</button></a>
                            </div>
                        </div>
                    {!! Form::close() !!}
                  
                </div>
            </div>
        </div>
    </div>
</div>
<!--Modal Static-->
{!! Form::open(array('url' => 'admin/category/inserttab','enctype'=>'multipart/form-data','file'=>'true','class'=>'form-horizontal','id'=>'popup-validation')) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div id="modal-static" tabindex="-1" data-backdrop="static" data-keyboard="false" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body" style="min-height: 200px;">
                    <h2> {{ trans('translate.ADD_PARENT_TAB') }}</h2>
                    <div style="height: 30px;" class="form-group{{ $errors->has('tab_name_en') ? ' has-error' : '' }}">
                        <label for="tab_name_en" class="col-md-4 control-label"> {{ trans('translate.NAME_ENGLISH') }} :</label>
                        <div class="col-md-7">
                            <input  type="text" class="validate[required] form-control" name="tab_name_en" value="">
                            @if($errors->has('tab_name_en'))
                            <span style="color:red">{!!$errors->first('tab_name_en')!!} </span>
                            @endif
                        </div>
                    </div>
                    <div  style="height: 30px;" class="form-group{{ $errors->has('tab_name_kh') ? ' has-error' : '' }}">
                        <label for="tab_name_kh" class="col-md-4 control-label"> {{ trans('translate.NAME_KHMER') }} :</label>
                        <div class="col-md-7">
                            <input type="text" class="validate[required] form-control" name="tab_name_kh" value="">
                            @if($errors->has('tab_name_kh'))
                            <span style="color:red">{!!$errors->first('tab_name_kh')!!} </span>
                            @endif
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default">{{ trans('translate.CANCEL') }}</button>
                    <button name="save_parent_tab" class="btn btn-primary">{{ trans('translate.SAVE') }}</button>
                </div>
            </div>
        </div>
    </div>
{!! Form::close() !!}

<script>


function FunctionAddParentTab(){    
   var idtab = $( "#parent_tab" ).val();
   if(idtab = -1){
       $('#modal-static').modal();
   }
}
   
</script>
@endsection

