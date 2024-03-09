<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Account - NHS</title>
<link rel="stylesheet" href="nhs.css">
<style>
    .sticky-header {
        position: fixed;
        display: flex;
        top: 0;
        width: 100%;
        background-color: #005eb8;
        color: white;
        padding: 20px;
        z-index: 1000; 
        align-items: center; 
        margin: 0;
        text-align: center;
        margin-bottom: 20px;
    }
    
    .account-container {
        padding-top: 80px;
    }
    
    .section {
        background-color: #f4f4f4;
        border-radius: 5px;
        margin: 20px 0;
        padding: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        width: 500px;
        margin-top: 70px;
    }
    
    .section-header {
        color: #005eb8;
        margin-bottom: 20px;
    }
    
    .section input[type="text"],
    .section input[type="email"],
    .section input[type="tel"],
    .section input[type="date"] {
        width: 95%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #cccccc;
        border-radius: 5px;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
    }
    
    .button-container {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }
    
    .button-container button {
        padding: 10px 20px;
        border-radius: 5px;
        border: none;
        cursor: pointer;
    }
    
    .button-edit {
        background-color: #007f3b;
        color: white;
    }
    
    .button-edit:hover {
        background-color: #005a2b;
    }
    
    .button-logout {
        background-color: #d9534f;
        color: white;
    }
    
    .button-logout:hover {
        background-color: #c9302c;
    }
    .field-group label {
        display: block;
        margin-bottom: 5px;
    }
    .field-group input[readonly] {
        background-color: #e9ecef; 
        opacity: 1; 
        cursor: default;
    }
    .modal {
        display: none; 
        position: fixed; 
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%; 
        overflow: auto;
        background-color: #ffffff; 
        background-color: rgba(0,0,0,0.4); 
     }

       
    .modal-content {
        background-color: #ffffff;
        margin: 20% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 70%;
        border-radius: 5px; 
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    }
    .modal-content fieldset{
        background-color: #f4f4f4;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        margin: 5% auto;
    }
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }   
</style>
</head>
<body>

<div class="sticky-header">
    <img src="nhslogo.jpeg" alt="NHS Logo" id="nhs-logo" style="height:50px;">
    <h1>My Account</h1>
</div>



<div class="account-container">

    <div class="section">
        <h2 class="section-header">Personal Details</h2>
        <div class="field-group">
            <label for="name">Name</label>
            <input type="text" id="name" value="John Adam Smith" readonly>
        </div>
        <div class="field-group">
            <label for="address">Address</label>
            <input type="text" id="address" value="Postcode, Street, House number" readonly>
            <input type="text" value="City, Country" readonly>
        </div>
        <div class="field-group">
            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" value="2000-01-01" readonly>
        </div>
        <div class="field-group">
            <label for="gender">Gender</label>
            <input type="text" id="gender" value="Male" readonly>
        </div>
    </div>

<div class="section">
    <h2 class="section-header">Contact Details</h2>
    <div class="field-group">
        <label for="email">Email</label>
        <input type="email" id="email" value="john.smith@example.com" readonly>
    </div>
    <div class="field-group">
        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" value="+441234567890" readonly>
    </div>
</div>

<div class="section">
    <h2 class="section-header">Emergency Contact</h2>
    <div class="field-group">
        <label for="emergency-name">Name</label>
        <input type="text" id="emergency-name" value="Jane Doe" readonly>
    </div>
    <div class="field-group">
        <label for="emergency-relation">Relation</label>
        <input type="text" id="emergency-relation" value="Sister" readonly>
    </div>
    <div class="field-group">
        <label for="emergency-email">Email</label>
        <input type="email" id="emergency-email" value="jane.doe@example.com" readonly>
    </div>
    <div class="field-group">
        <label for="emergency-phone">Phone Number</label>
        <input type="tel" id="emergency-phone" value="+441234567891" readonly>
    </div>
</div>


    <div class="button-container">
        <button id="editBtn" class="button-edit">Edit Details</button>
        <a href="login.php"><button class="button-logout" >Log out</button></a>
    </div>
</div>


<div id="editModal" class="modal">

  <div class="modal-content">
  <span class="close">&times;</span>
    <form id="editForm" method="post">
      <h2>Edit Your Details</h2>

      <fieldset>
        <legend>Personal Details</legend>
        <label for="modal-name">Name:</label>
        <input type="text" id="modal-name" name="name" value="John Adam Smith">
        
        <label for="modal-address">Address:</label>
        <input type="text" id="modal-address" name="address" value="Postcode, Street, House number">
        
        <label for="modal-city">City, Country:</label>
        <input type="text" id="modal-city" name="city" value="City, Country">
        
        <label for="modal-dob">Date of Birth:</label>
        <input type="date" id="modal-dob" name="dob" value="2000-01-01">
        
        <label for="modal-gender">Gender:</label>
        <select id="modal-gender" name="gender">
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
          <option value="prefer_not_to_say">Prefer not to say</option>
        </select>
      </fieldset>

      <fieldset>
        <legend>Contact Details</legend>
        <label for="modal-email">Email:</label>
        <input type="email" id="modal-email" name="email" value="john.smith@example.com">
        
        <label for="modal-phone">Phone Number:</label>
        <input type="tel" id="modal-phone" name="phone" value="+441234567890">
      </fieldset>

      <fieldset>
        <legend>Emergency Contact</legend>
        <label for="modal-emergency-name">Name:</label>
        <input type="text" id="modal-emergency-name" name="emergency_name" value="Jane Doe">
        
        <label for="modal-emergency-relation">Relation:</label>
        <input type="text" id="modal-emergency-relation" name="emergency_relation" value="Sister">
        
        <label for="modal-emergency-email">Email:</label>
        <input type="email" id="modal-emergency-email" name="emergency_email" value="jane.doe@example.com">
        
        <label for="modal-emergency-phone">Phone Number:</label>
        <input type="tel" id="modal-emergency-phone" name="emergency_phone" value="+441234567891">
      </fieldset>

      <input type="submit" value="Save Changes">
    </form>
  </div>

</div>
<footer>
        <div class="container">
            <p>&copy; 2024 NHS. All rights reserved.</p>
        </div>
    </footer>
<script src="popupform.js"></script>
</body>
</html>
