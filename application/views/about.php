<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Beauty by Dida-About</title>

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
					<li><a href="<?php echo base_url(). 'index.php/ContLogin/logout'; ?>"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
			<div class="form-group">
				<input type="text" class="form-control">
			</div>
	
		<ul class="nav menu">
			<li><a href="<?php echo base_url(). 'index.php/Welcome/indexAdmin'; ?>"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			
			<li class="active"><a href="<?php echo base_url(). 'index.php/ContAbout'; ?>"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> About</a></li>
			<li><a href="<?php echo base_url(). 'index.php/ContServices'; ?>"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Services</a></li>
			<li><a href="<?php echo base_url(). 'index.php/ContTutorials'; ?>"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Tutorials</a></li>
			<li><a href="<?php echo base_url(). 'index.php/ContBeauty'; ?>"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Beauty Hacks</a></li>
			<li><a href="<?php echo base_url(). 'index.php/ContBook'; ?>"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Book Makeup</a></li>
			
			
			
		</ul>
		<div class="attribution">Template by <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Medialoot</a><br/><a href="http://www.glyphs.co" style="color: #333;">Icons by Glyphs</a></div>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		<!--/.row-->
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            About Beauty by Dida
                        </h1>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr style="font-size: 20px">
                                    	<th>Caption</th>
                                        <th>Foto</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                   
                                    foreach($data as $row)
                                    {
                                        echo '<tr>
                                            <td>'. $row['section'] .'</td>
                                            <td><img src="'.base_url().$row['path'] .'" width="200px"/></td>
                                            <td><button>Edit<a href='. base_url()."index.php/ContAbout/editAbout/".$row['id_about'].' class="btn btn-warning fa fa-edit" title="Edit"></a></button>

                                            </td>
                                            </tr>';
                                        
                                    }
                                    ?>
                                </tbody>
                            </table>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
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
