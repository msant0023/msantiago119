<?php 

$movieId = $_GET["movie"];

//Get Movie Detail
$querySQL = "SELECT
m.movie_id
, p.persons_id
, m.title
, p.first_name as first_name
, p.last_name as last_name
, m.year
, m.release_date
, r.ratings_nm as rating
, m.post_credit
, m.gross_box_office as gross
, l.lang_nm as language
, m.rt_rating as rotten_rating

FROM
cis282movies.movies m
, cis282movies.persons p
, cis282movies.languages l
, cis282movies.ratings r


WHERE
m.director_id = p.persons_id
AND m.rating_id = r.ratings_id
AND m.language_id = l.lang_id
AND m.movie_id = $movieId

ORDER BY m.movie_id

";    

//GET RESULTS
$result = mysqli_query($connection, $querySQL);

//FETCH DATA
$movieBio = mysqli_fetch_all($result, MYSQLI_ASSOC);























//FREE RESULT
mysqli_free_result($result);

//CLOSE CONNECTION
mysqli_close($connection);




?>