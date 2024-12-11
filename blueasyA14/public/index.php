<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blueasy</title>
        <meta charset="utf-8"> 
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>

    <body>
        <header>
            <div class="section-header"> <!-- achtergrond afbeelding-->
                <div class="nav-bar"> <!-- de background kleur van de nav-->
                    <div class="wrapper flex"> 
                        <h1>blu<span class="letterE">e</span>asy</h1>
                        <nav>
                            <a>home</a>
                            <a>services</a>
                            <a>testimonials</a>
                            <a>contact</a>
                        </nav>
                    </div>
                </div>
                <div class="citaat">
                    <h3>"i'm looking for the unexpected.</h3>
                    <h3>i'm looking for things i've never seen before."</h3>
                </div>
            </div>
        </header>
        <main>
            <section class="services">
                <div class="wrapper">
                    <h2><span class="underline">Ser</span>vices</h2>
                    <div class="service-boxes">
                        <div class="service-box">
                            <img src="img/Icon_coffee.png" alt="icon">
                            <h3>coffee</h3>
                            <p>Apple pie icing sweet. Brownie jelly-o applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.</p>
                        </div>
                        <div class="service-box">
                            <img src="img/Icon_instant.png" alt="icon">
                            <h3>instant</h3>
                            <p>Apple pie icing sweet. Brownie jelly-o applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.</p>
                        </div>
                        <div class="service-box">
                            <img src="img/Icon_serious.png" alt="icon">
                            <h3>serious</h3>
                            <p>Apple pie icing sweet. Brownie jelly-o applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.</p>
                        </div>
                        <div class="service-box">
                            <img src="img/Icon_frame.png" alt="icon">
                            <h3>frame</h3>
                            <p>Apple pie icing sweet. Brownie jelly-o applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-testionials"> 

                <div class="wrapper">
                    <h2><span class="underline">Tes</span>timonials</h2>
                    <div class="testimonials-box">
                    </div>
                    <div class="citaat1">
                        <p>
                            <?php
                                echo file_get_contents('testimonial_citaat.txt')
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <section id="contact">
                <div class="wrapper">
                    <h2><span class="underline">Con<
        </main>
        <footer>

        </footer> 
    </body>
</html>