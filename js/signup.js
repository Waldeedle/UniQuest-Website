var studentProfile = [];
var index=0;

function saveProfile()
{ 
 	studentProfile[index] = {
		firstName: document.getElementById("fname").value,
		surname: document.getElementById("lname").value,
		highSchool: document.getElementById("hs").value,
		gender: document.getElementById("gender").value,
		grade: document.getElementById("grade").value,
		studentNumber: document.getElementById("studnumber").value,
		email: document.getElementById("email").value,
		userName: document.getElementById("username").value,
		password: document.getElementById("password").value,
	} 
 	index = index + 1;
	localStorage.setItem("students", JSON.stringify(studentProfile));
}