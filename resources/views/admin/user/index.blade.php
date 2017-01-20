@extends('layouts.admin')

@section('content')
<section class="content-header">
      <h1>
        អ្នកប្រើប្រាស់
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{Url('/')}}/admin/home" style="font-family: Khmer OS Battambang,Khmer UI;"><i class="fa fa-dashboard"></i>  ទំព័រដើម</a></li>
        <li class="active"> ឈ្មោះអ្នកប្រើប្រាស់</li> 
      </ol>
</section>
<section class="content">
    <div class="row">
		<div class="box">
            <div class="box-header">

              <h3 class="box-title"> តារាបបង្ហាញឈ្មអ្នកប្រើប្រាស់</h3>
				@if(Session::has('message'))
                      <div class="breadLine" style="text-align: center; margin-top: -26px;">
                    <i class="fa fa-save"> </i> <span style="color:green">{!!Session::get('message')!!} </span>
                    </div>
                @endif
				<span style="float:right;margin-bottom: 10px;">
                           <a href="{{ url('/admin/user/add') }}">
                               <button class="btn btn-warning" type="button" name="save"  value="3">
                                   <i id="addplush" class="fa fa-plus-circle"> </i> បន្ថែមអ្នកប្រើប្រាស់</button></a>
                </span>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="70px">លេខរៀង</th>
                  <th >ឈ្មោះអ្នកប្រើប្រាស់</th>
				   <th >អ៊ីម៉ែល</th>
                  <th width="100px">ថ្ងៃបង្កើត</th>
                  <th width="120px">សកម្មភាព</th>
                </tr>
                </thead>
                <tbody>
				<?php $i =1; ?>
				<?php foreach($datashow as $datas){ ?>
				<tr>
				  <td style="text-align: center;" ><?php echo $i++; ?></td>
                  <td><?php echo $datas->username; ?></td> 
				  <td><?php echo $datas->email; ?></td>
				  <td><?php echo $datas->created_at; ?></td>
                  <td>
                    <a style="font-family: Khmer OS Battambang,Khmer UI;"​ href="<?php echo url('admin/user');?>/<?php echo $datas->id; ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>កែប្រែ </a>
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