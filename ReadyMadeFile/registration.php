<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!---- BOOTSTRAP----->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="stylez.css">
    <title>Registration Page Blue Thunder</title>
</head>

<body>
    <div class="parent clearfix">
        <div class="bg-illustration">
            <img src="images/B_logo.png" alt="logo">
            <!---- <p>Forever  <br>
                true to the  <br>
                Gold and Blue   </p>-->


            <div class="burger-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>

        </div>

        <div class="login">
            <div class="container">
                <h1>CREATE AN ACCOUNT</h1>



                <div class="login-form">

                    <!---- CREATE A PHP FILE DATABASE CONNECTION----->
                    <form action="index.php" method="post">


                        <!--REMEMBER ME FORM-->
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="First name" name="firstname">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Last name" name="lastname">
                            </div>
                        </div>

                        <div class="row py-2">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Email Address" name="email">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Contact Number" name="contact">
                            </div>
                        </div>

                        <div class="in-text py-2" style="width: 200px;">
                            <input type="text" class="form-control" placeholder="Username" name="Username">

                        </div>
                        <!--TEXT ABOUT PASSWORD-->
                        <div class="mb-1" style="width: 280px;">
                            <p>Password must contain atleast 8 characters with: <br> </p>
                            <h4> &#8226;lower case letters<br>
                                &#8226; upper case letters<br>
                                &#8226;
                                numbers&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                                &#8226;special characters<br></h4>

                        </div>



                        <div class="mb-2" style="width: 280px;">
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                                name="pswd">

                        </div>


                        <div class="mb-2" style="width: 280px;">
                            <input type="password" class="form-control" id="pwd" placeholder="Confirm Password"
                                name="conpswd">
                        </div>
                        <div class="row py-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="House No" name="houseNo">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Baranggay" name="baranggay">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="City" name="city">
                            </div>

                            <div class="row py-3">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Province" name="province">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Region" name="region">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Postal Code" name="postal">
                                </div>
                                <div class="row py-2"></div>

                                <!--FBUTTON-->
                                <button type="submit" name="submit">CONFIRM AND CONTINUE</button>
                                <div class="back-to-login">
                                    <a href="login.html">Back to login page</a>
                                </div>


                    </form>
                </div>

            </div>
        </div>
    </div>

    <!---- BOOTSTRAP----->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>