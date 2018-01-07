<?php
  /*
  I'm going to dynamically generate a little content to make the site more search engine friendly. 
  */
  
  //Figure out the next serving dates. This will keep the site current for search engines.
  $nextDate = date('M d, Y',strtotime( "next sunday" )); //yes, it's really that easy
  $nextDateDowntown = date('M d, Y',strtotime( "next friday" )); 
?>