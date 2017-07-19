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
if (isset($_GET["ato"])) {
  $ato = $_GET["ato"];
}

// alt language for language switch
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
    $query = "SELECT asms_slide_id FROM asms_presentation_slides where asms_presentation_id = $set order by asms_presentation_slides.order ASC";
    
    $result = $db->query($query);

  //execute query

    // $rep = $RP->replace($RP,1,'de',1);
    // //var_dump($rep);
    // echo "<div class=\"step slide\" data-x=\"0\" data-y=\"0\">".$rep."</div>";
    // $rep = $RP->replace($RP,2,'de',1);
    // echo "<div class=\"step slide\" data-x=\"2000\" data-y=\"0\">".$rep."</div>";
    // $rep = $RP->replace($RP,3,'de',1);
    // echo "<div class=\"step slide\" data-x=\"4000\" data-y=\"0\">".$rep."</div>";
    $i=0;



  // return the results as slides
    while ($row = $result->fetch_assoc()) {
    $i+= 2000;
       $results_array[] = $row;
     //  var_dump($row['asms_slide_id']);
      $rep = $RP->replace($RP,$row['asms_slide_id'],'de','1');
      // var_dump($rep);
      // echo "<div class=\"step slide\" data-x=\"$i\" data-y=\"0\">".$rep."</div>";
      // //
      // $ret = $results_array[1]['asms_slide_id'];
      // var_dump($ret);
     
      // $parts = explode("#!#", $ret); 
      // if(count($parts)>1){
      //   $rep = $RP->replace($RP,$parts[1],'de',1);
      //   echo "<div class=\"step slide\" data-x=\"$i\" data-y=\"0\">".$parts[0].$rep.$parts[2]."</div>";
      // }
      // else
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