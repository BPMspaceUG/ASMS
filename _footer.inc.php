
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
  
<!-- Extra modules
     Load highlight.js, mermaid.js and markdown.js from extras.
     If you're curious about details, these are initialized in src/plugins/extras/extras.js -->
<script type="text/javascript" src="./impress.js/extras/markdown/markdown.js"></script>
<script type="text/javascript" src="./impress.js/extras/impress-console/js/impressConsole.js"></script>
<script type="text/javascript">
  // For impressConsole, we unfortunately must also set the path to a mandatory css file
  // which is relative to this html file.
  // See https://github.com/regebro/impress-console/issues/19
  var impressConsoleCss = './impress.js/extras/impress-console/css/impressConsole.css';
</script>


<!--
    To make all described above really work, you need to include impress.js in the page.
    You also need to call a `impress().init()` function to initialize impress.js presentation.
    And you should do it in the end of your document. 
-->
<script type="text/javascript" src="./impress.js/js/impress.js"></script>
<script>impress().init();</script>

</body>
</html>
