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
    <meta name="description" content="Probability of events, if one can learn probbility then it can help them by giving them a better understanding of things instead of considering them as 'luck'">
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
	    h3{font-family: lucida sans;}
	    
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
	img {
		display: flex;
		border-radius: 7px;
		display: block;
  		margin-left: auto;
  		margin-right: auto;
		margin-top: 2.5rem;
		margin-bottom: 2.5rem;
	}

	.side-by-side {
  display: inline-block; /* Keeps images inline */
  width: 45%; /* Adjust as needed to fit side by side */
  height: auto; /* Maintains aspect ratio */
  margin-right: 10px; /* Optional: space between images */
  vertical-align: top; /* Aligns images at the top */
}

#seperate-image {
	display: inline-block; /* Keeps images inline */
  width: 30%; /* Adjust as needed to fit side by side */
  height: auto; /* Maintains aspect ratio */
  margin-right: 10px; /* Optional: space between images */
  vertical-align: top; /* Aligns images at the top */
}
	</style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>	
	
  </head>
  
  <>
  <?php 
  	include_once("header.php");
  ?>



	<div class="container-fluid" style="margin-bottom:30px;"><br><br>
		<div class="row">			
			<div class="col-lg-8 col-lg-offset-2">
				<ol class="breadcrumb">
					<li><a href="https://app.myhomeworkrewards.com/lessons/lessons_main.php">Lessons</a></li>
					<li><a href="https://app.myhomeworkrewards.com/lessons/Gr8/gr8_main.php">Algebra 1</a></li>
					<li><a href="https://app.myhomeworkrewards.com/lessons/Gr8/Math/gr8_math_main.php">Math</a></li>
					<li><a href="/lessons/Gr12/Math/Calculus/ProbabilitiesWithTablesAndDiagrams.php">Use Radicals in Functions cont.</a></li>
				</ol>			
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
			<h1>8.7 Use Radicals in Functions Cont.</h1>
				<div class="row">
					<div class="col-lg-9">

							<p1>Radical functions include a square root, cube root, or any root expression. A common example is <code>f(x) = √x</code>. These functions can behave differently depending on the type of root.</p1>

							<h2>Find the Domain of a Radical Function</h2>

							<p1>The domain is all possible x-values that make the function work (no errors). For even roots (like square roots), the value inside the root must be ≥ 0.</p1>

							<ul>
							<li>Example: For <code>f(x) = √(x - 3)</code>, set <code>x - 3 ≥ 0</code> → <code>x ≥ 3</code>.</li>
							<li>So, the domain is <code>[3, ∞)</code>.</li>
							<li>Odd roots (like cube roots) can take any real number, so the domain is usually <code>(-∞, ∞)</code>.</li>
							</ul>

							<h2>Graph Radical Functions</h2>

							<p1>To graph a radical function, start by plotting points. Begin at the lowest x-value in the domain (the start of the root).</p1>

							<ul>
							<li>For <code>f(x) = √x</code>, plot (0, 0), (1, 1), (4, 2), (9, 3), etc.</li>
							<li>The graph curves upward and to the right.</li>
							<li>Transformations like <code>f(x) = √(x - 2) + 1</code> shift the graph right 2 and up 1.</li>
							</ul>

						</div>
                         <hr>
				    </div>
					
					<div class="col-lg-3">
						<div class="panel panel-default">
								<div class="panel-heading">
									<h5 class="text-center">Review these lessons:</h5>
								</div>
							<div class="panel-body">
								<ul class="list-group">
								<li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="AlgebraLesson1cont.php">8.1 Simplifying Expressions with Roots</a></li>
								<li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="AlgebraLesson2cont.php">8.2 Simplifying Radical Expressions</a></li>
								<li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="AlgebraLesson3cont.php">8.3 Simplify Rational Exponents</a></li>
								<li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="AlgebraLesson4.php">8.4 Add, Subtract, and Multiply Radical Expressions</a></li>
								<li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="AlgebraLesson5.php">8.5 Divide Radical Expressions</a></li>
								<li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="AlgebraLesson5cont.php">8.5 Divide Radical Expressions cont.</a></li>
								<li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="AlgebraLesson6.php">8.6 Solve Radical Equations</a></li>
								<li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="Algebralesson6cont.php">8.6 Solve Radical Equations cont.</a></li>
								<li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="Algebralesson7.php">8.7 Use Radicals in Functions</a></li>
								<!---!<li class="list-group-item" style="padding:0px 0px 0px 0px;"><a href="continuity.php">Continuity</a></li>--->
								</ul>
							</div>
						</div>
						<div class="panel panel-default">
								<div class="panel-heading">
									<h5 class="text-center">Try these questions:</h5>
								</div>
							<div class="panel-body">
								<ul class="list-group">
									<li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="AlgebraLesson1&2wp.php">Problems On Lessons 1 & 2<a></li>
									<li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="AlgebraLesson5wp.php">Problems On Lesson 5<a></li>
									<li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="AlgebraLesson6wp.php">Problems on Lesson 6<a></li>
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