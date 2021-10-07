<?php 
include 'core/init.php'; 
include 'includes/overall/header.php';
?>

  <h1>Please select a sorting method</h1>
  <select name="dropdown">
    <option selected="selected" disabled="disabled">Select a sort method</option>
  	<option value="1" id='firstNameUp'>First Name Ascending</option>
  	<option value="2" id='firstNameDown'>First Name Descending</option>
 	  <option value="3" id='surnameUp'>Surname Ascending</option>
  	<option value="4" id='surnameDown'>Surname Descending</option>
  	<option value="5" id='highSchoolUp'>Highschool Ascending</option>
  	<option value="6" id='highSchoolDown'>Highschool Descending</option>
  	<option value="7" id='genderUp'>Females First</option>
  	<option value="8" id='genderDown'>Males First</option>
  	<option value="9" id='gradeUp'>Grade Ascending</option>
  	<option value="10" id='gradeDown'>Grade Descending</option>
  	<option value="11" id='studentNumberUp'>Student Number Ascending</option>
  	<option value="12" id='studentNumberDown'>Student Number Descending</option>
  	<option value="13" id='emailUp'>Email Ascending</option>
  	<option value="14" id='emailDown'>Email Descending</option>
  	<option value="15" id='userNameUp'>Username Ascending</option>
  	<option value="16" id='userNameDown'>Username Descending</option>
  </select>
<div id="d1"></div>
<script type="text/javascript" src="js/sort.js"></script>
</body>
</html>