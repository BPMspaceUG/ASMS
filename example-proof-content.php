<!doctype html>
<?php
// include BPMspaceReplacer

	include_once "../REPLACER/inc/class_replacer.inc.php"; 
 // include_once "../DB_config/login_credentials_DB_bpmspace_replacer_RO.inc.php";
	$language ='de';

?>


<html>

<head>
    <meta charset="utf-8" />
    <title>TEST ASMS</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/xeditable.css">
  <link rel="stylesheet" href="../css/select.min.css">
  <link rel="stylesheet" href="./impress.js/extras/highlight/styles/github.css">
  <link rel="stylesheet" href="./impress.js/extras/mermaid/mermaid.forest.css">
    
    <link href="css/asms.css" rel="stylesheet" />
</head>

<body class="impress-not-supported">

<!--
    This fallback message is only visible when there is `impress-not-supported` class on body.
-->

<div class="fallback-message">
    <p>Your browser <b>doesn't support the features required</b> by impress.js, so you are presented with a simplified version of this presentation.</p>
    <p>For the best experience please use the latest <b>Chrome</b>, <b>Safari</b> or <b>Firefox</b> browser.</p>
</div>

<div class="container">

    <!--Row with two equal columns-->
</div>
<div id="impress" >

    

<?php


  $RP = new RePlacer();
  // Set the language for the Replacer
  $language = $_GET["lang"];
  if ($language == "") {
    $language = "de";
  }
  //Read the Pattern for the Replacer
  $pattern = $_GET["pattern"]."%";
  // Prepare SQL query
  $query = "SELECT * FROM bpmspace_replacer_v1.replacer where replacer_pattern like '$pattern';";
  
  //execute query
  $res = $RP->getDB()->query($query);
  // return the results as slides
  while ($row = $res->fetch_assoc()) {
     $ret = $row["replacer_language_$language"];
       $results_array[] = $row;

        echo "<div class=\"step slide\">$ret</div>";
      }
      
?>

   

	
</div>

<!--
    Add navigation-ui controls: back, forward and a select list.
    Add a progress indicator bar (current step / all steps)
    Add the help popup plugin
-->
<div id="impress-toolbar"></div>

<div class="impress-progressbar"><div></div></div>
<div class="impress-progress"></div>

<div id="impress-help"></div>

<!-- Extra modules
     Load highlight.js, mermaid.js and markdown.js from extras.
     If you're curious about details, these are initialized in src/plugins/extras/extras.js -->
<script type="text/javascript" src="./impress.js/extras/markdown/markdown.js"></script>
<script type="text/javascript" src="./impress.js/extras/impress-console/js/impressConsole.js"></script>
<script type="text/javascript">
  // For impressConsole, we unfortunately must also set the path to a mandatory css file
  // which is relative to this html file.
  // See https://github.com/regebro/impress-console/issues/19
  var impressConsoleCss = './impress.js/extras/impress-console/css/impressConsole.css';
</script>


<!--
    To make all described above really work, you need to include impress.js in the page.
    You also need to call a `impress().init()` function to initialize impress.js presentation.
    And you should do it in the end of your document. 
-->
<script type="text/javascript" src="./impress.js/js/impress.js"></script>
<script>impress().init();</script>

</body>
</html>
