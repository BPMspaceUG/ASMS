
<?php

include_once '_header.inc.php';

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






<div id="impress">

<?php



  // Prepare SQL query
  $query = "SELECT * FROM bpmspace_replacer_v1.replacer where replacer_pattern like '$pattern' order by replacer_id DESC ;";
  
  //execute query
  $res = $RP->getDB()->query($query);
  $i = 0;
  // return the results as slides
  while ($row = $res->fetch_assoc()) {
  	
  	$i+= 2000;
     $ret = $row["replacer_language_$language"];
     $results_array[] = $row;
     $parts = explode("#!#", $ret); 
     if(count($parts)>1){
        $rep = $RP->replace($RP,$parts[1],'de');
        echo "<div class=\"step slide\"  data-x=\"$i\" data-y=\"0\">".$parts[0].$rep.$parts[2]."</div>";
     }
     else
      echo "<div class=\"step slide\" data-x=\"$i\" data-y=\"0\">".$parts[0]."</div>";
  }
      
?>

</div>
<?php 
include_once '_footer.inc.php';
?>
