@extends('layouts.admin')

@section('content')
   <div class="page-content">
    <div class="row">
        <div class="col-lg-12 col-md-offset-0">
            @if(Session::has('message'))
            <div class="breadLine">
            <i class="fa fa-save"> </i> <span style="color:green">{!!Session::get('message')!!} </span>
            </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading"><i style="font-size: 20px;" class="fa fa-home"> </i> {{ trans('translate.ADD_ARTICLE') }}  </div>
                <div class="panel-body">
                    {!! Form::open(array('url' => 'admin/article/insert','enctype'=>'multipart/form-data','file'=>'true','id'=>'popup-validation')) !!}
                    
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                       
                        <div class="form-group{{ $errors->has('title_en') ? ' has-error' : '' }}" style="">
                            <label style="margin-top: 10px; text-align: center" for="title_en" class="col-md-2 control-label"> {{ trans('translate.NAME_ENGLISH') }} :</label>

                            <div class="col-md-4">
                                <input style="margin-bottom: 20px;" id="title_en" type="text" class="validate[required] form-control " name="title_en" value="">
                                @if($errors->has('title_en'))
                                        <span style="color:red">{!!$errors->first('title_en')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('title_kh') ? ' has-error' : '' }}" style="">
                            <label style="margin-top: 10px; text-align: center" for="name" class="col-md-2 control-label"> {{ trans('translate.NAME_KHMER') }} :</label>

                            <div class="col-md-4">
                                <input style="margin-bottom: 20px;" id="title_kh" type="text" class="validate[required] form-control" name="title_kh" value="">
                                @if($errors->has('title_kh'))
                                        <span style="color:red">{!!$errors->first('title_kh')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('images') ? ' has-error' : '' }}">
                            <label style="margin-top: 10px; text-align: center;" for="images" class="col-md-2 control-label">{{ trans('translate.IMAGE') }} :</label>

                            <div class="col-md-4">
                                <input id="images" type="file" class="form-control" name="images" value="">
                                @if($errors->has('images'))
                                        <span style="color:red">{!!$errors->first('images')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('cat_id') ? ' has-error' : '' }}">
                            <label style="margin-top: 10px; text-align: center;" for="position" class="col-md-2 control-label">{{ trans('translate.NAME_CATEGORY') }} :</label>
                            <div class="col-md-4">
                                <select name="cat_id" id="cat_id" class="validate[required] form-control" style="margin-bottom: 20px;">
                                    <option value=" ">{{ trans('translate.PLEASE_SELECT_SUB_CATEGORY') }} </option>
                                    <?php foreach($datashow as $datas){?> 
                                        <?php if($datas->parent==0){ ?>
                                            <option value="<?php echo $datas->cat_id;?>"><?php echo $datas->name_en;?> - <?php echo $datas->name_kh;?></option>
                                        <?php } ?>
                                           <?php foreach($datashow as $subcat){ ?>
                                            <?php if($subcat->parent !=0 && ($subcat->parent == $datas->cat_id)){ ?>
                                             <option value="<?php echo $subcat->cat_id;?>"> -- <?php echo $subcat->name_en;?> - <?php echo $subcat->name_kh;?></option>
                                             <?php }?>
                                            <?php }?>
                                   <?php }?>
                                </select>
                                @if($errors->has('cat_id'))
                                        <span style="color:red">{!!$errors->first('cat_id')!!} </span>
                                @endif
                            </div>
                        </div>
                    <div style="clear: both; margin-top: 30px;"></div>
                        
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label style="margin-top: 10px; text-align: center;" for="status" class="col-md-2 control-label">{{ trans('translate.STATUS') }} :</label>

                            <div class="col-md-4">
                               <select name="status" id="status" class="form-control">
                                    <option value="1">Status</option>
                                    <option value="0">Unstatus</option>
                                </select>

                                @if($errors->has('status'))
                                        <span style="color:red">{!!$errors->first('menu_status')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('ordering') ? ' has-error' : '' }}">
                            <label for="ordering" style="margin-top: 10px; text-align: center;" class="col-md-2 control-label"> {{ trans('translate.ORDERING') }} :</label>

                            <div class="col-md-4">
                                <input id="text" type="text" class="form-control" name="ordering" value="">

                                @if($errors->has('ordering'))
                                        <span style="color:red">{!!$errors->first('ordering')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                        <div style="margin-top: 30px;" class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label style="margin-top: 10px;" for="description_en" class="col-md-2 control-label"> {{ trans('translate.DESCRIPTION_EN') }}:</label>

                            <div class="col-md-10">
                                <textarea id="editor" class="validate[required]" name="description_en" > </textarea>

                                @if($errors->has('description_en'))
                                        <span style="color:red">{!!$errors->first('description_en')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                        <div style="margin-top: 30px;" class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label style="margin-top: 10px;" for="description_kh" class="col-md-2 control-label">{{ trans('translate.DESCRIPTION_KH') }}:</label>

                            <div class="col-md-10">
                                <textarea rows="6" class="ckeditor validate[required] form-control" style="visibility: hidden; display: none;" name="description_kh" > </textarea>

                                @if($errors->has('description'))
                                        <span style="color:red">{!!$errors->first('description')!!} </span>
                                @endif
                            </div>
                        </div>    
                      
                        <div class="form-group" >
                            <div class="col-md-4"></div>    
                            <div style="clear: both;"></div>
                            <div class="col-md-8" style="margin: 10px;    float: right;">
                                <button class="btn btn-primary" type="submit" name="save"  value="2"><i class="fa fa-sign-in"> </i> Save & Close </button>
				<button class="btn btn-primary" type="submit" name="save"  value="3"><i class="fa fa-check-circle-o"> </i>  Save & New </button>
				<a href="{{ url('/admin/article') }}"><button class="btn btn-danger" type="button"><i class="fa fa-close"> </i>  Cancel</button></a>
                            </div>
                        </div>    
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    #cke_2_contents,#cke_1_contents{ height: 350px !important;}
    
</style>
@endsection