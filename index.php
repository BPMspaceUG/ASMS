<!doctype html>
<html ng-app>
   
   <head>
    <!-- <script src = "../js/angular-sanitize.min.js"></script>-->
      <script src = "../js/angular.min.js"></script>
      <!-- For testing curently not used -->
      <script src= "../js/jquery-2.1.4.min.js"></script>
      <script src= "../js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <!-- !! -->
   </head>
   
   <body>


      <form class="form-horizontal" method="get" action="example-proof-content.php">

           <div>
         <label>Language:</label>
         <input id="lan" style ="width:400px"  type = "text" name= "lang" value="<?php if(isset($_GET["lang"])){
          echo $_GET["lang"];} else {echo 'de';}
          ?>">
         <hr />
         

      </div> 
      <div>
         <label>Pattern:</label>
          <input style ="width:400px"  type = "text" name= "pattern" value="<?php if(isset($_GET["pattern"])){
          echo $_GET["pattern"];} else {echo 'Test';}
          ?>">
         <hr />
         
      </div>

      <div>
        
        <label> ATO: </label>
         <input style ="width:400px"  type = "text" name= "ato" value="<?php if(isset($_GET["ato"])){
          echo $_GET["ato"];} else {echo 'orga1';}
          ?>">
        <hr/>

      </div>
        <div class="form-group">
          <label for="inputPassword" class="col-sm-6 control-label"></label>
          <div class="col-sm-6">
            <button type="submit">&rarr; Absenden</button>
          </div>
        </div> 

      </form>


   </body>
</html>