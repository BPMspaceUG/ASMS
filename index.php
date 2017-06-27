<!doctype html>
<html ng-app>
   
   <head>
    <!-- <script src = "../js/angular-sanitize.min.js"></script>-->
      <script src = "../js/angular.min.js"></script>
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
<div ng-if="!lang || !pattern"><p>Bitte zuererst überall was eintragen</p></div>
<div ng-if="lang && pattern">
        <div class="form-group">
          <label for="inputPassword" class="col-sm-6 control-label"></label>
          <div class="col-sm-6">
            <button type="submit">&rarr; Absenden</button>
          </div>
        </div>
</div>  
      </form>
   
   </body>
</html>