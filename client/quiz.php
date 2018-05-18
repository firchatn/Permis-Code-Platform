<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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

.quiz {
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

</style>



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


	
              


<div class="quiz">

                     <?php require "connection_bd.php" ?>
<?php
$id = $_GET['id'];
if(isset($_COOKIE['level'])) {
setcookie("level", $id, time() + (86400 * 30), "/");
}
$resultat =(mysqli_query($db, "SELECT * FROM question where level='$id';"));
while ($ligne =  mysqli_fetch_array($resultat)) {
?>
<img src="../admin/<?php echo $ligne['img'] ?>" alt=" " class="img-responsive" width= "700px" height="700px" />
<h2 class="quiz-question"><?php echo $ligne['question'] ?></h2>
<ul data-quiz-question="1">

  <li id="un" class="quiz-answer" data-quiz-answer="a"><?php echo $ligne['choixun'] ?></li>
  <li id="deux" class="quiz-answer" data-quiz-answer="b"><?php echo $ligne['choixdeux'] ?></li>
  <li id="troix" class="quiz-answer" data-quiz-answer="c"><?php echo $ligne['choixtrois'] ?></li>
  <li id="rep" type="hidden" value="<?php echo $ligne['reponse'] ?>" ></li>
  
</ul>
<br></br>

<?php } ?>

<div class="quiz-result"></div>





			</div>
			
	
		


				<div class="clearfix"> </div>
        <button class="form-control" onclick="cal();"> valider </button>
			</div>
			

	<!-- //footer -->

<!-- start-smooth-scrolling -->
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


    var Quiz = function() {
  var self = this;
  this.init = function() {
    self._bindEvents();
  };

  this.correctAnswers = [
    { question: 1, answer: "a" },
    { question: 2, answer: "b" },
    { question: 3, answer: "d" },
    { question: 4, answer: "c" },
    { question: 5, answer: "d" },
    { question: 6, answer: "b" }
  ];

  this._pickAnswer = function($answer, $answers) {
    $answers.find(".quiz-answer").removeClass("active");
    $answer.addClass("active");
  };
  this._calcResult = function() {
    var numberOfCorrectAnswers = 0;
    $("ul[data-quiz-question]").each(function(i) {
      var $this = $(this),
        chosenAnswer = $this.find(".quiz-answer.active").data("quiz-answer"),
        correctAnswer;

      for (var j = 0; j < self.correctAnswers.length; j++) {
        var a = self.correctAnswers[j];
        if (a.question == $this.data("quiz-question")) {
          correctAnswer = a.answer;
        }
      }

      if (chosenAnswer == correctAnswer) {
        numberOfCorrectAnswers++;

        // highlight this as correct answer
        $this.find(".quiz-answer.active").addClass("correct");
      } else {
        $this
          .find('.quiz-answer[data-quiz-answer="' + correctAnswer + '"]')
          .addClass("correct");
        $this.find(".quiz-answer.active").addClass("incorrect");
      }
    });
    if (numberOfCorrectAnswers < 3) {
      return { code: "bad", text: "Poor spelling skills" };
    } else if (numberOfCorrectAnswers == 3 || numberOfCorrectAnswers == 4) {
      return { code: "mid", text: "Moderate spelling skills" };
    } else if (numberOfCorrectAnswers > 4) {
      return { code: "good", text: "Good spelling skills" };
    }
  };
  this._isComplete = function() {
    var answersComplete = 0;
    $("ul[data-quiz-question]").each(function() {
      if ($(this).find(".quiz-answer.active").length) {
        answersComplete++;
      }
    });
    if (answersComplete >= 6) {
      return true;
    } else {
      return false;
    }
  };
  this._showResult = function(result) {
    $(".quiz-result")
      .addClass(result.code)
      .html(result.text);
  };
  this._bindEvents = function() {
    $(".quiz-answer").on("click", function() {
      var $this = $(this),
        $answers = $this.closest("ul[data-quiz-question]");
      self._pickAnswer($this, $answers);
      if (self._isComplete()) {
        // scroll to answer section
        $("html, body").animate({
          scrollTop: $(".quiz-result").offset().top
        });

        self._showResult(self._calcResult());
        $(".quiz-answer").off("click");
      }
    });
  };
};
var quiz = new Quiz();
quiz.init();


console.log("oki");
function cal(){



}

</script>




<!-- //here ends scrolling icon -->
</body>
</html>