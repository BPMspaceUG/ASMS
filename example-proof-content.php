<?php 
require_once "_header.inc.php";

  if (isset($_GET["lang"])) {
    $language = $_GET["lang"];
  }
  if (isset($_GET["pattern"])) {
    $pattern = $_GET["pattern"]."%";
  }
  else {
    $_GET["pattern"] = $pattern."%";
  }
  if (isset($_GET["ato"])) {
    $ato = $_GET["ato"];
  }

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
      console.log('test');
    window.location = "<?php echo $_SERVER["SCRIPT_NAME"] . "?ato=" . $ato . "&" . "lang=" . $other_language . "&pattern=" . $pattern ; ?>" + window.location.hash;
  }
    </script>

    <!-- Modal -->

  <form  method="get" action="index.php">
  <input type="hidden" name="lang" value="<?php echo $_GET['lang']; ?>">
  <input type="hidden" name="pattern" value="<?php echo $_GET['pattern']; ?>">
  <input type="hidden" name="ato" value="<?php echo $_GET['ato']; ?>">
  <input type="submit" value="Back"><br>
 </form> 

<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<div id="impress" >

    

<?php

  // Prepare SQL query
  $query = "SELECT * FROM bpmspace_replacer_v1.replacer where replacer_pattern like '$pattern' order by replacer_id DESC ;";
  
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

<?php require_once "_footer.inc.php"; ?>