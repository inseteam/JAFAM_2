<?php
  echo "<section id='menu'><element id='sub_navigation'>" .
  "<input type='button' value='Menu' id='menu_button' onclick='toggleMenu()'></input></element>" .
  "<element id='create_form'><form method='POST'>" .
  "1.&nbsp;<input type='text' name='1'><br>2.&nbsp;<input type='text' name='2'><br>" .
  "3.&nbsp;<input type='text' name='3'><br>4.&nbsp;<input type='text' name='4'><br>" .
  "5.&nbsp;<input type='text' name='5'><br>6.&nbsp;<input type='text' name='6'><br>" .
  "<input id='submit_button' type='Submit' value='Submit' onClick='toggleTables()'></form></element></section>";
?>
