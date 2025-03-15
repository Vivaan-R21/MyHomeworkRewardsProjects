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
    <title>Solving Probability Words Problems</title>
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
		<h1>Word Problems On Lessons 1 & 2</h1>
				<div class="row">
					<div class="col-lg-9">
						<p>
						Simplifying square roots is a fundamental skill in algebra that involves breaking down a radical expression into its simplest form. 
						This process requires identifying perfect square factors within the radicand and applying the property 
						<strong> √(a×b)=√a×√b </strong>. By extracting the square root of any perfect squares and simplifying, we make the expression more manageable. 
						For instance, simplifying a square root like <strong>√72 involves recognizing that 72 can be factored as 6 × 6 × 2</strong>, allowing us to simplify it to 6√2. 
						This method applies universally to square roots, making calculations more straightforward and expressions easier to work with.
						</p>

						<p>
						In addition to simplifying individual square roots, working with radical expressions often requires performing operations such as addition, subtraction, and rationalization. 
						Like terms can only be combined if they share the same radical component, meaning expressions like 5√3 + 2√3 can be simplified to 7√3, but 4√5 + 3√2
						4√5 + 3√2 cannot be simplified further. <strong>Rationalizing denominators is another essential skill</strong>, where square roots in the denominator 
						are eliminated by multiplying by a form of 1 that removes the radical. For example, expressing 4/√7 in a rationalized form involves multiplying by √7/√7, resulting in (4√7)/7. 
						Mastering these <strong>techniques ensures expressions remain in their most simplified and usable form</strong>, making complex mathematical operations more efficient.
						</p>

                         <!-- This is the 1st question -->
						  <hr>
						 <div class="well well-sm">
						 <p>Simplify: √50 = 5√2</p>
					    </div>

                       <!--1st questions explanations -->
						<span class="show-answer collapsed" style="cursor: pointer; text-decoration: underline;" data-target="example" aria-pressed="false">Show Answer</span>
						<div id="example" class="hidden-answer">
							<br>
								<p>We need to simplify the square root of 50:</p>
									<math xmlns="http://www.w3.org/1998/Math/MathML">
										<msqrt>
											<mn>50</mn>
										</msqrt>
									</math>

									<h3>Step 1: Factor the Radicand</h3>
									<p>First, we factor 50 into a perfect square and another factor:</p>
									<math>
										<msqrt>
											<mn>50</mn>
										</msqrt>
										<mo>=</mo>
										<msqrt>
											<mn>25 × 2</mn>
										</msqrt>
									</math>

									<h3>Step 2: Apply the Square Root Property</h3>
									<p>Since the square root of a product can be written as the product of square roots:</p>
									<math>
										<msqrt>
											<mn>25</mn>
										</msqrt>
										<mo>×</mo>
										<msqrt>
											<mn>2</mn>
										</msqrt>
									</math>
									<br>
									<math>
										<mo>=</mo>
										<mn>5</mn>
										<msqrt>
											<mn>2</mn>
										</msqrt>
									</math>

							<h3>Final Answer:</h3>
							<p>Thus, the simplified form of <math><msqrt><mn>50</mn></msqrt></math> is:</p>
							<math>
								<mn>5</mn>
								<msqrt>
									<mn>2</mn>
								</msqrt>
							</math>
						</div>
						<hr>
						
                        <!-- This is the 2nd question -->

						<div class="well well-sm">
						<p>Simplify: 4√18 − 2√50</p>
					    </div>

					<!-- This is the 2nd question's explanation -->
					<span class="show-answer collapsed" style="cursor: pointer; text-decoration: underline;" data-target="example2" aria-pressed="false">Show Answer</span>
						<div id="example2" class="hidden-answer">
							<br>
							    <math xmlns="http://www.w3.org/1998/Math/MathML">
								<mrow>
									<mn>4</mn>
									<msqrt>
										<mn>18</mn>
									</msqrt>
									<mo>-</mo>
									<mn>2</mn>
									<msqrt>
										<mn>50</mn>
									</msqrt>
								</mrow>
							</math>

							<h3>Step 1: Simplify the Square Roots</h3>
							<p>We start by simplifying <math><msqrt><mn>18</mn></msqrt></math> and <math><msqrt><mn>50</mn></msqrt></math>:</p>
							<math>
								<msqrt>
									<mn>18</mn>
								</msqrt>
								<mo>=</mo>
								<msqrt>
									<mn>9 × 2</mn>
								</msqrt>
								<mo>=</mo>
								<mn>3</mn>
								<msqrt>
									<mn>2</mn>
								</msqrt>
							</math>
							<br>
							<math>
								<msqrt>
									<mn>50</mn>
								</msqrt>
								<mo>=</mo>
								<msqrt>
									<mn>25 × 2</mn>
								</msqrt>
								<mo>=</mo>
								<mn>5</mn>
								<msqrt>
									<mn>2</mn>
								</msqrt>
							</math>

							<h3>Step 2: Multiply by the Coefficients</h3>
							<p>Now, we distribute the coefficients (4 and -2) to the simplified square roots:</p>
							<math>
								<mn>4</mn>
								<mo>×</mo>
								<mn>3</mn>
								<msqrt>
									<mn>2</mn>
								</msqrt>
								<mo>-</mo>
								<mn>2</mn>
								<mo>×</mo>
								<mn>5</mn>
								<msqrt>
									<mn>2</mn>
								</msqrt>
							</math>
							<br>
							<math>
								<mo>=</mo>
								<mn>12</mn>
								<msqrt>
									<mn>2</mn>
								</msqrt>
								<mo>-</mo>
								<mn>10</mn>
								<msqrt>
									<mn>2</mn>
								</msqrt>
							</math>

							<h3>Step 3: Combine Like Terms</h3>
							<p>Since both terms contain <math><msqrt><mn>2</mn></msqrt></math>, we subtract the coefficients:</p>
							<math>
								<mn>12</mn>
								<msqrt>
									<mn>2</mn>
								</msqrt>
								<mo>-</mo>
								<mn>10</mn>
								<msqrt>
									<mn>2</mn>
								</msqrt>
								<mo>=</mo>
								<mn>2</mn>
								<msqrt>
									<mn>2</mn>
								</msqrt>
							</math>

							<h3>Final Answer:</h3>
							<p>The simplified result is:</p>
							<math>
								<mn>2</mn>
								<msqrt>
									<mn>2</mn>
								</msqrt>
							</math>
						</div>
						<hr>

					  <!-- This is the 3rd question -->	
						<div class="well well-sm">
						<p>Simplify:</p>
						<math xmlns="http://www.w3.org/1998/Math/MathML">
							<mfrac>
								<mrow>
									<msqrt>
										<mn>8</mn>
									</msqrt>
									<mo>+</mo>
									<msqrt>
										<mn>18</mn>
									</msqrt>
								</mrow>
								<msqrt>
									<mn>2</mn>
								</msqrt>
							</mfrac>
						</math>
					</div>

					<!-- This is the 3rd question's explanation -->
					<span class="show-answer collapsed" style="cursor: pointer; text-decoration: underline;" data-target="example3" aria-pressed="false">Show Answer</span>
					<div id="example3" class="hidden-answer">
						<br>
					<p>We are given the expression:</p>
					<math xmlns="http://www.w3.org/1998/Math/MathML">
						<mfrac>
							<mrow>
								<msqrt>
									<mn>8</mn>
								</msqrt>
								<mo>+</mo>
								<msqrt>
									<mn>18</mn>
								</msqrt>
							</mrow>
							<msqrt>
								<mn>2</mn>
							</msqrt>
						</mfrac>
					</math>

					<h3>Step 1: Simplify the Square Roots in the Numerator</h3>
					<p>We start by simplifying <math><msqrt><mn>8</mn></msqrt></math> and <math><msqrt><mn>18</mn></msqrt></math>:</p>
					<math>
						<msqrt>
							<mn>8</mn>
						</msqrt>
						<mo>=</mo>
						<msqrt>
							<mn>4 × 2</mn>
						</msqrt>
						<mo>=</mo>
						<mn>2</mn>
						<msqrt>
							<mn>2</mn>
						</msqrt>
					</math>
					<br>
					<math>
						<msqrt>
							<mn>18</mn>
						</msqrt>
						<mo>=</mo>
						<msqrt>
							<mn>9 × 2</mn>
						</msqrt>
						<mo>=</mo>
						<mn>3</mn>
						<msqrt>
							<mn>2</mn>
						</msqrt>
					</math>

					<p>Now, rewriting the numerator:</p>
					<math>
						<mn>2</mn>
						<msqrt>
							<mn>2</mn>
						</msqrt>
						<mo>+</mo>
						<mn>3</mn>
						<msqrt>
							<mn>2</mn>
						</msqrt>
						<mo>=</mo>
						<mn>5</mn>
						<msqrt>
							<mn>2</mn>
						</msqrt>
					</math>

					<h3>Step 2: Divide by <math><msqrt><mn>2</mn></msqrt></math></h3>
					<p>Now, we divide the simplified numerator by <math><msqrt><mn>2</mn></msqrt></math>:</p>
					<math>
						<mfrac>
							<mrow>
								<mn>5</mn>
								<msqrt>
									<mn>2</mn>
								</msqrt>
							</mrow>
							<msqrt>
								<mn>2</mn>
							</msqrt>
						</mfrac>
						<mo>=</mo>
						<mn>5</mn>
					</math>

					<h3>Final Answer:</h3>
					<p>The simplified result is:</p>
					<math>
						<mn>5</mn>
					</math>
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
								<li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="AlgebraLesson1.php">Simplifying Expressions with Roots</a></li>
								<li class="list-group-item" style="padding:0px 0px 0px 0px;"><a href="AlgebraLesson2.php">Simplifying Radical Expressions</a></li>
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