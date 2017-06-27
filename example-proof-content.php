<?php 
require_once "_header.inc.php";


 $language =$_GET["lang"];
                $other_language ='en';
                if ($language == 'de'){
                    $other_language = 'en';
                    }
                else {$other_language = 'de';}
                $pattern= $_GET["pattern"];
                $ato =$_GET["ato"];
                $course_name ='TEST COURSE';

?>
<a href="javascript:hash();"><img src="../images/BPMspace_logo.png"></img></a>
      <!-- http://se02.ico-cert.org:4040/BPMspace/ASMS/example_simple.php?lang=en&ato=ico#/step-2 -->
      <script type="text/javascript">function hash(){
      console.log('test');
    window.location = "<?php echo $_SERVER["SCRIPT_NAME"] . "?ato=" . $ato . "&" . "lang=" . $other_language . "&pattern=" . $pattern ; ?>" + window.location.hash;
  }
    </script>
<div id="impress" >

    

<?php

  // Set the language for the Replacer
  if (isset($_GET["lang"])) {
    $language = $_GET["lang"];
  }
  //Read the Pattern for the Replacer
  if (!isset($_GET["pattern"])){
  	echo "Bitte Pattern setzen";
  }
  else{
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