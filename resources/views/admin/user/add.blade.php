@extends('layouts.admin')

@section('content')

   
   <div class="page-content">
    <div class="row">
        <div class="col-lg-12">
            
            <div class="panel panel-default">
                <div class="panel-heading"><i style="font-size: 20px;" class="fa fa-home"> </i> {{ trans('translate.ADD_USER') }}</div>
                @if(Session::has('message'))
                <div class="breadLine" style="text-align: center;margin-top: -25px;">
                <i class="fa fa-save"> </i> <span style="color:green">{!!Session::get('message')!!} </span>
                </div>
                @endif
                <div class="panel-body">
                    {!! Form::open(array('url' => 'admin/user/insert','enctype'=>'multipart/form-data','file'=>'true','class'=>'form-horizontal')) !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">                        
                        <div class="form-group{{ $errors->has('menu_name') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">{{ trans('translate.USER') }} :</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}">
                                @if($errors->has('username'))
                                        <span style="color:red">{!!$errors->first('username')!!} </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">{{ trans('translate.EMAIL') }} :</label>

                            <div class="col-md-6">
                                <input id="text" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if($errors->has('email'))
                                        <span style="color:red">{!!$errors->first('email')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('role_id') ? ' has-error' : '' }}">
                            <label for="role_id" class="col-md-4 control-label">{{ trans('translate.ROLE') }} :</label>

                            <div class="col-md-6">
                               <select name="role_id" id="role_id" class="form-control">
                                   <?php foreach($datashow as $data){ ?>
                                    <option value="<?php echo $data->id; ?>"><?php echo $data->title; ?></option>
                                   <?php } ?>
                                </select>

                                @if($errors->has('role_id'))
                                        <span style="color:red">{!!$errors->first('role_id')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('ordering') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label"> {{ trans('translate.PASSWORD') }} :</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="ordering" value="{{ old('password') }}">

                                @if($errors->has('password'))
                                        <span style="color:red">{!!$errors->first('password')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('confirmed') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label"> {{ trans('translate.CONFIRM_PASSWORD') }} :</label>

                            <div class="col-md-6">
                                <input id="confirmed" type="password" class="form-control" name="confirmed" value="{{ old('confirmed') }}">

                                @if($errors->has('confirmed'))
                                        <span style="color:red">{!!$errors->first('confirmed')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button class="btn btn-primary" type="submit" name="save"  value="2"><i class="fa fa-sign-in"> </i> {{ trans('translate.SAVE_CLOSE') }}</button>
				<button class="btn btn-primary" type="submit" name="save"  value="3"><i class="fa fa-check-circle-o"> </i>{{ trans('translate.SAVE_NEW') }}</button>
				<a href="{{ url('/admin/user') }}"><button class="btn btn-danger" type="button"><i class="fa fa-times"> </i>  {{ trans('translate.CANCEL') }}</button></a>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection