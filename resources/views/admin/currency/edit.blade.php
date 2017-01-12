@extends('layouts.admin')

@section('content')

   
   <div class="page-content">
    <div class="row">
        <div class="col-lg-12">
            
            <div class="panel panel-default">
                <div class="panel-heading"><i style="font-size: 20px;" class="fa fa-home"> </i> {{ trans('translate.ADD_BRAND') }}</div>
                @if(Session::has('message'))
                <div class="breadLine" style="text-align: center;margin-top: -25px;">
                <i class="fa fa-save"> </i> <span style="color:green">{!!Session::get('message')!!} </span>
                </div>
                @endif
                <div class="panel-body">
                    {!! Form::open(array('url' => ['admin/brand/update',$editdata->brand_id],'enctype'=>'multipart/form-data','file'=>'true','class'=>'form-horizontal','id'=>'popup-validation')) !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">{{ trans('translate.NAME_BRAND') }} :</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="validate[required] form-control" name="name" value="<?php echo $editdata->name; ?>">
                                @if($errors->has('name'))
                                        <span style="color:red">{!!$errors->first('name')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                            <label for="code" class="col-md-4 control-label">{{ trans('translate.CODE_BRAND') }} :</label>

                            <div class="col-md-6">
                                <input id="code" type="text" class="validate[required] form-control" name="code" value="<?php echo $editdata->code; ?>">

                                @if($errors->has('code'))
                                        <span style="color:red">{!!$errors->first('code')!!} </span>
                                @endif
                            </div>
                        </div>                        
                        
                        <div class="form-group{{ $errors->has('menu_status') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">{{ trans('translate.STATUS') }}  :</label>

                            <div class="col-md-6">
                               <select name="status" id="status" class="form-control">
                                    <option value="1" <?php if ($editdata->status==1) echo 'selected="selected"';?> >{{ trans('translate.STATUS') }}</option>
                                    <option value="0" <?php if ($editdata->status==0) echo 'selected="selected"';?> >{{ trans('translate.UNSTATUS') }}</option>
                                </select>

                                @if($errors->has('menu_status'))
                                        <span style="color:red">{!!$errors->first('menu_status')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button class="btn btn-primary" type="submit" name="save"  value="2"><i class="fa fa-sign-in"> </i> {{ trans('translate.SAVE_CLOSE') }}</button>
				<button class="btn btn-primary" type="submit" name="save"  value="3"><i class="fa fa-check-circle-o"> </i>{{ trans('translate.SAVE_NEW') }}</button>
				<a href="{{ url('/admin/brand') }}"><button class="btn btn-danger" type="button"><i class="fa fa-times"> </i>  {{ trans('translate.CANCEL') }}</button></a>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection