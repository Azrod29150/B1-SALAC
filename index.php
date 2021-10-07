<?php
	isset($_GET["page"])?$page=$_GET["page"]:$page="accueil";

	function Error($id,$reason){
		print("<h1>Error $id</h1>\<center><h2>$reason</h2></center>");
		exit();
	}

	$pages=[
		"Accueil"	=>	[
			'href'		=>	'accueil',
			'content'	=>	'{PAGE}'
		],
		"Coordonnées"	=>	[
			'href'		=>	'coordonnees',
			'content'	=>	'{PAGE}'
		],
	];

	$Residences=[
		0	=>	[
			'name'		=>	'Ampere',
			'address'	=>	"Rue de la source \n 29150 CHATEAULIN",
			'inf'		=>	[
				'Ascenseur'	=>	0,
				'Parking'	=>	1,
			],
			'note'		=>	2
		],
		1	=>	[
			'name'		=>	'Fresnel',
			'address'	=>	"Rue des sternes \n 29000 QUIMPER",
			'inf'		=>	[
				'Ascenseur'	=>	1,
				'Parking'	=>	0,
			],
			'note'		=>	3
		],
		2	=>	[
			'name'		=>	'Coulomb',
			'address'	=>	"Rue des oliviers \n 29200 BREST",
			'inf'		=>	[
				'Ascenseur'	=>	1,
				'Parking'	=>	1,
			],
			'note'		=>	4
		]
	];

	foreach($Residences as $rid => $inf){
		$pages[$inf['name']]=['id'=>$rid,'residence'=>1,'content'=>'{PAGE}'];
	}
?>

<html>
<head>
	<title>Location Appartement [<?= strtoupper($page) ?>]</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/FichierDeStyle.css">
	<script src="assets/js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

	
</head>
<body>
	<script>
		$( document ).ready(function() {
			$('li').mouseover(function(){
				var resid=$(this).attr('page')
				if($(this).attr('resid')=='1'){
					$('#img_prev').css('background-image',"url('assets/img/Photos/"+resid+"/"+resid+"-Vue.jpg'")
					$('#img_prev').css('opacity',1)
				}
			});
			$('li').mouseleave(function(){
				$('#img_prev').css('opacity',0)
			});
		});
	</script>

	<ul class="LesLiens" id="navbar">
		<h3>Les résidences</h3>
		<?php
			foreach($pages as $pid => $inf){
				$href='index?page={URL}';
				$resid=0;
				$active_class='';

				if(isset($inf['residence'])){
					$href='index?page=residence&id='.$inf['id'];
					$resid=1;
					
					if(isset($_GET['id'])){
						if(strtolower($Residences[$_GET['id']]['name'])==strtolower($pid)){
							$active_class='active';
						}
					}
				}else{
					if(strtolower($page)==strtolower($inf['href'])){
						$active_class='active';
					}
				}

				$result="
					<li class='{ACTIVECLASS}' resid='{RESID}' page='{PAGE}'>
						<a href='".$href."'>
							{CONTENT}
						</a>
					</li>
				";

				$result=str_replace('{CONTENT}',$inf['content'],$result);
				$result=str_replace('{ACTIVECLASS}',$active_class,$result);
				$result=str_replace('{RESID}',$resid,$result);
				$result=str_replace('{PAGE}',$pid,$result);
				$result=str_replace('{URL}',isset($inf['href'])?$inf['href']:$pid,$result);

				print($result);
			}
		?>
		<div class="img_prev">
			<center>
				<div id="img_prev"></div>
			</center>
		</div>
	</ul>
	
	<?php 
		include_once 'pages/header.php';
		file_exists("pages/$page.php")?include("pages/$page.php"):Error(404,'Page non trouvé !');
		include_once 'pages/footer.php';
	?>