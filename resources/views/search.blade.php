@extends('layouts.front')

@section('content')
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
                <form action="{{Url('/')}}/search" method="POST" class="form-inline" id="SearchHomeTop">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group form-category">
                        <select class="select-category">
                            <option value=""> ម៉ឺនុយទាំងអស់</option>
							<?php foreach($cat as $category){ ?>
								 <option value="<?php echo $category->cat_id; ?>"><?php echo $category->name_kh; ?> </option>
							<?php } ?>
                        </select>
                      </div>
                      <div class="form-group input-serach">
                        <input type="text" id="searchhome" name="searchhome" placeholder="Keyword here..." style="padding:9px;">
                      </div> 
                      <button type="submit" id="btnSearchHomeTopDes" class="pull-right btn-search"> ស្វែងរកផលិតផល  <i style="font-size:15px;" class="fa fa-search"> </i> </button>
                </form>
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
											<input type="checkbox" id="c_<?php echo $cate->cat_id; ?>" name="cat_<?php echo $cate->name_kh; ?>" />
											<label for="c1">
											<span class="button"></span>
											<?php echo $cate->name_kh; ?> <span class="count"><?php echo $cate->cat_id; ?></span>
											</label>
										</li>
									<?php } ?>
                                </ul>
                            </div> 
                            <!-- ./filter categgory -->
                            <!-- filter price -->
                            <div class="layered_subtitle">តម្លៃ</div>
                            <div class="layered-content slider-range">
                                
                                <div data-label-reasult="Range:" data-min="50" data-max="10000000" data-unit="$" class="slider-range-price" data-value-min="50" data-value-max="10000000"></div>
                                <div class="amount-range-price">Range: $50 - $10000000</div>
                            </div>
                            <!-- ./filter price -->
                            
                            
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
               
                <!-- subcategories -->
                <div class="subcategories">
                    <ul>
                        <li class="current-categorie">
                            <a href="#">ម៉ឺនុយទាំងអស់</a>
                        </li>
						<?php foreach($cat as $cate){ 
							if($cate->parent == 0){
						?>
						<li>
                            <a href="#"><?php echo $cate->name_kh; ?></a>
                        </li>
						<?php } } ?>
                    </ul>
                </div>
                <!-- ./subcategories -->
                <!-- view-product-list-->
                <div id="view-product-list" class="view-product-list">
                    <h5 class="page-heading">
						ផលិតផលទាំងអស់
                    </h5>
                    <ul class="display-product-option">
                        <li class="view-as-grid selected">
                            <span>grid</span>
                        </li>
                        <li class="view-as-list">
                            <span>list</span>
                        </li>
                    </ul>
                    <!-- PRODUCT LIST -->
                    <ul class="row product-list grid">
						<?php  foreach($image as $dataimage){ ?>
                        <li class="col-sx-12 col-sm-3">
                            <div class="product-container">
                                <div class="left-block" onclick="ClickShwoImage1123(<?php echo $dataimage->id;?>)" >
									<a href="{{Url('/')}}/detail/id/<?php echo $dataimage->id;?>">
                                        <img style="height: 150px;" class="img-responsive" alt="product" src="{{Url('/')}}/admin/kcfinder/upload/images/<?php echo $dataimage->image; ?>" />
                                    </a>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#"><?php echo $dataimage->title; ?></a></h5>
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="content_price">
                                       <span class="price product-price"> $ <?php echo number_format($dataimage->price,2); ?> </span>
                                        <!-- <span class="price old-price">$52,00</span> -->
                                    </div>
                                    <div class="info-orther">
                                        <!-- <p>Item Code: #453217907</p>
                                        <p class="availability">Availability: <span>In stock</span></p> -->
                                        <div class="product-desc">
                                           <?php echo $dataimage->description; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> 
					    <?php } ?>
                    </ul>
                    <!-- ./PRODUCT LIST -->
                </div>
                <!-- ./view-product-list-->
                <div class="sortPagiBar">
                    <div class="bottom-pagination">
                        <nav>
                          <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">Next &raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                    <div class="show-product-item">
                        <select name="">
                            <option value="">Show 18</option>
                            <option value="">Show 20</option>
                            <option value="">Show 50</option>
                            <option value="">Show 100</option>
                        </select>
                    </div>
                    <div class="sort-product">
                        <select>
                            <option value="">Product Name</option>
                            <option value="">Price</option>
                        </select>
                        <div class="sort-product-icon">
                            <i class="fa fa-sort-alpha-asc"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>
@endsection