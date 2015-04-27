//On-click functions for input forms

var wbtTasks = [];
var wbtTasksNum = 0;

function addWBTTask() {
	var tasknum = document.getElementById("addTaskNum").value;
	var taskname = document.getElementById("addTaskName").value;
	wbtTasksNum += 1;
	wbtTasks.push([tasknum, taskname]);
	var tasklist = document.getElementById("wbttasklist");
	var taskstring = "";
	for (var i = 0; i < wbtTasksNum; i++) {
		taskstring += "<p><strong>Task "+wbtTasks[i][0]+": </strong>"+wbtTasks[i][1]+"</p>"; //Add current task num and name to a string (html format)
	}
	tasklist.innerHTML = taskstring;
	
}