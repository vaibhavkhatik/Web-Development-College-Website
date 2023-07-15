<?php include_once('header.php'); ?> 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: black;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: green;

}

.container {
  border-radius: 5px;
  background-color: ;
  padding: 20px;
}
</style>
</head>
<body>

<h2 align="center">CONTACT US</h2>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your Mobile Number..">
    <label for="mnumber">Mobile Number</label>
    <input type="text" id="mnumber" name="mobilenumber" placeholder="Your Mobile Number..">

    <label for="course">Course</label>
    <select id="course" name="course">
    
      <option value="computer engineering">Computer Engineering</option>
    
      <option value="Mechanical Engineering">Mechanical Engineering</option>
    
      <option value="Civil Engineering">Civil Engineering</option>
      <option value="E&TC Engineering">E&TC Engineering</option>
      <option value="Electrical Engineering">Electrical Engineering</option>

      <option value="Dpharm">D Pharmacy</option>
      <option value="bpharm">B Pharmacy</option>
      <option value="diploma computer engineering">Diploma in Computer Engineering</option>
    
      <option value="diploma Mechanical Engineering">Diploma in Mechanical Engineering</option>
      <option value="diploma Mechatronics Engineering">Diploma in Mechatronics Engineering</option>
    
      <option value="diploma Civil Engineering">Diploma in Civil Engineering</option>
      <option value="diploma E&TC Engineering">Diploma in E&TC Engineering</option>
      <option value="diploma Electrical Engineering">Diploma in Electrical Engineering</option>

      <option value="mba">MBA</option>
      <option value="llb">LLB</option>
      <option value="bcs">BCS</option>
      <option value="iti">ITI</option>
      <option value="school">School</option>

    </select>
    

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:150px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>

<?php include_once('footer.php'); ?>


