<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome-link-start -->
    <script src="https://kit.fontawesome.com/3b62fe7d6c.js" crossorigin="anonymous"></script>
    <!-- Font Awesome-link-end -->
    <!-- bootstrap min css link start  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <!-- bootstrap min css link end  -->
    <!-- bootstrap min js link start -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <!-- bootstrap min js link end -->
</head>

<body style="background-color: rgb(208, 219, 228); font-family: Verdana, Geneva, Tahoma, sans-serif;">


    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
        <div class=" rounded-2 p-5 mt-2 "
            style="width: 700px;  margin:auto;  box-shadow: 15px 15px 15px 0px rgba(0, 0, 0, 0.30);">
            <input type="search" class="form-control" name="member" placeholder="Search Your Name" required><br>
            <button type="submit" name="memberbtn" class="btn btn-primary">Submit</button>
        </div>
    </form>





    <?php

if (isset($_POST['memberbtn'])) {

    $membarName = $_POST['member'];

    if (
        $membarName === "ZAYED" || 
        $membarName === "zayed" || 
        $membarName === "ZAYED AMIN" || 
        $membarName === "zayed amin"
    )
    {
        $cnitmembarlist = '<section
        style="width: 60%; margin: auto; border: 1px solid black;  margin-top: 100px; padding: 30px 50px 50px 50px; margin-bottom: 50px;">

        <div class="headers">

            <div class="pic" style="width: 120px; height: 120px; border-radius: 15px; margin: auto;
        margin-top: 20px ; border: 1px solid #2e2d2d;">
                <img src="./rohan.jpeg" alt="" width="100%" height="120px"
                    style="object-fit: cover; border-radius: 15px;">
            </div>
            <h2 style="text-align: center; font-size: 20px; margin-top: 20px;">ZAYED AMIN</h2>
            <h3 style="font-size: 15px;  background-color: bisque;width: 150px;text-align: center;
            padding: 10px 10px; border-radius: 10px; display: block;margin: auto;">web developer</h3>

        </div>

        <div class="information" style="margin-top: 50px;">
            <!-- bio------- -->
            <div class="bio" style="display: flex;  width: 100%;">
                <h3 style="font-size: 14px;width: 20%; ">Bio</h3>
                <p style="font-size: 12px; width: 80%;">Hi! I’m a web developer and I love all
                    things tech. When
                    I’m not knee-deep
                    in code, I’m probably
                    reading up on the latest development trends or practicing my sketching (or both).</p>
            </div>
            <!-- email------- -->
            <div class="e-mail" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">E-mail</h3>
                <p style="font-size: 12px;  width: 80%;">zayedrohan.cnits@gmail.com</p>
            </div>
            <!-- address----- -->
            <div class="address" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Address</h3>
                <p style="font-size: 12px;  width: 80%;">zayedrohan.cnits@gmail.com</p>
            </div>
            <!-- gender------- -->
            <div class="gender" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Gender</h3>
                <p style="font-size: 12px;  width: 80%;">Male .</p>
            </div>
            <!-- city----- -->
            <div class="city" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">City</h3>
                <p style="font-size: 12px;  width: 80%;">Pabna Sadar, Pabna .</p>
            </div>
            <!-- date------ -->
            <div class="date" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Date of Birth</h3>
                <p style="font-size: 12px;  width: 80%;">16, November 2005</p>
            </div>

            <!-- number------- -->
            <div class="number" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Phone Number</h3>
                <p style="font-size: 12px;  width: 80%;">+8801969263102 <br> +8801920267760</p>
            </div>
            <!-- social------- -->
            <div class="social" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Social Media Links</h3>
                <div class="link" style="font-size: 12px;  width: 80%;">
                    <a href="#"><i class="fa-brands fa-facebook"
                            style="color: #002aff; font-size: 22px; margin-left: 20px;"></i></a>
                    <a href="#"> <i class="fa-brands fa-linkedin"
                            style="color: #005eff; font-size: 22px; margin-left: 15px;"></i></a>
                    <a href="#"><i class="fa-brands fa-github"
                            style=" color: black; font-size: 22px; margin-left: 15px;"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram" style="font-size: 22px; margin-left: 15px;"></i></a>
                </div>
            </div>

        </div>


    </section>';  
    } elseif(
        $membarName === "ismail" ||
        $membarName === "Ismail" ||
        $membarName === "Ismail Hossain" ||
        $membarName === "ismail hossain" ||
        $membarName === " Md ismail hossain" ||
        $membarName === "MD ISMAIL HOSSAIN" 
    ){ $cnitmembarlist = '<section
        style="width: 60%; margin: auto; border: 1px solid black;  margin-top: 100px; padding: 30px 50px 50px 50px; margin-bottom: 50px;">

        <div class="headers">

            <div class="pic" style="width: 120px; height: 120px; border-radius: 15px; margin: auto;
        margin-top: 20px ; border: 1px solid #2e2d2d;">
                <img src="./ismail.jpg" alt="" width="100%" height="120px"
                    style="object-fit: cover; border-radius: 15px;">
            </div>
            <h2 style="text-align: center; font-size: 20px; margin-top: 20px;">ISMAIL HOSSAIN</h2>
            <h3 style="font-size: 15px;  background-color: bisque;width: 150px;text-align: center;
            padding: 10px 10px; border-radius: 10px; display: block;margin: auto;">web developer</h3>

        </div>

        <div class="information" style="margin-top: 50px;">
            <!-- bio------- -->
            <div class="bio" style="display: flex;  width: 100%;">
                <h3 style="font-size: 14px;width: 20%; ">Bio</h3>
                <p style="font-size: 12px; width: 80%;">Hi! I’m a web developer and I love all
                    things tech. When
                    I’m not knee-deep
                    in code, I’m probably
                    reading up on the latest development trends or practicing my sketching (or both).</p>
            </div>
            <!-- email------- -->
            <div class="e-mail" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">E-mail</h3>
                <p style="font-size: 12px;  width: 80%;">ismail.cnits@gmail.com</p>
            </div>
            <!-- address----- -->
            <div class="address" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Address</h3>
                <p style="font-size: 12px;  width: 80%;">ismail.cnits@gmail.com</p>
            </div>
            <!-- gender------- -->
            <div class="gender" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Gender</h3>
                <p style="font-size: 12px;  width: 80%;">Male .</p>
            </div>
            <!-- city----- -->
            <div class="city" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">City</h3>
                <p style="font-size: 12px;  width: 80%;">Pabna Sadar, Pabna .</p>
            </div>
            <!-- date------ -->
            <div class="date" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Date of Birth</h3>
                <p style="font-size: 12px;  width: 80%;">16, November 2005</p>
            </div>

            <!-- number------- -->
            <div class="number" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Phone Number</h3>
                <p style="font-size: 12px;  width: 80%;">+880********** <br> +880**********</p>
            </div>
            <!-- social------- -->
            <div class="social" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Social Media Links</h3>
                <div class="link" style="font-size: 12px;  width: 80%;">
                    <a href="#"><i class="fa-brands fa-facebook"
                            style="color: #002aff; font-size: 22px; margin-left: 20px;"></i></a>
                    <a href="#"> <i class="fa-brands fa-linkedin"
                            style="color: #005eff; font-size: 22px; margin-left: 15px;"></i></a>
                    <a href="#"><i class="fa-brands fa-github"
                            style=" color: black; font-size: 22px; margin-left: 15px;"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram" style="font-size: 22px; margin-left: 15px;"></i></a>
                </div>
            </div>

        </div>


    </section>';
    }elseif(
        $membarName === "anika" ||
        $membarName === "Anika" ||
        $membarName === "anika tabassum" ||
        $membarName === "Anika Tabassum " ||
        $membarName === " ANIKA TABASSUM"
    ){ 
        $cnitmembarlist = '<section
        style="width: 60%; margin: auto; border: 1px solid black;  margin-top: 100px; padding: 30px 50px 50px 50px; margin-bottom: 50px;">

        <div class="headers">

            <div class="pic" style="width: 120px; height: 120px; border-radius: 15px; margin: auto;
        margin-top: 20px ; border: 1px solid #2e2d2d;">
                <img src="./anika tabassum.png" alt="" width="100%" height="120px"
                    style="object-fit: cover; border-radius: 15px;">
            </div>
            <h2 style="text-align: center; font-size: 20px; margin-top: 20px;">ANIKA TABASSUM</h2>
            <h3 style="font-size: 15px;  background-color: bisque;width: 150px;text-align: center;
            padding: 10px 10px; border-radius: 10px; display: block;margin: auto;">**********</h3>

        </div>

        <div class="information" style="margin-top: 50px;">
            <!-- bio------- -->
            <div class="bio" style="display: flex;  width: 100%;">
                <h3 style="font-size: 14px;width: 20%; ">Bio</h3>
                <p style="font-size: 12px; width: 80%;">Hi! I’m a web developer and I love all
                    things tech. When
                    I’m not knee-deep
                    in code, I’m probably
                    reading up on the latest development trends or practicing my sketching (or both).</p>
            </div>
            <!-- email------- -->
            <div class="e-mail" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">E-mail</h3>
                <p style="font-size: 12px;  width: 80%;">anika.cnits@gmail.com</p>
            </div>
            <!-- address----- -->
            <div class="address" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Address</h3>
                <p style="font-size: 12px;  width: 80%;">anika.cnits@gmail.com</p>
            </div>
            <!-- gender------- -->
            <div class="gender" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Gender</h3>
                <p style="font-size: 12px;  width: 80%;">Female .</p>
            </div>
            <!-- city----- -->
            <div class="city" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">City</h3>
                <p style="font-size: 12px;  width: 80%;">Pabna Sadar, Pabna .</p>
            </div>
            <!-- date------ -->
            <div class="date" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Date of Birth</h3>
                <p style="font-size: 12px;  width: 80%;">16, November 2005</p>
            </div>

            <!-- number------- -->
            <div class="number" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Phone Number</h3>
                <p style="font-size: 12px;  width: 80%;">+880********* <br> +880**********</p>
            </div>
            <!-- social------- -->
            <div class="social" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Social Media Links</h3>
                <div class="link" style="font-size: 12px;  width: 80%;">
                    <a href="#"><i class="fa-brands fa-facebook"
                            style="color: #002aff; font-size: 22px; margin-left: 20px;"></i></a>
                    <a href="#"> <i class="fa-brands fa-linkedin"
                            style="color: #005eff; font-size: 22px; margin-left: 15px;"></i></a>
                    <a href="#"><i class="fa-brands fa-github"
                            style=" color: black; font-size: 22px; margin-left: 15px;"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram" style="font-size: 22px; margin-left: 15px;"></i></a>
                </div>
            </div>

        </div>


    </section>';
    }elseif(
        $membarName === "rahat" ||
        $membarName === "Rahat" ||
        $membarName === "rahat malitha" ||
        $membarName === "Rahat Malitha" ||
        $membarName === " RAHAT MALITHA "
    ){ 
        $cnitmembarlist = '<section
        style="width: 60%; margin: auto; border: 1px solid black;  margin-top: 100px; padding: 30px 50px 50px 50px; margin-bottom: 50px;">

        <div class="headers">

            <div class="pic" style="width: 120px; height: 120px; border-radius: 15px; margin: auto;
        margin-top: 20px ; border: 1px solid #2e2d2d;">
                <img src="./rahat.jpg" alt="" width="100%" height="120px"
                    style="object-fit: cover; border-radius: 15px;">
            </div>
            <h2 style="text-align: center; font-size: 20px; margin-top: 20px;">RAHAT MALITHA</h2>
            <h3 style="font-size: 15px;  background-color: bisque;width: 150px;text-align: center;
            padding: 10px 10px; border-radius: 10px; display: block;margin: auto;">web design</h3>

        </div>

        <div class="information" style="margin-top: 50px;">
            <!-- bio------- -->
            <div class="bio" style="display: flex;  width: 100%;">
                <h3 style="font-size: 14px;width: 20%; ">Bio</h3>
                <p style="font-size: 12px; width: 80%;">Hi! I’m a web developer and I love all
                    things tech. When
                    I’m not knee-deep
                    in code, I’m probably
                    reading up on the latest development trends or practicing my sketching (or both).</p>
            </div>
            <!-- email------- -->
            <div class="e-mail" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">E-mail</h3>
                <p style="font-size: 12px;  width: 80%;">rahat.cnits@gmail.com</p>
            </div>
            <!-- address----- -->
            <div class="address" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Address</h3>
                <p style="font-size: 12px;  width: 80%;">rahat.cnits@gmail.com</p>
            </div>
            <!-- gender------- -->
            <div class="gender" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Gender</h3>
                <p style="font-size: 12px;  width: 80%;">Male .</p>
            </div>
            <!-- city----- -->
            <div class="city" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">City</h3>
                <p style="font-size: 12px;  width: 80%;">Pabna Sadar, Pabna .</p>
            </div>
            <!-- date------ -->
            <div class="date" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Date of Birth</h3>
                <p style="font-size: 12px;  width: 80%;">16, November 2005</p>
            </div>

            <!-- number------- -->
            <div class="number" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Phone Number</h3>
                <p style="font-size: 12px;  width: 80%;">+880********** <br> +880**********</p>
            </div>
            <!-- social------- -->
            <div class="social" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Social Media Links</h3>
                <div class="link" style="font-size: 12px;  width: 80%;">
                    <a href="#"><i class="fa-brands fa-facebook"
                            style="color: #002aff; font-size: 22px; margin-left: 20px;"></i></a>
                    <a href="#"> <i class="fa-brands fa-linkedin"
                            style="color: #005eff; font-size: 22px; margin-left: 15px;"></i></a>
                    <a href="#"><i class="fa-brands fa-github"
                            style=" color: black; font-size: 22px; margin-left: 15px;"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram" style="font-size: 22px; margin-left: 15px;"></i></a>
                </div>
            </div>

        </div>


    </section>';
    }elseif(
        $membarName === "evan" ||
        $membarName === "EVAN" ||
        $membarName === "Evan" ||
        $membarName === "Sabbir" ||
        $membarName === "SABBIR"
    ){ 
        $cnitmembarlist = '<section
        style="width: 60%; margin: auto; border: 1px solid black;  margin-top: 100px; padding: 30px 50px 50px 50px; margin-bottom: 50px;">

        <div class="headers">

            <div class="pic" style="width: 120px; height: 120px; border-radius: 15px; margin: auto;
        margin-top: 20px ; border: 1px solid #2e2d2d;">
                <img src="./evan.jpeg" alt="" width="100%" height="120px"
                    style="object-fit: cover; border-radius: 15px;">
            </div>
            <h2 style="text-align: center; font-size: 20px; margin-top: 20px;">EVAN</h2>
            <h3 style="font-size: 15px;  background-color: bisque;width: 150px;text-align: center;
            padding: 10px 10px; border-radius: 10px; display: block;margin: auto;">web design</h3>

        </div>

        <div class="information" style="margin-top: 50px;">
            <!-- bio------- -->
            <div class="bio" style="display: flex;  width: 100%;">
                <h3 style="font-size: 14px;width: 20%; ">Bio</h3>
                <p style="font-size: 12px; width: 80%;">Hi! I’m a web developer and I love all
                    things tech. When
                    I’m not knee-deep
                    in code, I’m probably
                    reading up on the latest development trends or practicing my sketching (or both).</p>
            </div>
            <!-- email------- -->
            <div class="e-mail" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">E-mail</h3>
                <p style="font-size: 12px;  width: 80%;">evan.cnits@gmail.com</p>
            </div>
            <!-- address----- -->
            <div class="address" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Address</h3>
                <p style="font-size: 12px;  width: 80%;">evan.cnits@gmail.com</p>
            </div>
            <!-- gender------- -->
            <div class="gender" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Gender</h3>
                <p style="font-size: 12px;  width: 80%;">Male .</p>
            </div>
            <!-- city----- -->
            <div class="city" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">City</h3>
                <p style="font-size: 12px;  width: 80%;">Pabna Sadar, Pabna .</p>
            </div>
            <!-- date------ -->
            <div class="date" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Date of Birth</h3>
                <p style="font-size: 12px;  width: 80%;">16, November 2005</p>
            </div>

            <!-- number------- -->
            <div class="number" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Phone Number</h3>
                <p style="font-size: 12px;  width: 80%;">+880********** <br> +880**********</p>
            </div>
            <!-- social------- -->
            <div class="social" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Social Media Links</h3>
                <div class="link" style="font-size: 12px;  width: 80%;">
                    <a href="#"><i class="fa-brands fa-facebook"
                            style="color: #002aff; font-size: 22px; margin-left: 20px;"></i></a>
                    <a href="#"> <i class="fa-brands fa-linkedin"
                            style="color: #005eff; font-size: 22px; margin-left: 15px;"></i></a>
                    <a href="#"><i class="fa-brands fa-github"
                            style=" color: black; font-size: 22px; margin-left: 15px;"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram" style="font-size: 22px; margin-left: 15px;"></i></a>
                </div>
            </div>

        </div>


    </section>';
    } elseif(
        $membarName === "imtiaz" ||
        $membarName === "IMTIAZ" ||
        $membarName === "Imtiaz " ||
        $membarName === "IMTIAZ" ||
        $membarName === "IMTIAZ AHMED"
    ){ 
        $cnitmembarlist = '<section
        style="width: 60%; margin: auto; border: 1px solid black;  margin-top: 100px; padding: 30px 50px 50px 50px; margin-bottom: 50px;">

        <div class="headers">

            <div class="pic" style="width: 120px; height: 120px; border-radius: 15px; margin: auto;
        margin-top: 20px ; border: 1px solid #2e2d2d;">
                <img src="./imtiaz.jpg" alt="" width="100%" height="120px"
                    style="object-fit: cover; border-radius: 15px;">
            </div>
            <h2 style="text-align: center; font-size: 20px; margin-top: 20px;">IMTIAZ AHMED</h2>
            <h3 style="font-size: 15px;  background-color: bisque;width: 150px;text-align: center;
            padding: 10px 10px; border-radius: 10px; display: block;margin: auto;">web design</h3>

        </div>

        <div class="information" style="margin-top: 50px;">
            <!-- bio------- -->
            <div class="bio" style="display: flex;  width: 100%;">
                <h3 style="font-size: 14px;width: 20%; ">Bio</h3>
                <p style="font-size: 12px; width: 80%;">Hi! I’m a web developer and I love all
                    things tech. When
                    I’m not knee-deep
                    in code, I’m probably
                    reading up on the latest development trends or practicing my sketching (or both).</p>
            </div>
            <!-- email------- -->
            <div class="e-mail" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">E-mail</h3>
                <p style="font-size: 12px;  width: 80%;">imtiaz.cnits@gmail.com</p>
            </div>
            <!-- address----- -->
            <div class="address" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Address</h3>
                <p style="font-size: 12px;  width: 80%;">imtiaz.cnits@gmail.com</p>
            </div>
            <!-- gender------- -->
            <div class="gender" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Gender</h3>
                <p style="font-size: 12px;  width: 80%;">Male .</p>
            </div>
            <!-- city----- -->
            <div class="city" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">City</h3>
                <p style="font-size: 12px;  width: 80%;">Pabna Sadar, Pabna .</p>
            </div>
            <!-- date------ -->
            <div class="date" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Date of Birth</h3>
                <p style="font-size: 12px;  width: 80%;">16, November 2005</p>
            </div>

            <!-- number------- -->
            <div class="number" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Phone Number</h3>
                <p style="font-size: 12px;  width: 80%;">+880********** <br> +880**********</p>
            </div>
            <!-- social------- -->
            <div class="social" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Social Media Links</h3>
                <div class="link" style="font-size: 12px;  width: 80%;">
                    <a href="#"><i class="fa-brands fa-facebook"
                            style="color: #002aff; font-size: 22px; margin-left: 20px;"></i></a>
                    <a href="#"> <i class="fa-brands fa-linkedin"
                            style="color: #005eff; font-size: 22px; margin-left: 15px;"></i></a>
                    <a href="#"><i class="fa-brands fa-github"
                            style=" color: black; font-size: 22px; margin-left: 15px;"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram" style="font-size: 22px; margin-left: 15px;"></i></a>
                </div>
            </div>

        </div>


    </section>';
    }
    
    
    
    
    elseif(
        $membarName === "ROBIUL ISLAM" ||
        $membarName === "robiul" ||
        $membarName === "robiul islam" ||
        $membarName === "Robiul Islam" ||
        $membarName === " robiul islam "
    ){ 
        $cnitmembarlist = '<section
        style="width: 60%; margin: auto; border: 1px solid black;  margin-top: 100px; padding: 30px 50px 50px 50px; margin-bottom: 50px;">

        <div class="headers">

            <div class="pic" style="width: 120px; height: 120px; border-radius: 15px; margin: auto;
        margin-top: 20px ; border: 1px solid #2e2d2d;">
                <img src="./robiul.jpg" alt="" width="100%" height="120px"
                    style="object-fit: cover; border-radius: 15px;">
            </div>
            <h2 style="text-align: center; font-size: 20px; margin-top: 20px;">ROBIUL ISLAM</h2>
            <h3 style="font-size: 15px;  background-color: bisque;width: 150px;text-align: center;
            padding: 10px 10px; border-radius: 10px; display: block;margin: auto;">web developer</h3>

        </div>

        <div class="information" style="margin-top: 50px;">
            <!-- bio------- -->
            <div class="bio" style="display: flex;  width: 100%;">
                <h3 style="font-size: 14px;width: 20%; ">Bio</h3>
                <p style="font-size: 12px; width: 80%;">Hi! I’m a web developer and I love all
                    things tech. When
                    I’m not knee-deep
                    in code, I’m probably
                    reading up on the latest development trends or practicing my sketching (or both).</p>
            </div>
            <!-- email------- -->
            <div class="e-mail" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">E-mail</h3>
                <p style="font-size: 12px;  width: 80%;">robiul.cnits@gmail.com</p>
            </div>
            <!-- address----- -->
            <div class="address" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Address</h3>
                <p style="font-size: 12px;  width: 80%;">robiul.cnits@gmail.com</p>
            </div>
            <!-- gender------- -->
            <div class="gender" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Gender</h3>
                <p style="font-size: 12px;  width: 80%;">Male .</p>
            </div>
            <!-- city----- -->
            <div class="city" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">City</h3>
                <p style="font-size: 12px;  width: 80%;">Pabna Sadar, Pabna .</p>
            </div>
            <!-- date------ -->
            <div class="date" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Date of Birth</h3>
                <p style="font-size: 12px;  width: 80%;">16, November 2005</p>
            </div>

            <!-- number------- -->
            <div class="number" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Phone Number</h3>
                <p style="font-size: 12px;  width: 80%;">+880********** <br> +88**********</p>
            </div>
            <!-- social------- -->
            <div class="social" style="display: flex; width: 100%;">
                <h3 style="font-size: 14px; width: 20%; ">Social Media Links</h3>
                <div class="link" style="font-size: 12px;  width: 80%;">
                    <a href="#"><i class="fa-brands fa-facebook"
                            style="color: #002aff; font-size: 22px; margin-left: 20px;"></i></a>
                    <a href="#"> <i class="fa-brands fa-linkedin"
                            style="color: #005eff; font-size: 22px; margin-left: 15px;"></i></a>
                    <a href="#"><i class="fa-brands fa-github"
                            style=" color: black; font-size: 22px; margin-left: 15px;"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram" style="font-size: 22px; margin-left: 15px;"></i></a>
                </div>
            </div>

        </div>


    </section>';
    }

echo $cnitmembarlist ;
}
?>

    







</body>

</html>