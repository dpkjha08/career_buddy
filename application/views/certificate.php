<?php
if(isset($_SESSION['designation']) && $_SESSION['designation']=="Machine Learning"){ ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <title>Bootstrap Example</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    <style type="text/css">
        body {
            color: #fff;
            background: #f5f5f5;
            font-family: 'Roboto', sans-serif;
        }
     .signup-form {
            width: 850px;
            margin: 0 auto;
    
            padding: 30px 0;
        }
        .signup-form form {
            color: #999;
            border-radius: 3px;
    margin-bottom: -20px;
        margin-top: -25px;
            
            background: #fff;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
    </style>
    </head>
    <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
      <a class="navbar-brand" href="#"><h3>Career Buddy</h3></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item active" style="margin:10px;">
            <a class="nav-link" href="<?php echo site_url('Profile_update')?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item" style="margin:10px;">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item" style="margin:10px;">
            <a class="nav-link" href="#">Contact</a>
          </li>
      <li class="nav-item" style="margin:10px;">
            <a class="nav-link" href="<?php echo site_url('logout')?>">Logout</a>
          </li>
        </ul>
    
      </div>
    </nav>
    <br>
    <br>
    
     <div class="signup-form mt-5">
        <form action="/examples/actions/confirmation.php" method="post">
    
    <h2 style="color:black; margin-top:7px; margin-bottom:7px; margin-left:280px;">Machine Learning</h2>
    </form> 
    </div>
    <div class="signup-form mt-2">
        <form action="/examples/actions/confirmation.php" method="post">
    
    <h2 style="color:black;">Azure cloud services</h2>
    <p style="color:black;"> Link:-
    <a href="https://www.microsoft.com/en-us/learning/mcsa-machine-learning.aspx">https://www.microsoft.com/en-us/learning/mcsa-machine-learning.aspx </a>
      
    
    <BR>
    What is involved?
    Earning an MCSA: Machine Learning demonstrates knowledge relevant to Machine Learning, Data Scientists and Data Analysts positions, particularly those who process and analyze large data sets using R and use Azure cloud services to build and deploy intelligent solutions. It is the first step on your path to becoming a Data Management and Analytics Microsoft Certified Solutions Expert (MCSE)
    <br>
    <br>
    Price:-5690/-<br>
    Active:-april-june<br>
    Ratings:-4.5/5<br>
    </p>
    </form>
    </div>
    
       <div class="signup-form">
        <form action="/examples/actions/confirmation.php" method="post">
    <h2 style="color:black; ">Google Brain and Baidu AI Group</h2>
    
    <p style="color:black;"> Link:-
    <a href="Machine Learning Certification by Stanford University (Coursera)">Machine Learning Certification by Stanford University (Coursera)</a>
      
    Link:- <BR>
    This is one of the most sought after certifications out there because of the sheer fact that it is taught by Andrew Ng, former head of Google Brain and Baidu AI Group. For an ml certification to receive a rating of 4.9 out of 5 is no mean feat and the fact that it is associated with Stanford University simply adds much more credibility to the program. The topics that will be covered include Supervised learning, Unsupervised learning, best practices in machine learning and the program structure will be based around multiple case studies and applications, to help you learn how to apply algorithms to build smart robots, text understanding,  medical informatics, database mining, and other areas. 
    <BR><br>
    Cost: 12096/-  <BR>
    Duration: Self-paced<BR>
    Expiration: Valid for five years
    <BR>
    
    </p>
    </form>
    </div>
    
     <div class="signup-form">
        <form action="/examples/actions/confirmation.php" method="post">
    <h2 style="color:black; ">MIT Professional Education</h2>
    
    <p style="color:black;"> Link:-
    <a href="Machine Learning: From Data to Decisions (MIT Professional Education)">Machine Learning: From Data to Decisions (MIT Professional Education)</a>
    <br>
    Participants will gain a practical understanding of the tools and techniques used in machine learning applications. In the MIT tradition, you will learn by doing. There are no prerequisites in terms of math or computational science, although basic understanding of statistics is helpful. This is not a coding course, but rather an introduction to the many ways that machine learning tools and techniques can help make better decisions in a variety of situations.
    <BR><br>
    Cost: 10996/- <br>
    Duration: Self-paced<br>
    Expiration: Valid for six years
    <br>
    </p>
    </form>
    </div>
    
    
    </body>
    </html>


<?php }
 else if(isset($_SESSION['designation']) && $_SESSION['designation']=="Data Science"){?>

    
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<style type="text/css">
	body {
		color: #fff;
		background: #f5f5f5;
		font-family: 'Roboto', sans-serif;
	}
 .signup-form {
		width: 850px;
		margin: 0 auto;

		padding: 30px 0;
	}
    .signup-form form {
		color: #999;
		border-radius: 3px;
    	margin-bottom: -20px;
	margin-top: -25px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
  <a class="navbar-brand" href="#"><h3>Career Buddy</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav ">
      <li class="nav-item active" style="margin:10px;">
        <a class="nav-link" href="<?php echo site_url('Profile_update')?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" style="margin:10px;">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item" style="margin:10px;">
        <a class="nav-link" href="#">Contact</a>
      </li>
  <li class="nav-item" style="margin:10px;">
        <a class="nav-link" href="<?php echo site_url('logout')?>">Logout</a>
      </li>
    </ul>

  </div>
</nav>
<br>
<br >
 <div class="signup-form mt-5">
    <form action="/examples/actions/confirmation.php" method="post">

<h2 style="color:black; margin-top:7px; margin-bottom:7px; margin-left:300px;">Data science </h2>

</form>
</div>


 <div class="signup-form mt-2">
    <form action="/examples/actions/confirmation.php" method="post">

<h2 style="color:black;">Certified Analytics Professional (CAP)</h2>
<p style="color:black;"> Link:-
<a href="https://www.microsoft.com/en-us/learning/mcsa-machine-learning.aspx">https://www.microsoft.com/en-us/learning/mcsa-machine-learning.aspx </a>
  

<BR>
Certified Analytics Professional (CAP)
CAP offers a vender-neutral certification and promises to help you “transform complex data into valuable insights and actions,” which is exactly what businesses are looking for in a data scientist: someone who understands data, can draw logical conclusions and express to key stakeholders why those data points are significant. If you’re new to analytics, you can start with the entry-level Associate Certified Analytics Professional (aCAP) exam and then move on to your CAP certification.

<br>
<br>
Price:36719/-<br>
Duration: Self-paced<br>
Expiration:Valid for three years<br>
</p>
</form>
</div>

   <div class="signup-form">
    <form action="/examples/actions/confirmation.php" method="post">
<h2 style="color:black; "> CCA </h2>

<p style="color:black;"> Link:-
<a href=":- https://www.cio.com/article/3222879/15-data-science-certifications-that-will-pay-off.html">:- https://www.cio.com/article/3222879/15-data-science-certifications-that-will-pay-off.html</a>
  
Link:- <BR>
The CCA exam demonstrates your foundational knowledge as a developer, data analyst and administrator of Cloudera’s enterprise software. Passing a CCA exam and earning your certification will show employers that you have a handle on the basic skills required to be a data scientist. It’s also a great way to prove your skills if you’re just starting out and lack a strong portfolio or past work experience.<BR>

<br>Cost: 14835/-  <BR>
Duration: June-August<BR>
Expiration: Valid for two years
<BR>

</p>
</form>
</div>

 <div class="signup-form">
    <form action="/examples/actions/confirmation.php" method="post">
<h2 style="color:black; "> Data Science Council of America (DASCA) </h2>

<p style="color:black;"> Link:-
<a href=":- https://www.cio.com/article/3222879/15-data-science-certifications-that-will-pay-off.html">:- https://www.cio.com/article/3222879/15-data-science-certifications-that-will-pay-off.html</a>
<br>
The Data Science Council of America (DASCA) Senior Data Scientist (SDS) certification program is designed for professionals with five or more years of experience in research and analytics. It’s recommended that students have knowledge of databases, spreadsheets, statistical analytics, SPSS/SAS, R, quantitative methods, and the fundamentals of object-oriented programming and RDBMS. The program includes five tracks that will appeal to different candidates — each track has different requirements in terms of degree-level, work experience and pre-requisites to apply. 
<BR>
<br>
Cost: 48231/- <br>
Duration: Self-paced<br>
Expiration: Valid for five years
<br>
</p>
</form>
</div>


</body>
</html>


<?php } ?>
