@extends('layouts.admin')

@section('content')
   <div class="container col-md-12">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            @if(Session::has('message'))
            <div class="breadLine">
            <i class="fa fa-save"> </i> <span style="color:green">{!!Session::get('message')!!} </span>
            </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-home"> </i> Form Add Position </div>
                <div class="panel-body">
                    {!! Form::open(array('url' => ['admin/article/update',$editdata->article_id],'enctype'=>'multipart/form-data','file'=>'true')) !!}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                       
                        <div class="form-group{{ $errors->has('title_en') ? ' has-error' : '' }}" style="">
                            <label style="margin-top: 10px; text-align: center" for="title_en" class="col-md-2 control-label"> {{ trans('translate.NAME_ENGLISH') }} :</label>

                            <div class="col-md-4">
                                <input style="margin-bottom: 20px;" id="title_en" type="text" class="validate[required] form-control " name="title_en" value="{{ $editdata->title_en }}">
                                @if($errors->has('title_en'))
                                        <span style="color:red">{!!$errors->first('title_en')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('title_kh') ? ' has-error' : '' }}" style="">
                            <label style="margin-top: 10px; text-align: center" for="name" class="col-md-2 control-label"> {{ trans('translate.NAME_KHMER') }} :</label>

                            <div class="col-md-4">
                                <input style="margin-bottom: 20px;" id="title_kh" type="text" class="validate[required] form-control" name="title_kh" value="{{ $editdata->title_kh }}">
                                @if($errors->has('title_kh'))
                                        <span style="color:red">{!!$errors->first('title_kh')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('images') ? ' has-error' : '' }}">
                            <label style="margin-top: 10px; text-align: center;" for="images" class="col-md-2 control-label">{{ trans('translate.IMAGE') }} :</label>

                            <div class="col-md-3">
                                <input style="margin-bottom: 20px;" id="images" type="file" class="form-control" name="images" value="{{ $editdata->images }}">
                                @if($errors->has('images'))
                                        <span style="color:red">{!!$errors->first('images')!!} </span>
                                @endif
                            </div>
                            <div class="col-md-1"> <img style="margin-left: 10px;" src="{{Url("/")}}/admin/kcfinder/upload/images/<?php echo $editdata->images; ?>" width="50" height="30"/> </div>
                        </div>
                        <div class="form-group{{ $errors->has('cat_id') ? ' has-error' : '' }}">
                            <label style="margin-top: 10px; text-align: center;" for="position" class="col-md-2 control-label">{{ trans('translate.NAME_CATEGORY') }} :</label>
                            <div class="col-md-4">
                                <select style="margin-bottom: 20px;" name="cat_id" id="menu_id" class="form-control">
                                    <option value="0">Select Categories </option>
                                   <?php foreach($model as $datas){ ?>                                        
                                   <?php if($datas->parent==0 || $datas->cat_id == $editdata->cat_id){ ?>
                                        <?php if($datas->cat_id == $editdata->cat_id){
                                                $selected = " selected='selected'"; ?>
                                                <option <?php echo $selected; ?> value="<?php echo $datas->cat_id;?>" ><?php echo $datas->name_en;?>  <?php echo $datas->name_kh;?></option>
                                        <?php }  else { ?>
                                               <option value="<?php echo $datas->cat_id;?>" ><?php echo $datas->name_en;?></option>
                                        <?php } ?>
                                        <?php } ?>
                                           <?php foreach($model as $subcat){ ?>
                                            <?php if($subcat->parent !=0 && ($subcat->parent == $datas->cat_id)){ ?>
                                               <?php if($subcat->cat_id == $editdata->cat_id){
                                                $selecteds = " selected='selected'"; ?>
                                               <option  <?php echo $selecteds; ?> value="<?php echo $subcat->cat_id;?>"> -- <?php echo $subcat->name_en;?> -  <?php echo $subcat->name_kh;?></option>
                                               <?php }  else { ?>
                                               <option  value="<?php echo $subcat->cat_id;?>"> -- <?php echo $subcat->name_en;?> -  <?php echo $subcat->name_kh;?></option>
                                                <?php } ?>
                                             
                                            <?php }?>
                                        <?php }?>
                                       
				<?php } ?>
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
                                <input id="text" type="text" class="form-control" name="ordering" value=" {{ $editdata->ordering }}">

                                @if($errors->has('ordering'))
                                        <span style="color:red">{!!$errors->first('ordering')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                        <div style="margin-top: 30px;" class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label style="margin-top: 10px;" for="description_en" class="col-md-2 control-label"> {{ trans('translate.DESCRIPTION_EN') }}:</label>

                            <div class="col-md-10">
                                <textarea id="editor" class="validate[required]" name="description_en" > {{ $editdata->description_en }} </textarea>

                                @if($errors->has('description_en'))
                                        <span style="color:red">{!!$errors->first('description_en')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                        <div style="margin-top: 30px;" class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label style="margin-top: 10px;" for="description_kh" class="col-md-2 control-label">{{ trans('translate.DESCRIPTION_KH') }}:</label>

                            <div class="col-md-10">
                                <textarea rows="6" class="ckeditor validate[required] form-control" style="visibility: hidden; display: none;" name="description_kh" > {{ $editdata->description_kh }} </textarea>

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