@extends('layouts.front')

@section('content')
<form action="{{Url('/')}}/" method="POST" class="form-inline" id="SearchHomeTop">
<div id="header" class="header">
    <div class="top-header">
        <div class="container">
            <div class="nav-top-links">
                <a class="first-item" href="#"><img alt="phone" src="{{Url('/')}}/assets/images/phone.png" />00-62-658-658</a>
            </div>
        </div>
    </div>
    <!-- MAIN HEADER -->
    <div class="container main-header">
        <div class="row">
            <div class="col-xs-12 col-sm-3 logo">
                <a href="{{Url('/')}}"><img alt="Kute shop - themelock.com" src="{{Url('/')}}/assets/images/logo.png" /></a>
            </div>
            <div class="col-xs-9 col-sm-9 header-search-box">
				<div class="form-inline">    
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group form-category">
                        <select class="select-category" name="catogery">
                            <option value=""> ម៉ឺនុយទាំងអស់</option>
							<?php foreach($cat as $category){ 
							if($category->cat_id == $catshowid){
                                $selected = " selected='selected'"; 
							}else{
								$selected = ""; 
							}?>
								 <option <?php echo $selected; ?> value="<?php echo $category->cat_id; ?>"><?php echo $category->name_kh; ?> </option>
							<?php } ?>
                        </select>
                      </div>
                      <div class="form-group input-serach">
                        <input type="text" id="searchhome" name="searchhome" placeholder="Keyword here..." style="padding:9px;">
                      </div> 
                     <button type="submit" id="btnSearchHomeTopDes" class="pull-right btn-search"> ស្វែងរកផលិតផល  <i style="font-size:15px;" class="fa fa-search"> </i> </button>
				</div>
            </div>
        </div>
    </div>
    <!-- END MANIN HEADER -->
    
</div>
<div class="columns-container">
    <div class="container" id="columns">
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block category -->
                <!-- block filter -->
                <div class="block left-module">
                    <p class="title_block">  ម៉ឺនុយ និង តម្លៃផលិតផល</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-filter-price">
                            <!-- filter categgory -->
                            <div class="layered_subtitle"> ម៉ឺនុយ</div>
                            <div class="layered-content">
                                <ul class="check-box-list">								
									<?php foreach($cat as $cate){ ?>
										<li>
											<input type="checkbox" id="c<?php echo $cate->cat_id; ?>" name="c<?php echo $cate->cat_id; ?>" />
											<label for="c<?php echo $cate->cat_id; ?>">
											<span class="button"></span>
											<?php echo $cate->name_kh; ?> <span class="count"></span>
											</label>
										</li>
									<?php } ?>
                                </ul>
                            </div> 
                            <!-- ./filter categgory -->
                            <!-- filter price -->
                            <div class="layered_subtitle">តម្លៃ</div>
                            <div class="layered-content slider-range">
                                
                                <div data-label-reasult="Range:" data-min="0" data-max="10000000" data-unit="$" class="slider-range-price" data-value-min="0" data-value-max="10000000"></div>
                                <div class="amount-range-price" >Range123: $0 - $10000000</div>
                            </div>
                            <!-- ./filter price -->
                           <div class="layered_subtitle"> សំគាល់</div>
                            <div class="layered-content">
                                <ul class="check-box-list">								
									<?php foreach($tag as $tags){ ?>
										<li>
											<input type="checkbox" id="tag<?php echo $tags->id; ?>" name="tag<?php echo $tags->id; ?>" />
											<label for="tag<?php echo $tags->id; ?>">
											<span class="button"></span>
											<?php echo $tags->name; ?> <span class="count"></span>
											</label>
										</li>
									<?php } ?>
                                </ul>
                            </div> 
                            
                        </div>
                        <!-- ./layered -->

                    </div>
                </div>
                <!-- ./block filter  -->
                <!-- SPECIAL -->
                <!-- ./SPECIAL -->
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
			
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <!-- Product -->
                    <div id="product">
						<?php foreach($imagedetial as $img){ ?>
                        <div class="primary-box row">
                            <div class="pb-left-column col-xs-12 col-sm-6">
                                <!-- product-imge-->
                                <div class="product-image">
                                    <div class="product-full">
										
                                        <img id="product-zoom" src='{{Url('')}}/admin/kcfinder/upload/images/<?php echo $img->image;?>' data-zoom-image="assets/data/product-s3-850x1036.jpg"/>
                                    </div>
                                    <div class="product-img-thumb" id="gallery_01">
                                        <ul class="owl-carousel" data-items="3" data-nav="true" data-dots="false" data-margin="20" data-loop="true">
                                            <?php foreach($imageall as $gelary){
											if($gelary->proimage_id == $img->id){
											?>
											<li>
                                                <a href="#" data-image="{{Url('')}}/admin/kcfinder/upload/images/<?php echo $gelary->name;?>" data-zoom-image="{{Url('')}}/admin/kcfinder/upload/images/<?php echo $gelary->name;?>">
                                                    <img id="product-zoom"  src="{{Url('')}}/admin/kcfinder/upload/images/<?php echo $gelary->name;?>" /> 
                                                </a>
											</li>
											<?php } } ?>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-imge-->
                            </div>
                            <div class="pb-right-column col-xs-12 col-sm-6">
                                <h1 class="product-name"><?php echo $img->title; ?></h1>
                                <div class="product-price-group">
                                    <span class="price" style="font-size:25px; float:right; "> $ <?php echo number_format($img->price,2); ?></span>
                                </div>
                               <div style="clear:both"></div>
                                <div class="product-desc">
									<h3 class=""> ការពិពណ៌នា  </h3>
                                   ​​​​ <?php echo $img->description;?>
                                </div>
                            </div>
                        </div>
						<?php } ?>
                        <!-- box product -->
                        <div class="page-product-box">
                            <h3 class="heading">រូបភាពដែលទាក់ទាង</h3>
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"400":{"items":4},"1000":{"items":4}}'>
                                <?php foreach($releated as $realate){ ?>
								<li>
                                    <div class="product-container">
                                        <div class="left-block">
                                            <a href="{{Url('/')}}/detail/id/<?php echo $realate->id;?>">
                                                <img style="/*height: 150px;*/ width:100% !important; max-width:none !important;" class="img-responsive" alt="product" src="{{Url('')}}/admin/kcfinder/upload/images/<?php echo $realate->image;?>" />
                                            </a>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#"><?php echo $realate->title;?></a></h5>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="content_price">
                                                <span class="price product-price"><?php echo $realate->price;?></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
								<?php } ?>
                            </ul>
                        </div>
                        <!-- ./box product -->
                    </div>
                <!-- Product -->
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>
</form>
<script type="text/javascript">

</script>
@endsection