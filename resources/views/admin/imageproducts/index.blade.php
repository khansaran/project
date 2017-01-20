@extends('layouts.admin')

@section('content')
<section class="content-header">
      <h1>
         រូបភាពផលិតផល
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{Url('/')}}/admin/home" style="font-family: Khmer OS Battambang,Khmer UI;"><i class="fa fa-dashboard"></i>  ទំព័រដើម</a></li>
        <li class="active">  រូបភាពផលិតផល</li> 
      </ol>
</section>
<section class="content">
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
@endsection