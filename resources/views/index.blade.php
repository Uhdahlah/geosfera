<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geosfera</title>
    <link rel="icon" href="assets/files/logo.png">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/reg.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<body>

    <!-- Background Video & Header -->

    <div class="banner">
        <video src="assets/files/bgvid.mp4" type="video/mp4" autoplay muted loop style="filter: blur(5px);"></video>

        <!-- Header -->


        <div class="content" id="home">
            <nav style="display: flex; align-items: center;">
                <img src="assets/files/logo.png" class="logo" alt="Logo" title="FirstFlight Travels" style="width: 75px; height: auto;">
                <span style="margin-left: 5px; font-size: 24px; font-weight: bold;">Geosfera</span>
                <ul class="navbar" style="margin-left: auto;">
                    <li>
                        <a href="http://127.0.0.1:8000/">Home</a>
                        <a href="http://127.0.0.1:8000/chat-room">Chat Room</a>
                        <a href="#locations">FAQ</a>
                        <a href="http://127.0.0.1:8000/about">About Us</a>
                        <a href="http://127.0.0.1:8000/contact">Contact Us</a>
                    </li>
                </ul>
            </nav>
        </div>

            <div class="title">
                <h1>Geosfera</h1>
                <p>Menggali Informasi, Memahami Geosfera <br> Mari Jelajahi Bumi dan Ungkap Keajaiban Dunia</p>

            </div>
        </div>
    </div>

    <!-- Services -->

    <section class="container">
        <div class="text">
            <h2>Explore Our Interactive Exhibits!</h2>
        </div>
        <div class="rowitems">

            <div class="container-box">
                <div class="container-image">
                    <img src="assets/files/geologi1.jpg" alt="Sejarah Kehidupan">
                </div>
                <h4>Sejarah Kehidupan</h4>
            </div>

            <div class="container-box">
                <div class="container-image">
                    <img src="assets/files/geologi2.jpg" alt="Manfaat dan Bencana Geologi">
                </div>
                <h4>Manfaat dan Bencana Geologi</h4>
            </div>

            <div class="container-box">
                <div class="container-image">
                    <img src="assets/files/geologi3.jpg" alt="Sumber Daya Geologi">
                </div>
                <h4>Sumber Daya Geologi</h4>
            </div>

            <div class="container-box">
                <div class="container-image">
                    <img src="assets/files/geologi4.jpg" alt="Geologi Indonesia">
                </div>
                <h4>Geologi Indonesia</h4>
            </div>
        </div>
    </section>

    <!-- Packages -->

    <section class="package" id="package">
        <div class="package-title">
            <h2>Koleksi</h2>
        </div>

        {{-- <div class="package-content">
            <div class="text-block">
                <h3>Best Selling Destinations</h3>
            </div>

            <a href="package.html#2700">
                <div class="box">
                    <div class="image">
                        <img src="assets/files/p1.jpg" alt="">
                        <h3>Starting at Rs.2,700 </h3>
                    </div>
                </div>
            </a>

            <a href="package.html#4999">
                <div class="box">
                    <div class="image">
                        <img src="assets/files/p2.jpg" alt="">
                        <h3>Starting at Rs.4,999</h3>
                    </div>
                </div>
            </a>

            <a href="package.html#9999">
                <div class="box">
                    <div class="image">
                        <img src="assets/files/p3.jpg" alt="">
                        <h3>Starting at Rs.9,999</h3>
                    </div>
                </div>
            </a>

            <a href="package.html#30000">
                <div class="box">
                    <div class="image">
                        <img src="assets/files/p4.jpg" alt="">
                        <h3>Starting at Rs.30,000</h3>
                    </div>
                </div>
            </a>

            <a href="package.html#37700">
                <div class="box">
                    <div class="image">
                        <img src="assets/files/pac1.jpeg" alt="">
                        <h3>Starting at Rs.37,700/-</h3>
                    </div>
                </div>
            </a>

            <a href="package.html#47500">
                <div class="box">
                    <div class="image">
                        <img src="assets/files/pac1.jpg" alt="">
                        <h3>Starting at Rs.47,500/-</h3>
                    </div>
                </div>
            </a>

            <a href="package.html#58500">
                <div class="box">
                    <div class="image">
                        <img src="assets/files/pac3.jpg" alt="">
                        <h3>Starting at Rs.58,500/-</h3>
                    </div>
                </div>
            </a>

            <a href="package.html#59500">
                <div class="box">
                    <div class="image">
                        <img src="assets/files/pac7.jpg" alt="">
                        <h3>Starting at Rs.59,500/-</h3>
                    </div>
                </div>
            </a>
            <a href="package.html#59500">
                <div class="box">
                    <div class="image">
                        <img src="assets/files/l3.jpg" alt="">
                        <h3>Starting at Rs.65,500/-</h3>
                    </div>
                </div>
            </a>

        </div> --}}
    </section>

    {{-- <section class="package2" id="package">
        <div class="pack5-content">

            <div class="text-block">
                <h3>Bestsellers at EPIC Discounts</h3>
                <p>Grab our top-selling packages at unbelievable prices. Get 50% OFF on top sightseeing's , Free E-Visa
                    & more!!</p>
            </div>

            <div class="box">
                <div class="image">
                    <img src="assets/files/pack5.1.jpg" alt="">
                    <h3>Egypt</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="assets/files/pack5.2.jpg" alt="">
                    <h3>Vietnam</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="assets/files/pac2.3.jpg" alt="">
                    <h3>Karala</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="assets/files/pac2.4.webp" alt="">
                    <h3>Bali</h3>
                </div>
            </div>
        </div>
    </section><br><br> --}}

    <section class="package2" id="package">

        <div class="package2-content">
            <div class="text-block">
                <h3>Jackpot Deals on Top Selling Packages</h3>
                <p>Save extra with our exclusive deals!</p>
            </div>

            <a href="assets/package.html#6000">
                <div class="box">
                    <div class="image">
                        <img src="assets/files/koleksi1.jpg" alt="">
                        <h3>Batu Geologi</h3>
                    </div>
                </div>
            </a>

            <div class="box">
                <div class="image">
                    <img src="assets/files/koleksi2.jpg" alt="">
                    <h3>Gajah </h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="assets/files/koleksi3.jpg" alt="">
                    <h3>Batu Sejarah Kehidupan</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="assets/files/koleksi4.jpg" alt="">
                    <h3>Alur Sumber Daya Alam</h3>
                </div>
            </div>

            <a href="package.html#6000">
                <div class="box">
                    <div class="image">
                        <img src="assets/files/koleksi5.jpg" alt="">
                        <h3>Kashmir</h3>
                    </div>
                </div>
            </a>
        </div>

        <!-- Explore Button -->

        <div style="text-align:center">
            <button type="button" class="btn btn-primary"> <a href="package.html">Explore More</a></button>
        </div>
    </section><br><hr><br>

    <!-- Locations -->

    <section class="locations" id="locations">
        <div class="package-title">
            <h2>Ruang Pameran</h2>
        </div>

        <div class="location-content">
            <a href="locations.html">
                <div class="col-content">
                    <img src="assets/files/geologi1.jpg" alt="">
                    <h5>Sejarah Kehidupan</h5>
                </div>
            </a>

            <a href="locations.html#istanbul">
                <div class="col-content">
                    <img src="assets/files/geologi2.jpg" alt="">
                    <h5>Kebencanaan Geologi</h5>
                </div>
            </a>

            <a href="locations.html#paris">
                <div class="col-content">
                    <img src="assets/files/geologi3.jpg" alt="">
                    <h5>Sumber Daya Geologi</h5>
                </div>
            </a>

            <a href="locations.html#bali">
                <div class="col-content">
                    <img src="assets/files/geologi4.jpg" alt="">
                    <h5>Geologi Indonesia</h5>
                </div>
            </a>
        </div>
    </section><br><hr>

    <style>
        .location-content {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px; /* Adjust the gap as needed */
        }
        .col-content {
            flex: 1 1 200px;
            max-width: 200px;
            text-align: center;
        }
        .col-content img {
            width: 100%;
            height: auto;
        }
    </style>

    <!-- FAQ;s -->

    <section><br>
        <div class="destination-title">
            <h2>Informasi Ruang Pameran</h2>
        </div>
        <div class="container1">
            <style>
                .destination-title {
                    text-align: center;
                }

                .container1 {
                    display: grid;
                    position: relative;
                    grid-template-columns: auto auto auto;
                    background: color #f6f1f1;
                    padding: 48px;
                    font-size: 12px;
                    gap: 10px;
                    margin-top: 5px;
                    margin-left: 100px;
                    margin-right: 100px;
                    margin-bottom: 1px;

                    .loc-detail li {
                        font-size: 10px;
                        color: black;
                        margin-left: 15px;
                        margin-bottom: 2px;
                        list-style-type: circle;
                    }

                    .box {
                        background: inherit;
                        color: black;
                        box-shadow: 5px 5px 10px #3b3737;
                        padding: 5px;
                        border-radius: 15px;
                    }
                }
            </style>

            <div class="box">
                <h1>Sejarah Kehidupan</h1><br>
                <p>Ruangan ini menyajikan gambaran perkembangan kehidupan di bumi sejak terbentuknya planet ini 4,6 miliar tahun yang lalu.
                    Proses ini dimulai dengan pembentukan litosfer, atmosfer, dan hidrosfer sekitar 3,8 miliar tahun yang lalu, disusul oleh kemunculan kehidupan awal berupa mikroorganisme
                    seperti ganggang dan bakteri sekitar 3,5 miliar tahun yang lalu, yang diwakili oleh fosil tertua, Stromatolit.
                     Ruangan ini juga menampilkan perjalanan evolusi kehidupan dari masa ke masa, mulai dari makhluk hidup di air hingga migrasi ke daratan,
                     dari organisme bersel tunggal hingga organisme bersel banyak, dari hewan invertebrata hingga vertebrata, dan dari tumbuhan paku hingga tumbuhan berbunga.
                     Selain itu, pengunjung dapat mempelajari sejarah geologi Bandung, termasuk kisah terbentuknya Danau Bandung Purba, serta melihat berbagai replika fosil manusia purba yang dipamerkan.
                    {{-- <br><b>Best time to visit :</b> November to February <br> --}}

                    {{-- <br> <b>Best places to visit:</b>
                <ul class="loc-detail">
                    <li>Calangute</li>
                    <li>Baga</li>
                    <li>Anjuna</li>
                    <li> Miramar</li>
                    <li> Palolem</li>
                    <li> Panjim</li>
                </ul> --}}
            </div>

            <div class="box">
                <h1>Manfaat dan Bencana Geologi</h1><br>
                <p>Ruang Pameran Manfaat dan Bencana Geologi memberikan informasi mendalam tentang pemanfaatan sumber daya geologi oleh manusia <br>
                serta berbagai jenis bencana geologi. Pada sudut pameran pemanfaatan, disajikan perkembangan pengolahan sumber daya geologi dari masa ke masa. Sementara itu, sudut pameran bencana geologi menampilkan beragam jenis bencana, seperti gempa bumi dan tsunami, letusan gunung berapi, serta tanah longsor.                    {{-- <br><b>Best time to visit :</b> November to February <br> --}}

                    {{-- <br> <b>Best places to visit:</b>
                <ul class="loc-detail">
                    <li>Calangute</li>
                    <li>Baga</li>
                    <li>Anjuna</li>
                    <li> Miramar</li>
                    <li> Palolem</li>
                    <li> Panjim</li>
                </ul> --}}
            </div>

            <div class="box">
                <h1>Ruangan Sumber Daya Geologi</h1><br>
                <p>Menampilkan berbagai jenis potensi sumber daya geologi yang mencakup mineral, energi, dan tanah. Untuk sumber daya mineral, ruangan ini mengulas beragam mineral logam dan non-logam, termasuk batu mulia. Pada sumber daya energi, informasi yang disajikan mencakup energi konvensional seperti minyak bumi dan panas bumi. Selain itu, ruangan ini juga menyoroti pentingnya sumber daya air, terutama air tanah, sebagai elemen vital bagi kelangsungan hidup manusia.

                    {{-- <br> <b>Best places to visit:</b>
                <ul class="loc-detail">
                    <li>Calangute</li>
                    <li>Baga</li>
                    <li>Anjuna</li>
                    <li> Miramar</li>
                    <li> Palolem</li>
                    <li> Panjim</li>
                </ul> --}}
            </div>

            <div class="box">
                <h1>Geologi Indonesia</h1><br>
                <p>Ruangan ini memberikan informasi tentang proses terbentuknya bumi dalam tata surya yang termasuk dalam sistem keluarga matahari. Di ruangan ini, pengunjung dapat melihat koleksi meteorit dan tektit. Selain itu, dijelaskan pula perkembangan kepulauan Indonesia selama 50 juta tahun terakhir hingga kondisinya saat ini, berdasarkan teori tektonik lempeng. Posisi kepulauan Indonesia yang terletak di antara tiga lempeng tektonik utama—Eurasia, Pasifik, dan Indo-Australia—mengakibatkan terjadinya berbagai fenomena geologi, seperti gempa bumi, tsunami, dan aktivitas gunung berapi. Fenomena dan ciri-ciri geologi utama dari masing-masing pulau besar di Indonesia juga dipaparkan. Ruangan ini turut menampilkan berbagai jenis mineral dan batuan beserta klasifikasinya, serta cara mengenali masing-masingnya.
                    {{-- <br> <b>Best places to visit:</b>
                <ul class="loc-detail">
                    <li>Calangute</li>
                    <li>Baga</li>
                    <li>Anjuna</li>
                    <li> Miramar</li>
                    <li> Palolem</li>
                    <li> Panjim</li>
                </ul> --}}
            </div>

            {{-- <div class="box">
                <h1>Shimla</h1>
                <p> Shimla, the Queen of the Hills, is the stuff that dreamy India tours are made of! Shimla is a
                    great
                    destination for international honeymoon packages, with its pristine landscape, mountains,
                    greenery
                    and romantic weather. A Shimla tour also means checking out the delightful cafes and eateries
                    here. <br>

                    <br> <b>Best Time to Visit:</b> May to June/December to January <br>

                    <br> Best Places to Visit:
                <ul class="loc-detail">
                    <li>The Ridge</li>
                    <li> Green Valley</li>
                    <li> Mall Road</li>
                    <li> Jakhoo Hill</li>
                </ul>
                </p>
            </div> --}}

            {{-- <div class="box">
                <h1> Uttarakhand</h1>
                <p> There are many India tours which keep Uttarakhand at the forefront and why not? The state is
                    blessed with unmatched natural beauty. Find Uttarakhand tour packages covering several popular
                    destinations. The state offers the right mix of spirituality, trekking, adventure, beautiful
                    mountain landscapes and welcoming locals. <br>

                    <br> <b> Best time to visit:</b> March to April/September to October <br>

                    <br> Best places to visit:
                <ul class="loc-detail">
                    <li> Dehradun</li>
                    <li> Mussoorie</li>
                    <li> Nainital</li>
                    <li> Auli</li>
                    <li> Rishikesh</li>
                </ul>
                </p>

            </div> --}}
        </div>
    </section>

    <section class="faq">
        <div class="container2">
            <style>
                .container2 {
                    position: relative;
                    grid-template-columns: auto auto auto;
                    gap: 5%;
                    padding: 35px;
                    margin-top: 50px;
                    margin-left: 35px;
                    margin-right: 34px;
                    border-radius: 10px;
                    font-size: 12px;
                    color: black;
                    background-color: white;
                    box-shadow: 5px 5px 10px #3b3737;
                }
            </style>
            <div> <br>
                <h1 class="faqh1">FAQs - Frequently Asked Questions</h1>
            </div>
            <p><br>
                <h3> Apa waktu operasional Museum Geologi?</h3> <br>
                <p>
                    Museum Geologi buka dari Senin hingga Kamis pada pukul 09.00 - 15.00 WIB, dan pada Sabtu serta Minggu pukul 09.00 - 14.00 WIB. Museum tutup pada hari Jumat dan libur nasional.
                </p><br>
                <hr>

                <br>
                <h3> Berapa harga tiket masuk Museum Geologi?</h3><br>
                <p>
                    Harga tiket masuk Museum Geologi adalah sebagai berikut:
                    <ul>
                        <li>Pelajar: Rp 2.000,-</li>
                        <li>Umum: Rp 3.000,-</li>
                        <li>Asing: Rp 10.000,-</li>
                    </ul>
                    Pembayaran tiket dilakukan pada saat kedatangan.
                </p><br>
                <hr>

                <br>
                <h3> Bagaimana cara reservasi kunjungan ke Museum Geologi?</h3><br>
                <p>
                    Untuk reservasi kunjungan konvensional, Anda dapat menghubungi WhatsApp di nomor 0811 8880 1928. Untuk tur virtual, Anda dapat menghubungi WhatsApp di nomor 0811 8880 1929. Reservasi dilakukan sesuai waktu operasional museum.
                </p><br>
                <hr>

                <br>
                <h3> Apa saja fasilitas yang tersedia di Museum Geologi?</h3>
                <p>
                    Museum Geologi menyediakan berbagai fasilitas, seperti ruang pameran, auditorium, perpustakaan, area parkir, toilet, dan toko suvenir. Fasilitas ini ditujukan untuk kenyamanan pengunjung selama berkunjung.
                </p> <br>
                <hr>
            </p>
        </div>
    </section>

    <!-- Newsletter -->

    <section class="newsletter">
        <div class="newstext">
            <h2>Newsletter</h2>
            <p>Subscribe to get offers and latest<br>updates every week!</p>
        </div>

        <div class="send">
            <form action="">
                <input type="email" name="emailid" placeholder="E-mail" required>
                <input type="submit" value="Subscribe">
            </form>
        </div>
    </section>

    <!-- Footer -->

    <section class="footer">
        <div class="foot">
            <div class="footer-content">

                <div class="footlinks">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="booking.html">Register</a></li>
                        <li><a href="info.html">About Us</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>

                <div class="footlinks">
                    <h4>Connect</h4>
                    <div class="social">
                        <a href="https://www.facebook.com/profile.php?id=100007787415175" target="_blank"><i
                                class='bx bxl-facebook'></i></a>
                        <a href="https://www.instagram.com/iamit010/" target="_blank"><i
                                class='bx bxl-instagram'></i></a>
                        <a href="https://twitter.com/sarcasmit_" target="_blank"><i class='bx bxl-twitter'></i></a>
                        <a href="https://www.linkedin.com/in/amit-kumar-singh-475b36212/" target="_blank"><i
                                class='bx bxl-linkedin'></i></a>
                        <a href="https://github.com/iamit010" target="_blank"><i class='bx bxl-github'></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="end">
            <p>Copyright © 2025 Adventour All Rights Reserved.<br>Website developed by: Geosfera's Team</p>
        </div>
    </section>
 <SCRIPT type="text/javascript">
        function JavaBlink() {
           var blinks = document.getElementsByTagName('JavaBlink');
           for (var i = blinks.length - 1; i >= 0; i--) {
              var s = blinks[i];
              s.style.visibility = (s.style.visibility === 'visible') ? 'hidden' : 'visible';
           }
           window.setTimeout(JavaBlink, 500);
        }
        if (document.addEventListener) document.addEventListener("DOMContentLoaded", JavaBlink, false);
        else if (window.addEventListener) window.addEventListener("load", JavaBlink, false);
        else if (window.attachEvent) window.attachEvent("onload", JavaBlink);
        else window.onload = JavaBlink;
      </SCRIPT>
</body>

</html>
