SELECT room_number as "Room number", 
name as "Room name" 
FROM coding.rooms 
where (floor!=1) AND (seats!=0) 
order by room_number and name;
/*in this case the db gui aka phpmyadmin is necessary because file contains a table called Rooms, from where we need to query*/
