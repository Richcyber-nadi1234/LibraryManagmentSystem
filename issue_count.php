<?php
$con=mysqli_connect("localhost","root","","librarymanagementdb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT issue_id FROM book_issue ORDER BY id";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("%d",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>