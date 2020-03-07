
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Skill</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	body {
		color: #fff;
		background: #19aa8d;
		font-family: 'Roboto', sans-serif;
	}
	.form-control, .form-control:focus, .input-group-addon {
		border-color: #e1e1e1;
	}
    .form-control, .btn {        
        border-radius: 3px;
    }
	.signup-form {
		width: 390px;
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
		max-width: 42px;
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
	.leftdiv 
{
float: left;

}
.rightdiv 
{
float: right;

}
.middlediv
{
float: middle;

}
		.input_skills
		{
		width:300px!important;
		}
		.panel-default{
		width:350px!important;
		}
		
</style>
</head>
<body>

</div>
</div>

<div class="middlediv">
<div class="signup-form">
<form action="<?php echo site_url('Profile_update/update_profile')?>" method="post" >
		<h2>Skills</h2>
		<?php if(isset($get_skills)){
            for($i=0;$i<count($get_skills);$i++){
                echo $get_skills[$i]['skills'];
                echo "<br>";
            }
        }?>
		<hr>
		
		
       <div >
  <div class="panel panel-default">
    
    <div class="panel-body input_skills-div">


        


      	<div class="input-group input_skills control-group after-add-more">
          <input name="browser[]" list="browsers" class="form-control" placeholder="add skills" >
		  
	
		
	</datalist> <div class="input-group-btn"> 
            <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
          </div>
        </div>
    <br>
        <div class="form-group m-2">
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>


        </form>


        <!-- Copy Fields -->
        <div class="copy hide">
          <div class="control-group input_skills  input-group" style="margin-top:10px">
           <input name="browser[]" list="browsers" class="form-control" placeholder="add skills" >
		  <datalist id="browsers">
		<option value="Ethical skills">
		<option value="Communication skills">
		<option value="Machine learning">
		<option value="Data visualization">
		<option value="Pre-processing">
		<option value="Python">
		<option value="R-language">
		<option value="Matlab">
		<option value="Algorithms">
		<option value="Advance-excel">
		<option value="Sql">
		<option value="Data modelling">
		<option value="Software design">
		<option value="C++">
		<option value="C">
		<option value="ML libraries">
		<option value="Artificial Intelligence">
		<option value="Java">
		<option value="Unix tools">
		<option value="Advance signal processing techniques">
		<option value="Mathematical aptitude">
		<option value="Problem solving skils">
		<option value="Programming languages">
		<option value="Cloud security">
		<option value="Linux">
		<option value="Data management">
		<option value="Cloud platform">
		<option value="Bussiness and analaytical skills">
		<option value="Sales skills">
		<option value="Specfic marketing expertise">
		<option value="Html">
		<option value="CSS">
		<option value="JavaScript">
		<option value="Photoshop">
		<option value="Wordpress">
		<option value="Analaytical skills">
		<option value="SEO">
		<option value="Ajax">
		<option value="IP networking">
		<option value="Bussiness intelligence">
		<option value="Information security">
		<option value="UI/UX">
		<option value="Mobile development">
	</datalist>  <div class="input-group-btn"> 
              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>


    </div>
  </div>
</div>
<form action="<?php echo site_url('Profile_next')?>" method="post">
    <input type="submit" cls="btn btn-primary" value="View the Status">
</form>

<script type="text/javascript">


    $(document).ready(function() {


      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });


      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });


    });


</script>


        
        
		
		
		
	
</div>
</div>

</body>
</html>                            