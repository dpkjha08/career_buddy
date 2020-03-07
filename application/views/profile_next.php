
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Information</title>
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
	.form-control, .form-control:focus, .input-group-addon {
		border-color: #e1e1e1;
	 margin-left: -9px;
	width: 500px;

	
	}


	
    .form-control, .btn {        
        border-radius: 3px;
    }
	.signup-form {
		width: 100px;
		margin: 0 auto;
		padding: 30px 0;
	}
    .signup-form form {
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form h2 {
		color: #333;
		font-weight: bold;
        margin-top: 0;
    }
    .signup-form hr {
        margin: 0 -30px 20px;
    }
	.signup-form .form-group {
		margin-bottom: 20px;
	}
	.signup-form label {
		font-weight: normal;
		font-size: 13px;
	}
	.signup-form .form-control {
		min-height: 38px;
		box-shadow: none !important;
	}	
	.signup-form .input-group-addon {
		max-width: 400px;
		text-align: center;
	}
	.signup-form input[type="checkbox"] {
		margin-top: 2px;
	}   
    .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;
		background: #19aa8d;
		border: none;
		min-width: 140px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus {
		background: #179b81;
        outline: none;
	}
	.signup-form a {
		color: #fff;	
		text-decoration: underline;
	}
	.signup-form a:hover {
		text-decoration: none;
	}
	.signup-form form a {
		color: #19aa8d;
		text-decoration: none;
	}	
	.signup-form form a:hover {
		text-decoration: underline;
	}
	.signup-form .fa {
		font-size: 21px;
	}
	.signup-form .fa-paper-plane {
		font-size: 18px;
	}
	.signup-form .fa-check {
		color: #fff;
		left: 17px;
		top: 18px;
		font-size: 7px;
		position: absolute;
	}



	.form-control {
		box-shadow: none;
		border-color: #ddd;

	}
	.form-control:focus {
		border-color: #28a745;
	}
	.login-form {
        width: 525px;
		margin-left: 100px;
                height:500px;
		padding: 30px 0;
	}


	
    .login-form form {

        color: #434343;
		border-radius: 1px;
    	margin-bottom: 15px;
        background: #fff;
		border: 1px solid #f3f3f3;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
	}
	.login-form h4 {
		text-align: center;
		font-size: 22px;
        margin-bottom: 20px;
	}
    .login-form .avatar {
        color: #fff;
		margin: 0 auto 30px;
        text-align: center;
		width: 100px;
		height: 100px;
		border-radius: 50%;
		z-index: 9;
		background: #28a745;
		padding: 15px;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}
    .login-form .avatar i {
        font-size: 62px;
    }
    .login-form .form-group {
        margin-bottom: 20px;
    }
	.login-form .form-control, .login-form .btn {
		min-height: 40px;
		border-radius: 2px; 
        transition: all 0.5s;
	}
	.login-form .close {
        position: absolute;
		top: 15px;
		right: 15px;
	}
	.login-form .btn {
		background: #28a745;
		border: none;
		line-height: normal;
	}
	.login-form .btn:hover, .login-form .btn:focus {
		background: #28a745;
	}
    .login-form .checkbox-inline {
        float: left;
    }
    .login-form input[type="checkbox"] {
        margin-top: 2px;
 
    }
    .login-form .forgot-link {
        float: right;
    }
    .login-form .small {
        font-size: 13px;
    }
    .login-form a {
        color: #28a745;
    }
	.leftdiv 
{
float: left;
 
  width: 300px;
  padding: 10px;
}
.rightdiv 
{
float: right;
margin-top:10px;
margin-right:100px;


}
.middlediv
{
float: middle;
 width: 300px;

}
		.input_skills
		{
		width:500px!important;
		}
		.panel-default{
		width:500px!important;
  height:300px;
        }
        h2,h1,h3,p{
            color:black!important;
        }
	
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg  container-fluid navbar-light fixed bg-success">
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








<div class="leftdiv">


<div class="login-form container-fluid">  
  <form action="<?php echo site_url("Profile_next/calc")?>" method="post">
	 
   	 <div class="panel panel-default">
    
    <div class="panel-body input_skills-div" styel="width=200px;">


<div class="input-group input_skills control-group after-add-more">
<select class="form-control form-control-lg  form-control-borderless" name="designation">
  <option value="" disabled selected>Select Designation</option>
  <option <?php if (isset($designation) && $designation== "Data Science") echo 'selected' ;?> value="Data Science">Data Science</option>
  <option <?php if (isset($designation) && $designation== "Machine Learning") echo 'selected' ;?> value="Machine Learning">Machine Learning</option>
  <option <?php if (isset($designation) && $designation== "Artificial Intelligence") echo 'selected' ;?> value="Artificial Intelligence">Artificial Intelligence</option>
  <option <?php if (isset($designation) && $designation== "Software Developer") echo 'selected' ;?> value="Software Developer">Software Developer</option>
  <option <?php if (isset($designation) && $designation== "Cloud Computing") echo 'selected' ;?> value="Cloud Computing">Cloud Computing</option>
  <option <?php if (isset($designation) && $designation== "Web Developer") echo 'selected' ;?> value="Web Developer">Web Developer</option>
  <option <?php if (isset($designation) && $designation== "Internet of Things") echo 'selected' ;?> value="Internet of Things">Internet of Things</option>
  
</select> 
               <div class="col-auto">
                                        <button class="btn btn-lg btn-success" type="submit">Search</button>
                                    </div>            
 
    </div>
<hr style="margin-right:180px; width:450px;">


<ul><b>
<?php 
      
      if(isset($designation)&&$designation=="Data Science"){
        $_SESSION['designation']="Data Science";
          $designed=array("Math & Statistics","communication skills","Machine Learning Skills","Data visualization","Data Wrangling","Pre-processing","Python","R language","Matlab","Algorithms","Advanced Excel","Sql");
        }
    else if(isset($designation) &&  $designation=="Machine Learning"){
        $_SESSION['designation']="Machine Learning";
        $designed=array("Data modeling","Math & Statistics","Python","Algorithms","Software Design","Python","R language","C++","Machine Learning libraries");
    }
    else if(isset($designation) && $designation=="Artificial Intelligence"){
        $designed=array("Algorithms","Python","C++","Java","Python","Unix tools","Advance signal processing techniques","Statistics & Probability","Calculus & Algebra","Data structures","Cognitive learning","Bayesian algorithms and logic","Language processing");
    }
    else if(isset($designation) && $designation=="Software Developer"){
        $designed=array("Algorithms","Data Structure","Mathematical","Problem Solving Skills","Programming Languages","Databases","Operating System","Networking Basic","Encryption and Cryptography");
    }
    else if(isset($designation) && $designation=="Cloud Computing"){
       $designed = array("Programming Lanaguages","Cloud Security","Linux","Data management","Cloud platform","Business and Analytical Skills");    
    }
    else if(isset($designation) && $designation=="Web Developer"){
        $designed=array("HTML","CSS","JavaScript","Photoshop","Wordpress","Analytical Skills","SEO","AJAX","Programming Language");
    }
    else if(isset($designation) && $designation=="Internet of Things"){
        $designed=array("IP networking","Business Intelligence","Information Security","UI/UX","Mobile Development","Machine Learning","Artificial Intelligence");
    }
 

$get=array();
 for($i=0;$i<count($get_skills);$i++){
    array_push($get,$get_skills[$i]['skills']);
 }

//  print_r($get);
if(isset($designation)){
foreach($designed as $desi){
    if(!in_array($desi,$get)){
        echo "<li>";
        echo $desi;
        echo "</li>";

    }

}
}
else{
    echo "<p>You skills matches following designation(s)</p>";
    echo "<li>Machine Learning</li>";
    echo "<li>Data Science</li>";
    echo "<br>";
    echo "<p>Find relevant skills using Select Designation Column</p>";
}
    
    ?>
</b></ul>
</div></div>   
</form>
   </div>

</div>


<div class="rightdiv">


<div class="login-form">  
  <form action="/examples/actions/confirmation.php" method="post">
	 
   	 <div class="panel panel-default">
    
    <div class="panel-body input_skills-div" styel="width=200px;">

<h2>Your Skills</h2>
<hr style="margin-right:160px">

<ul><b>
  <?php 
  if(isset($get_skills)){
    for($i=0;$i<count($get_skills);$i++){
        echo "<li>".$get_skills[$i]['skills']."</li>";
    }
  }
  else{
    echo "<h2>No Skills Selected</h2>";      
}
  ?>
</b></ul>
</div>
</div>
   </div>
</div>
<hr>
<hr>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p style="font-size:2rem"><b>Jobs Offered</b></p>
<div class="row d-inline-flex" style="margin-left:180px;">
    <div class="col bg-success m-2 p-2">
     <p>Company name : Testbook</p>
     <p>Designation : Python Developer </p>
    <p> Salary : 6L-10LPA </p>
    <p>Experience required : 2-3yrs </p> 
    <p><a target="_blank" href="https://angel.co/company/testbook/jobs/670890-python-developer?" >Click here to apply</a>
    </div>
    <div class="col bg-success m-2 p-2">
    <p>Company name : fynd</p>
     <p>Designation : Matlab Consultant </p>
    <p> Salary : 4L-7L </p>
    <p>Experience required : 2-3yrs </p> 
    <p><a target="_blank" href="https://www.timesjobs.com/job-detail/matlab-consultant-kg-tiger-mumbai" >Click here to apply</a>
    </div>
    <div class="col bg-success m-2 p-2">
    <p>Company name : Seven Consultancy </p>
     <p>Designation : SQL Developer  </p>
    <p> Salary : 4L-8L </p>
    <p>Experience required : 2-3yrs </p> 
    <p><a target="_blank" href="https://www.shine.com/jobs/database-oracle-sql-developer/seven-consultancy" >Click here to apply</a>
    </div>
</div>
<div class="container" style="margin-top:100px;">

   <?php 
    if(isset($designation) && $designation== "Data Science"){?>
  <p style="font-size:2rem" >What is Data science? </p>
<p>Data science is an inter-disciplinary field that uses scientific methods, processes, algorithms and systems to extract knowledge and insights from structured and unstructured data. Data science is related to data mining and big data. </p>
<hr>
<div class="container-fluid">
<div class="panel panel-default" style="height:350px;"  >
    
    <div class="panel-body input_skills-div" style="width:1000px;" >
    <h4 style="color:black;">
     <u> Data Science Path way <u>
    </h4>
    <p><a target="_blank" href="https://www.tutorialspoint.com/computer_programming/computer_programming_basics.htm">1.Fundamental of Programming</a></p>
       <p><a target="_blank" href="https://www.programiz.com/python-programming"> 2.Python.</a></p>
       <p> <a target="_blank" href="https://www.javatpoint.com/python-oops-concepts">3.OOPs. </a></p>
       <p><a target="_blank" href="https://www.tutorialspoint.com/python/python_data_structure.htm"> 4.DSA. </a> </p>
       <p><a target="_blank" href="https://www.tutorialspoint.com/python/python_data_structure.htm"> 5.Pre-processing. </a></p>
       <p><a target="_blank" href="https://towardsdatascience.com/data-cleaning-with-python-and-pandas-detecting-missing-values-3e9c6ebcf78b">6.Data Cleaning.  </a></p>
       <p><a target="_blank" href="https://towardsdatascience.com/introduction-to-data-visualization-in-python-89a54c97fbed">7.Visualization.  </a></p>
    </div>
    </div>
</div>
<hr>
<div class="container-fluid ml-5">
  <table class="table" border=2>
    <thead>
      <tr>
        <th>Pros</th>

        <th>Cons</th>
       
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>1.In Demand</td>
 <td>1. Data Science is Blurry Term</td>
       
              
  	 
      
      </tr>

      <tr>
<td>2.Abundance of Positions</td>
<td>2.Large Amount of Domain Knowledge Required</td>

      </tr>
     
      <tr>
<td>3.Data Science is Versatile</td>
<td>3.Mastering Data Science is near to impossible</td>

      </tr>
     

      <tr>
<td>4.Data Science Makes Products Smarter</td>
<td>4.Problem of Data Privacy</td>

      </tr>
     


    </tbody>
  </table>
</div>
<hr>
<h3>   Scope </h3>
<img src="<?php echo base_url('images/data-science-job-postings-1.png'); ?>" alt="" style="width:100%;" >
    <hr>
    <p style="font-size:2rem">Jobs Offered By</p> 
<div class="row">
    
        
 <div class="col-lg-4">
 <img src="<?php echo base_url('images/ms.png'); ?>" alt="" style="width:300px;height:400px;" >
 </div>
 <div class="col-lg-4">
 <img src="<?php echo base_url('images/google.jpg'); ?>" alt="" style="width:300px;height:400px;" >
 </div>
 <div class="col-lg-4">
 <img src="<?php echo base_url('images/ibm.png'); ?>" alt=""  style="width:300px;height:400px;" >
 </div>

</div>
    <?php  } ?>
    </div>

    <div class="container">

    <?php
    
    if(isset($designation) && $designation=="Machine Learning"){?>

<p style="font-size:2rem">Machine Learning?</p>
<p>
Machine learning is an application of artificial intelligence (AI) that provides systems the ability to automatically learn and improve from experience without being explicitly programmed. Machine learning focuses on the development of computer programs that can access data and use it learn for themselves.

</p>
<hr>
<div class="container-fluid">
<div class="panel panel-default" style="height:350px;"  >
    
    <div class="panel-body input_skills-div" style="width:1000px;" >
    <h4 style="color:black;">
     <u> Machine Learning Path way <u>
    </h4>
    <p><a target="_blank" href="https://www.tutorialspoint.com/computer_programming/computer_programming_basics.htm">1.Fundamental of Programming</a></p>
       <p><a target="_blank" href="https://www.programiz.com/python-programming"> 2.Python.</a></p>
       <p> <a target="_blank" href="https://www.javatpoint.com/python-oops-concepts">3.OOPs. </a></p>
       <p><a target="_blank" href="https://www.tutorialspoint.com/python/python_data_structure.htm"> 4.DSA. </a> </p>
       <p><a target="_blank" href="https://www.tutorialspoint.com/python/python_data_structure.htm"> 5.Pre-processing. </a></p>
       <p><a target="_blank" href="https://towardsdatascience.com/data-cleaning-with-python-and-pandas-detecting-missing-values-3e9c6ebcf78b">6.Data Cleaning.  </a></p>
       <p><a target="_blank" href="https://towardsdatascience.com/introduction-to-data-visualization-in-python-89a54c97fbed">7.Visualization.  </a></p>
    </div>
    </div>
</div>
<hr>
<div class="container-fluid ">

  <table class="table" border=2>
    <thead>
      <tr>
        <th width="200px">Prons</th>

        <th width="200px">Cons</th>
       
      </tr>
    </thead>

    <tbody>
      <tr>
        <td width="200px">1.Trends and Patterns Are Identified With Ease.</td>
 <td width="200px">1. There’s a High Level of Error Susceptibility</td>
       
              
  	 
      
      </tr>

      <tr>
<td>2. Machine Learning Improves Over Time</td>
<td>2. It May Take Time (and Resources) for Machine Learning to Bring Results</td>

      </tr>
     
      <tr>
<td>3. Machine Learning Lets You Adapt Without Human Intervention</td>
<td>3. Time and resources</td>

      </tr>
     

      <tr>
<td>4. No human interference is required</td>
<td>4. Data acquisition</td>

      </tr>
     


    </tbody>
  </table>
</div>
<hr>
<h3>   Scope   </h3>
<img src="<?php echo base_url('images/ml.png'); ?>" alt="" style="width:100%;" >
<hr>
<p style="font-size:2rem">Jobs Offered By</p> 
<div class="row">
    
        
 <div class="col-lg-4">
 <img src="<?php echo base_url('images/ms.png'); ?>" alt="" style="width:300px;height:400px;" >
 </div>
 <div class="col-lg-4">
 <img src="<?php echo base_url('images/google.jpg'); ?>" alt="" style="width:300px;height:400px;" >
 </div>
 <div class="col-lg-4">
 <img src="<?php echo base_url('images/ibm.png'); ?>" alt=""  style="width:300px;height:400px;" >
 </div>

</div>
  <?php  }
    
    ?>




    </div>
    <?php if(isset($designation)){?>
    <div class="row mt-5 ">
        <div class="col d-flex justify-content-between">
            <a class="btn btn-success" href="<?php echo site_url('certificate')?>">Check Available Courses</a>
        </div>
    </div>
    <?php } ?>
</body>
</html>