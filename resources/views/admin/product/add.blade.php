@extends('layouts.app')

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
                <div class="panel-heading"><i class="fa fa-home"> </i> Form Add Product </div>
                <div class="panel-body">
                    {!! Form::open(array('url' => 'admin/product/insert','enctype'=>'multipart/form-data','file'=>'true')) !!}
                    
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                       
                        <div class="form-group{{ $errors->has('p_name') ? ' has-error' : '' }}">
                            <label style="margin-top: 10px;" for="name" class="col-md-1 control-label"> Product :</label>

                            <div class="col-md-4">
                                <input id="p_name" type="text" class="form-control" name="p_name" value="{{ old('p_name') }}">
                                @if($errors->has('menu_name'))
                                        <span style="color:red">{!!$errors->first('p_name')!!} </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('p_url') ? ' has-error' : '' }}">
                            <label style="margin-top: 10px;" for="p_url" class="col-md-1 control-label"> Url :</label>

                            <div class="col-md-3">
                                <input id="p_url" type="text" class="form-control" name="p_url" value="{{ old('p_url') }}">
                                @if($errors->has('menu_name'))
                                        <span style="color:red">{!!$errors->first('p_url')!!} </span>
                                @endif
                            </div>
                        </div>
                    
                        <div class="form-group{{ $errors->has('p_code') ? ' has-error' : '' }}">
                            <label style="margin-top: 10px;" for="p_code" class="col-md-1 control-label"> ProductCode:</label>

                            <div class="col-md-2">
                                <input id="p_code" type="text" class="form-control" name="p_code" value="{{ old('p_url') }}">
                                @if($errors->has('menu_name'))
                                        <span style="color:red">{!!$errors->first('p_url')!!} </span>
                                @endif
                            </div>
                        </div>
                    <div style="clear: both; margin-top: 30px;"></div>
                        <div class="form-group{{ $errors->has('p_image') ? ' has-error' : '' }}">
                            <label style="margin-top: 10px;" for="p_image" class="col-md-1 control-label">Image :</label>

                            <div class="col-md-4">
                                <input id="p_image" type="file" class="form-control" name="p_image" value="{{ old('p_image') }}">
                                @if($errors->has('images'))
                                        <span style="color:red">{!!$errors->first('p_image')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label style="margin-top: 10px;" for="p_status" class="col-md-1 control-label">Status :</label>

                            <div class="col-md-3">
                               <select name="p_status" id="p_status" class="form-control">
                                    <option value="1">Status</option>
                                    <option value="0">Unstatus</option>
                                </select>

                                @if($errors->has('p_status'))
                                        <span style="color:red">{!!$errors->first('p_status')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('p_ordering') ? ' has-error' : '' }}">
                            <label for="p_ordering" style="margin-top: 10px;" class="col-md-1 control-label"> Ordering :</label>

                            <div class="col-md-2">
                                <input id="p_description" type="text" class="form-control" name="p_ordering" value="{{ old('ordering') }}">

                                @if($errors->has('ordering'))
                                        <span style="color:red">{!!$errors->first('p_ordering')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                        <div style="margin-top: 30px;" class="form-group{{ $errors->has('p_description') ? ' has-error' : '' }}">
                            <label style="margin-top: 10px;" for="description" class="col-md-1 control-label">Description:</label>

                            <div class="col-md-11">
                                <textarea id="editor" name="p_description" > </textarea>

                                @if($errors->has('description'))
                                        <span style="color:red">{!!$errors->first('p_description')!!} </span>
                                @endif
                            </div>
                        </div>
                            
                        <div class="form-group" >
                            <div class="col-md-4"></div>    
                            <div style="clear: both;"></div>
                            <div class="col-md-8" style="margin: 10px;    float: right;">
                                <button class="btn btn-primary" type="submit" name="save"  value="2"><i class="fa fa-sign-in"> </i> Save & Close </button>
				<button class="btn btn-primary" type="submit" name="save"  value="3"><i class="fa fa-check-circle-o"> </i>  Save & New </button>
				<a href="{{ url('/admin/product') }}"><button class="btn btn-danger" type="button"><i class="fa fa-close"> </i>  Cancel</button></a>
                            </div>
                        </div>    
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection