<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Beauty by Dida-Services</title>

<link href="<?php echo base_url(). 'assets/'; ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(). 'assets/'; ?>css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url(). 'assets/'; ?>css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="<?php echo base_url(). 'assets/'; ?>js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Beauty<span>by</span>Dida</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							
							<li><a href="<?php echo base_url(). 'index.php/contLogin/logout'; ?>"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="<?php echo base_url(). 'index.php/Welcome/indexAdmin'; ?>"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li><a href="<?php echo base_url(). 'index.php/Welcome/widgets'; ?>"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Widgets</a></li>
			<li><a href="<?php echo base_url(). 'index.php/Welcome/about'; ?>"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> About</a></li>
			<li><a href="<?php echo base_url(). 'index.php/Welcome/charts'; ?>"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Charts</a></li>
			<li><a href="<?php echo base_url(). 'index.php/Welcome/tables'; ?>"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Tables</a></li>
			<li class="active"><a href="<?php echo base_url(). 'index.php/Welcome/services'; ?>"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Services</a></li>
			<li class="active"><a href="<?php echo base_url(). 'index.php/Welcome/beautyhacks'; ?>"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Beauty Hacks</a></li>
			<li><a href="<?php echo base_url(). 'index.php/Welcome/icons'; ?>"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Icons</a></li>
			
		</ul>
		
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Beauty Hacks</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Section Beauty Hacks</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form">
							
								<div class="form-group">
									<label>Judul</label>
									<textarea class="form-control" rows="3" placeholder="Judul"></textarea>
									<label>Details</label>
									<textarea class="form-control" rows="3" placeholder="Details"></textarea>
									<label>Upload foto</label>
									<input type="file">
								</div>
								<button type="submit" class="btn btn-primary">Save</button>
								</form>
								</div>
								</div>
								</div>	
								</div>
								</div>


		

							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
