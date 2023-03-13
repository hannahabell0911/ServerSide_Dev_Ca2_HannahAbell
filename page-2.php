<?php include 'includes/header.php';?>


<main class="container">
  <div class="starter-template text-center">
    <h1>Contact us</h1>
<form method="POST" name="contactform" action="contact-form-handler.php"> 
<p>
<label for='name'>Your Name:</label> <br>
<input type="text" name="name" placeholder="Enter your name" required>
</p>
<p>
<label for='email'>Email Address:</label> <br>
<input type="text" name="email" placeholder="Enter your email address" required> <br>
</p>
<p>
<label for="house_number">House number:</label>
<input type="text"  name="house_number" placeholder="Enter your house number" required>
</p>
<p>
<label for="house_address">Address:</label>
<input type="text"  name="house_address" placeholder="Enter your house address" required>
</p>
<p>
<label for="county">County:</label>
<select name="county">
    <option value="Meath">Meath</option>
    <option value="Dublin">Dublin</option>
    <option value="Clare">Clare</option>
    <option value="Kerry">Kerry</option>
    <option value="Mayo">Mayo</option>
    <option value="Fermanagh">Fermanagh</option>
    <option value="Laois">Laois</option>
    <option value="Limerick">Limerick</option>
    <option value="Sligo">Sligo</option>
    <option value="Offaly">Offaly</option>
    <option value="Kilkenny">Kilkenny</option>
    <option value="Cavan">Cavan</option>
    <option value="Louth">Louth</option>
    <option value="Cork">Cork</option>
    <option value="Leitrim">Leitrim</option>
    <option value="Westmeath">Westmeath</option>
    <option value="Antrim">Antrim</option>
    <option value="Monaghan">Monaghan</option>
    <option value="Galway">Galway</option>
    <option value="Tipperary">Tipperary</option>
    <option value="Carlow">Carlow</option>
    <option value="Wexford">Wexford</option>
    <option value="Donegal">Donegal</option>
    <option value="Roscommon">Roscommon</option>
    <option value="Kildare">Kildare</option>
    

</select>
</p>
<p>
<label>Gender:</label>
<input type="radio"  name="gender" value="male" checked>
<label for="male">Male</label>
<input type="radio" name="gender" value="female">
<label for="female">Female</label>
<input type="radio" name="gender" value="female">
<label for="other">Prefer to not disclose</label>
</p>
<p>
<label for='message'>Message:</label> <br>
<textarea name="message" placeholder="Enter your message"></textarea>
</p>
<input type="submit" value="Submit"><br>
</form>

<script language="JavaScript">
var frmvalidator  = new Validator("contactform");
frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address");
frmvalidator.addValidation("house_number","req","Please provide your house number"); 
frmvalidator.addValidation("house_number","house_number","Please enter a valid house number"); 
frmvalidator.addValidation("house_address","req","Please provide your house address"); 
frmvalidator.addValidation("county","req","Please provide your county"); 
frmvalidator.addValidation("gender","req","Please provide your gender"); 
frmvalidator.addValidation("message","req","Please provide your message"); 

</script>
  </div>

</main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
  
</html>
<?php include 'includes/footer.php';?>
