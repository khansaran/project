@extends('layouts.app')

@section('content')
	
        @if(Session::has('message'))
	<div class="breadLine">
	<i class="fa fa-save"> </i> <span style="color:green">{!!Session::get('message')!!} </span>
	</div>
	@endif
<div class="container col-sm-12">
    <div class="row">
        <div class="col-sm-12 col-md-offset-0">        
                
                <div class="span12">                    
                    <div class="head clearfix">
                        <div class="isw-grid"></div>
                        <div class="span2" style="font-size: 20px;">Product Table </div>
                            <div class="span9">
				<span style="float:right;margin-top: -25px; margin-bottom: 10px;">
                                    <a href="{{ url('/admin/product/add') }}"><button class="btn btn-warning" type="button" name="save"  value="3"><i id="addplush" class="isw-plus"> </i>  ADD  New </button></a>
				</span>
                        </div>						
                    </div>
                    <div class="block-fluid table-sorting clearfix">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped" id="tSortable">
                            <thead>
                                <tr>
                                    <th width="5%" style="text-align: center;">ID</th>
                                    <th width="40%">Product Name</th>
                                    <th width="20%">Product Url</th>
                                    <th width="20%">Product Code</th>
                                    <th width="20%">Create Date</th>
                                    <th width="5%">Status </th>
                                    <th width="5%">Delete</th>  
                                    <th width="5%">Edit</th> 									
                                </tr>
                            </thead>
                            <tbody>
				<?php $i =1; ?>
				<?php foreach($datashow as $datas){?>
                                <tr>
                                    <td style="text-align: center;" ><?php echo $i++; ?></td>
                                    <td><?php echo $datas->p_name; ?></td>
                                    <td> <?php echo $datas->p_url; ?></td>
                                    <td> <?php echo $datas->p_code; ?></td>                                    
                                    <td><?php echo $datas->created_at; ?></td>  
                                    <td style="text-align: center;"><?php if($datas->p_status==1){ echo '<i class="fa fa-check " style="color:blue;"> </i> ';} else{ echo '<i class="fa fa-close " style="color:red;"> </i> '; } ?></td>
                                    <td><a href="<?php echo url('admin/product/delete');?>/<?php echo $datas->p_id; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> </a></th>  
                                    <td><a href="<?php echo url('admin/product');?>/<?php echo $datas->p_id; ?>" class="btn btn-primary"><i class="fa fa-edit"></i> </a></th> 									
                                </tr>
                            <?php } ?>           
                            </tbody>
                        </table>
                        <div>  {{ $datashow->links() }} </div>
                    </div>
                </div>                                
                
            </div>
        <div>
    </div>
@endsection