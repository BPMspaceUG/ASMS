

<?php 
require_once "_header.inc.php";


	$other_language ='en';
	$ato ='ico';
	$course_name ='TEST COURSE';
	
	switch (htmlspecialchars($_GET["lang"]))
	{
    case "de":
        {
		$language ='de';	
		$other_language ='en';	
        break;
        }
    case "en":
        {
		$language ='en';	
		$other_language ='de';	
        break;
        }
	}		
	
	switch (htmlspecialchars($_GET["ato"]))
	{
    case "orga1":
        {
		$ato ='orga1';	
        break;
        }
    case "orga2":
        {
		$ato ='orga2';	
        break;
        }
	}	

	$ALTERNATIV_URL = $_SERVER["SCRIPT_NAME"] . "?ato=" . $ato . "&" . "lang=" . $other_language ;
	
?>

		<div class="container-fluid">
			<div class="row slider_header margin-top-10">
				<div class="col-sm-6">

				</div>
				<div class="col-sm-2">
				    <div class="col-md-12 pull-right">

					</div>
				</div>
				<div id="background-logo" class="col-sm-4 height-300 background-logo"></div>
			</div>
		</div>
		
		<div class="container-fluid">
			<div id="impress">
				<div class="no-support-message">
					Your browser doesn't support impress.js.  Try Chrome or Safari.
				</div>
					
				<div class="step" data-x="0" data-y="0">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12 tag-box-slide">
								<div class="breadcrumb">
									<?php echo "<h1>" . $course_name . " <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i> SLIDE 1</h1>" ?>
								</div>
								<div class="slidercontent">
									<?php echo $RP->replace($RP,'3456789',$language);?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="step" data-x="1024" data-y="0">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12 tag-box-slide">
								<div class="breadcrumb">
									<?php echo "<h1>" . $course_name . " <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i> SLIDE 2</h1>" ?>
								</div>
								<div class="slidercontent">
									<?php echo $RP->replace($RP,'Test Slide 2',$language);?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="step" data-x="2048" data-y="0">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12 tag-box-slide">
								<div class="breadcrumb">
									<?php echo "<h1>" . $course_name . " <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i> SLIDE 3</h1>" ?>
								</div>
								<div class="slidercontent">
									<?php echo $RP->replace($RP,'Test Slide 3',$language);?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="step" data-x="3072" data-y="0" data-scale="1">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12 tag-box-slide">
								<div class="breadcrumb">
									<?php echo "<h1>" . $course_name . " <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i> SLIDE 4</h1>" ?>
								</div>
								<div class="slidercontent">
									<?php echo $RP->replace($RP,'Test Slide 4',$language);?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="step" data-x="4096" data-y="0" data-rotate="0">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12 tag-box-slide">
								<div class="breadcrumb">
									<?php echo "<h1>" . $course_name . " <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i> SLIDE 5</h1>" ?>
								</div>
								<div class="slidercontent">
									<?php echo $RP->replace($RP,'Test Slide 5',$language);?>
									</div>
							</div>
						</div>
					</div>
				</div>
				<div class="step" data-x="5120" data-y="0" data-rotate="0">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12 tag-box-slide">
								<div class="breadcrumb">
									<?php echo "<h1>" . $course_name . " <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i> SLIDE 6</h1>" ?>
								</div>
								<div class="slidercontent">
									<?php echo $RP->replace($RP,'Test Slide 6',$language);?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="step" data-x="6144" data-y="0" data-rotate="0">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12 tag-box-slide">
								<div class="breadcrumb">
									<?php echo "<h1>" . $course_name . " <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i> SLIDE 7</h1>" ?>
								</div>
								<div class="slidercontent">
									<?php echo $RP->replace($RP,'Test Slide 8',$language);?>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="step" data-x="7168" data-y="0" data-rotate="0">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12 tag-box-slide">
								<div class="breadcrumb">
									<?php echo "<h1>" . $course_name . " <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i> SLIDE 8</h1>" ?>
								</div>
								<div class="slidercontent">
									<?php echo $RP->replace($RP,'Test Slide 9',$language);?>
								</div>
							</div>
						</div>
					</div>
				</div> 
	
				<div class="step" data-x="8192" data-y="0" data-rotate="0">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12 tag-box-slide">
								<div class="breadcrumb">
									<?php echo "<h1>" . $course_name . " <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i> SLIDE 9</h1>" ?>
								</div>
								<div class="slidercontent">
									<?php echo $RP->replace($RP,'Test Slide 10',$language);?>
								</div>
							</div>
						</div>
					</div>
				</div> 
	
				<div class="step" data-x="9216" data-y="0" data-rotate="0">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12 tag-box-slide">
								<div class="breadcrumb">
									<?php echo "<h1>" . $course_name . " <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i> SLIDE 10</h1>" ?>
								</div>
								<div class="slidercontent">
									<?php echo $RP->replace($RP,'Test Slide 11',$language);?>
								</div>
							</div>
						</div>
					</div>
				</div> 
				
				<div class="step" data-x="10240" data-y="0" data-rotate="0">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12 tag-box-slide">
								<div class="breadcrumb">
									<?php echo "<h1>" . $course_name . " <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i> SLIDE 12</h1>" ?>
								</div>
								<div class="slidercontent">
									<?php echo $RP->replace($RP,'Test Slide 12',$language);?>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="step" data-x="11264" data-y="0" data-rotate="0">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12 tag-box-slide">
								<div class="breadcrumb">
									<?php echo "<h1>" . $course_name . " <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i> SLIDE 11</h1>" ?>
								</div>
								<div class="slidercontent">
									<?php echo $RP->replace($RP,'Test Slide 7',$language);?>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
    </body>

	<script type="text/javascript" src="./impress.js/extras/markdown/markdown.js"></script>
	
   <!-- JS Global Compulsory -->
	<script type="text/javascript" src="./assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="./assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="./assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="./impress.js/js/impress.js"></script>
	<script>impress().init();</script>
</html>