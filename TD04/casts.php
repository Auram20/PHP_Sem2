
<!DOCTYPE html>
<html>
<head>
	<title>Casts List </title>
	<style>

   	@import url('https://fonts.googleapis.com/css?family=Quicksand');
	body {background-color: #800020;
		color : white;
		font-family: sans-serif;
		font-weight: bold;}

	p{
		font-family: 'Quicksand';
		font-size: 60px;
		text-align: center;
	}
	a {
	 color: inherit; 
	} 
</style>

</head>
<body>

<p >CASTS LIST </p>
<br/>
    
<?php

include "Cast.class.php";
include "Movie.class.php";
  
   	foreach (Cast::getAll() as $cast) {
		echo "
		<li>
			<a href = \"cast.php?id={$cast->getId()}\">
			{$cast->getFirstname()} {$cast->getLastname()}
			</a>
		</li>
		"; 
	}

    ?> 





</p>

