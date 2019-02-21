<?php 
    $dbhost = 'cis282movies.clhtej6ajnfm.us-east-1.rds.amazonaws.com';
    $dbuser = 'santiagomovies';
    $dbpass = 'Jordan1!';
    $dbname = 'cis282movies';
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if (! $connection)
    {
        die('Could Not Connect To Instance: ' . mysqli_error($connection));
    }
    ?>