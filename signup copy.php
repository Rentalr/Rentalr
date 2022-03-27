<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration login form</title>

    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <div class="main">

        <div class="wrapper">
            <div class="left">
                <h1>Rentlar</h1>
            </div>
            <div class="right">
                <div class="tabs">
                    <ul>
                        <li><a> SIGN UP </a></li>
                        <li><a>SIGN IN</a></li>
                    </ul>
                </div>
                <form action="insert.php" method="POST">
                    <div class="sign_up">
                        <div class="input_field">
                            <input type="text" name="username" placeholder="Username" class="input">
                        </div>
                        <div class="input_field"><input type="text" name="email" placeholder="Email" class="input">
                        </div>
                        <div class="input_field">
                            <input type="password" name="password" placeholder="Password" class="input">
                        </div>
                        <div class="input_field"><select class="form-control" data-val="true"
                                data-val-required="The Role field is required." id="user_Role" name="userrole"
                                required="True">
                                <option value="">Select Role...</option>
                                <option value="1">Landlord</option>
                                <option selected="selected" value="5">Property Manager</option>
                                <option value="2">Tenant</option>
                                <option value="4">Contractor</option>
                            </select>
                            <div class="invalid-feedback">Please select a role.</div>
                            <span class="form-text">If you're both a Property Manager and a Landlord, select Property
                                Manager.</span>
                        </div>

                        <input type="submit" name="submit" value="Register">
                    </div>
                </form>

                <div class="sign_in">
                    <form action="insert2.php" method="POST">
                        <div class="input_field">
                            <h3>Login here</h3>
                            <input type="text" name="signinemail" placeholder="E-mail">
                        </div>
                        <div class="input_field">
                            <input type="password" name="pass" placeholder="Password">
                        </div>
                        <input type="submit" name="submit" value="Login">
                    </form>
                </div>


            </div>
        </div>
    </div>
</body>

</html>