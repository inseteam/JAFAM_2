<!--Create! page content-->
<h1>Create Gantt Chart</h1>
<div class="inputs">
	<form action="" id="ganttform" name="ganttform" method="post">
		<label id="taskid" for="ganttNum">Task ID: </label>
		<input type="text" name="ganttNum" id="ganttNum" onchange="valGanttNum()">
		<label for="ganttName">Task Name: </label>
		<input type="text" name="ganttName" id="ganttName">
		<label for="ganttPredecessors">Predecessors: </label>
		<input type="text" name="ganttPredecessors" id="ganttPredecessors">
		<label for="ganttStartDate">Start Date: </label>
		<input type="date" name="ganttStartDate" id="ganttStartDate">
		<label for="ganttEndDate">End Date: </label>
		<input type="date" name="ganttEndDate" id="ganttEndDate">
	</form>
	<button id="addgantt" onclick="addGanttTask()">Add</button>
</div>
<div id="gantttasklist">

</div>
<button id="generategantt" onclick="">Generate</button>

<h1>Create Work Breakdown Tree (WBT)</h1>
<div class="inputs">
	<form action="" id="wbtform" name="wbtform" method="post">
		<label id="tasknum" for="addTaskNum">Task Number: </label>
		<input type="text" name="addTaskNum" id="addTaskNum" onchange="valWBTNum()">
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
