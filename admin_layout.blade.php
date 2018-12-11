<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Metro Admin Template - Metro UI Style Bootstrap Admin Template</title>
	<meta name="description" content="Metro Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Metro, Metro UI, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
		<link id="bootstrap-style" href="{{asset('back/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{asset('back/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
		<link id="base-style" href="{{asset('back/css/style.css')}}" rel="stylesheet">
		<link id="base-style-responsive" href="{{asset('back/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	
	<link rel="shortcut icon" href="img/favicon.ico">
	
		
		
		
</head>

<body>
	
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
							
						<li><a href="{{URL::to('/all-category')}}"><i class="icon-envelope"></i><span class="hidden-tablet"> All category</span></a></li>
						<li><a href="{{URL::to('/add-category')}}"><i class="icon-tasks"></i><span class="hidden-tablet"> Add category</span></a></li>
						<li><a href="{{URL::to('/all-manufacture')}}"><i class="icon-eye-open"></i><span class="hidden-tablet"> All Manufacture</span></a></li>
						<li><a href="{{URL::to('/add-manufacture')}}"><i class="icon-dashboard"></i><span class="hidden-tablet"> Add Manufacture</span></a></li>

					
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Products</span><span class="label label-important"></span></a>
							<ul>
								<li><a class="submenu" href="{{URL::to('/add-product')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Product</span></a></li>
								<li><a class="submenu" href="{{URL::to('/all-product')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All Products</span></a></li>
								
							</ul>	
						</li>
						
						
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Slider</span></a>
							<ul>

								<li><a class="submenu" href="{{URL::to('/add-slider')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Slider</span></a></li>
								<li><a class="submenu" href="{{URL::to('/all-slider')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All Slider</span></a></li>
								
							</ul>	
						</li>
						<li><a href="{{URL::to('/manage-order')}}"><i class="icon-list-alt"></i><span class="hidden-tablet"> Manage Order</span></a></li>

						

					
						<li><a href="{{URL::to('/logout')}}"><i class="halflings-icon off"></i> Logout</a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
	<div id="content" class="span10">
			
			@yield('admin_content')

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div> 
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://bootstrapmaster.com/" alt="Bootstrap Themes">creativeLabs</a></span>
			<span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://admintemplates.co/" alt="Bootstrap Admin Templates">Metro</a></span>
		</p>

	</footer>
	
	<!-- start: JavaScript-->

	<script src="{{asset('back/js/jquery-1.9.1.min.js')}}"></script>
	<script src="{{asset('back/js/jquery-migrate-1.0.0.min.js')}}"></script>
	<script src="{{asset('back/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
	<script src="{{asset('back/js/jquery.ui.touch-punch.js')}}"></script>
	<script src="{{asset('back/js/modernizr.js')}}"></script>
	<script src="{{asset('back/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('back/js/jquery.cookie.js')}}"></script>
	<script src="{{asset('back/js/fullcalendar.min.js')}}"></script>
	<script src="{{asset('back/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('back/js/excanvas.js')}}"></script>
	<script src="{{asset('back/js/jquery.flot.js')}}"></script>
	<script src="{{asset('back/js/jquery.flot.pie.js')}}"></script>
	<script src="{{asset('back/js/jquery.flot.stack.js')}}"></script>
	<script src="{{asset('back/js/jquery.flot.resize.min.js')}}"></script>
	<script src="{{asset('back/js/jquery.chosen.min.js')}}"></script>
	<script src="{{asset('back/js/jquery.uniform.min.js')}}"></script>
	<script src="{{asset('back/js/jquery.cleditor.min.js')}}"></script>
	<script src="{{asset('back/js/jquery.noty.js')}}"></script>
	<script src="{{asset('back/js/jquery.elfinder.min.js')}}"></script>
	<script src="{{asset('back/js/jquery.raty.min.js')}}"></script>
	<script src="{{asset('back/js/jquery.iphone.toggle.js')}}"></script>
	<script src="{{asset('back/js/jquery.uploadify-3.1.min.js')}}"></script>
	<script src="{{asset('back/js/jquery.gritter.min.js')}}"></script>
	<script src="{{asset('back/js/jquery.imagesloaded.js')}}"></script>
	<script src="{{asset('back/js/jquery.masonry.min.js')}}"></script>
	<script src="{{asset('back/js/jquery.knob.modified.js')}}"></script>
	<script src="{{asset('back/js/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('back/js/counter.js')}}"></script>
	<script src="{{asset('back/js/retina.js')}}"></script>
	<script src="{{asset('back/js/custom.js')}}"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
