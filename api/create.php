<?php
  echo "<section id='menu'><element id='sub_navigation'>" .
  "<input type='button' value='Menu' id='menu_button' onclick='toggleMenu()'></input></element>" .
  "<element id='create_form'><form action='api/table.php' method='POST' target='table_content'>" .
  "1.&nbsp;<input type='text' name='id'><br>2.&nbsp;<input type='text' name='aa'><br>" .
  "3.&nbsp;<input type='text' name='bb'><br>4.&nbsp;<input type='text' name='cc'><br>" .
  "5.&nbsp;<input type='text' name='dd'><br>6.&nbsp;<input type='text' name='ee'><br>" .
  "<input id='submit_button' type='Submit'>" .
  "<input id='remove_button' type='Button' value='Remove' onClick='toggleRemove()'></form></element></section>";
?>
