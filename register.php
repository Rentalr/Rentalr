<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
    <meta name="Description"
        content="Rentalproperty management software that brings landlords,property managers, tenants and contractors together.">
    <meta name="Keywords"
        content="rental property management software, property management software, mobile landlord, mobile property management,landlord app">
    <meta name="author" content="Rentalr">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/96bedca6d6.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="main-container">
        <div class="aside">

            <div class="logo">
                <a href="#"><span>R</span>entlar</a>
            </div>
            <div class="nav-toggler">
                <span></span>
            </div>
            <nav id="navbar" class="nav padd-15">
                <div class="nav-items">

                    <ul>


                        <ul class="nav1">
                            <!-- <i class="fa-solid fa-xmark"></i> -->
                            <li><a href="billing.html"><i class="fa fa-wallet"></i> Billing</a></li>
                            <li><a href="#contact"><i class="fa fa-comments"> </i> Contact Us</a></li>
                            <li><a href="sacco.html"><i class="fa-solid fa-money-check"></i> Sacco</a></li>
                            <li><a href="login.php"><i class="fa fa-arrow-right-to-bracket"></i> Login</a></li>
                            <li><a href="register.php"><i class="fa fa-user-plus"></i> Sign up</a></li>
                        </ul>

                        <ul class="nav2">
                            <!-- <i class="fa-solid fa-xmark"></i> -->
                            <li><a href="index.html" class="active"><i class="fa-solid fa-house"></i> Home</a></li>
                            <li><a href="#landlord"> Landlords</a></li>
                            <li><a href="#manager"> Property Managers</a></li>
                            <li><a href="#tenant"> Tenants</a></li>
                            <li><a href="#contractor"> Contractors</a></li>

                        </ul>

                </div>
            </nav>
            <!-- <i class="fa fa-bars"></i> -->
        </div>
        <div class="form-container">
            <form action="" method="post">
                <h3>register now</h3>
                <input type="text" name="name" required placeholder="enter your name">

                <input type="email" name="email" required placeholder="enter your email">

                <input type="password" name="password" required placeholder="enter your password">

                <input type="password" name="cpassword" required placeholder="confirm your password">

                <select name="user_type">
                    <option selected="selected" value="1">Landlord</option>
                    <option value="5">Property Manager</option>
                    <option value="2">Tenant</option>
                    <option value="4">Contractor</option>
                </select>
                <input type="submit" name="submit" value="register now" class="form-btn">

                <p>already have an account? <a href="login.php"></a></p>
            </form>
        </div>
    </div>
</body>

</html>