<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form</title>
        <link href="daftar.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div class="conten">
        <h1 class="judul">Registration Form</h1>
            <p class="judul2"> Silahkan Mengisi Form Pendaftaran Dibawah</p>
        <h2>
            <form action="welcome.php" method="POST">
                <p>
                    <img class="gambar1"src="image/1.png" alt="FName">
                    <input type="text" name="first_name" placeholder="First Name"/>
                </p>
                <p>
                    <img src="image/1.png" alt="SName">
                    <input type="text" name="surname" placeholder="SurName"/>
                </p>
                <p>
                    <img src="image/2.png" alt="Address">
                    <input type="text" name="address" placeholder="Address"/>
                </p>
                <p>
                    <img src="image/3.jpg" alt="PCode">
                    <input type="text" name="postcode" placeholder="PostCode"/>
                </p>
                <p>
                    <img src="image/4.png" alt="DOB">
                    <input class="tanggal" type="date" name="date_of_birth" placeholder="Date Of Birth">
                </p>
                <p>
                    <img src="image/5.png" alt="TelDay">
                    <input type="text" name="telephone1"/ placeholder="Telephone Day">
                </p>
                <p>
                    <img src="image/5.png" alt="Telning">
                    <input type="text" name="telephone2"/ placeholder="Telephone Evening">
                </p>
                <p>
                    <img src="image/6.png" alt="email">
                    <input type="email" name="email"/ placeholder="Email Address">
                </p>
                <p>
                    <input class="input" type="submit" value="Proses" />
                </p>
            </form>
        </h2>	
        <h3 class="foother">Copyright&copy; Wahyu Hamdani 18030032</h>
        </div>
    </body>
</html>

