<!DOCTYPE HTML>
<html>
<body>

<?php
    $name=$email=$gender="";
    $nameErr = $emailErr = $genderErr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])){
        $nameErr = "Please Enter Your Name";
      } 
      else {
        $name = $_POST["name"];
      }
      if (empty($_POST["email"])){
        $emailErr = "Invalid email format";
      } 
      else {
        $email = $_POST["email"];
      }
      
      
      
      
      if (empty($_POST["gender"])){
        $genderErr = "Please Enter Your Gender";
      } 
      else {
        $gender = $_POST["gender"];
      }
        
      
    }

  ?>
  <form method="post" action="file.php">
    <h1>My Form Validation </h1>
    
        Name :
        <input type="text" name="name"/>
        <span style="color:red;">* <?php echo $nameErr;?></span>
        <br><br>
      
      
        Email :
        <input type="email" name="email"/>
        <span style="color:red;">* <?php echo $emailErr;?></span>
                <br><br>      
    
      
        Gender :
          <input type="radio" value="Male" name="gender"/>Male
          <input type="radio" value="Female" name="gender"/>Female
          <input type="radio" value="Other" name="gender"/>Others
        <span style="color:red;">* <?php echo $genderErr;?></span>
           <br><br>
    
    
    <input type="submit" name="submit" value="Submit">  
</form>
  <br><br>


<?php
class User {
  // Properties
  public $name;
  public $email;
  public $gender;

  function __construct($name, $email, $gender) {
    $this->name = $name; 
    $this->email = $email;
    $this->gender = $gender;

  }
  function get_name() {
    return $this->name;
  }
  function get_email() {
    return $this->email;
  }

  function get_gender() {
    return $this->gender;
  }
}

$form = new User($name, $email, $gender);
echo $form->get_name();
echo "<br>";
echo $form->get_email();
echo "<br>";
echo $form->get_gender();

?>



</body>
</html>

