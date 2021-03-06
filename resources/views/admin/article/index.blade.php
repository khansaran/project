@extends('layouts.admin')

@section('content')
<style>
    
</style>
<div class="col-lg-12">
    <div id="tableadvancedTabContent" class="tab-content">
        <div id="table-sorter-tab" class="tab-pane fade active in">
            <div class="row">
                <div class="col-lg-12"><h3 class="mtn" style="padding-left: 20px;"> {{ trans('translate.ARTICLE') }} </h3>
                      @if(Session::has('message'))
                      <div class="breadLine" style="text-align: center; margin-top: -26px;">
                    <i class="fa fa-save"> </i> <span style="color:green">{!!Session::get('message')!!} </span>
                    </div>
                    @endif
                    <span style="float:right;margin-top: -45px; margin-bottom: 10px;">
                           <a href="{{ url('/admin/article/add') }}">
                               <button class="btn btn-warning" type="button" name="save"  value="3">
                                   <i id="addplush" class="fa fa-plus-square-o"> </i> {{ trans('translate.ADD_ARTICLE') }} </button></a>
                    </span>
                <table class="table table-hover table-striped table-bordered table-advanced tablesorter">
                    <thead>
                       <th width="5%" style="text-align: center;">ID</th>
                            <th width="20%">{{ trans('translate.NAME_ENGLISH') }}</th>
                            <th width="20%">{{ trans('translate.NAME_KHMER') }}</th>
                            <th width="15%">{{ trans('translate.NAME_CATEGORY') }}</th>
                            <th width="10%">{{ trans('translate.IMAGE') }}</th>
                            <th width="15%"> {{ trans('translate.CREATE_DATE') }}</th>
                            <th width="5%"> {{ trans('translate.STATUS') }} </th>
                            <th width="10%"> {{ trans('translate.ACTION') }}</th>									
                        </tr>
                    </thead>
                    <tbody>
				<?php $i =1; ?>
				<?php foreach($datashow as $datas){?>
                                <tr>
                                    <td style="text-align: center;" ><?php echo $i++; ?></td>
                                    <td><?php echo $datas->title_en; ?></td>
                                    <td><?php echo $datas->title_kh; ?></td>
                                    <td> <?php echo $datas->name_en; ?> -  <?php echo $datas->name_kh; ?></td>
                                    <td> <img src="{{Url("/")}}/admin/kcfinder/upload/images/<?php echo $datas->images; ?>" width="50"/></td>
                                    <td><?php echo $datas->created_at; ?></td> 
                                    <td style="text-align: center;"><?php if($datas->status==1){ echo '<i class="fa fa-check " style="color:blue;"> </i> ';} else{ echo '<i class="fa fa-times btn-xs" style="color:red;"> </i> '; } ?></td>
                                    <td>
                                        <a href="<?php echo url('admin/article/delete');?>/<?php echo $datas->article_id; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> </a>
                                        <a href="<?php echo url('admin/article');?>/<?php echo $datas->article_id; ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> </a>
                                    </td> 									
                                </tr>
                            <?php } ?>           
                            </tbody>
                </table>
                </div>
                <div>  {{ $datashow->links() }} </div>
            </div>
        </div>
    </div>
</div>
@endsection

