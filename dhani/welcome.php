<html>
    <head>
        <title>Welcome</title>
        <link href="welcome.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="content">
        <h2 class="judul">Selamat Datang</h2>
        <h1 class="judul2"> 
            Terima kasih Anda sudah mendaftar Bapak/Ibu <?php echo $_POST["first_name"]; ?> <?php echo $_POST["surname"]; ?> kami akan segera menginformasikan jadwal anda ke email  <?php echo $_POST["email"]; ?> <br/>
            berikut Data Anda : <br/><br/>
            - Nama      :<?php echo $_POST["first_name"]; ?> <?php echo $_POST["surname"]; ?> <br/>
            - Alamat    :<?php echo $_POST["address"]; ?> <br/>
            - Kode Pos  :<?php echo $_POST["postcode"]; ?> <br/>
            - Tgl Lahir :<?php echo $_POST["date_of_birth"]; ?> <br/>
            - No Hp     :<?php echo $_POST["telephone1"]; ?> <br/>
            - Telephone :<?php echo $_POST["telephone2"]; ?>
        </h1>
    </body>
</html>