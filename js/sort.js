//random two dimensional array set as an example
var students = JSON.parse(localStorage.getItem("students"));

//the sorting function which holds all the conditions that need to be met in order to sort
var sortOn = function (arr, prop, reverse, numeric) {

    // Ensure there's a property
    if (!prop || !arr) {
        return arr
    }

    // Set up sort function
    var sort_by = function (field, rev, primer) {

        // Return the required a,b function
        return function (a, b) {

            // Reset a, b to the field
            a = primer(a[field]), b = primer(b[field]);

            // Do actual sorting, reverse as needed
            return ((a < b) ? -1 : ((a > b) ? 1 : 0)) * (rev ? -1 : 1);
        }
    }

    // Distinguish between numeric and string to prevent 100's from coming before smaller
    // e.g.
    // 1
    // 20
    // 3
    // 4000
    // 50
    if (numeric) {

        // Do sort "in place" with sort_by function
        arr.sort(sort_by(prop, reverse, function (a) {

            // - Force value to a string.
            // - Replace any non numeric characters.
            // - Parse as float to allow 0.02 values.
            return parseFloat(String(a).replace(/[^0-9.-]+/g, ''));

        }));
    } else {

        // Do sort "in place" with sort_by function
        arr.sort(sort_by(prop, reverse, function (a) {

            // - Force value to string.
            return String(a).toUpperCase();

        }));
    }
}

//output all data of an array to a certain table template so its organized
function stringResult(elemID, doing, label) {
    var elem = document.getElementById(elemID);
    var result = "<p>" + label + "</p>";   
    result += '<table cellpadding="10" cellspacing="10" bgcolor="#D3D9E5">';

        result += "<tr>" + "<td>" + '<b>' + '<u>' + 'First Name' + '</u>' + '</b>' +'</td>';
        result += "<td>" + '<b>' + '<u>' + 'Surname' + '</u>' + '</b>' + '</td>';
        result += "<td>" + '<b>' + '<u>' + 'Highschool' + '</u>' + '</b>' + '</td>';
        result += "<td>" + '<b>' + '<u>' + 'Gender' + '</u>' + '</b>' + '</td>';
        result += "<td>" + '<b>' + '<u>' + 'Grade' + '</u>' + '</b>' + '</td>';
        result += "<td>" + '<b>' + '<u>' + 'Student Number' + '</u>' + '</b>' + '</td>';
        result += "<td>" + '<b>' + '<u>' + 'Email' + '</u>' + '</b>' + '</td>';
        result += "<td>" + '<b>' + '<u>' + 'Username' + '</u>' + '</b>' + '</td>' + "</tr>";

    for (var i = 0; i < students.length; i++) {
        //sort and normal are ids in the css and it just helps to show what was being sorted
        result += "<tr>";
        result += '<td class="' + (doing == "firstName" ? "sort" : "normal") + '">';
        result += students[i].firstName + "</td>";
        
        result += '<td class="' + (doing == "surname" ? "sort" : "normal") + '">';
        result += students[i].surname + "</td>";
        
        result += '<td class="' + (doing == "highSchool" ? "sort" : "normal") + '">';
        result += students[i].highSchool + "</td>";
        
        result += '<td class="' + (doing == "gender" ? "sort" : "normal") + '">';
        result += students[i].gender + "</td>";
        
        result += '<td class="' + (doing == "grade" ? "sort" : "normal") + '">';
        result += students[i].grade + "</td>";

        result += '<td class="' + (doing == "studentNumber" ? "sort" : "normal") + '">';
        result += students[i].studentNumber + "</td>";

        result += '<td class="' + (doing == "email" ? "sort" : "normal") + '">';
        result += students[i].email + "</td>";

        result += '<td class="' + (doing == "userName" ? "sort" : "normal") + '">';
        result += students[i].userName + "</td>";           
        result += "</tr>";
    }
    result += "</table>";
    result += "<br/>";   
    elem.innerHTML = result;
}	

//below is just calling the code to print out the certain results of the sort function in the template
//output the original array
stringResult("d1",'', "Original Data");

$('select[name="dropdown"]').change(function(){
if ($(this).val() == "1"){
    // Sort First Name
    sortOn(students, 'firstName', false, false);
    stringResult("d1", 'firstName', "First Name Ascending");
} else if ($(this).val() == "2") {
    // Sort First Name in reverse
    sortOn(students, 'firstName', true, false);
    stringResult("d1", 'firstName', "First Name Descending");
} else if ($(this).val() == "3") {
    // Sort Surname
    sortOn(students, 'surname', false, false);
    stringResult("d1", 'surname', "Surname Ascending");
} else if ($(this).val() == "4") {
    // Sort Surname in reverse
    sortOn(students, 'surname', true, false);
    stringResult("d1", 'surname', "Surname Descending");
} else if ($(this).val() == "5") {
    // Sort Highschool
    sortOn(students, 'highSchool', false, false);
    stringResult("d1", 'highSchool', "Highschool Ascending");
} else if ($(this).val() == "6") {
    // Sort Highschool in reverse
    sortOn(students, 'highSchool', true, false);
    stringResult("d1", 'highSchool', "Highschool Descending");
} else if ($(this).val() == "7") {
    // Sort Gender
    sortOn(students, 'gender', false, false);
    stringResult("d1", 'gender', "Gender");
} else if ($(this).val() == "8") {
    // Sort Gender in reverse
    sortOn(students, 'gender', true, false);
    stringResult("d1", 'gender', "Gender reverse");
} else if ($(this).val() == "9") {
    // Sort Grade
    sortOn(students, 'grade', false, true);
    stringResult("d1", 'grade', "Grade");
} else if ($(this).val() == "10") {
    // Sort Grade in reverse
    sortOn(students, 'grade', true, true);
    stringResult("d1", 'grade', "Grade reverse");
} else if ($(this).val() == "11") {
    // Sort Student Number
    sortOn(students, 'studentNumber', false, true);
    stringResult("d1", 'studentNumber', "Student Number");
} else if ($(this).val() == "12") {
    // Sort Student Number in reverse
    sortOn(students, 'studentNumber', true, true);
    stringResult("d1", 'studentNumber', "Student Number reverse");
} else if ($(this).val() == "13") {
    // Sort Email
    sortOn(students, 'email', false, false);
    stringResult("d1", 'email', "Email reverse");
} else if ($(this).val() == "14") {
    // Sort Email in reverse
    sortOn(students, 'email', true, false);
    stringResult("d1", 'email', "Email reverse");
} else if ($(this).val() == "15") {
    // Sort Username
    sortOn(students, 'userName', false, false);
    stringResult("d1", 'userName', "Username reverse");
} else if ($(this).val() == "16") {
    // Sort Username in reverse
    sortOn(students, 'userName', true, false);
    stringResult("d1", 'userName', "Username reverse");
}});