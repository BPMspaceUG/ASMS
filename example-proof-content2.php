<!-- Put the slides in a container and set a focus on it for surrounding elements http://jmpressjs.github.io/jmpress.js/examples/container.html-->
<?php 
require_once "_header.inc.php";
require_once './../DB_config/login_credentials_DB_bpmspace_asms_RO.inc.php';
  
      

      // create DB connection object
      $db = new mysqli(
        $config['db']['host'],
        $config['db']['user'],
        $config['db']['password'],
        $config['db']['database']
      );
      /* check connection */
      if($db->connect_errno){
        printf("Connect failed: %s", mysqli_connect_error());
        exit();
      }
      $db->query("SET NAMES utf8");
      

if (isset($_GET["set"])) {
  $set = $_GET["set"];
 
}
if (isset($_GET["lang"])) {
  $language = $_GET["lang"];
}


// alt language for language switch on logo click
$other_language ='en';
if ($language == 'de'){
  $other_language = 'en';
}
else {$other_language = 'de';
}

?>
<a href="javascript:hash();"><img src="../images/BPMspace_logo.png"></img></a>
<!-- http://se02.ico-cert.org:4040/BPMspace/ASMS/example_simple.php?lang=en&ato=ico#/step-2 -->
<script type="text/javascript">function hash(){
 // console.log('test');
  window.location = "<?php echo $_SERVER["SCRIPT_NAME"] . "?lang=" . $other_language . "&" . "set=" . $set . "&ato=" . $ato ; ?>" + window.location.hash;
}
</script>

<!-- Modal -->

<form  method="get" action="index.php">
  <input type="hidden" name="lang" value="<?php echo $_GET['lang']; ?>">
  <input type="hidden" name="set" value="<?php echo $_GET['set']; ?>">
  <input type="hidden" name="ato" value="<?php echo $_GET['ato']; ?>">
  <input type="submit" value="Back"><br>
</form> 



<div id="impress" >


  <?php

  // Prepare SQL query
    $query = "SELECT replacer_id FROM asms_presentation_slides where asms_presentation_id = $set order by asms_presentation_slides.order ASC";
    
    $result = $db->query($query);

    // Position of the first slide
    $i=0;



  // return the results as slides
    while ($row = $result->fetch_assoc()) {
      // Position of the next slide
    $i+= 2000;

      $rep = $RP->replace($RP,$row['replacer_id'],$language,'1');
      
        echo "<div class=\"step slide\" data-x=\"$i\" data-y=\"0\">".$rep."<div class=\"notes\">The notes go here</div>"."</div>";

 
    }




    ?>




  </div>

<!--
    Add navigation-ui controls: back, forward and a select list.
    Add a progress indicator bar (current step / all steps)
    Add the help popup plugin
  -->

  <?php require_once "_footer.inc.php"; ?>