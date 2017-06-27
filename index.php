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
         <input ng-model= "lang" style = "width:400px" type = "text" name= "lang" placeholder = "Enter a language here: eg. de or en">
         <hr />
         

      </div>
      <div>
         <label>Pattern:</label>
         <input ng-model= "pattern" style = "width:400px" type = "text" name= "pattern" placeholder = "Enter a pattern here: eg. Test or jeg">
         <hr />
         
      </div>

      <div>
        
        <label> ATO: </label>
        <input ng-model= "ato" style= "width:400px" type="text" name="ato" placeholder="Enter an ATO here: eg. orga1">
        <hr/>

      </div>
<div ng-if="!lang || !pattern || !ato"><p>Bitte zuererst überall was eintragen</p></div>
<div ng-if="lang && pattern && ato">
        <div class="form-group">
          <label for="inputPassword" class="col-sm-6 control-label"></label>
          <div class="col-sm-6">
            <button type="submit">&rarr; Absenden</button>
          </div>
        </div>
</div>  

      </fory<m>
   
   </body>
</html>