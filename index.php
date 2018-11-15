
<?php
    // if($LinksRoute=="../"){ $LinkRouteAdmin=""; }else{ $LinkRouteAdmin="./admin/"; }
$_SESSION['UserPrivilege']='Admin';
require_once("../medica/nmedical/Class/class_menu.php");
$usuario='admin';

?>

<link rel="stylesheet" type="text/css" href="style.css">
<!-- <link rel="stylesheet" type="text/css" href="style2.css"> -->

<script src="jquery-3.3.1.js"></script>
<script src="/medica/nmedical/js/bootstrap.min.js"></script>
<link href="/medica/nmedical/css/bootstrap.min.css" rel="stylesheet">
<!-- <link href="material-design-iconic-font.min.css" rel="stylesheet"> -->
<link href="navlateral.css" rel="stylesheet">

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>



<div class="wrapper">

<!-- 	<div class="one">
		<div class="logo full-reset all-tittles">
		    <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
		            EstudioApp - Historia Clínica

		    <figure>
		        <img src="../medica/nmedical/images/logo.jpg" alt="Biblioteca" class="img-responsive center-box" style="width:100%;">
		    </figure>
		    
		</div>
	</div> -->
	<div class="two">
		<!-- <div class="" style="margin-bottom: -1vh;"> -->
			<button type="button" style="margin-top: 1vh;"  id="hidemenu" class="btn btn-danger btn-xs">Menú</button>
			<button type="button" style="margin-top: 1vh;" id="showmenu" class="btn btn-success btn-xs">Menú</button>
    <div class="btn-group pull-right" role="group">
      
    
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> 
        <span class="glyphicon glyphicon-off"></span> <?php echo $usuario; ?> <span class="caret"></span>      
      </button>
      <ul class="dropdown-menu" role="menu">
        <!-- <li><a data-toggle="modal" href="#myModal"><span class="glyphicon glyphicon-wrench"></span> Modificar </a></li> -->
        <li><a href="cerrarsesion.php"><span class="glyphicon glyphicon-off"></span> Salir del Sistema</a></li>
      </ul>
    </div>
				<figure class="pull-right">
<!-- 		            <?php
		                if($_SESSION['UserPrivilege']=='Student'){
		                    $imgUser='user03';
		                }else if($_SESSION['UserPrivilege']=='Teacher'){
		                    $imgUser='user02';
		                }else if($_SESSION['UserPrivilege']=='Admin'){
		                    $imgUser='user01';
		                }else if($_SESSION['UserPrivilege']=='Personal'){
		                    $imgUser='user05';
		                }else{
		                    $imgUser='user';
		                }
		                echo '<img src="'.$LinksRoute.'assets/img/'.$imgUser.'.png" alt="user-picture" class="img-responsive img-circle center-box">';
		            ?> --> 
		            <img src="user04.png" alt="user-picture" class="img-responsive img-circle pull-right" width="12%" height="1%" style="margin-top: 1vh; margin-bottom: -4vh;">

        		</figure>

			
		<!-- </div> -->
	</div>
	<div class="three">
		<iframe  width="100%"  height="100%" src="" name="iframe_a"></iframe>
	</div> 
	<!-- <div class="four">4</div> -->
	<div class="five">

<!------ Include the above in your HEAD tag ---------->

	<!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->

		<div class="nav-side-menu">
    		<div class="brand">AppInnova - Historias Clínicas<br></div><br>
    		<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        	<div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="#">
                  <i class="zmdi zmdi-power"></i> Inicio
                  </a>
                </li>


                <?php
 				$enca_menu=new Menu();
                $cons=$enca_menu->encab_men_per_usu($usuario);
                for($i=0;$i<count($cons);$i++){
                	$id_sis=$cons[$i]['idgrupo'];?>
                  

                <li  data-toggle="collapse" data-target="#<?php echo $i ?>" class="collapsed active">
                    <a href="#"><!-- <i class="fa fa-gift fa-lg"></i> -->
					<?php echo $cons[$i]['nomgrupo']; ?>
					<span class="arrow"></span>
				    </a>
                    
                    <ul class="sub-menu collapse" id="<?php echo $i ?>">
					  	<?php $elcuerpo=new Menu();
                      	  	   $cuepo=$elcuerpo->cuerpo_menu($usuario,$id_sis);
                               for($e=0;$e<count($cuepo);$e++){?>

                        <li>
                        	<a href="<?php echo $cuepo[$e]['urlarchi']?>?usuario=<?php echo $usuario;?>" target="iframe_a">
                             <?php echo utf8_encode($cuepo[$e]['nompanta']);?>
                            </a>
                        </li>
						<?php } ?>
                    </ul>
                </li>
						<?php } ?>

                <li>
                  <a href="" title="Appinnova.com">
                    <span class="glyphicon glyphicon-info-sign"></span> AppInnova
                  </a>
                </li>

              
            </ul>
     	</div>
     </div>
</div>
		    
		    
	
	<div class="six">
		<div class="container-fluid pull-right">Desarrollado por AppInnova</div>
	</div>

</div>


<script type="text/javascript">

	$('#showmenu').hide();
	$('#hidemenu').click(function(){
		


		$('.three').css({
			  "grid-column": "1 / 8",
  			  "grid-row": "2 / 18",
  			  "z-index": "999"
		});


		$('.six').css({
			  "grid-column": "1 / 8",
  			  "grid-row": "18 / 19",
  			  "z-index": "999"
		});

$('#showmenu').show();
$(this).hide();

	});


// mostrar menu lateral
	$('#showmenu').click(function(){
		


		$('.three').css({
			  "grid-column": "2 / 8",
  			  "grid-row": "2 / 18",
  			  "z-index": "999"
		});


		$('.six').css({
			  "grid-column": "2 / 8",
  			  "grid-row": "18 / 19",
  			  "z-index": "999"
		});

$('#hidemenu').show();
$(this).hide();

	});


</script>



