<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/viewshop.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="wrapper" style="margin-top: 50px">
        <div class="header-top">
            <i class="fas fa-arrow-left"></i>
            <i class="fas fa-search"></i>
        </div>
        <!-- Content Top -->
        <div class="container">
            <div class="row side">
                <div class="side-left">
                    <img src="assets/images/game_1.png" alt="" width="100px">
                </div>
                <div class="side-right">
                    <h1 class="title-item">
                        <span>PUBG MOBILE 1.5: IGNITION</span>
                    </h1>
                    <div class="label studio">
                        <a href="#" class="nm-studio">PROXIMA BETA</a>
                        <a href="#" class="catg">Laga</a>
                    </div>
                    <div class="label for">
                        <img src="https://play-lh.googleusercontent.com/mw_NfsvKM8m6RPv8Fz2GQawCOsqWv010saMnc7zbWalMxuaA9IY8h7E0VMieLxSxAFB98NFeYqbFrXXq=s28-rw" alt="" width="14px">
                        <span>Remaja</span>
                    </div>
                    <div class="label rate">
                        <i class="fas fa-star star"></i>
                        <span>4.5</span>
                        <i class="fas fa-download user"></i>
                        <span>12rb</span>
                    </div>
                </div>
            </div>
            <div class="row price">
                <span class="val">Rp13.000</span>
            </div>
        </div><!-- End Content Top -->

        <!-- Content Center -->
        <div class="container">
            <div class="label-tag">
                <span>Detail Deskripsi</span>
            </div>
            <input type="checkbox" id="check">
            <div class="body-desc">
                <p>PLAYERUNKNOWN'S BATTLEGROUNDS resmi didesain eksklusif untuk perangkat seluler. Mainkan di mana saja, kapan saja. PUBG MOBILE menghadirkan aksi multiplayer gratis paling seru di perangkat seluler. Terjun, siapkan senjata, dan tuntaskan. Bertahanlah dalam pertempuran klasik 100 pemain, mode payload, mode fast-paced 4v4 team deathmatch, dan mode zombie. Bertahan adalah kunci, dan siapa yang terakhir bertahan menjadi pemenangnya. Saat panggilan tugas, tembak sesuka hati!</p><br>
                <p>FREE ON MOBILE - Didukung oleh Mesin Unreal 4. Mainkan game kualitas konsol di mana saja. Menghadirkan grafis HD dan suara 3D yang mengagumkan. Menampilkan kontrol game yang bisa disesuaikan, mode training, dan obrolan suara. Rasakan kontrol paling halus, perilaku balistik dan senjata yang realistik di ponsel.</p>
            </div>
            <div class="footer-desc">
                <label for="check" style="color: #03ac0e;height: 30px;font-weight: 600;font-size: 14px;">Baca Selengkapnya</label>
            </div>
        </div><!-- End Content Center -->

        <!-- Durasi -->
        <div class="container">
            <div class="label-tag">
                <span>Durasi Sewa</span>
                <span>Lihat Panduan</span>
            </div>
            <div class="row">
                <ul class="durasi">
                    <li><button class="item-durasi">1 hari</button></li>
                    <li><button class="item-durasi">3 hari</button></li>
                    <li><button class="item-durasi">7 hari</button></li>
                    <li><button class="item-durasi premium">Premium</button></li>
                </ul>
                <div class="label">Stok tersisa 20, beli segera!</div>
            </div>
        </div><!-- End Durasi -->

        <!-- Metode Pembayaran -->
        <div class="container">
            <div class="label-tag">
                <span>Metode Pembayaran</span>
                <span>Lihat Semua</span>
            </div>
            <div class="body-pay">
                <img src="https://cdn3.iconfinder.com/data/icons/currency-17/24/Idr-512.png" alt="" width="30px">
                <span>Saldo Ratel <br>
                    <p>Rp14.000</p>
                </span>
            </div>
        </div><!-- End Metode Pembayaran -->

        <!-- Ringkasan Pembayaran -->
        <div class="container">
            <div class="label-tag">
                <span>Ringkasan Pembayaran</span>
            </div>
            <div class="body-sum">
                <div class="list-detail">
                    <p>Total Tagihan</p>
                    <p>Rp13.000</p>
                </div>
                <div class="list-detail">
                    <p>Diskon</p>
                    <p>-Rp5.000</p>
                </div>
                <div class="list-detail">
                    <p>Biaya Admin</p>
                    <p>Rp1.000</p>
                </div>
            </div>
        </div><!-- End Ringkasan Pembayaran -->

        <!-- Bayar -->
        <div class="container">
            <div class="agree">
                <span>Dengan membayar saya menyetujui
                    <span style="color: #03ac0e;">syarat dan ketentuan asuransi</span>
                </span>
            </div>
            <div class="label-tag">
                <span>Total Tagihan</span>
                <p>Rp9.000</p>
            </div>
            <div class="body-pay">
                <button class="pay">Bayar Sekarang</button>
            </div>
        </div>

        <?php



        ?>
        <script>
            $("#hide").click(function() {
                $(".body-desc").removeAttr("style");
            })
        </script>
    </div>
</body>

</html>