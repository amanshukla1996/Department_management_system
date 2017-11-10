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
                        <a class="active-menu" href="facultyinfo.php"><i class="fa fa-sitemap "></i>Faculty Info</a>
                        
                    </li>
                    
                   
                    <li>
                        <a  href="adminsyl.php"><i class="fa fa-dashcube "></i>Syllabus</a>
                    </li>
<li>
                        <a   href="adminstudent.php"><i class="fa fa-bolt "></i>First Year Details</a>
                    </li>
					<li>
                        <a  href="adminstudent2.php"><i class="fa fa-bolt "></i>Second Year Details</a>
                    </li>
					<li>
                        <a href="adminstudent3.php"><i class="fa fa-bolt "></i>Third Year Details</a>
                    </li>
					<li>
                        <a   href="adminstudent4.php"><i class="fa fa-bolt "></i>Fourth Year Details</a>
                    </li>
					<li>
                        <a  href="admincompany.php"><i class="fa fa-dashcube "></i>Past Recruiters</a>
                    </li> 
                  
                </ul>
            </div>

        </nav>
        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls">
             <div class="row">
			 			                         <h1 class="page-head-line">Faculty Info</h1>
			        <div class="col-md-12">
		
			<div class="container">
	<table class = "table table-striped  table-hover">
	  
	  
	  <tr bgcolor="grey">
		<th> S.No </th>
		<th> Name </th>
		<th> Position </th>
		<th> Contact No. </th>
	  </tr>
	  <tr>
		<td> 1. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20IT/Dr_Krishan.pdf"> Dr. Krishan Kumar Saluja</td>
		<td> Professor</td>
		<td> 9432876515</td>
	  </tr>
	  <tr>
		<td> 2. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20IT/Inderdeep.pdf">Ms. Inderdeep Kaur Aulakh</td>
		<td> Assistant Professor</td>
		<td> 9736145465</td>
	  </tr>
	  <tr>
		<td> 3. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20IT/neelam.pdf">Ms. Neelam Goel</td>
		<td> Assistant Professor</td>
		<td> 9725468130</td>
	  </tr>
	  <tr>
		<td> 4. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20IT/roopali.pdf">Ms. Roopali Garg</td>
		<td> Assistant Professor</td>
		<td> +919417724824 </td>
	  </tr>
	  <tr>
		<td> 5. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20IT/Veenu.pdf"> Ms. Veenu Mangat</td>
		<td> Assistant Professor</td>
		<td> 0172-2541242</td>
	  </tr>
	  <tr>
		<td> 6. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20IT/Mandeep.pdf"> Ms. Mandeep Kaur</td>
		<td> Assistant Professor</td>
		<td> 9888101112</td>
	  </tr>
	  <tr>
		<td> 7. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20IT/Aman.pdf"> Ms. Amandeep Verma </td>
		<td> Assistant Professor</td>
		<td> 9781777730</td>
	  </tr>
	  <tr>
		<td> 8. </td>
		<td><a href="http://nbauiet.puchd.ac.in/cvs%20of%20IT/puneet.pdf">Ms. Puneet Jai Kaur</td>
		<td> Assistant Professor</td>
		<td> 9914257047</td>
	  </tr>
	  <tr>
		<td> 9. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20IT/raj.pdf"> Ms. Rajkumari</td>
		<td> Assistant Professor</td>
		<td> 9417917607</td>
	  </tr>
	  <tr>
		<td> 10. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20IT/sukesha.pdf"> Ms. Sukesha Sharma</td>
		<td> Assistant Professor</td>
		<td> 9815472778</td>
	  </tr>
	  <tr>
		<td> 11. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20IT/Monika.pdf"> Ms. Monika Sharma</td>
		<td> Assistant Professor</td>
		<td>  8968175076</td>
	  </tr>
	  <tr>
		<td> 12. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20IT/Nidhi.pdf"> Ms. Nidhi</td>
		<td> Assistant Professor</td>
		<td> 9632185454</td>
	  </tr>
	  <tr>
		<td> 13. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20IT/yogita.docx"> Ms. Yogita</td>
		<td> Assistant Professor</td>
		<td> 9646837469</td>
	  </tr>
	  <tr>
		<td> 14. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20IT/rajni.docx"> Ms. Rajni Sobti</td>
		<td> Assistant Professor</td>
		<td> 9530461837</td>
	  </tr>
	  <tr>
		<td> 15. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20IT/Sukhvir.pdf"> Mr. Sukhvir Singh</td>
		<td> Assistant Professor</td>
		<td> 09855804567</td>
	  </tr>
	  <tr>
		<td> 16. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20IT/rajneesh.pdf"> Mr. Rajneesh Singla</td>
		<td> Assistant Professor</td>
		<td> 9456123871</td>
	  </tr>
	  <tr>
		<td> 17. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20IT/Gurmukh.pdf">Mr. Gurmukh Singh</td>
		<td> Assistant Professor</td>
		<td> 9421316431</td>
	  </tr>
	  <tr>
		<td> 18. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20IT/ManuBansal.pdf"> Mr. Mannu Bansal</td>
		<td> Assistant Professor</td>
		<td> 9513642827</td>
	  </tr>
	  <tr>
		<td> 19. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20IT/shaweta.pdf"> Ms. Shaweta</td>
		<td> Assistant Professor</td>
		<td> 9497601403</td>
	  </tr>
	  
	 </table>	
			
                    </div>
                </div>
              
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
   <footer >
          <b> &copy; Admin Portal | By : Akash Upadhyay  </b>
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
