<?php
	include_once "../REPLACER/inc/class_replacer.inc.php"; 
	$language = 'de';
  $ato = 'orga1' ;
  
  $pattern = '';
  
	$RP = new RePlacer();


?>
	<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">

	<title>BPMSpace ASMS</title>

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap-theme.min.css">

  <!-- Loads the default settings: Change if you want specific stylesheets of other ATOs -->
<?php
if (isset($_GET["ato"])) {
  $ato = $_GET["ato"];
  echo   "<link rel=\"stylesheet\" href=\"css/$ato.css\">";
}
else{
?>
  <link rel="stylesheet" href="css/default.css">
<?php
}
?>
<!-- 
  
  
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="impress.js/extras/highlight/styles/github.css">
  <link rel="stylesheet" href="impress.js/extras/mermaid/mermaid.forest.css">
  <link href="impress.js/examples/classic-slides/css/classic-slides.css" rel="stylesheet" />
 -->
 
    
 </head>
<body>
