<?php
 $db = mysqli_connect("localhost","root","mysql","szh_construction_management_system");

 if(mysqli_connect_errno())
 {
 	echo "failed to connect to MySQL:".mysqli_connect_error();
 }
