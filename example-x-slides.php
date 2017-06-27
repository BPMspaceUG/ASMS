<?php

require_once "_header.inc.php";

 $language =$_GET["lang"];
                $other_language ='en';
                if ($language == 'de'){
                    $other_language = 'en';
                    }
                else {$other_language = 'de';}
                
                $ato =$_GET["ato"];
                $course_name ='TEST COURSE';


?>
<div><a href="javascript:hash();">Language switch</a></div>
      <!-- http://se02.ico-cert.org:4040/BPMspace/ASMS/example_simple.php?lang=en&ato=ico#/step-2 -->
      <script type="text/javascript">function hash(){
      console.log('test');
    window.location = "<?php echo $_SERVER["SCRIPT_NAME"] . "?ato=" . $ato . "&" . "lang=" . $other_language ; ?>" + window.location.hash;
  }
    </script>
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
      if (!isset($_GET["pages"])) {
        echo "<p class=\"col-sm-12\"><a href=\"http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . "?pages=20\">20 Seiten</a></p>
        <p class=\"col-sm-12\"><a href=\"http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . "?pages=50\">50 Seiten</a></p>
        <p class=\"col-sm-12\"><a href=\"http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . "?pages=100\">100 Seiten</a></p>";
      }else{
        if (isset($_GET["lang"])) {
          $language = $_GET["lang"];
        }

       
        $slides = $_GET["pages"];

        for ($i=1; $i <= $slides; $i++) { 
         $i = sprintf('%02d',$i);
         echo "<div class=\"step slide\">
         ".$RP->replace($RP, "Test Slide $i", $language)."
       </div>";
       
     }
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

  <?php require_once "_footer.inc.php"; ?>