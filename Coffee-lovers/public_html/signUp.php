<!DOCTYPE html>
<html>
    <head>
        <title> Coffee Lovers </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/style3.css">
    </head>

    <body>

        <?php
        include("pagelayout.php");
        ?>

        <?php
            $emailErr = $firstNameErr = $lastNameErr = $birthDateErr = $passwordErr = $confirmPasswordErr = $addressErr = "";
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                // Validations for First Name
                if (empty($_POST["firstName"])) {
                    $firstNameErr = "First Name is required";
                } else {
                    $name = sanitizeInputData($_POST["firstName"]);
                    // check if firstname only contains letters and whitespace
                    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                        $firstNameErr = "Only letters and space allowed";
                    }
                }
                
                // Validations for Last Name
                if (empty($_POST["lastName"])) {
                    $lastNameErr = "Last Name is required";
                } else {
                    $name = sanitizeInputData($_POST["lastName"]);
                    // check if lasName only contains letters and whitespace
                    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                        $lastNameErr = "Only letters and space allowed";
                    }
                }
  
                // Validations for Email
                if (empty($_POST["email"])) {
                    $emailErr = "Email is required";
                } else {
                    $email = sanitizeInputData($_POST["email"]);
                    // check if e-mail address is well-formed
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Invalid email format";
                    }
                }
                
                //Validations for birthdate
                // to be added yet....
                
                //Validations for address
                if (empty($_POST["address"])) {
                    $addressErr = "Address is required";
                } else {
                    $name = sanitizeInputData($_POST["address"]);
                    // check if address only contains valid characters
                    if (!preg_match("/^[a-zA-Z0-9 ]*$/", $name)) {
                        $addressErr = "Invalid characters present in address";
                    }
                }
                
                //Validations for password
                if (empty($_POST["password"])) {
                    $passwordErr = "Password is required";
                } else {
                    $name = sanitizeInputData($_POST["password"]);
                    // check if password only contains valid characters
                    if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
                        $passwordErr = "Invalid characters present in password. Only alphanumeric password is valid.";
                    }
                }
                
                //Validations for confirm password
                if (empty($_POST["confirmPassword"])) {
                    $confirmPasswordErr = "Confirm Password is required";
                } else {
                    $name = sanitizeInputData($_POST["confirmPassword"]);
                    // check if confirm password only contains valid characters
                    if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
                        $confirmPasswordErr = "Invalid characters present in confirm password. Only alphanumeric password is valid.";
                    }
                    
                    if(strcmp($_POST["confirmPassword"], $_POST["password"]) !== 0) {
                        $confirmPasswordErr = "Password and Confirm Password must be the same.";
                    }
                }
                
            }
            
            function sanitizeInputData($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
             }
        ?>
        
        <div id="section">
            <div id="signUpDiv">                
                <fieldset id="signUpFieldSet">
                    <p class="error"> * required fields</p>
                    <form id="signUpForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        
                        <table id="signUpTable" border="0" cellpadding="0" cellspacing="2">           
                            <thead>
                                <tr>
                                    <th colspan="3" scope="colgroup">
                                        <p>Please fill in the user information below to sign up.</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label id="lblEmail" for="id_email">Your Email: </label></td>
                                    <td><input id="id_email" type="text" name="email" required placeholder="Enter Email Address" /></td>
                                    <td><span class="error">* <?php echo $emailErr; ?></span></td>
                                </tr>
                                
                                <tr>
                                    <td><label id="lblFirstName" for="id_firstName">First Name: </label></td>
                                    <td><input id="id_firstName" type="text" name="firstName" required placeholder="Enter First Name" /></td>
                                    <td><span class="error">* <?php echo $firstNameErr; ?></span></td>
                                </tr>
                                
                                <tr>
                                    <td><label id="lblLastName" for="id_lastName">Last Name: </label></td>
                                    <td><input id="id_lastName" type="text" name="lastName" required placeholder="Enter Last Name" /></td>
                                    <td><span class="error">* <?php echo $lastNameErr; ?></span></td>
                                </tr>
                                
                                <tr>
                                    <td><label id="lblBirthDate" for="id_birthDate">Birth Date: </label></td>
                                    <td><input id="id_birthDate" type="date" min="1900-01-01" max="2016-12-31" name="birthDate"  placeholder="Enter Birth Date" /></td>
                                    <td><span class="error"><?php echo $birthDateErr; ?></span></td>
                                </tr>
               
                                <tr>
                                    <td><label id="lblAddress" for="id_address">Full Address: </label></td>
                                    <td><input id="id_address" type="text" name="address" required placeholder="Enter Full Address" /></td>
                                    <td><span class="error">* <?php echo $addressErr; ?></span></td>
                                </tr>
                                
                                <tr>
                                    <td><label id="lblPassword" for="id_password">Password: </label></td>
                                    <td><input id="id_password" type="password" name="password" required placeholder="Enter Password" /></td>
                                    <td><span class="error">* <?php echo $passwordErr; ?></span></td>
                                </tr>
                                
                                <tr>
                                    <td><label id="lblConfirmPassword" for="id_confirmPassword">Confirm Password: </label></td>
                                    <td><input id="id_confirmPassword" type="password" name="confirmPassword" required placeholder="Enter Confirm Password" /></td>
                                    <td><span class="error">* <?php echo $confirmPasswordErr; ?></span></td>
                                </tr>
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3">
                                        <span style="display:block; text-align:center">
                                            <input class="signUpButton" type="submit" value="Sign-Up" />
                                        </span>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>                              
                        
                    </form>
                </fieldset>
            </div>
        </div>

        <?php
        include("pageFooter.php");
        ?>
        
    </body>
</html>
