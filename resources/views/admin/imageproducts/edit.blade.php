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
                    {!! Form::open(array('url' => ['admin/imageproduct/update',$editdata->id],'enctype'=>'multipart/form-data','file'=>'true','class'=>'form-horizontal','id'=>'EditData')) !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group col-md-6 {{ $errors->has('name_kh') ? ' has-error' : '' }}">
                            <label for="name_kh" class="col-md-4 control-label">ឈ្មោះរូបភាពផលិតផល :</label>

                             <div class="col-md-8">
                                <input id="name" type="text" class="validate[required] form-control" name="name" value="<?php echo $editdata->title; ?>">
                                @if($errors->has('name'))
                                        <span style="color:red">{!!$errors->first('name')!!} </span>
                                @endif
                            </div>
                        </div>
						<div class="form-group col-md-6{{ $errors->has('cat_id') ? ' has-error' : '' }}">
                            <label for="cat_id" class="col-md-4 control-label">ជ្រើសរើសម៉ឺនុយ :</label>
                            <div class="col-md-8">
                                <select name="cat_id" id="cat_id" class="validate[required] form-control select2" style="margin-bottom: 20px;">
                                    <option value=" "> - - - - - ជ្រើសរើសម៉ឺនុយ - - - - -  </option>
									<option value="-1" onclick="addCategroy()" >   + បន្ថែមម៉ឺនុយថ្មី   </option>
                                    <?php foreach($datashow as $datas){ 
                                       if($datas->cat_id == $editdata->cat_id){
                                            $selected = " selected='selected'"; 
									}else{
                                            $selected = ""; 
									}?>
                                        
                                   <?php if($datas->parent==0){ ?>
                                            <option <?php echo $selected; ?> value="<?php echo $datas->cat_id;?>" ><?php echo $datas->name_kh;?></option>
                                        <?php } ?>
                                           <?php foreach($datashow as $subcat){ ?>
                                            <?php if($subcat->parent !=0 && ($subcat->parent == $datas->cat_id)){ ?>
                                             <option  <?php echo $selected; ?> value="<?php echo $subcat->cat_id;?>"> -- <?php echo $subcat->name_kh;?></option>
                                            <?php }?>
                                        <?php }?>
                                       
									<?php } ?>
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
                               <select name="brand_id" id="brand_id" class="validate[required]  form-control select2">
                                    <option value="0"> - - - - - ជ្រើសរើសម៉ាកផលិតផល - - - - -</option>
									<option value="-1"> <i class="fa fa-plus-circle"> </i>  + បន្ថែមម៉ាកផលិតផល </option>
									<?php foreach($modelbrand as $data){
										if($data->brand_id == $editdata->brand_id){
                                            $selected = " selected='selected'"; 
										}else{
												$selected = ""; 
										}?>
                                        <option <?php echo $selected; ?> value="<?php echo $data->brand_id;?>"><?php echo $data->name;?> </option>
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
                                    <option value="1" <?php if ($editdata->status==1) echo 'selected="selected"';?> >ប្រើប្រាស់</option>
                                    <option value="0" <?php if ($editdata->status==0) echo 'selected="selected"';?> >មិនប្រើប្រាស់</option>
                                </select>

                                @if($errors->has('status'))
                                        <span style="color:red">{!!$errors->first('status')!!} </span>
                                @endif
                            </div>
                        </div>
						<div style="clear:both;"></div>						
						<div class="form-group col-md-6 {{ $errors->has('brand_id') ? ' has-error' : '' }}">
                            <label for="brand_id" class="col-md-4 control-label"> ជ្រើសរើសរូបភាពបង្ហាញដំបូង :</label>
                            <div class="col-md-8" >
								<div class="file-input">
									<?php if($editdata->image !=""){ ?>
									<div id="OneImageShow">
										<div class="file-preview" >
											<div class="file-drop-disabled">
											<div class="file-preview-thumbnails">
												<div class="file-live-thumbs">
													<div class="file-preview-frame" data-template="image">
														<div class="kv-file-content">
															<img src="{{Url('/')}}/admin/kcfinder/upload/images/<?php echo $editdata->image; ?>" class="kv-preview-data file-preview-image" title="bg.jpg" alt="bg.jpg" style="width:auto;height:160px;">
															<span style="font-family: Khmer OS Battambang,Khmer UI">ប្រសិនបើអ្នកចង់ប្ដូររូបភាពសូមលុបរូបភាពជាមុនសិន </span>
														</div>
														<div class="file-thumbnail-footer">
															<div class="file-actions">
																<div class="file-footer-buttons">
																	<!-- <a href="{{Url('/')}}/admin/imageproduct/delectimagepro/<?php echo $editdata->id?>"> -->
																	<input type="hidden" name="image_idshow" id="image_idshow" value="<?php echo $editdata->id; ?>" />
																	<button type="button" class="kv-file-zoom btn btn-xs btn-default" id="delect_image" title="View Details">
																		<i style="padding:5px 0;" class="glyphicon glyphicon-trash"></i>
																	</button>
																	<!-- </a> -->
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="clearfix"></div> 
											</div>
											</div>
										</div> 
									</div>
									<?php } ?>
								<!--<input type="file" name="image_show" class="form-group" /> -->
								<input id="file-0b" name="one_image" class="file" type="file">
                                @if($errors->has('brand_id'))
                                        <span style="color:red">{!!$errors->first('brand_id')!!} </span>
                                @endif
                                </div>
							</div>
                        </div>
                        <div class="form-group col-md-6 {{ $errors->has('image_tag') ? ' has-error' : '' }}">
                            <label for="ordering" class="col-md-4 control-label"> លំគាល់ : </label>

                            <div class="col-md-8">
                                <!--<input id="text" type="text" class="form-control" name="image_tag" value="{{ old('image_tag') }}"> -->
								<select id="image_tag" name="image_tag" class="form-control select2" multiple="multiple" data-placeholder="ជ្រើសរើសការសំគាល់" style="width: 100%;">
								  <?php foreach($idimageidtag as $idimgidtag){
									  if($idimgidtag->image_id == $editdata->id){
										  foreach( $dataimagetag as $imagetag){
											  if($imagetag->id == $idimgidtag->tag_id){
												  $selected = " selected='selected'"; 
											  }
											  else{
													$selected = ""; 
											} 
										  }
									  }
								  } 
								  ?>
								  <?php foreach($dataimagetag as $tags){ ?>
									<option <?php echo $selected; ?> value="<?php echo $tags->id; ?>"><?php echo $tags->name ?></option>
								  <?php } ?>
								  ?>
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
                                <input id="price" type="text" class="form-control" name="price" value="<?php echo $editdata->price; ?>">
								
                                @if($errors->has('price'))
                                        <span style="color:red">{!!$errors->first('price')!!} </span>
                                @endif
                            </div>
                        </div>
						<div style="clear:both;"></div>	
						<div class="form-group col-md-12 {{ $errors->has('ordering') ? ' has-error' : '' }}">
                            <label for="ordering" class="col-md-2 control-label"> បន្ថែមរូបភាព : </label>
                            <div class="col-md-10">
								<div class="file-input" id="ImagShowMulti">
									<div class="file-preview">
										<div class="file-drop-disabled">
									<?php foreach($dataimage as $image) { 
										if($image->proimage_id !=""){
											if($image->proimage_id ==  $editdata->id ){
											?>
											<div id="MultimageShow<?php echo $image->id;?>">
											<div class="file-preview-thumbnails">
												<div class="file-live-thumbs">
													<div class="file-preview-frame" data-template="image">
														<div class="kv-file-content">													
															<img src="{{Url('/')}}/admin/kcfinder/upload/images/<?php echo $image->name; ?>" class="kv-preview-data file-preview-image" title="bg.jpg" alt="bg.jpg" style="width:auto;height:160px;">
															</div>
														<div class="file-thumbnail-footer">
															<div class="file-actions">
																<div class="file-footer-buttons">
																<!-- <a href="{{Url('/')}}/admin/imageproduct/delectimagmulti/<?php echo $image->id?>"> -->
																<input type="hidden" name="image_multi" id="image_multi" value="<?php echo $image->id; ?>" />
																	<button type="button" onclick="DeleteMulti(<?php echo $image->id; ?>)" class="kv-file-zoom btn btn-xs btn-default" title="View Details">
																		<i style="padding:5px 0;" class="glyphicon glyphicon-trash"></i>
																	</button>     
																<!-- </a> -->
																</div>
															</div>
														</div>
													</div>
												</div>
												<?php } 
												}else{ ?>
												<style> 
														#ImagShowMulti{ display:none;}
												</style>
										<?php	}	 
											}
										?>
											<div class="clearfix"></div> 
										</div>
										</div>
									</div>
								</div>
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
                                <textarea id="editor" class="validate[required]" name="description" > <?php echo $editdata->description; ?> </textarea>

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
