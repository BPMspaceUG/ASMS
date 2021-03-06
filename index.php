<!doctype html>
<html ng-app>
   
   <head>

   <!-- Das neueste kompilierte und minimierte CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optionales Theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">


      </head>
   
   <body>

<div class="container">
      <form class="form" method="get" action="example-proof-content2.php">

           <div class="form-group">
         <label>Language:</label>
         <input class="form-control" id="lan" style ="width:400px"  type = "text" name= "lang" value="<?php if(isset($_GET["lang"])){
          echo $_GET["lang"];} else {echo 'de';}
          ?>">
         <hr />
         

      </div> 
      
      
      <div id="parentDiv">
      <label>Set:</label>
      <select class="form-control" name="set">
	       <?php 

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

      $setQuery = "SELECT * FROM asms_presentation";
      $res = $db->query($setQuery);

      while ($row = $res->fetch_assoc()) {

         
        $val = $row['asms_presentation_id'];
        echo "<option value=\"$val\">" . $row['title'] . "</option>";
      }
         ?>
      </select>
      </div>
    
    <hr />
      <div>
        
        <label> ATO: </label>
         <input class="form-control" style ="width:400px"  type = "text" name= "ato" value="<?php if(isset($_GET["ato"])){
          echo $_GET["ato"];} else {echo 'orga1';}
          ?>">
        <hr/>

      </div>
        <div class="form-group">
          <label class="col-sm-6 control-label"></label>
          <div class="col-sm-6">
            <button class="btn" type="submit">&rarr; Absenden</button>
            <button class="btn" type="reset">Reset</button>
          </div>
        </div> 

      </form>
</div>

<input type="button" name="index2" value="Development mode" class="btn btn-md" onclick="document.location.href='index2.php'">

<script type="text/javascript"></script>
<!-- Das neueste kompilierte und minimierte JavaScript -->
<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

   </body>
</html>