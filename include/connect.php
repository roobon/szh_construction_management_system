<?php
 $db = mysqli_connect('localhost', 'root', 'mysql') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'szh_construction_management_system' ) or die(mysqli_error($db));
