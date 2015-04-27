<!--Create! page content-->
<h1>Work Breakdown Tree (WBT)</h1>
<div class="inputs">
	<form action="" id="wbtform" name="wbtform" method="post">
		<label for="addTaskNum">Task Number: </label>
		<input type="text" name="addTaskNum" id="addTaskNum">
		<label for="addTaskName">Task Name: </label>
		<input type="text" name="addTaskName" id="addTaskName">
	</form>
	<button id="addtask" onclick="addWBTTask()">Add</button>
</div>
<div id="wbttasklist">

</div>
<button id="generatewbt" onclick="">Generate</button>
<?php
  
  /* Does this work? Commenting it out for demo
  echo "<section id='menu'><element id='sub_navigation'>" .
  "<input type='button' value='Menu' id='menu_button' onclick='toggleMenu()'></input></element>" .
  "<element id='create_form'><form action='api/table.php' method='POST' target='table_content'>" .
  "1.&nbsp;<input type='text' name='id'><br>2.&nbsp;<input type='text' name='aa'><br>" .
  "3.&nbsp;<input type='text' name='bb'><br>4.&nbsp;<input type='text' name='cc'><br>" .
  "5.&nbsp;<input type='text' name='dd'><br>6.&nbsp;<input type='text' name='ee'><br>" .
  "<input id='submit_button' type='Submit'>" .
  "<input id='remove_button' type='Button' value='Remove' onClick='toggleRemove()'></form></element></section>";
  */
?>
