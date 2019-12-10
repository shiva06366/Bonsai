<html><head>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.10.1.js"></script>
  <style id="compiled-css" type="text/css">
      body {
    height: 100%;
    background-color: #F0F0F0;
    font-family: Arial, sans-serif;
}
#mydiv {
    width: 100%;
    height: 100%;
    overflow: hidden;
    left: 100px;
    top: 100px;
    position: absolute;
    opacity: 0.5;
    z-index: 200;
}
#mydiv-container {
    margin-left: auto;
    margin-right: auto;
}
#mydiv-content {
    width: 70%;
    padding: 20px;
    background-color: white;
    border: 1px solid #6089F7;
}
a {
    color: #5874BF;
    text-decoration: none;
}
a:hover {
    color: #112763;
}
  </style>


  
</head>
<body style="">
    <a href="#" onclick="show('mydiv')">Open DIV</a>
<div id="mydiv" style="display: block;">
    <div id="mydiv-container">
        <div id="mydiv-content">
            
<h1>Here's The Popup!</h1>

            <br>Click the link to close.
            <br>
<a href="#" onclick="hide('mydiv')">Close</a>

        </div>
    </div>
</div>

  <!-- TODO: Missing CoffeeScript 2 -->

  <script type="text/javascript">//<![CDATA[

    
function show(target) {
    document.getElementById(target).style.display = 'block';
}

function hide(target) {
    document.getElementById(target).style.display = 'none';
}


  //]]></script>



</body></html>