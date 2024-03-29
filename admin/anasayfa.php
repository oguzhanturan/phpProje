<?php
@ob_start();
@session_start();
include("include/baglan.php");
include("include/fonksiyonlar.php");
oturumkontrolana();

?>


<!DOCTYPE html>
<!--  
Template Name: Conquer Responsive Admin Dashboard Template build with Twitter Bootstrap 2.3.1
Version: 1.4
Author: KeenThemes
Website: http://www.keenthemes.com
Purchase: http://themeforest.net/item/conquer-responsive-admin-dashboard-template/3716838
-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Yönetim Paneli</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet" />
	<link href="assets/css/style-responsive.css" rel="stylesheet" />
	<link href="assets/css/themes/default.css" rel="stylesheet" id="style_color" />
	<link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
	<link href="#" rel="stylesheet" id="style_metro" />
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->	
	<link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" type="text/css"  />
	<link href="assets/plugins/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
	<!-- END PAGE LEVEL STYLES -->
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="fixed-top">
	<!-- BEGIN HEADER -->
	<?php include("header.php") ;?>
	<!-- END HEADER -->
    
    
    
	<!-- BEGIN CONTAINER -->
	<div id="container" class="row-fluid">
		
        
        <!-- BEGIN SIDEBAR -->
		<?php include("menu.php") ;?>
		<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
        
        
        
		<!-- BEGIN PAGE -->
		<div id="body">
			
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						  	
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							<?=ucwords($_SESSION['yonetici_ad_soyad'])?> <small>Hoşgeldin | Site Yönetim Paneli</small>
						</h3>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
                
                
				<!-- BEGIN PAGE CONTENT-->
				<div id="page" class="dashboard">
					
                  <!-- BEGIN CUSTOM BUTTONS WITH ICONS PORTLET-->
                     <div class="widget" style="width:40%; float:left;">
                        <div class="widget-title">
                           <h4><i class="icon-reorder"></i> Kısayollar</h4>
                           <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           </span>
                        </div>
                        <div class="widget-body">
                           <div class="row-fluid">
                              <a href="yonetici_listesi.php" class="icon-btn span3">
                                 <i class="icon-group"></i>
                                 <div>Yöneticiler</div>
                                 <?php
								 $bilgi= mysql_query("SELECT * FROM yonetici");
								 $mevcut = mysql_num_rows($bilgi);
								 ?>
                                 <span class="badge badge-important"><?=$mevcut?></span>
                              </a>
                              <a href="etkinlik_listele.php" class="icon-btn span3">
                                 <i class="icon-calendar"></i>
                                 <div>Etkinlikler</div>
                                 <?php
								 $bilgi= mysql_query("SELECT * FROM etkinlikler");
								 $mevcut = mysql_num_rows($bilgi);
								 ?>
                                 <span class="badge badge-success"><?=$mevcut?></span>
                              </a>
                             
                              <a href="faliyet_listele.php" class="icon-btn span3">
                                 <i class="icon-sort"></i>
                                 <div>Faliyetler</div>
                                 <?php
								 $bilgi= mysql_query("SELECT * FROM faliyetler");
								 $mevcut = mysql_num_rows($bilgi);
								 ?>
                                 <span class="badge badge-important"><?=$mevcut?></span>
                              </a>
                           
                              
                              <a href="mesajlar.php" class="icon-btn span3">
                                 <i class="icon-envelope"></i>
                                 <div>Gelen Mesajlar</div>
                                 <?php
								 $bilgi= mysql_query("SELECT * FROM iletisim");
								 $mevcut = mysql_num_rows($bilgi);
								 ?>
                                 <span class="badge badge-info"><?=$mevcut?></span>
                              </a>
                              </div>
                              
                              
                              <div class="row-fluid">
                              <a href="video_listele.php" class="icon-btn span3">
                                 <i class="icon-facetime-video"></i>
                                 <div>videolar</div>
                                 <?php
								 $bilgi= mysql_query("SELECT * FROM video");
								 $mevcut = mysql_num_rows($bilgi);
								 ?>
                                 <span class="badge badge-important"><?=$mevcut?></span>
                              </a>
                          
                             
                             
                              <a href="destekleyenler_listele.php" class="icon-btn span3">
                                 <i class="icon-resize-small"></i>
                                 <div>Destekleyenler</div>
                                 <?php
								 $bilgi= mysql_query("SELECT * FROM destekleyenler");
								 $mevcut = mysql_num_rows($bilgi);
								 ?>
                                 <span class="badge badge-info"><?=$mevcut?></span>
                              </a>
                              <a href="foto_listele.php" class="icon-btn span3">
                                 <i class="icon-camera"></i>
                                 <div>Galeri</div>
                                 <?php
								 $bilgi= mysql_query("SELECT * FROM fotograf_galeri");
								 $mevcut = mysql_num_rows($bilgi);
								 ?>
                                 <span class="badge badge-info"><?=$mevcut?></span>
                              </a>
                              
                              <a href="manset_listele.php" class="icon-btn span3">
                                 <i class="icon-picture"></i>
                                 <div>Manşetler</div>
                                 <?php
								 $bilgi= mysql_query("SELECT * FROM manset");
								 $mevcut = mysql_num_rows($bilgi);
								 ?>
                                 <span class="badge badge-important"><?=$mevcut?></span>
                              </a>
                              
                              <!--
                              <a href="haber_listele.php" class="icon-btn span3">
                                 <i class="icon-cloud"></i>
                                 <div>Haberler</div>
                                 <?php
								 $bilgi= mysql_query("SELECT * FROM haberler");
								 $mevcut = mysql_num_rows($bilgi);
								 ?>
                                 <span class="badge badge-important"><?=$mevcut?></span>
                              </a>
                             --> 
                            
                           
                           </div>
                           
                           <div class="row-fluid">
                            <a href="uye_listele.php" class="icon-btn span3">
                                 <i class="icon-user"></i>
                                 <div>Üye Yönetimi</div>
                                 <?php
								 $bilgi= mysql_query("SELECT * FROM uyeler");
								 $mevcut = mysql_num_rows($bilgi);
								 ?>
                                 <span class="badge badge-important"><?=$mevcut?></span>
                              </a>
                           
                              
                              <a href="sayfa_listele.php" class="icon-btn span3">
                                 <i class="icon-edit"></i>
                                 <div>Sayfalar</div>
                              </a>
                           
                              <a href="site_ayar.php" class="icon-btn span3">
                                 <i class="icon-cogs"></i>
                                 <div>Site Ayarları</div>
                              </a>
                              
                           </div>
                              
                           </div>
                        </div>
                     </div>
                     <!-- END CUSTOM BUTTONS WITH ICONS PORTLET-->
                     
                     <div class="widget" style="width:40%; margin-left:20px; float:left;">
                     
                     
                     	<div class="widget-title">
                           <h4><i class="icon-bar-chart"></i> İletişim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="mesajlar.php"> Tümü</a></h4>
                           <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           </span>
                        </div>
                        
                        
                        <div class="widget-body">
                        
                        <table class="table table-hover">
                              
                              <tbody>
                              
                              <tr>
                              		<td><strong>Ad Soyad</strong></td>
                                    <td><strong>Mail Adresi</strong></td>
                                    <td><strong>Tarih</strong></td>
                                 </tr>
                              
                              <?php
						    $kategori_cek=mysql_query("select * from iletisim order by id desc limit 7");
							while($kategori_dizi=mysql_fetch_array($kategori_cek))
							{
						   ?>
                              
                                 <tr>
                                    <td><?=$kategori_dizi['ad']?></td>
                                    <td><?=$kategori_dizi['mail']?></td>
                                    <td><?=$kategori_dizi['tarih']?></td>
                                 </tr>
                                 
                                 
                                 <?php
							}
							?>
                              </tbody>
                           </table>
                        
                        </div>
                     
                  
                     </div>
                     
                     
                     <div class="widget" style="width:40%; margin-left:20px; float:left;">
                     
                     
                     	<div class="widget-title">
                           <h4><i class="icon-bar-chart"></i> E-Bülten&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="ebulten.php"> Tümü</a></h4>
                           <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           </span>
                        </div>
                        
                        
                        <div class="widget-body">
                        
                        <table class="table table-hover">
                              
                              <tbody>
                              
                              <tr>
                                    <td><strong>Mail Adresi</strong></td>
                                    <td><strong>Tarih</strong></td>
                                 </tr>
                              
                              <?php
						    $kategori_cek=mysql_query("select * from ebulten order by id desc limit 7");
							while($kategori_dizi=mysql_fetch_array($kategori_cek))
							{
						   ?>
                              
                                 <tr>
                                    <td><?=$kategori_dizi['mail']?></td>
                                    <td><?=$kategori_dizi['tarih']?></td>
                                 </tr>
                                 
                                 
                                 <?php
							}
							?>
                              </tbody>
                           </table>
                        
                        </div>
                     
                  
                     </div>
                     
                     
                        
				</div>
				<!-- END PAGE CONTENT-->
                
                
			</div>
			<!-- END PAGE CONTAINER-->	
            
            	
		</div>
		<!-- END PAGE -->
        
        
	</div>
	<!-- END CONTAINER -->
    
    
    
	<!-- BEGIN FOOTER -->
	<?php include("footer.php") ;?>
	<!-- END FOOTER -->
    
    
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->
	<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>	
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->	
	<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>		
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/excanvas.js"></script>
	<script src="assets/plugins/respond.js"></script>	
	<![endif]-->	
	<script src="assets/plugins/breakpoints/breakpoints.js" type="text/javascript"></script>	
	<!-- IMPORTANT! jquery.slimscroll.min.js depends on jquery-ui-1.10.1.custom.min.js -->	
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery.blockui.js" type="text/javascript"></script>	
	<script src="assets/plugins/jquery.cookie.js" type="text/javascript"></script>
	<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>	
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>	
	<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
	<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
	<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
	<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
	<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
	<script src="assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>	
	<script src="assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery.peity.min.js" type="text/javascript"></script>	
	<script src="assets/plugins/jquery-knob/js/jquery.knob.js" type="text/javascript"></script>	
	<script src="assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
	<script src="assets/plugins/bootstrap-daterangepicker/date.js" type="text/javascript"></script>
	<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>		
	<script src="assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
	<script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="assets/scripts/app.js" type="text/javascript"></script>
	<script src="assets/scripts/index.js" type="text/javascript"></script>			
	<!-- END PAGE LEVEL SCRIPTS -->	
	<script>
		jQuery(document).ready(function() {		
			App.init(); // initlayout and core plugins
			Index.init();
			Index.initJQVMAP(); // init index page's custom scripts
			Index.initKnowElements(); // init circle stats(knob elements)
			Index.initPeityElements(); // init pierty elements
			Index.initCalendar(); // init index page's custom scripts
			Index.initCharts(); // init index page's custom scripts
			Index.initChat();
			Index.initDashboardDaterange();
			Index.initIntro();
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
