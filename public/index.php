<?php

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link href="https://fonts.googleapis.com/css2?family=Lato" rel="stylesheet" <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Home</title>
</head>
<style>
    body {
        font-family: 'PT Serif', serif;
        transition: background-color .5s;
    }

    .sidenav {
        height: 100%;
        width: 30vw;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: black;
        overflow-x: hidden;
        transition: 0.5s;
    }

    .sidenav a {
        padding: 1% 1% 1% 7%;
        text-decoration: none;
        font-size: 1vw;
        color: white;
        display: block;
        transition: 0.3s;
    }

    .sidenav a:hover {
        color: rgb(238, 238, 238, 0.6);
        font-size: 1.1vw;
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 0;
        font-size: 2vw;
        margin-left: 50px;
        margin-top: 50vh;
    }

    #main {
        transition: margin-left .5s;
        padding: 16px;
    }

    .sideNav {
        border-left: 2vw solid black;
        height: 100vh;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    #floatbar {
        position: fixed;
        left: 0;
        margin-top: 50vh;
    }

    .logo {
        position: absolute;
        width: 25%;
        top: 2.5vw;
        left: 5%;
    }

    .logoparent {
        padding: 10%;
        background-color: white;
        color: black;
    }

    .closebtn {
        margin-left: 20%;
        position: absolute;
    }

    .navTitle {
        right: 12%;
        position: absolute;

    }

    .navTitle h3 {
        font-size: 2vw;
    }

    .footerNav {
        bottom: 0;
        padding-top: 2vw;
        padding-bottom: 2vw;
        padding-right: 4.5vw;
        padding-left: 4.5vw;
        background-color: black;
        position: absolute;
        text-align: center;
    }

    .footerText {
        flex-wrap: wrap;
        display: flex;
        margin-left: 1vw;
        margin-right: 1vw;
        color: white;
    }

    .footerText h3 {
        font-size: 2vw;
    }

    .footerText p {
        font-size: 1.4vw;
        margin-left: 0.6em;
        margin-top: 0.3em;
    }

    hr {
        width: 90%;
        border-width: 0.1em;
        border-style: double;
    }
</style>

<body>
    <div class="sideNav" onclick="openNav()" style="cursor: pointer;">
        <span class="material-symbols-outlined" style="font-size:2vw; color: white;" id="floatbar">
            arrow_forward_ios
        </span>
    </div>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"> <span class="material-symbols-outlined" style="font-size:2vw; color: white;">
                arrow_back_ios
            </span></a>
        <div class="logoparent">
            <img class="logo" src="https://labdesainfurnitur.poltek-furnitur.ac.id/wp-content/uploads/2022/06/cropped-cropped-Polifurneka_Kendal-60x59.png">
            <div class="navTitle">
                <h3><strong>ABSENSI LABKU</strong> </h3>
            </div>
        </div>
        <div style="margin-top: 20%;">
            <a href="#"><b>Home</b>
                <hr>
            </a>
            <a href="#"><b>Profil</b>
                <hr>
            </a>
            <a href="#"><b>Rekap Absensi</b>
                <hr>
            </a>
            <a href="#"><b>About</b>
                <hr>
            </a>
        </div>
        <div class="footerNav">
            <div class="footerText">
                <h3 id="time"><?php echo date("h:i:s") ?></h3>
                <p id="date"><?php echo date("d/m/Y") ?></p>
            </div>
        </div>
    </div>

    <div class="container-lg mt-5" id="main">
        <div style="margin-left: 2vw;">
            <div class="mb-5">
                <h1>Selamat datang, Safa!</h1>
            </div>
            <div class="alert alert-info mb-5" role="alert">
                Terimakasih absen berhasil, mohon tunggu verifikasi dari verifikator kami.
            </div>
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <td>Monitor</td>
                        <td>CPU</td>
                        <td>Mouse</td>
                        <td>Keyboard</td>
                        <td>Meja</td>
                        <td>Kursi</td>
                        <td>Absen</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td editable>.....</td>
                        <td>.....</td>
                        <td>.....</td>
                        <td>.....</td>
                        <td>.....</td>
                        <td>.....</td>
                        <td>
                            <button class="btn btn-success">
                                Masuk
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>.....</td>
                        <td>.....</td>
                        <td>.....</td>
                        <td>.....</td>
                        <td>.....</td>
                        <td>.....</td>
                        <td>
                            <button class="btn btn-success">
                                Pulang
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "30vw";
            //document.getElementById("main").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            //document.getElementById("main").style.marginLeft = "7vw";
            document.body.style.backgroundColor = "white";
        }

        setInterval(function() {
            var currentTime = new Date();
            var currentHours = currentTime.getHours();
            var currentMinutes = currentTime.getMinutes();
            var currentSeconds = currentTime.getSeconds();
            currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
            currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;
            var timeOfDay = (currentHours < 12) ? "AM" : "PM";
            currentHours = (currentHours > 12) ? currentHours - 12 : currentHours;
            currentHours = (currentHours == 0) ? 12 : currentHours;
            var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " WIB";
            document.getElementById("time").innerHTML = currentTimeString;
        }, 1000);
    </script>
</body>

</html>