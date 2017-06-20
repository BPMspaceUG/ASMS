<!doctype html>
<?php
// include BPMspaceReplacer

	include_once "../REPLACER/inc/class_replacer.inc.php"; 
	$language ='en';

	$RP = new RePlacer();

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
    <div class="row">
        <div class="col-sm-8"></div>
        <div class="col-sm-4"><img src="../images/BPMspace_logo.png"></div>
    </div>
</div>
<div id="impress" >

    <!--
        Each step of the presentation should be an element inside the `#impress` with a class name
        of `step`. These step elements are positioned, rotated and scaled by impress.js, and
        the 'camera' shows them on each step of the presentation.
        
        The `id` attribute of the step element is used to identify it in the URL, but it's optional.
        If it is not defined, it will get a default value of `step-N` where N is a number of slide.
        This step is auto-assigned the id "step-1". You can also use `#step-1` in a link, to 
        point directly to this particular step.
        
        Positioning information is passed through data-* attributes.
        
        In the example below we only specify x and y position of the step element with `data-x="-1000"`
        and `data-y="-1500"` attributes. This means that **the center** of the element (yes, the center)
        will be positioned in point x = -1000px and y = -1500px of the presentation 'canvas'. It will not 
        be rotated or scaled.
        
        The "step" class is what *must* be used for every "slide". In this example we also use the "slide"
        class, which adds a rectangle with some background and makes this presentation look like a traditional
        powerpoint slide show. The "slide" class is entirely optional and indeed you wouldn't use it for
        your cooler impress.js presentations.
    -->

<?php
    //            include_once "../REPLACER/inc/class_replacer.inc.php";
                if (!isset($_GET["lang"]) || !isset($_GET["ato"]) || !isset($_GET["pages"])) {
                  echo "<p><a href=\"http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . "?lang=de&ato=ico&pages=20\">Deutsch - 20 Seiten</a></p>
                        <p><a href=\"http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . "?lang=de&ato=ico&pages=50\">Deutsch - 50 Seiten</a></p>
                        <p><a href=\"http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . "?lang=de&ato=ico&pages=100\">Deutsch - 100 Seiten</a></p>";
                }

                $language =$_GET["lang"];
                $other_language ='en';
                if ($language == 'de'){
                    $other_language = 'en';
                    }
                else {$other_language = 'de';}
                
                $ato =$_GET["ato"];
                $course_name ='TEST COURSE';
             
             $slides = $_GET["pages"];
             
             for ($i=0; $i < $slides; $i++) { 
              $i = sprintf('%02d',$i);
               echo "<div class=\"step slide\">
      ".$RP->replace($RP,"Test Slide $i",$language)."
    </div>";
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
