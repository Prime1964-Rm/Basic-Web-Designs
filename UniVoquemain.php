<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="UniVoquemain.css" type="text/css"/>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

</head>
<body>
<div id="contentbody">
   <div id="header"></div>
    <div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <div class="helpdrop">
    <button class="dropbtn">Help 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">About</a>
      <a href="#">Profile</a>
      <a href="#">Settings</a>
    </div>
  </div> 
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    <a href="javascript:void(0);" onclick="OpenNavigation()">More</a>
</div>
<div class="askbox">
    <h2 style="float: left; position: absolute;margin-top: 20px; color:#ff8080;margin-left: 20px;">Have a question?</h2>
    <textarea style="float: left;font-size: 18px;
        padding-left: 10px; padding-top: 10px;
     width: 70%; height: 100px;margin-top: 55px; margin-left: 20px;" placeholder="Enter your querry here"></textarea>
    <input type="submit" id="askbtn" value="Ask"/>
</div>
<div class="questpost"></div>
<div class="questpost"></div>

</div>
<!-- side navigation starts here-->
<div id="sidenavigation" class="SideNavigation">
  <a href="javascript:void(0)" class="close" onclick="CloseNavigation()">&times;</a>
  <a href="#">About</a>
  <a href="http://127.0.0.1:49708/univoqueloginpage.html">Login</a>
  <a href="#">Settings</a>
  <a href="#">Contact</a>
</div>
<script>
    function OpenNavigation(){
        document.getElementById("sidenavigation").style.width="250px";
        document.getElementById("contentbody").style.marginLeft="250px";
    }
    function CloseNavigation(){ document.getElementById("sidenavigation").style.width="0";
        document.getElementById("contentbody").style.marginLeft="0";
    }
    
</script>
<div class="footer">
  <h2>Footer</h2>
</div>
</body>
</html>
