<!DOCTYPE html>
<?php include 'asset/navbarProfile.php'?>
<html>
    <head>

    </head>
    <body>
        <div id="container">
            <div class="judulImg">
                <img src="img/destination/tourBule.png">
            </div>
            <div class="judul">
                <h1>ABI TOUR & TRAVEL</h1>
                <p>Bringing You Closer to the Great Beyond</p>
                <p>With over [number of years] of experience in this industry, we understand the desires and needs of our customers, and we are ready to offer you an unforgettable journey</p>
                <br>
                <a href="#fasilitas"><div class="button">LETS GO OUT</div></a>
            </div>
        </div>    
        <div id="fasilitas">
            <div class="fasilitasTxt">
                <h1>BENEFIT WE OFFER</h1>
                <ul>
                    <li>Profesional Tour Guide</li>
                    <li>Offering Comfortable Transportation Services</li>
                    <li>Providing Comprehensive Tour Packages.</li>
                </ul>
            </div>
            <div class="fasilitasImg">
                <img src="img/destination/tour.png">
            </div>
        </div>
        <div id="melayani">
            <div class="melayaniTxt">
                <h1>TRIP AROUND JAVA</h1>
                <p>Ready to serve your trip around Java, bolt your journey, like a dream</p>
            </div>
            <div class="melayaniImg">
                <img src="img/destination/jawa.png">
            </div>
        </div>
        
        <div id="unggul">
            <div class="card">
                <div class="star">
                    <?php for ($i=0;$i<=4;$i++):?>
                        <img src="img/icon/star.png">
                    
                    <?php endfor;?>
                </div>
                <div class="txt">
                "My visit to Kawah Ijen was amazing with the 
                mesmerizing blue flames and incredible hike. 
                The tour and travel service provided a 
                comfortable experience. I highly recommend 
                them for an unforgettable journey."
                </div>
                <div class="foto">
                    <div class="fotoImg">
                        <img src="img/profile/1.png" alt="">
                    </div>
                    <div class="txtImg">
                        <h3>Mr. KETTY</h3>
                        <p>USA</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="star">
                    <?php for ($i=0;$i<=3;$i++):?>
                        <img src="img/icon/star.png">
                    
                    <?php endfor;?>
                </div>
                <div class="txt">
                    <p>

                        "Wow! I never expected to receive such excellent service. 
                        The tour and travel agency at Mount Bromo was truly 
                        outstanding. They made my visit so memorable and 
                        unforgettable. Thank you"
                    </p>
                </div>
                <div class="foto">
                    <div class="fotoImg">
                        <img src="img/profile/2.png" alt="">
                    </div>
                    <div class="txtImg">
                        <h3>Mr. Juan</h3>
                        <p>USA</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="star">
                    <?php for ($i=0;$i<=4;$i++):?>
                        <img src="img/icon/star.png">
                    
                    <?php endfor;?>
                </div>
                <div class="txt">
                    <p>

                        "Incredible! The tour and travel service at Mount Bromo left me 
                absolutely astonished. Their dedication and attention to detail
                made my visit truly extraordinary. I can't thank them enough 
                for this unforgettable experience!"
                    </p>
                </div>
                <div class="foto">
                    <div class="fotoImg">
                        <img src="img/profile/3.png" alt="">
                    </div>
                    <div class="txtImg">
                        <h3>Mr. YUSUKE</h3>
                        <p>JAPAN</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="abi">
            <div class="abiContainer">
                <div class="abiCover">
                    
                </div>
                <div class="abiFoto">
                    <img src="img/icon/abi.png">
                </div>
                <div class="abiTxt">
                    <div class="abiBiodata">

                        <h2>Abi</h2>
                        <p>Probolinggo</p>
                        <p>+62 853 3049 0407</p>
                    </div>
                    <div class="detail">
                        <p>Tour Guide</p>
                        <p>Driver</p>
                        <p>Translator</p>
                        <p>Employee</p>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>
<?php include 'asset/footerProfile.php'?>