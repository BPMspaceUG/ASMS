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
      <form class="form" method="get" action="example-proof-content.php">

           <div class="form-group">
         <label>Language:</label>
         <input class="form-control" id="lan" style ="width:400px"  type = "text" name= "lang" value="<?php if(isset($_GET["lang"])){
          echo $_GET["lang"];} else {echo 'de';}
          ?>">
         <hr />
         

      </div> 
      <div >
      <div id="parentDiv">
         <label>Pattern:</label>
          <input class="form-control" style ="width:400px"  type = "text" name= "pattern" value="<?php if(isset($_GET["pattern"])){
          echo $_GET["pattern"];} else {echo 'Test';}
          ?>">
         
         
      </div>
      <button class="btn" type="button" onclick="multiPattern()">Another pattern</button>
      <script> 
      	var i = 1;
      function multiPattern(){
      	
          if(i<10){
          	console.log(i);
          	i=i+1;
          var input = document.createElement("input");
          input.class = "form-control";
          input.type = "text";
          input.name = "pattern".concat(i);
          var parent = document.getElementById("parentDiv");
          parent.appendChild(input); // put it into the DOM
          var newline = '<br>'
          parent.insertAdjacentHTML('beforeend',newline);
          
      }
      }
      </script>
	
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



<script type="text/javascript"></script>
<!-- Das neueste kompilierte und minimierte JavaScript -->
<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

   </body>
</html>