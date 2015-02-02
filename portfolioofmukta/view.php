<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">


    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/contact_me.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/script.js"></script>

</head>
<body>
<?php
include_once("header.php");
?>

                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>List</h3>
                            <p>[List of Members]</p>
                        </div>
                    </div>
					<div class="container">
                    <div class="row">
           
                        <div class="col-md-12">
                        <div class="panel panel-default">
  <div class="panel-body">
                        

<?php
/* 
	VIEW-PAGINATED.PHP
	Displays all data from 'comment' table
	This is a modified version of view.php that includes pagination
*/

	// connect to the database
	include('connect-db.php');
	
	// number of results to show per page
	$per_page = 20;
	
	// figure out the total pages in the database
	$result = mysql_query("SELECT * FROM facebook");
	$total_results = mysql_num_rows($result);
	$total_pages = ceil($total_results / $per_page);

	// check if the 'page' variable is set in the URL (ex: view-paginated.php?page=1)
	if (isset($_GET['page']) && is_numeric($_GET['page']))
	{
		$show_page = $_GET['page'];
		
		// make sure the $show_page value is valid
		if ($show_page > 0 && $show_page <= $total_pages)
		{
			$start = ($show_page -1) * $per_page;
			$end = $start + $per_page; 
		}
		else
		{
			// error - show first set of results
			$start = 0;
			$end = $per_page; 
		}		
	}
	else
	{
		// if page isn't set, show first set of results
		$start = 0;
		$end = $per_page; 
	}
	
	// display pagination
	
	echo "<p><a href='view.php'>View All</a> | <b>View Page:</b> ";
	for ($i = 1; $i <= $total_pages; $i++)
	{
		echo "<a href='view.php?page=$i'>$i</a> ";
	}
	echo "</p>";
		
	// display data in table
	echo "<table class='table table-hover'>";
	echo "<tr> <th>ID</th><th>firstName</th><th>lastName</th> <th>email</th> <th>password</th> <th>birthDate</th> <th>hobby</th><th>City</th> <th>comment</th> <th>created</th><th>Modified</th><th>Edit</th><th>Delete</th></tr>";

	// loop through hobbys of database query, displaying them in the table	
	for ($i = $start; $i < $end; $i++)
	{
		// make sure that PHP doesn't try to show hobbys that don't exist
		if ($i == $total_results) { break; }
	
		// echo out the contents of each row into a table
		echo "<tr>";
		echo '<td>' . mysql_result($result, $i, 'id') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'firstName') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'lastName') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'email') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'password') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'date') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'hobby') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'favFood') . '</td>';
		
		echo '<td>' . mysql_result($result, $i, 'comment') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'created') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'modified') . '</td>';
		
		echo '<td><a href="edit.php?id=' . mysql_result($result, $i, 'id') . '">Edit</a></td>';
		echo '<td><a href="delete.php?id=' . mysql_result($result, $i, 'id') . '">Delete</a></td>';
		echo "</tr>"; 
	}
	// close table>
	echo "</table>"; 
	
	// pagination
	
?>
<hr />
<div class="btn-group btn-group-lg" class="caret"><a href="logout.php">Logout</a></div>
<hr />

            </div></div></div></div></div></div></div>
              





<?php
include_once("footer.php");
?>





                   
   </body>           
</html>
