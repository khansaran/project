@extends('layouts.admin')

@section('content')
   
<div class="page-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-home"> </i> {{ trans('translate.ADD_LOCATION') }}</div>
                @if(Session::has('message'))
                    <span style="color:green">{!!Session::get('message')!!} </span>
                @endif
                <div class="panel-body">
                    {!! Form::open(array('url' => ['admin/location/update',$editdata->location_id],'enctype'=>'multipart/form-data','file'=>'true','class'=>'form-horizontal')) !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group{{ $errors->has('name_en') ? ' has-error' : '' }}">
                            <label for="name_en" class="col-md-4 control-label">{{ trans('translate.NAME_LOCATION') }} :</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name_en" value="<?php echo $editdata->name_en ?>">
                                @if($errors->has('name_en'))
                                        <span style="color:red">{!!$errors->first('name_en')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name_kh') ? ' has-error' : '' }}">
                            <label for="name_en" class="col-md-4 control-label">{{ trans('translate.NAME_KHMER') }} :</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name_kh" value="<?php echo $editdata->name_kh ?>">
                                @if($errors->has('name_kh'))
                                        <span style="color:red">{!!$errors->first('name_kh')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                            <label for="code" class="col-md-4 control-label">{{ trans('translate.CODE_LOCATION') }} :</label>

                            <div class="col-md-6">
                                <input id="code" type="text" class="form-control" name="code" value="<?php echo $editdata->code ?>">

                                @if($errors->has('code'))
                                        <span style="color:red">{!!$errors->first('code')!!} </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">{{ trans('translate.STATUS') }} :</label>

                            <div class="col-md-6">
                               <select name="status" id="status" class="form-control">
                                    <option value="1" <?php if ($editdata->status==1) echo 'selected="selected"';?> >{{ trans('translate.STATUS') }}</option>
                                    <option value="0" <?php if ($editdata->status==0) echo 'selected="selected"';?> >{{ trans('translate.UNSTATUS') }}</option>
                                </select>

                                @if($errors->has('status'))
                                        <span style="color:red">{!!$errors->first('status')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button class="btn btn-primary" type="submit" name="save"  value="2"><i class="fa fa-sign-in"> </i> {{ trans('translate.SAVE_CLOSE') }}</button>
				<button class="btn btn-primary" type="submit" name="save"  value="3"><i class="fa fa-check-circle-o"> </i>{{ trans('translate.SAVE_NEW') }}</button>
				<a href="{{ url('/admin/location') }}"><button class="btn btn-danger" type="button"><i class="fa fa-times"> </i>  {{ trans('translate.CANCEL') }}</button></a>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div> 
            </div>
        </div>
    </div>
</div>

@endsection