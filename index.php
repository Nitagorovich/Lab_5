<?php

$xml = simplexml_load_file("data.xml") or die("Error: Cannot create object");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css" />
    <title>Kembang Flower Mantap</title>
</head>

<body>
     <header>
        <div class="head">
            <div class="cart_loupe">
                <a href=""><img src="pictures/loupe.png" alt="loupe"></a>
                <a href=""><img src="pictures/cart.png" alt="cart" id="cart"></a>
            </div>
            
            <button class="signup">Sign Up</button>
            <button class="signin">Sign In</button>
        </div>
    </header>
    <main>
        <section>

            <div class="section1">
                
                <div class="pic1">
                    <img src="pictures/picture1.png" alt="picture1" id="picture1">
                </div>

                <div class="main_title">
                    <h1 class="title">Kembang Flower Mantap</h1>

                    <div class="title1">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    </div>
                </div>
            </div>

        </section>


        <section>
            <div class="section2">

                <div class="box_section">
                    <div class="box_section_title">
                        <img src="pictures/car.png" alt="car">
                        <h2 class="box_title">Fast Delivery</h2>
                    </div>

                    <div class="box">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                    </div>
                </div>

                <div class="box_section">
                    <div class="box_section_title">
                        <img src="pictures/headphones.png" alt="headphones">
                        <h2 class="box_title">Great Customer Service</h2>
                    </div>

                    <div class="box">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                    </div>
                </div>

                <div class="box_section">
                    <div class="box_section_title">
                        <img src="pictures/plant.png" alt="plant">
                        <h2 class="box_title">Original Plants</h2>
                    </div>

                    <div class="box">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                    </div>
                </div>

                <div class="box_section">
                    <div class="box_section_title">
                        <img src="pictures/money.png" alt="money">
                        <h2 class="box_title">Affordable price</h2>
                    </div>

                    <div class="box">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                    </div>
                </div>
            </div>

        </section>


        <section>

            <div class="section3">
                <div class="plants_title">
                    <h2 class="featured_plants">Featured Plants</h2>
                </div>
                
                <div class="succulents">

                    <?php
                    foreach ($xml->item as $item) {
                    ?>

                    <div class="plants_section">

                        <div class="succulent">
                            <img src="<?= $item->img ?>" name="img" alt="succulent1">
                        </div>

                        <div class="succulents_text">
                            <h2 name="name" class="name_of_plant"><?= $item->name ?></h2>
                            <div name="cost" class="IDR">IDR <?= $item->cost ?></div>
                        </div>

                    </div> 

                    <?php } ?>

                </div>
            </div>

        </section>


        <section>
            <div class="section4">
                <div class="section4_left">
                    <div class="section4_text">
                        <h2 class="s4_title">
                            Buy more plants, it helps you to be relaxed 
                        </h2>

                        <div class="s4_text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida gravida aliquam. Pellentesque et lobortis nisl. Sed et mauris justo. Nulla eu enim non mauris maximus dignissim. Maecenas vitae eros sapien. Quisque pellentesque tempus dignissim.
                        </div>
                    </div>

                    <div class="pic2">
                        <img src="pictures/picture2.png" alt="picture2" id="picture2">
                    </div>
                </div>

                <div class="pic3">
                    <img src="pictures/picture3.png" alt="picture3" id="picture3">
                </div>
            </div>

        </section>


        <section>
            <div class="section5">
                <div class="section5_text">
                    <h2 class="s5_title">
                        <span>Get your favourites plant on our shop now</span>
                    </h2>

                    <button class="s5_button">Visit Shop</button>
                </div>

                <div class="pic4">
                    <img src="pictures/picture4.png" alt="picture4" id="picture4">
                </div>
            </div>

        </section>
    </main>


    <footer>
        <div class="footers">
            <div class="footer1">
                <div class="fooler_title">PLANTKU</div>

                <h2 class="title2" id="Plantku_House">Plantku House</h2>
                <div class="address">
                    Jl. Laksda Adisucipto No.51, Demangan, Kec. Depok, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55282
                </div>
            </div>

            <div class="footer2">
                <div class="title2" id="Perusahaan">Perusahaan</div>

                <div class="footer_text" id="Tentang_Kami">Tentang Kami</div>
                <div class="footer_text" id="Hubungi_Kami">Hubungi Kami</div>
            </div>

            <div class="footer3">
                <div class="title2" id="Produk">Produk</div>

                <div class="footer_text" id="Tanaman">Tanaman</div>
                <div class="footer_text" id="Tanaman_Lain">Tanaman Lain</div>
            </div>

            <div class="footer4">
                <div class="title2" id="Berlangganan">Berlangganan Email Kami</div>

                <input id="Masukan" type="email" placeholder="Masukan Alamat Email">
                <button class="submit">Submit</button>
            </div>

        </div>

    </footer>


</body>

</html>