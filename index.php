<!doctype html>
<html ng-app>
   
   <head>
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
      <div id="parentDiv">
      <div>
         <label>Pattern:</label>
          <input style ="width:400px"  type = "text" name= "pattern" value="<?php if(isset($_GET["pattern"])){
          echo $_GET["pattern"];} else {echo 'Test';}
          ?>">
         <hr />
         
      </div>
      <button type="button" onclick="multiPattern()">Another pattern</button>
      <script> 
      	var i = 1;
      function multiPattern(){
      	
          if(i<10){
          	console.log(i);
          	i=i+1;
          var input = document.createElement("input");
          input.type = "text";
          input.name = "pattern".concat(i);
          var parent = document.getElementById("parentDiv");
          parent.appendChild(input); // put it into the DOM
          
      }
      }
      </script>

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
            <button type="reset">Reset</button>
          </div>
        </div> 

      </form>


<script type="text/javascript"></script>

   </body>
</html>