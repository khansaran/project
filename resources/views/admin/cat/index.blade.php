@extends('layouts.admin')

@section('content')
<section class="content-header">
      <h1>
        ម៉ឺនុយ
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{Url('/')}}/admin/home" style="font-family: Khmer OS Battambang,Khmer UI;"><i class="fa fa-dashboard"></i>  ទំព័រដើម</a></li>
        <li class="active"> ម៉ឺនុយ</li> 
      </ol>
</section>
<section class="content">

    <div class="row">
		<div class="box">
            <div class="box-header">

              <h3 class="box-title"> តារាបបង្ហាញម៉ឺនុយ</h3>
				@if(Session::has('message'))
                      <div class="breadLine" style="text-align: center; margin-top: -26px;">
                    <i class="fa fa-save"> </i> <span style="color:green">{!!Session::get('message')!!} </span>
                    </div>
                @endif
				<span style="float:right;margin-bottom: 10px;">
                           <a href="{{ url('/admin/cat/add') }}">
                               <button class="btn btn-warning" type="button" name="save"  value="3">
                                   <i id="addplush" class="fa fa-plus-circle"> </i> បន្ថែមម៉ឺនុយ  </button></a>
                </span>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="70px">លេខរៀង</th>
                  <th>ឈ្មោះម៉ឺនុយ</th>
				  <th>ស្ថានភាព</th>
				  <th>លំដាប់</th>
                  <th width="100px">ថ្ងៃបង្កើត</th>
                  <th width="120px">សកម្មភាព</th>
                </tr>
                </thead>
                <tbody>
				<?php $i =1; ?>
				<?php foreach($datashow as $datas){ ?>
                <?php if($datas->parent == 0){ ?>
				<tr>
                  <td style="text-align: center;" ><?php echo $i++; ?></td>
                  <td><a href="<?php echo url('admin/cat');?>/<?php echo $datas->cat_id; ?>"> <i class="fa fa-plus-square-o"></i> <?php echo $datas->name_kh; ?> </a> </td>
                  <td style="text-align: center;"><?php if($datas->status==1){ echo '<button class="btn btn-primary btn-xs"><i class="fa fa-check "> </i> ប្រើប្រាស់  </button>';} 
				  else{ echo '<button class="btn btn-danger btn-xs"><i class="fa fa-times btn-xs"> </i> មិនប្រើប្រាស់​  </button> '; } ?></td>
				   <td><?php echo $datas->ordering; ?></td>
				  <td><?php echo $datas->created_at; ?></td>
                  <td>
					<a style="font-family: Khmer OS Battambang,Khmer UI;"​ href="<?php echo url('admin/cat/delete');?>/<?php echo $datas->cat_id; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>  លុបចោល  </a>
                    <a style="font-family: Khmer OS Battambang,Khmer UI;"​ href="<?php echo url('admin/cat');?>/<?php echo $datas->cat_id; ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>កែប្រែ </a>
				  </td>
                </tr>
				<?php }
					 foreach($datashow as $sub){ 
					 if($sub->parent !=0 && ($sub->parent == $datas->cat_id)){
					 ?>	
						  <td style="text-align: center;" ><?php echo $i++; ?></td>
						  <td> |___<a href="<?php echo url('admin/cat');?>/<?php echo $sub->cat_id; ?>"> <?php echo $sub->name_kh; ?> </a> </td>
						  <td style="text-align: center;"><?php if($sub->status==1){ echo '<button class="btn btn-primary btn-xs"><i class="fa fa-check "> </i> ប្រើប្រាស់  </button>';} 
							else{ echo '<button class="btn btn-danger btn-xs"><i class="fa fa-times btn-xs"> </i> មិនប្រើប្រាស់​  </button> '; } ?></td>
						  <td><?php echo $sub->ordering; ?></td>
						  <td><?php echo $sub->created_at; ?></td>
						  <td>
							<a style="font-family: Khmer OS Battambang,Khmer UI;"​ href="<?php echo url('admin/cat/delete');?>/<?php echo $sub->cat_id; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"> </i> លុបចោល </a>
							<a style="font-family: Khmer OS Battambang,Khmer UI;" href="<?php echo url('admin/cat');?>/<?php echo $sub->cat_id; ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> កែប្រែ </a>
						  </td>
						</tr>
					<?php
						}						 						
					 }					
					?>
				<?php }?>
				</tbody>
			 </table>
		    </div>
		</div>
	</div>
</section>
@endsection