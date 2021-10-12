select name as "Name of most expensive subscription", price as Price 
from subscriptions 
order by price desc LIMIT 1;