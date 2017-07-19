
<!-- <div class="clearfix"></div>
  <hr/>
  <div class="container">
    <small>
    <div class="col-md-3">BPMspace SQMS using</div>
    <div class="col-md-9">
      <ul class="list-inline">
        <li><a href="http://getbootstrap.com/" target="_blank">Bootstrap</a></li>
        <li><a href="#">PHP</a></li>
        <li><a href="#">MySQL</a></li>
        <li><a href="#">JQuery</a></li>
      </ul>
    </div>
    </small>
  </div> -->
  
 
<!--
    To make all described above really work, you need to include impress.js in the page.
    You also need to call a `impress().init()` function to initialize impress.js presentation.
    And you should do it in the end of your document. 
-->
<script type="text/javascript" src="js/impress.js"></script>

<!-- 
Presentator console from https://github.com/regebro/impress-console
-->
<script src="js/impressConsole.js"></script>


<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!-- initialize impress.js and with already integrated impress speaker console--> 
<script>
impress().init();

// Impress-console: Usage: press p to open console, click on timer to reset //it. Add notes by adding <div class="notes"> notes </div> 
// This line is only needed with the original impress-console, but here we use he version with the proposed changes provided by https://github.com/regebro/impress-console/pull/22 since it works just fine and is conform to the impress.js newest version for 3rd arty plugins.
//impressConsole().init();
</script>


</body>
</html>
