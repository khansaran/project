@extends('layouts.admin')
<style>
.select2-container--default .select2-selection--single{
	height:35px !important;
}
</style>
@section('content')
<section class="content-header">
      <h1>
        ម៉ឺនុយ
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{Url('/')}}/admin/home" style="font-family: Khmer OS Battambang,Khmer UI;"><i class="fa fa-dashboard"></i>  ទំព័រដើម</a></li>
        <li ><a href="{{Url('/')}}/admin/cat" style="font-family: Khmer OS Battambang,Khmer UI;"> ម៉ឺនុយ </a></li> <li class="active"> បន្ថែមម៉ឺនុយ</li> 
      </ol>
</section>
   
<section class="content">
    <div class="row">
        <div class="box">
            
            <div class="panel panel-default">
                <div class="panel-heading" style="font-family: Khmer OS Battambang,Khmer UI;"><i style="font-size: 20px;" class="fa fa-home"> </i> ទំរង់បន្ថែមម៉ឺនុយ</div>
                @if(Session::has('message'))
                <div class="breadLine" style="text-align: center;margin-top: -25px;">
                <i class="fa fa-save"> </i> <span style="color:green">{!!Session::get('message')!!} </span>
                </div>
                @endif
                <div class="panel-body">
                    {!! Form::open(array('url' => 'admin/cat/insert','enctype'=>'multipart/form-data','file'=>'true','class'=>'form-horizontal','id'=>'popup-validation')) !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group{{ $errors->has('parent') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">ជ្រើសរើសម៉ឺនុយ  :</label>

                            <div class="col-md-6">
                               <select name="parent" id="parent" class="validate[required] form-control select2">
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
                       
                        <div class="form-group{{ $errors->has('name_kh') ? ' has-error' : '' }}">
                            <label for="name_kh" class="col-md-4 control-label">ឈ្មោះម៉ឺនុយ :</label>

                            <div class="col-md-6">
                                <input id="name_kh" type="text" class="validate[required] form-control" name="name_kh" value="{{ old('name_kh') }}">
                                @if($errors->has('name_kh'))
                                        <span style="color:red">{!!$errors->first('name_kh')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
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
                        <div class="form-group{{ $errors->has('ordering') ? ' has-error' : '' }}">
                            <label for="ordering" class="col-md-4 control-label"> លំដាប់ :</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" name="ordering" value="{{ old('ordering') }}">

                                @if($errors->has('menu_code'))
                                        <span style="color:red">{!!$errors->first('ordering')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button class="btn btn-primary" type="submit" name="save"  value="2"><i class="fa fa-sign-in"> </i> រក្សាទុក និង បិទ</button>
								<button class="btn btn-primary" type="submit" name="save"  value="3"><i class="fa fa-check-circle-o"> </i>រក្សាទុក និង ថ្មី</button>
								<a href="{{ url('/admin/cat') }}"><button class="btn btn-danger" type="button"><i class="fa fa-times"> </i>  ចាកចេញ</button></a>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection