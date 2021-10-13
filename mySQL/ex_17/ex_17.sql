select title, length( title )
from coding.movies
where length( title ) = ( select max( length( title ) ) from coding.movies );