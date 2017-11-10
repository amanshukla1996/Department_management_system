<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Portal</title>
    
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    
    <link href="assets/css/style.css" rel="stylesheet" />
     
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand" href="index.php">Admin Portal

                </a>
            </div>

            <div class="notifications-wrapper">
<ul class="nav">
               
               
                <li class="dropdown navbar-right">
                   <a class="dropdown-toggle" data-toggle="dropdown" href="#" >
                        <i class="fa fa-user-plus"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user" >
                        
                       
                        <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav  class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                  <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-circle" />

                           
                        </div>

                    </li>
                     <li>
                        <a  href="#"> <center><strong><b>Admin</b> </strong></center></a>
                    </li>
                    <li>
                        <a href="facultyinfo.php"><i class="fa fa-sitemap "></i>Faculty Info</a>
                        
                    </li>
                    
                   
                    <li>
                        <a  href="adminsyl.php"><i class="fa fa-dashcube "></i>Syllabus</a>
                    </li>
<li>
                        <a  href="adminstudent.php"><i class="fa fa-bolt "></i>First Year Details</a>
                    </li>
					<li>
                        <a  href="adminstudent2.php"><i class="fa fa-bolt "></i>Second Year Details</a>
                    </li>
					<li>
                        <a  href="adminstudent3.php"><i class="fa fa-bolt "></i>Third Year Details</a>
                    </li>
					<li>
                        <a   href="adminstudent4.php"><i class="fa fa-bolt "></i>Fourth Year Details</a>
                    </li>
                  <li>
                        <a  class="active-menu" href="admincompany.php"><i class="fa fa-dashcube "></i>Past Recruiters</a>
                    </li> 
                </ul>
            </div>

        </nav>
        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls">
             <div class="row">
			 			                         <h1 class="page-head-line">Past Recruiters</h1>
			        <div class="col-md-12">

		<?php
$db = mysql_connect("localhost","root","");
mysql_select_db("iwt",$db);
?>


<?php
$aman= mysql_query("SELECT name from company", $db);
while($comp= mysql_fetch_array($aman))
{
	echo '
	<form action=# method="POST">
	<table border="5" cellspacing="20" cellpadding="25px">
	<tr>
	<th>
	<input type="hidden" name="akash" value="'.$comp["name"].'">'.$comp["name"].'
	</th>
<th>
	<input type="submit" value="Delete">
	</th>
	</tr>
	</table>
	</form>
	<br>';
}
?>




			
			
                    </div>
                </div>
              
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
   <footer >
          <b> &copy; Admin Portal | By : Akash Upadhyay  </b>
<?php
if($_POST['akash']!= "")
{
	mysql_query('delete from company where name="'.$_POST['akash'].'"',$db);
}
?>

		  </footer>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>