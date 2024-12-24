<!DOCTYPE html>
<html lang="en">
  <head>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Course",
  "courseCode": "GR12MATH",
  "name": "Limits of Functions",
  "provider": {
    "@type": "HighSchool",
    "name": "MyHomeworkRewards",
    "url": "https://app.myhomeworkrewards.com/lessons/Gr12/Math/Calculus/Intro_To_Calculus/limits.php"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "bestRating": "5",
    "worstRating": "4",
    "ratingCount": "1",
    "reviewCount": "1"
  },
    "datePublished": "2024-05-01",
    "author": {"@type": "Person", "name": "Gabriel Aversano"},
    "publisher": {"@type": "Organization", "name": "Admin"}
  }
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Limits are Real Numbers that a function can approach but never touch. This lesson outlines both algebraically and graphically the conditions needed for a limit to a exist and the scenarios where it cannot exist.">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MyHomeworkRewards</title>
	<!-- Favicon -->
	<link rel="icon" href="https://app.myhomeworkrewards.com/images/favicon.png" type="image/icon type">
	<link rel="stylesheet" href="bootstrap.min.css">

    <!-- Bootstrap -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style>
		body{background-color:#ffffff;}
		.list-group-item{border:0px solid black;}
		
		.breadcrumb{background-color:#5B0A9F;}
		.breadcrumb>li>a{color:white;}
		
		.well{background-color:#DCC4F8;}
		.panel-primary > .panel-heading{background-color:#DCC4F8; color:black;}
		.panel-default > .panel-heading{background-color:#DCC4F8;}
		h1{font-family: lucida sans;}
	    h2{font-family: lucida sans;}
	    
		ol.breadcrumb {
    		display: flex;
    		align-items: center;
    		list-style-type: none;
    		padding: 0;
    		margin-left: 10rem;
   	    	background-color: #5B0A9F;
        	color: #fff;
        	border-radius: 4px;
        	padding: 8px 15px;
    		font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        	font-size: 14px;
    		line-height: 1.42857143;
		}

		ol.breadcrumb li {
    		display: inline-block;
    		margin-right: 10px;
		}
	</style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>	
	
  </head>
  
  <body>
  <?php 
  	include_once("header.php");
  ?>


	<div class="container-fluid" style="margin-bottom:30px;"><br><br>
		<div class="row">			
			<div class="col-lg-8 col-lg-offset-2">
				<ol class="breadcrumb">
					<li><a href="https://app.myhomeworkrewards.com/lessons/lessons_main.php">Lessons</a><li>
					<li><a href="https://app.myhomeworkrewards.com/lessons/Gr8/gr8_main.php">Gr8</a></li>
					<li><a href="https://app.myhomeworkrewards.com/lessons/Gr8/Math/gr8_math_mainphp">Math</a></li>
					<li><a href="/lessons/Gr12/Math/Calculus/ProbabilitiesWithTablesAndDiagrams.php">Probabilities With Tables and Diagrams</a></li>
				</ol>			
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
			<h1>Word Problems On Lessons 7 and 8</h1>
				<div class="row">
					<div class="col-lg-9">
						<p>
							<b>Tree diagrams</b> are visual tools used to display possible outcomes of a probability experiment, especially when there are <b>multiple events</b>. 
							Each branch represents an outcome, and the probability of a combined outcome can be determined by <b>multiplying probabilities</b> along each path.<br> 
							For example, if you <b>toss two coins</b>, each coin has two outcomes: heads (H) or tails (T).<br>
							<b>Mini Example:</b> P(H and H) = 1/2 × 1/2 = 1/4.<br> Tree diagrams help <b>visualize all possible outcomes</b> and their probabilities clearly.
						</p>

						<p>
							The probability of <b>independent events</b> can be determined using the <b>multiplication rule</b>: P(A and B) = P(A) × P(B). 
							Events are <b>independent</b> if the occurrence of one does not affect the other.<br> 
							For instance, when you <b>roll two dice</b>, the probability of rolling a 4 on the first die and a 5 on the second die is:<br>
							<b>Mini Example:</b> P(4 and 5) = 1/6 × 1/6 = 1/36.<br>
							Similarly, if you <b>toss three coins</b>, the probability of getting three heads is:<br>
							<b>Mini Example:</b> P(H, H, H) = 1/2 × 1/2 × 1/2 = 1/8.<br>
							This rule simplifies finding probabilities for <b>multiple independent events</b>.
						</p>
				    </div>
					
					<div class="col-lg-3">
						<div class="panel panel-default">
								<div class="panel-heading">
									<h5 class="text-center">Review these lessons:</h5>
								</div>
							<div class="panel-body">
								<ul class="list-group">
								<li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="lesson7.php">Determining Probabilities Using Tree Diagrams and Tables</a></li>
								<li class="list-group-item" style="padding:0px 0px 0px 0px;"><a href="lesson8.php">Probability of independent events (Multiplication)</a></li>
								</ul>
							</div>
						</div>
						<div class="panel panel-default">
								<div class="panel-heading">
									<h5 class="text-center">Try these questions:</h5>
								</div>
							<div class="panel-body">
								<ul class="list-group">
									<li class="list-group-item" style="padding:0px 0px 10px 0px;"></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<br><br>
				<?php
				include_once("footer.php");
                ?>
			</div>	
		</div>
		
	</div>
	
	

	<script type="text/javascript" async src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-MML-AM_CHTML"></script>
	<script type='text/javascript' src='hide_answer.js'></script>
  </body>
</html>