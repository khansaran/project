<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ហេង វណ្ណ​ អាន</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ url('') }}/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('') }}/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ url('') }}/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url('') }}/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ url('') }}/plugins/morris/morris.css">
  <link rel="stylesheet" href="{{ url('') }}/plugins/datatables/dataTables.bootstrap.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ url('') }}/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ url('') }}/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ url('') }}/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ url('') }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="{{Url('')}}/validationengine/css/validationEngine.jquery.css" />
  <script src="{{ URL::asset('ckeditor/ckeditor.js') }}"></script>
  <script src="{{ URL::asset('ckeditor/js/sample.js') }}"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{Url('/')}}/admin/home" class="logo">
      <h4 style="font-family: Khmer OS Battambang,Khmer UI"> ហេង វណ្ណ​ អាន</h4> 
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{Url('/')}}/dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class=""​​ style="font-family: Khmer OS Battambang,Khmer UI"> អ្នកប្រើប្រាស់</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">             
                <p style="font-family: Khmer OS Battambang,Khmer UI" >
						អ្នកប្រើប្រាស់
                </p>
				 <img style="margin:0 auto;" src="{{Url('/')}}/dist/img/avatar5.png" class="user-image" alt="User Image">
				 <div class="pull-right"​ style="margin-top:40px;">
                  <a href="{{Url('/')}}/auth/logout" class="btn btn-default btn-flat" style="font-family: Khmer OS Battambang,Khmer UI"> ចាកចេញ</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{Url('/')}}/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p style="font-family: Khmer OS Battambang,Khmer UI" >អ្នកប្រើប្រាស់</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header"><a target="_blank" style="padding:0; font-family: Khmer OS Battambang,Khmer UI; background:none; border:none;" href="{{Url('/')}}">បើកមើលទំព័រដើមខាងមុខ</a></li>
        <li class="active treeview">
          <a href="{{Url('/')}}/admin/home" style="font-family: Khmer OS Battambang,Khmer UI;" href="{{Url('/')}}">
            <i class="fa fa-dashboard"></i> <span> ទំព័រដើម</span>
           
          </a>
        </li>        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span style="font-family: Khmer OS Battambang,Khmer UI;"> ម៉ឺនុយ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{Url('/')}}/admin/cat/add" style="font-family: Khmer OS Battambang,Khmer UI;"><i class="fa fa-plus-circle"></i> បន្ថែមម៉ឺនុយ</a></li>
            <li><a href="{{Url('/')}}/admin/cat" style="font-family: Khmer OS Battambang,Khmer UI;" ><i class="fa fa-eye"></i> បង្ហាញម៉ឺនុយ</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-briefcase"></i>
            <span style="font-family: Khmer OS Battambang,Khmer UI;"> ម៉ាកផលិតផល</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{Url('/')}}/admin/brand/add" style="font-family: Khmer OS Battambang,Khmer UI;"><i class="fa fa-plus-circle"></i> បន្ថែមម៉ាកផលិតផល</a></li>
            <li><a href="{{Url('/')}}/admin/brand" style="font-family: Khmer OS Battambang,Khmer UI;"><i class="fa fa-eye"></i> បង្ហាញម៉ាកផលិតផល</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-photo"></i>
            <span style="font-family: Khmer OS Battambang,Khmer UI;"> រូបភាពផលិតផល</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{Url('/')}}/admin/imageproduct/add" style="font-family: Khmer OS Battambang,Khmer UI;"><i class="fa fa-plus-circle"></i>បន្ថែម រូបភាពផលិតផល</a></li>
            <li><a href="{{Url('/')}}/admin/imageproduct" style="font-family: Khmer OS Battambang,Khmer UI;"><i class="fa fa-eye"></i>  បង្ហាញរូបភាពផលិតផល</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="{{Url('/')}}/admin/user">
            <i class="fa fa-user"></i>
            <span style="font-family: Khmer OS Battambang,Khmer UI;"> អ្នកប្រើប្រាស់</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
      @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version New</b>
    </div>
    <strong>Copyright &copy; 20017 All rights reserved.</strong>
  </footer>
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{Url('/')}}/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{Url('/')}}/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="{{Url('/')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{Url('/')}}/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="{{Url('/')}}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{Url('/')}}/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{Url('/')}}/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{Url('/')}}/dist/js/demo.js"></script>
<!-- page script -->
<link rel="stylesheet" href="{{Url('/')}}/plugins/select2/select2.min.css">
<script src="{{Url('/')}}/plugins/select2/select2.full.min.js"></script>
<!--  Uplaod Imagee -->
 <link href="{{Url('/')}}/upload/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
 <script src="{{Url('/')}}/upload/js/fileinput.js" type="text/javascript"></script>
 <script src="{{Url('/')}}/upload/js/fileinput_locale_fr.js" type="text/javascript"></script>
 <script src="{{Url('/')}}/upload/js/fileinput_locale_es.js" type="text/javascript"></script>
 <script src="{{Url('/')}}/fastclick/lib/fastclick.js"></script>
<!--LOADING SCRIPTS FOR PAGE--><!--CORE JAVASCRIPT-->
<script src="{{Url('')}}/js/main.js"></script>
<script src="{{Url('')}}/validationengine/js/jquery.validationEngine.js"></script>
<script src="{{Url('')}}/validationengine/js/languages/jquery.validationEngine-en.js"></script>
<script src="{{Url('')}}/jquery-validation-1.11.1/dist/jquery.validate.min.js"></script>
<script src="{{Url('')}}/jquery-validation-1.11.1/validationInit.js"></script>
<script>
	$(document).ready(function(){
		$('#myTable').DataTable();
		
		
	});
   
	$(function () {
		$(".select2").select2();
		$("#example1").DataTable();
		$('#example2').DataTable({
		  "paging": true,
		  "lengthChange": false,
		  "searching": false,
		  "ordering": true,
		  "info": true,
		  "autoWidth": false
		});
	});
	$(function () { formValidation(); });
	initSample();
	//////////////////////////// Code insert Cat //////////////////////
	$("#cat_id").on('change',function(){
		if($("#cat_id").val() == -1){
			$("#myModal").modal("show");
		}
	});
	$("#save_cat").on('click',function(e){
		//alert();
		e.preventDefault(e);
		datafrm = $("#popup-validation").serialize();
		//alert(datafrm);
			$.ajax({
				type:"POST",
				url:'{{Url("/")}}/admin/imageproduct/insertcat',
				data: datafrm,
				dataType: 'json',
				success: function(data){
					//$("#cat_id").append("<option value='"+data.id+"'>".data.name+"</option>.");
					//$('#cat_id').select2('val',data.id,);
					//$('#myModal').modal('hide');
					var ids = $("<option/>", {value: data.id, text: data.name});
					$('#cat_id').append(ids);
					$('#cat_id option[value="' + data.id + '"]').prop('selected',true);
					$('#cat_id').trigger('change');
					$('#myModal').modal('hide');
					console.log(data);
					
				},
				error: function(data){
					
				}
			});
			return false;
	});
//////////////////////// End ////////////////////'//////////////////////
//////////////////////////// Code insert Brand //////////////////////
	$("#brand_id").on('change',function(){
		if($("#brand_id").val() == -1){
			$("#ModalBrand").modal("show");
		}
	});
	$("#save_brand").on('click',function(e){
		//alert();
		e.preventDefault(e);
		datafrm = $("#frminsertbrand").serialize();
		//alert(datafrm);
			$.ajax({
				type:"POST",
				url:'{{Url("/")}}/admin/imageproduct/insertbrand',
				data: datafrm,
				dataType: 'json',
				success: function(data){
					//$("#cat_id").append("<option value='"+data.id+"'>".data.name+"</option>.");
					//$('#cat_id').select2('val',data.id,);
					//$('#myModal').modal('hide');
					var ids = $("<option/>", {value: data.id, text: data.name});
					$('#brand_id').append(ids);
					$('#brand_id option[value="' + data.id + '"]').prop('selected',true);
					$('#brand_id').trigger('change');
					$('#ModalBrand').modal('hide');
					console.log(data);
					
				},
				error: function(data){
					
				}
			});
			return false;
	});
	//////////////////////// End ////////////////////'//////////////////////
//////////////////////////// Code insert Brand //////////////////////
	$("#save_tag").on('click',function(e){
		//alert();
		e.preventDefault(e);
		datafrm = $("#tabimage").serialize();
		//alert(datafrm);
			$.ajax({
				type:"POST",
				url:'{{Url("/")}}/admin/imageproduct/inserttag',
				data: datafrm,
				dataType: 'json',
				success: function(data){
					//$("#cat_id").append("<option value='"+data.id+"'>".data.name+"</option>.");
					//$('#cat_id').select2('val',data.id,);
					//$('#myModal').modal('hide');
					var ids = $("<option/>", {value: data.id, text: data.name});
					$('#image_tag').append(ids);
					$('#image_tag option[value="' + data.id + '"]').prop('selected',true);
					$('#image_tag').trigger('change');
					$('#MyTagImage').modal('hide');
					console.log(data);
					
				},
				error: function(data){
					
				}
			});
			return false;
	});
	//////////////////////// Delect Image in Image Product ////////////////////'//////////////////////delect_image
	$("#delect_image").on('click',function(e){
		e.preventDefault(e);
		//datafrm = {'id':$('#image_idshow').val()};
		var datafrm = $('#EditData').serialize();
			$.ajax({
				headers: {
				 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				 },
				method:"POST",
				url:'{{Url("/")}}/admin/imageproduct/delectimagepros',
				data: datafrm,
				//dataType: 'json',
				success: function(data){
					$("#OneImageShow").empty();
				},
				error: function(data){
					//alert(1);
				}
			});
			return false;
	});
	function DeleteMulti(id){
		alert(id);
		//datafrm = {'id':$('#image_idshow').val()};
		var datafrm = $('#EditData').serialize();
			$.ajax({
				headers: {
				 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				 },
				method:"POST",
				url:'{{Url("/")}}/admin/imageproduct/delectimagemulti',
				data: datafrm,
				//dataType: 'json',
				success: function(data){
					$("#MultimageShow"+data.id).empty();
				},
				error: function(data){
					//alert(1);
				}
			});
			return false;
	}
	
</script>
</body>
</html>
