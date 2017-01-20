@extends('layouts.admin')

@section('content')
<section class="content-header">
      <h1>
       <span style="font-family: Khmer OS Battambang,Khmer UI;"> ទំព័រដើមដែលបញ្ចូលរូបភាព  </span>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{Url('/')}}/admin/home" style="font-family: Khmer OS Battambang,Khmer UI;"><i class="fa fa-dashboard"></i>  ទំព័រដើម</a></li>
        <!--v<li class="active"> ទំព័រដើម អ្នកប្រើប្រាស់</li> -->
      </ol>
</section>
<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3 style="font-family: Khmer OS Battambang,Khmer UI; padding:20px;"> ម៉ឺនុយ  </h3>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{Url('/')}}/admin/cat" class="small-box-footer" style="font-family: Khmer OS Battambang,Khmer UI;" > បង្ហាញម៉ឺនុយ <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3 style="font-family: Khmer OS Battambang,Khmer UI; padding:20px;">  ម៉ាកផលិតផល  </h3>
            </div>
            <div class="icon">
              
			  <i class="ion ion-bag"></i>
            </div>
             <a href="{{Url('/')}}/admin/brand" class="small-box-footer" style="font-family: Khmer OS Battambang,Khmer UI;" > បង្ហាញម៉ាកផលិតផល <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3 style="font-family: Khmer OS Battambang,Khmer UI; padding:20px;">  រូបភាពផលិតផល  </h3>
             
            </div>
            <div class="icon">
              <i class="ion ion-image"></i>
            </div>
            <a href="{{Url('/')}}/admin/imageproduct" class="small-box-footer" style="font-family: Khmer OS Battambang,Khmer UI;" > បង្ហាញរូបភាពផលិតផល <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
             <h3 style="font-family: Khmer OS Battambang,Khmer UI; padding:20px;">  អ្នកប្រើប្រាស់  </h3>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
           <a href="{{Url('/')}}/admin/user" class="small-box-footer" style="font-family: Khmer OS Battambang,Khmer UI;" > បង្ហាញអ្នកប្រើប្រាស់<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->

			<div class="row">
				<div class="box">
					<div class="box-header">

					  <h3 class="box-title"> តារាបបង្ហាញ រូបភាពផលិតផល</h3>
						@if(Session::has('message'))
							  <div class="breadLine" style="text-align: center; margin-top: -26px;">
							<i class="fa fa-save"> </i> <span style="color:green">{!!Session::get('message')!!} </span>
							</div>
						@endif
						<span style="float:right;margin-bottom: 10px;">
								   <a href="{{ url('/admin/imageproduct/add') }}">
									   <button class="btn btn-warning" type="button" name="save"  value="3">
										   <i id="addplush" class="fa fa-plus-circle"> </i> បន្ថែមមរូបភាពផលិតផល</button></a>
						</span>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
						<tr>
						  <th width="70px">លេខរៀង</th>
						  <th >ផលិតផល</th>
						  <th >ឈ្មោះម៉ឺនុយ</th>
						  <th >ម៉ាកផលិតផល</th>
						  <th >តម្លៃ​</th>
						  <th >រូបភាព</th>
						  <th style="text-align:center;">ស្ថានភាព</th>
						  <th width="120px">សកម្មភាព</th>
						</tr>
						</thead>
						<tbody>
						<?php $i =1; ?>
						<?php foreach($datashow as $datas){ ?>
						<tr>
						  <td style="text-align: center;" ><?php echo $i++; ?></td>
						  <td><a href="<?php echo url('admin/imageproduct');?>/<?php echo $datas->brand_id; ?>">  <?php echo $datas->title; ?> </a> </td>
						  <td><?php echo $datas->name_kh; ?> </td>
						  <td><?php echo $datas->name; ?> </td>
						  <td><span style="color:red;"><?php echo $datas->price; ?> $ </span></td>
						  <td><img width="50px" src="{{Url('/')}}/admin/kcfinder/upload/images/<?php echo $datas->image; ?>" /> </td>
						  <td style="text-align: center;"><?php if($datas->status==1){ echo '<button class="btn btn-primary btn-xs"><i class="fa fa-check "> </i> ប្រើប្រាស់  </button>';} 
						  else{ echo '<button class="btn btn-danger btn-xs"><i class="fa fa-times btn-xs"> </i> មិនប្រើប្រាស់​  </button> '; } ?></td>
						  <td>
							<a style="font-family: Khmer OS Battambang,Khmer UI;"​ href="<?php echo url('admin/imageproduct/delete');?>/<?php echo $datas->id; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>  លុបចោល  </a>
							<a style="font-family: Khmer OS Battambang,Khmer UI;"​ href="<?php echo url('admin/imageproduct');?>/<?php echo $datas->id; ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>កែប្រែ </a>
						  </td>
						</tr>
						<?php }?>
						</tbody>
					 </table>
					</div>
				</div>
			</div>          
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
      </div>
      <!-- /.row (main row) -->

</section>
@endsection
