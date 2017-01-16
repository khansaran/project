@extends('layouts.admin')

@section('content')
@include('posup.cat')
@include('posup.brand')
@include('posup.tag')
<style>
.select2-container--default .select2-selection--single{
	height:35px !important;
}
.kv-file-content img{
	height:100px !important;
}
.fileinput-upload{ display:none !important;}
.hidden-xs{ display:none !important;}
.fileinput-remove{ padding:9px !important;}
</style>
@section('content')
<section class="content-header">
      <h1>
        រូបភាពផលិតផល
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{Url('/')}}/admin/home" style="font-family: Khmer OS Battambang,Khmer UI;"><i class="fa fa-dashboard"></i>  ទំព័រដើម</a></li>
        <li ><a href="{{Url('/')}}/admin/imageproduct" style="font-family: Khmer OS Battambang,Khmer UI;"> រូបភាពផលិតផល </a></li> <li class="active"> បន្ថែមមរូបភាពផលិតផល</li> 
      </ol>
</section>
   
<section class="content">
    <div class="row">
        <div class="box">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-family: Khmer OS Battambang,Khmer UI;"><i style="font-size: 20px;" class="fa fa-home"> </i> ទំរង់បន្ថែមរូបភាពផលិតផល</div>
                @if(Session::has('message'))
                <div class="breadLine" style="text-align: center;margin-top: -25px;">
                <i class="fa fa-save"> </i> <span style="color:green">{!!Session::get('message')!!} </span>
                </div>
                @endif
                <div class="panel-body">
                    {!! Form::open(array('url' => 'admin/imageproduct/insert','enctype'=>'multipart/form-data','file'=>'true','class'=>'dropzone form-horizontal','id'=>'popup-validation')) !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group col-md-6 {{ $errors->has('name_kh') ? ' has-error' : '' }}">
                            <label for="name_kh" class="col-md-4 control-label">ឈ្មោះរូបភាពផលិតផល :</label>

                             <div class="col-md-8">
                                <input id="name" type="text" class="validate[required] form-control" name="name" value="{{ old('name') }}">
                                @if($errors->has('name'))
                                        <span style="color:red">{!!$errors->first('name')!!} </span>
                                @endif
                            </div>
                        </div>
						<div class="form-group col-md-6{{ $errors->has('cat_id') ? ' has-error' : '' }}">
                            <label for="cat_id" class="col-md-4 control-label">ជ្រើសរើសម៉ឺនុយ :</label>
                            <div class="col-md-8">
                                <select style="width:100% !important;" name="cat_id" id="cat_id" class="validate[required] form-control select2" style="margin-bottom: 20px;">
                                    <option value=""> - - - - - ជ្រើសរើសម៉ឺនុយ - - - - -  </option>
									<option value="-1" >   + បន្ថែមម៉ឺនុយថ្មី   </option>
                                    <?php foreach($datashow as $datas){
										?> 
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
						<div style="clear:both;"></div>
						 <div class="form-group col-md-6 {{ $errors->has('brand_id') ? ' has-error' : '' }}">
                            <label for="brand_id" class="col-md-4 control-label"> ជ្រើសរើសម៉ាកផលិតផល :</label>

                            <div class="col-md-8">
                               <select style="width:100% !important;" name="brand_id" id="brand_id" class="validate[required]  form-control select2">
                                    <option value="0"> - - - - - ជ្រើសរើសម៉ាកផលិតផល - - - - -</option>
									<option value="-1"> <i class="fa fa-plus-circle"> </i>  + បន្ថែមម៉ាកផលិតផល </option>
									<?php foreach($modelbrand as $data){ ?> 
                                        <option value="<?php echo $data->brand_id;?>"><?php echo $data->name;?> </option>
                                   <?php }?>
                                </select>

                                @if($errors->has('brand_id'))
                                        <span style="color:red">{!!$errors->first('brand_id')!!} </span>
                                @endif
                            </div>
                        </div>
						 
                        <div class="form-group col-md-6 {{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="status" class="col-md-4 control-label">ស្ថានភាព :</label>

                            <div class="col-md-8">
                               <select name="status" id="status" class="form-control">
                                    <option value="1">ប្រើប្រាស់</option>
                                    <option value="0">មិនប្រើប្រាស់</option>
                                </select>

                                @if($errors->has('status'))
                                        <span style="color:red">{!!$errors->first('status')!!} </span>
                                @endif
                            </div>
                        </div>
						<div style="clear:both;"></div>						
						<div class="form-group col-md-6 {{ $errors->has('brand_id') ? ' has-error' : '' }}">
                            <label for="brand_id" class="col-md-4 control-label"> ជ្រើសរើសរូបភាពបង្ហាញដំបូង :</label>

                            <div class="col-md-8">
								<!--<input type="file" name="image_show" class="form-group" /> -->
								<input id="file-0b" name="one_image" class="file" type="file">
                                @if($errors->has('brand_id'))
                                        <span style="color:red">{!!$errors->first('brand_id')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group col-md-6 {{ $errors->has('image_tag') ? ' has-error' : '' }}">
                            <label for="ordering" class="col-md-4 control-label"> លំគាល់ : </label>

                            <div class="col-md-8">
                                <!--<input id="text" type="text" class="form-control" name="image_tag" value="{{ old('image_tag') }}"> -->
								<select name="image_tag[]" id="image_tag" class="form-control select2" multiple="multiple" data-placeholder="ជ្រើសរើសការសំគាល់" style="width: 100%;">
								<?php foreach($datatag as $tags){ ?>
									<option value="<?php echo $tags->id; ?>"><?php echo $tags->name ?></option>
								<?php } ?>
								</select>
								<button class="btn btn-primary"​ style="position: absolute; margin-top: -32px; padding: 8px 11px;right: -18px;" type="button" data-toggle="modal" data-target="#MyTagImage"> 
									<i class="fa fa-plus-circle"> </i> 
								</button>
                                @if($errors->has('image_tag'))
                                        <span style="color:red">{!!$errors->first('image_tag')!!} </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group col-md-6 {{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="ordering" class="col-md-4 control-label"> តម្លៃ : </label>

                            <div class="col-md-8">
                                <input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}">
								
                                @if($errors->has('price'))
                                        <span style="color:red">{!!$errors->first('price')!!} </span>
                                @endif
                            </div>
                        </div>
						<div style="clear:both;"></div>	
						<div class="form-group col-md-12 {{ $errors->has('ordering') ? ' has-error' : '' }}">
                            <label for="ordering" class="col-md-2 control-label"> បន្ថែមរូបភាព : </label>

                            <div class="col-md-10">
								<input id="file-5" class="file" type="file" name="multiple_image[]" multiple data-preview-file-type="any" data-upload-url="#">
                                @if($errors->has('ordering'))
                                        <span style="color:red">{!!$errors->first('ordering')!!} </span>
                                @endif
                            </div>
                        </div>
						<div style="clear:both;"></div>	
                        <div style="margin-top: 30px;" class="form-group col-md-12 {{ $errors->has('description') ? ' has-error' : '' }}">
                            <label style="margin-top: 10px;" for="description" class="col-md-2 control-label"> បរិយាយរូបភាពផលិតផល:</label>

                            <div class="col-md-10">
                                <textarea id="editor" class="validate[required]" name="description" > </textarea>

                                @if($errors->has('description'))
                                        <span style="color:red">{!!$errors->first('description')!!} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button class="btn btn-primary" type="submit" name="save"  value="2"><i class="fa fa-sign-in"> </i> រក្សាទុក និង បិទ</button>
								<button class="btn btn-primary" type="submit" name="save"  value="3"><i class="fa fa-check-circle-o"> </i>រក្សាទុក និង ថ្មី</button>
								<a href="{{ url('/admin/imageproduct') }}"><button class="btn btn-danger" type="button"><i class="fa fa-times"> </i>  ចាកចេញ</button></a>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

