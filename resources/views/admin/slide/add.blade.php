@extends('layouts.admin')

@section('content')

   
   <div class="page-content">
    <div class="row">
        <div class="col-lg-12">
            
            <div class="panel panel-default">
                <div class="panel-heading"><i style="font-size: 20px;" class="fa fa-home"> </i> {{ trans('translate.ADD_PRODUCT_CATEGORY') }}</div>
                @if(Session::has('message'))
                <div class="breadLine" style="text-align: center;margin-top: -25px;">
                <i class="fa fa-save"> </i> <span style="color:green">{!!Session::get('message')!!} </span>
                </div>
                @endif
                <div class="panel-body">
                    {!! Form::open(array('url' => 'admin/cat/insert','enctype'=>'multipart/form-data','file'=>'true','class'=>'form-horizontal','id'=>'popup-validation')) !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group{{ $errors->has('parent') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">{{ trans('translate.SUB_PRODUCT_CATEGORY') }} :</label>

                            <div class="col-md-6">
                               <select name="parent" id="parent" class="form-control">
                                    <option value="0">{{ trans('translate.PLEASE_SELECT_SUB_CATEGORY') }} </option>
                                    <?php foreach($datashow as $datas){?> 
                                        <?php if($datas->parent==0){ ?>
                                            <option value="<?php echo $datas->cat_id;?>"><?php echo $datas->name_en;?> - <?php echo $datas->name_kh;?> </option>
                                        <?php } ?>
                                           <?php foreach($datashow as $subcat){ ?>
                                            <?php if($subcat->parent !=0 && ($subcat->parent == $datas->cat_id)){ ?>
                                             <option value="<?php echo $subcat->cat_id;?>"> -- <?php echo $subcat->name_en;?> - <?php echo $subcat->name_kh;?></option>
                                             <?php }?>
                                            <?php }?>
                                   <?php }?>
                                </select>

                                @if($errors->has('menu_status'))
                                        <span style="color:red">{!!$errors->first('menu_status')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name_en') ? ' has-error' : '' }}">
                            <label for="name_en" class="col-md-4 control-label">{{ trans('translate.NAME_ENGLISH') }} :</label>

                            <div class="col-md-6">
                                <input id="name_en" type="text" class="validate[required] form-control" name="name_en" value="{{ old('name_en') }}">
                                @if($errors->has('name_en'))
                                        <span style="color:red">{!!$errors->first('name_en')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name_kh') ? ' has-error' : '' }}">
                            <label for="name_kh" class="col-md-4 control-label">{{ trans('translate.NAME_KHMER') }} :</label>

                            <div class="col-md-6">
                                <input id="name_kh" type="text" class="validate[required] form-control" name="name_kh" value="{{ old('name_kh') }}">
                                @if($errors->has('name_kh'))
                                        <span style="color:red">{!!$errors->first('name_kh')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">{{ trans('translate.CODE_CATEGORY') }} :</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="validate[required] form-control" name="code" value="{{ old('code') }}">

                                @if($errors->has('code'))
                                        <span style="color:red">{!!$errors->first('code')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">{{ trans('translate.STATUS') }} :</label>

                            <div class="col-md-6">
                               <select name="status" id="status" class="form-control">
                                    <option value="1">{{ trans('translate.STATUS') }}</option>
                                    <option value="0">{{ trans('translate.UNSTATUS') }}</option>
                                </select>

                                @if($errors->has('status'))
                                        <span style="color:red">{!!$errors->first('status')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('ordering') ? ' has-error' : '' }}">
                            <label for="ordering" class="col-md-4 control-label"> {{ trans('translate.ORDERING') }} :</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" name="ordering" value="{{ old('ordering') }}">

                                @if($errors->has('menu_code'))
                                        <span style="color:red">{!!$errors->first('ordering')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button class="btn btn-primary" type="submit" name="save"  value="2"><i class="fa fa-sign-in"> </i> {{ trans('translate.SAVE_CLOSE') }}</button>
				<button class="btn btn-primary" type="submit" name="save"  value="3"><i class="fa fa-check-circle-o"> </i>{{ trans('translate.SAVE_NEW') }}</button>
				<a href="{{ url('/admin/cat') }}"><button class="btn btn-danger" type="button"><i class="fa fa-times"> </i>  {{ trans('translate.CANCEL') }}</button></a>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection