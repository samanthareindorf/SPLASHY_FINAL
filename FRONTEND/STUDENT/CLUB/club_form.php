<!DOCTYPE html>
<html lang="en">
<head>
  <!--styling--> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="club_form.css">
</head>
<body>

<div class="container">

<h3>Club Selection Form</h3>
    <div class="form-outer">
    

    <!--form data--> 
<form action="../../../BACKEND/club_form_submission.php" method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1">Name:</label>
    <input type="text" class="form-control" name="name" id="inputName" placeholder="Kwaku" required>
    <small id="nameError"></small>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Year Group</label>
    <select name="yearSelect" class="form-control" id="chooseYear" required>
      <option value="1">1st Year</option>
      <option value="2">2nd Year</option>
      <option value="3">3rd Year</option>
      <option value="4">4th Year</option>
      <option value="other">other</option>
    </select>
    <small id="yearError"></small>
  </div>
  <div class="form-group">
  <label for="selectC">Select your desired club</label>
    <select name="clubSelect" class="form-control" id="selectC" required>
      <option value="leo">Leo Club</option>
      <option value="business">Business Club</option>
      <option value="jforce">JForce</option>
      <option value="real-estate">Real Estate</option>
      <option value="tedx">TedX</option>
      <option value="develop">Developer Students Club</option>

    </select>
    <small id="clubError"></small>

     
  </div><br>   

  <div class="form-group">
      <button id="submitButton" type="submit" class="btn btn-primary" name="submit">Submit</button>
      
  
  </div><br>

  <center>
    <button onclick="previousPage()" class="btn btn-info" style="width: 500px;">Back</button>
    </center> 

    <!--javascript function for going to previous page--> 
    <script>
        function previousPage()
        {
            window.open('clubs.php');
        }
    </script>
    
</form>
</div>
</div>
</body>
</html>