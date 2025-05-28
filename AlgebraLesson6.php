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
  
  <p>
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
					<li><a href="/lessons/Gr12/Math/Calculus/ProbabilitiesWithTablesAndDiagrams.php">Solve Radical Equations</a></li>
				</ol>			
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
         
    <div class="content">
    <h1>8.6 Solve Radical Equations</h1>
    
		<p>Radical equations are equations that contain one or more radical expressions. These types of equations can be tricky to solve, but with the right strategies, you can simplify and solve them efficiently. The key steps include isolating the radical expression and squaring both sides of the equation to eliminate the radical. Below, we'll explore how to solve radical equations, including those with two radicals.</p>

		<hr>

		<h3>Solving Radical Equations</h3>
		<p>To solve a radical equation, follow these basic steps:</p>
		<ul>
		<li><strong>Step 1:</strong> Isolate the radical on one side of the equation.</li>
		<li><strong>Step 2:</strong> Square both sides of the equation to eliminate the radical.</li>
		<li><strong>Step 3:</strong> Solve the resulting equation (which should now be polynomial or linear).</li>
		<li><strong>Step 4:</strong> Check for extraneous solutions. When you square both sides, some solutions may not work in the original equation, so be sure to substitute them back in to verify.</li>
		</ul>

		<p>Let’s start with a basic example of solving a radical equation:</p>

		<h3>Example 1: Solve <em>√(x + 5) = 7</em></h3>

		<p><strong>Step 1:</strong> Isolate the radical expression (it’s already isolated in this case).</p>

		<p><strong>Step 2:</strong> Square both sides to remove the radical:</p>
		<p><em>(√(x + 5))² = 7²</em></p>
		<p><em>x + 5 = 49</em></p>

		<p><strong>Step 3:</strong> Solve the resulting equation:</p>
		<p><em>x = 49 - 5</em></p>
		<p><em>x = 44</em></p>

		<p><strong>Step 4:</strong> Check the solution by substituting <em>x = 44</em> back into the original equation:</p>
		<p><em>√(44 + 5) = √49 = 7</em></p>
		<p>Since the original equation is true, the solution <em>x = 44</em> is valid.</p>

		<hr>

		<h3>Solving Radical Equations with Two Radicals</h3>
		<p>When you have two radicals in the equation, you’ll need to isolate one radical first, then square both sides. Afterward, you might need to repeat the process until you have no more radicals. Here’s how you can approach it:</p>

		<h3>Example 2: Solve <em>√(x + 3) + √(x - 1) = 5</em></h3>

		<p><strong>Step 1:</strong> Isolate one of the radicals. Let’s isolate <em>√(x + 3)</em> by subtracting <em>√(x - 1)</em> from both sides:</p>
		<p><em>√(x + 3) = 5 - √(x - 1)</em></p>

		<p><strong>Step 2:</strong> Square both sides of the equation to eliminate the first radical:</p>
		<p><em>(√(x + 3))² = (5 - √(x - 1))²</em></p>
		<p><em>x + 3 = 25 - 10√(x - 1) + (x - 1)</em></p>
		<p><em>x + 3 = 24 + x - 10√(x - 1)</em></p>

		<p><strong>Step 3:</strong> Simplify the equation:</p>
		<p><em>3 = 24 - 10√(x - 1)</em></p>

		<p><strong>Step 4:</strong> Isolate the second radical expression by subtracting 24 from both sides:</p>
		<p><em>-21 = -10√(x - 1)</em></p>

		<p><strong>Step 5:</strong> Divide both sides by -10:</p>
		<p><em>√(x - 1) = 2.1</em></p>

		<p><strong>Step 6:</strong> Square both sides again to remove the second radical:</p>
		<p><em>(√(x - 1))² = (2.1)²</em></p>
		<p><em>x - 1 = 4.41</em></p>

		<p><strong>Step 7:</strong> Solve for x:</p>
		<p><em>x = 4.41 + 1</em></p>
		<p><em>x = 5.41</em></p>

		<p><strong>Step 8:</strong> Check the solution by substituting <em>x = 5.41</em> back into the original equation:</p>
		<p><em>√(5.41 + 3) + √(5.41 - 1) = 5</em></p>
		<p><em>√8.41 + √4.41 ≈ 2.9 + 2.1 = 5</em></p>
		<p>The original equation holds true, so the solution <em>x = 5.41</em> is valid.</p>

		<hr>

		<h3>Conclusion</h3>
		<p>Solving radical equations involves isolating the radical, squaring both sides, and solving the resulting equation. If there are multiple radicals, you may need to repeat the process. Always check your solutions in the original equation to make sure they don’t introduce extraneous solutions due to the squaring step. Mastering these steps will give you the tools to handle even the most complicated radical equations!</p>
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
								</ul>
							</div>
						</div>
						<div class="panel panel-default">
								<div class="panel-heading">
									<h5 class="text-center">Try these questions:</h5>
								</div>
							<div class="panel-body">
								<ul class="list-group">
									<li class="list-group-item" style="padding:0px 0px 10px 0px;">
									<li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="AlgebraLesson1&2wp.php">Problems On Lessons 1 & 2<a></li>
									<li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="AlgebraLesson5wp.php">Problems On Lesson 5<a></li>
									</li>
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