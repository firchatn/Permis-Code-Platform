<?php
$id = $_GET['id'];
if(!isset($_COOKIE['level'])) {
  
setcookie("level", $id, time() + (86400 * 30), "/");
}?>




<!DOCTYPE html>
<html lang="en">
<head>
<title>Driving School a Business Category Flat Bootstrap Responsive Website Template | Typography :: w3layouts</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Driving School Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/main.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">

<style>

.quiz  {
  padding: 0 30px 20px 30px;
  max-width: 960px;
  margin: 0 auto;
}
.quiz ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
.quiz-question {
  font-weight: bold;
  display: block;
  padding: 30px 0 10px 0;
  margin: 0;
}
.quiz-answer {
  margin: 0;
  padding: 10px;
  background: #f7f7f7;
  margin-bottom: 5px;
  cursor: pointer;
}
.quiz-answer:hover {
  background: #eee;
}
.quiz-answer:before {
  content: "";
  display: inline-block;
  width: 15px;
  height: 15px;
  border: 1px solid #ccc;
  background: #fff;
  vertical-align: middle;
  margin-right: 10px;
}
.quiz-answer.active:before {
  background-color: #333;
  border-color: #333;
}
.quiz-answer.correct:before {
  background-color: green;
  border-color: green;
}
.quiz-answer.incorrect:before {
  background-color: red;
  border-color: red;
}
.quiz-answer.active.correct:before {
  outline: 2px solid green;
  outline-offset: 2px;
}
.quiz-result {
  max-width: 960px;
  margin: 0 auto;
  font-weight: bold;
  text-align: center;
  color: #fff;
  padding: 20px;
}
.quiz-result.good {
  background: green;
}
.quiz-result.mid {
  background: orange;
}
.quiz-result.bad {
  background: red;
}












.Clicked:hover {
    background: #eee;
}

.Clicked {
    margin: 0;
        margin-bottom: 0px;
    padding: 10px;
    background: orange;
    margin-bottom: 5px;
    cursor: pointer;
}
p, ul li, ol li {
    margin: 0;
    font-size: 14px;
}

.Clicked-red {
    margin: 0;
        margin-bottom: 0px;
    padding: 10px;
    background: red;
    margin-bottom: 5px;
    cursor: pointer;
}
.Clicked-green {
    margin: 0;
        margin-bottom: 0px;
    padding: 10px;
    background: green;
    margin-bottom: 5px;
    cursor: pointer;
}


</style>
<!--
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
-->

</head>
<body>
<!-- banner -->
	<div class="header">
		<div class="header_left">
			<ul>
				<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>New York</li>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+123 456 7890</li>
			</ul>
		</div>
		<div class="header_right">
			<div class="w3_agile_login">
				<div class="cd-main-header">
					<a class="cd-search-trigger" href="#cd-search"> <span></span></a>
					<!-- cd-header-buttons -->
				</div>
				<div id="cd-search" class="cd-search">
					<form action="#" method="post">
						<input name="Search" type="search" placeholder="Search...">
					</form>
				</div>
			</div>
		</div>
			<div class="clearfix"></div>
		
	</div>
	<div class="header-bottom">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1><a class="navbar-brand" href="index.php"><span>Driving </span>School</a></h1>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
        <ul class="nav navbar-nav">
						<li class="active"><a href="index.php"><span data-hover="Home">Home</span></a></li>
						<li><a href="about.html"><span data-hover="About">About</span></a></li>
						<li><a href="lessons.php"><span data-hover="Lessons">Lessons</span></a></li>
						<li><a href="mail.html"><span data-hover="Mail Us">Mail Us</span></a></li>
					</ul>
				</nav>
			</div>
			<div class="agileinfo-social-grids">
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-rss"></i></a></li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="banner1">
	</div>
<!-- //banner -->
 <!-- typography -->
	<div class="typo">
		<div class="container">
			<div class="w3l-heading">
	  			<h3 class="w3ls_head">Question</h3>
			</div>





			
			<div class="container">


	
                <div ng-app="myApp" ng-controller="customersCtrl">
 
                
                      <div ng-repeat="x in names">
                        <h1> cours</h1>
                        <h3> {{x.cours }}</h3>
                            <img style="margin:0px auto;display:block" src="../admin/{{ x.img }}" alt=" " class="img-responsive" width= "700px" height="700px" />
                            <h2 class="quiz-question">{{ x.question}}</h2>
                            <ul data-quiz-question="1">
                            
                              <li onclick="change(this);" style="list-style: none;"  id="un" class="quiz-answer" data-quiz-answer="a" value="{{x.choixun}}">{{x.choixun}}</li>
                              <li onclick="change(this);" style="list-style: none;" id="deux" class="quiz-answer" data-quiz-answer="b" value="{{x.choixdeux}}">{{x.choixdeux}}</li>
                              <li onclick="change(this);" style="list-style: none;" id="troix" class="quiz-answer" data-quiz-answer="c" value="{{x.choixtrois}}">{{x.choixtrois}}</li>
                              <li onclick="change(this);" style="list-style: none;" class="custid" id="rep" type="hidden" value="{{ x.reponse}}" ></li>
                              
                            </ul>
                            <br></br>
                        </div>
                   
                     
                    </div>

<div class="quiz-result"></div>





			</div>
			
	
		


				<div class="clearfix"> </div>
        <button type="button" class="form-control" data-toggle="modal" data-target="#exampleModal" onclick="cal()">
             valider 
        </button>
			</div>
			

	<!-- //footer -->

<!-- start-smooth-scrolling -->








<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Niveau Terminer</h5>
  
                   
               
              
            </div>
            <form action="score.php" method="POST">
            <div class="modal-body">
            
                  <h1 style="color:rgb(231, 34, 188); font-family:courier;">Votre Score est : <span id="rest"></span> </h1>
                  <input id="restf" type="hidden"  name="score" value="
                  " >
             
            </div>
            <div class="modal-footer">
              
              <button type="submit" class="btn btn-primary">Terminer</button>
            </div>

          </div>
        </form>
        </div>
      </div>


<script type="text/javascript" src="js/angular6.0.min.js"></script>
<script>
var l = "<?= $id ?>"
    var app = angular.module('myApp', []);
    app.controller('customersCtrl', function($scope, $http) {
       $http.get("quiz_mysql.php?id=" + l)
       .then(function (response) {$scope.names = response.data.records;});
    });
    </script>


<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
    </script>
    

<script>
var item;
var items;
var s = 0 ; 
var i = 0 ; 

  var cusid_ele = document.getElementsByClassName('custid');
  item = cusid_ele;

function cal(){

  var cusid_ele = document.getElementsByClassName('custid');
  item = cusid_ele;
/*for (var i = 0; i < cusid_ele.length; ++i) {
    item =  cusid_ele[i];  
   
}
*/

  var cusid_ele2 = document.getElementsByClassName('Clicked');
  items = cusid_ele2;
  /*
for (var i = 0; i < cusid_ele2.length; ++i) {
    items = cusid_ele2[i];  

}
*/

score();    
}

function change(obj){

var r = document.getElementById("rep").value;
console.log(item);
if( obj.value == item[i].value){ 
  obj.setAttribute("class", "Clicked-green");
  s = s + 10;
}
else{
  obj.setAttribute("class", "Clicked-red");

}
i = i + 1 ;

}

function score(){



    var vfinal = document.getElementById("rest");
    var vfinalf = document.getElementById("restf").value = s;
    vfinal.innerHTML = s + "/100";
    vfinalf.value = s;
}

</script>




<!-- //here ends scrolling icon -->
</body>
</html>