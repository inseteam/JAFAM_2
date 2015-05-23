//On-click functions for input forms

var wbtTasks = [];
var wbtTasksNum = 0;
var ganttTasks = [];
var ganttTasksNum = 0;

function addWBTTask() {
	var tasknum = document.getElementById("addTaskNum").value;
	var taskname = document.getElementById("addTaskName").value;
	if (tasknum == "" || taskname == "") {
		alert("Please fill in all fields.");
	}
	else {
		wbtTasksNum += 1;
		wbtTasks.push([tasknum, taskname]);
		var tasklist = document.getElementById("wbttasklist");
		var taskstring = "";
		for (var i = 0; i < wbtTasksNum; i++) {
			taskstring += "<p id='wbt"+i+"'><strong>Task "+wbtTasks[i][0]+": </strong>"+wbtTasks[i][1]+"</p>"; //Add current task num and name to a string (html format)
		}
		tasklist.innerHTML = taskstring;
	}
}

function addGanttTask() {
	var tasknum = document.getElementById("ganttNum").value;
	var taskname = document.getElementById("ganttName").value;
	var predecessors = document.getElementById("ganttPredecessors").value;
	var sdate = document.getElementById("ganttStartDate").value;
	var edate = document.getElementById("ganttEndDate").value;
	if (tasknum == "" || taskname == "" || sdate == "" || edate == "") {
		alert("Please fill in all fields (predecessors are optional).");
	}
	else {
		ganttTasksNum += 1;
		ganttTasks.push([tasknum, taskname, predecessors, sdate, edate]);
		var ganttlist = document.getElementById("gantttasklist");
		var ganttstring = "";
		for (var i = 0; i < ganttTasksNum; i++) {
			ganttstring += "<p id='gantt"+i+"'><strong>Task ID: </strong>"+ganttTasks[i][0]+"<strong> | Name: </strong>"+ganttTasks[i][1]+
				"<strong> | Predecessors: </strong>"+ganttTasks[i][2]+"<strong> | Start Date: </strong>"+ganttTasks[i][3]+
				"<strong> | End Date: </strong>"+ganttTasks[i][4];
		}
		ganttlist.innerHTML = ganttstring;
	}
}

function valGanttNum() {
	var field = document.getElementById("ganttNum").value;
	var label = document.getElementById("taskid");
	if (isNaN(field)) {
		label.innerHTML = "Task ID: (must be a number)";
		label.style.color = "red";
	}
	else {
		label.innerHTML = "Task ID: ";
		label.style.color = "black";
	}
}

function valWBTNum() {
	var field = document.getElementById("addTaskNum").value;
	var label = document.getElementById("tasknum");
	if (isNaN(field)) {
		label.innerHTML = "Task Number: (must be a number)";
		label.style.color = "red";
	}
	else {
		label.innerHTML = "Task Number: ";
		label.style.color = "black";
	}
}