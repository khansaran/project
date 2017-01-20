<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{Url('/')}}/assets/lib/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{{Url('/')}}/assets/lib/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="{{Url('/')}}/assets/lib/select2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="{{Url('/')}}/assets/lib/jquery.bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" type="text/css" href="{{Url('/')}}/assets/lib/owl.carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="{{Url('/')}}/assets/lib/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="{{Url('/')}}/assets/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="{{Url('/')}}/assets/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="{{Url('/')}}/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="{{Url('/')}}/assets/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="{{Url('/')}}/assets/lib/fancyBox/jquery.fancybox.css" />
    <title>Product </title>
</head>
<body class="category-page">
<!-- HEADER -->
<!-- end header -->
 @yield('content')

<!-- Footer -->
<footer id="footer">
     <div class="container" style="padding:0;">
            <!-- introduce-box -->
            <div id="footer-menu-box">                
                <p class="text-center">Copyrights &#169; 2017. All Rights Reserved.</p>
            </div><!-- /#footer-menu-box -->
    </div> 
</footer>

<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->
<script type="text/javascript" src="{{Url('/')}}/assets/lib/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="{{Url('/')}}/assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{Url('/')}}/assets/lib/select2/js/select2.min.js"></script>
<script type="text/javascript" src="{{Url('/')}}/assets/lib/jquery.bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="{{Url('/')}}/assets/lib/owl.carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{Url('/')}}/assets/lib/jquery.countdown/jquery.countdown.min.js"></script>

<script type="text/javascript" src="{{Url('/')}}/assets/lib/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{Url('/')}}/assets/js/jquery.actual.min.js"></script>
<script type="text/javascript" src="{{Url('/')}}/assets/js/theme-script.js"></script>

<script type="text/javascript" src="{{Url('/')}}/assets/lib/jquery.elevatezoom.js"></script>
<script type="text/javascript" src="{{Url('/')}}/assets/lib/fancyBox/jquery.fancybox.js"></script>


<!-- Seacho Auto -->
<script type="text/javascript">
 $( "#searchhome" ).autocomplete({
    source: "{{Url('/searchhome')}}",
    minLength:1,
	autoFocus:true,
	dataType: "json",
	select:function(e,ui){
		//alert(ui);
		$("#searchhome").val(ui.item.vlaue);
	}
});
$("#searchhome").keyup(function () {
	//alert(123456789);
    $.ajax({
        url: "{{Url('/')}}/searchdata",
        type: "get",
        data: {
            searchdata: $("#searchhome").val()
        },
        success: function (response) {
			console.log(response);
            $("#category_suggestion").html(response);
        }
    });
});

$("#btnSearchHomeTop").on('click',function(e){
	e.preventDefault(e);
		//datafrm = {'id':$('#image_idshow').val()};
	var datafrm = $('#SearchHomeTop').serialize();
		$.ajax({
			method:"POST",
			url:'{{Url("/")}}/searchhometop',
			data: datafrm,
			//dataType: 'json',
			success: function(data){
				
			},
			error: function(data){
				alert(1);
			}
		});
	return false;
});

function ClickShwoImage(id){
	//alert(id);
	$.ajax({
			method:"GET",
			url:'{{Url("/")}}/detail/'+id,
			data: id,
			//dataType: 'json',
			success: function(data){
				
			},
			error: function(data){
				alert(1);
			}
		});
	return false;
}
</script>
</body>
</html>