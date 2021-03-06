<?php

$movies = array(
	array("title"=>"Fight Club", "genre"=>"Drama", "year"=>"1999", "director"=>"David Fincher"),
	array("title"=>"Pulp Fiction", "genre"=>"Drama", "year"=>"1994", "director"=>"Quentin Tarantino"), 
	array("title"=>"2001: A Space Odyssey", "genre"=>"Science Fiction", "year"=>"1968", "director"=>"Stanley Kubrick"),
	array("title"=>"Blade Runner", "genre"=>"Drama", "year"=>"1982", "director"=>"Ridley Scott"),
	array("title"=>"The Godfather", "genre"=>"Drama", "year"=>"1972", "director"=>"Francis Ford Coppola"),
	array("title"=>"The Dark Knight", "genre"=>"Action", "year"=>"1972", "director"=>"Christopher Nolan"),
	array("title"=>"Forrest Gump", "genre"=>"Drama", "year"=>"1994", "director"=>"Robert Zemeckis"),
	array("title"=>"The Lord of the Rings: The Return of the King", "genre"=>"Action", "year"=>"2003", "director"=>"Peter Jackson"),
	array("title"=>"Interstellar", "genre"=>"Science Fiction", "year"=>"2014", "director"=>"Christopher Nolan"),
	array("title"=>"Il Buono, il Brutto, il Cattivo", "genre"=>"Western", "year"=>"1966", "director"=>"Sergio Leone"),
	array("title"=>"Inception", "genre"=>"Action", "year"=>"2010", "director"=>"Christopher Nolan"),
	array("title"=>"A Clockwork Orange", "genre"=>"Drama", "year"=>"1971", "director"=>"Stanley Kubrick"),
	array("title"=>"Apocalypse Now", "genre"=>"Drama", "year"=>"1979", "director"=>"Francis Ford Coppola"),
	array("title"=>"The Lord of the Rings: The Fellowship of the Ring", "genre"=>"Action", "year"=>"2001", "director"=>"Peter Jackson"),
	array("title"=>"Star Wars Episode V: The Empire Strikes Back", "genre"=>"Science Ficton", "year"=>"1980", "director"=>"Irvin Kershner"),
	array("title"=>"Eternal Sunshine of the Spotless Mind", "genre"=>"Drama", "year"=>"2004", "director"=>"Michel Gondry"),
	array("title"=>"Old Boy", "genre"=>"Drama", "year"=>"2003", "director"=>"Park Chan-Wook"),
	array("title"=>"Mononoke Hime", "genre"=>"Animation", "year"=>"1997", "director"=>"Hayao Miyazaki"),
	array("title"=>"The Matrix", "genre"=>"Science Fiction", "year"=>"1999", "director"=>"Lilly Wachowski & Lana Wachowski"),
	array("title"=>"Back to the Future", "genre"=>"Science Fiction", "year"=>"1985", "director"=>"Robert Zemeckis"),
	array("title"=>"12 Angry Men", "genre"=>"Drama", "year"=>"1957", "director"=>"Sidney Lumet"),
	array("title"=>"Mulholland Dr.", "genre"=>"Drama", "year"=>"2001", "director"=>"David Lynch"),
	array("title"=>"Sen to Chihiro no Kamikakushi", "genre"=>"Animation", "year"=>"2001", "director"=>"Hayao Miyazaki"),
	array("title"=>"Into the Wild", "genre"=>"Adventure", "year"=>"2007", "director"=>"Sean Penn"),
	array("title"=>"One Flew Over the Cuckoo's Nest", "genre"=>"Drama", "year"=>"1975", "director"=>"Milos Forman"),
	array("title"=>"One Upon a Time in America", "genre"=>"Drama", "year"=>"1984", "director"=>"Sergio Leone"),
	array("title"=>"The Shining", "genre"=>"Horror", "year"=>"1980", "director"=>"Stanley Kubrick"),
	array("title"=>"Drive", "genre"=>"Drama", "year"=>"2011", "director"=>"Nicolas Winding Refn"),
	array("title"=>"Gladiator", "genre"=>"Action", "year"=>"2000", "director"=>"Ridley Scott"),
	array("title"=>"The Big Lebowski", "genre"=>"Comedy", "year"=>"1998", "director"=>"the Coen Brothers"),
	array("title"=>"Se7en", "genre"=>"Thriller", "year"=>"1995", "director"=>"David Fincher"),
	array("title"=>"Goodfellas", "genre"=>"Drama", "year"=>"1990", "director"=>"Martin Scorsese"),
	array("title"=>"The Shawshank Redemption", "genre"=>"Drama", "year"=>"1994", "director"=>"Frank Darabont"),
	array("title"=>"Django Unchained", "genre"=>"Western", "year"=>"2012", "director"=>"Quentin Tarantino"),
	array("title"=>"C'era una volta il West", "genre"=>"Western", "year"=>"1968", "director"=>"Sergio Leone"),
	array("title"=>"American Beauty", "genre"=>"Drama", "year"=>"1999", "director"=>"Sam Mendes"),
	array("title"=>"Alien", "genre"=>"Science Fiction", "year"=>"1979", "director"=>"Ridley Scott"),
	array("title"=>"The Green Mile", "genre"=>"Drama", "year"=>"1999", "director"=>"Frank Darabont"),
	array("title"=>"Reservoir Dogs", "genre"=>"Thriller", "year"=>"1992", "director"=>"Quentin Tarantino"),
	array("title"=>"Mommy", "genre"=>"Drama", "year"=>"2014", "director"=>"Xavier Dolan"),
	array("title"=>"Le Horla", "genre"=>"Drama", "year"=>"2018", "director"=>"IMAC2020"),
	array("title"=>"MƎTRONORMƎ", "genre"=>"Drama", "year"=>"2018", "director"=>"IMAC2020"),
	array("title"=>"L'Interview Numérique - Digital Sweat'", "genre"=>"Comedy", "year"=>"2018", "director"=>"IMAC2020"),
	array("title"=>"Morue", "genre"=>"Comedy", "year"=>"2018", "director"=>"IMAC2020"),
	array("title"=>"Sup de Super", "genre"=>"Comedy", "year"=>"2018", "director"=>"IMAC2020"),
	array("title"=>"Onisk", "genre"=>"Drama", "year"=>"2018", "director"=>"IMAC2020"),
	array("title"=>"Olentia", "genre"=>"Comedy", "year"=>"2018", "director"=>"IMAC2020")
);




 foreach($movies as $movie){
   
     echo "<p class='encadre'></p> ";
     
                  foreach($movie as $information){
     
                      $differenceannee = date('Y')-$movie["year"]; // Date('Y') récupere l'année actuelle. 
                         if ($differenceannee <= 10){
                          // Si le film a moins de 10 ans on y ajoute : Des tétines de bébé. 
                          
                        echo  " <img class='image' src='https://image.flaticon.com/icons/svg/709/709345.svg' height='22' width='22'> " ;
                          
                     }
                      
                      if(key($movie)!="title"){
                    
                      echo "<br/> ";
                                   // Si c'est de la SF on ajoute une coloration rainbow  

                                    if($movie["genre"]=="Science Fiction"){
                                          $ilmefautlinfo=key($movie);

                                      echo "<b class='rainbow'> $ilmefautlinfo : $information </b>";

                                      }
                                 // Sinon on affiche normalement
                                    else{
                          
                                        echo  key($movie)." : $information";
                                    }        
                      }
                          
                          // Si c'est le titre on ajoute un petit signe distinctif : une flèche
                      else {
                          
                           echo  " ► <b> $information </b>";
                          
                      }
    
                      next($movie); 
                          
                                }
                  }


echo "<br/> <br/><b> LE TEST </b><br />";


function render_movie_list($listedefilms,$genre,$nbannees){
    if ($listedefilms!=NULL){
        $indice=0;
         foreach($listedefilms as $movie){
    
                    if ($indice!=0){ // Question d'avoir un affichage propre 
                          echo "<br/>";
                    }
     
                  foreach($movie as $information){
                      
                      if ($movie["genre"]==$genre && date('Y')-$movie["year"]<=$nbannees){
                          echo "<br/>"; 
                          echo  key($movie)." : $information";
                          $indice=1;
                      }
                      else{
                          $indice=0;
                      }
                      
                next($movie); 
                  }
                      
         }
             
    }
    
    else {
        
        echo " La liste est vide ";
    
}
}



// On fait un test : 

render_movie_list($movies,"Comedy","10");

?>



<style>

.rainbow {
  background-image: -webkit-gradient( linear, left top, right top, color-stop(0, #f22), color-stop(0.15, #f2f), color-stop(0.3, #22f), color-stop(0.45, #2ff), color-stop(0.6, #2f2),color-stop(0.75, #2f2), color-stop(0.9, #ff2), color-stop(1, #f22) );
  background-image: gradient( linear, left top, right top, color-stop(0, #f22), color-stop(0.15, #f2f), color-stop(0.3, #22f), color-stop(0.45, #2ff), color-stop(0.6, #2f2),color-stop(0.75, #2f2), color-stop(0.9, #ff2), color-stop(1, #f22) );
  color:transparent;
  -webkit-background-clip: text;
  background-clip: text;
    }
.image {
 z-index: 1;
  position: absolute;
    left: 400px;
}
    
    .encadre{
         border-width:1px;
        border-style:dotted;
        border-color:black;
    }    
}</style>