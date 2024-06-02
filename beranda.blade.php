<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
    <script src="{{ asset('script.js') }}"></script>
    <title>Portofolio</title>
    <script src="https://kit.fontawesome.com/6acba18aee.js" crossorigin="anonymous"></script>

    <style>
        #header {
    width: 100%;
    height:100vh;
    background-image:url('Asset/background2.png');
    background-size: cover;
    background-position: center;
}
    </style>

</head>
<body>

    <div id="header">
        <div class="container">
            <nav>
                <img src="{{ url('Asset/logo2.png') }}" class="logo">
                <ul>
                    <li><a href=#header>Home</a></li>
                    <li><a href=#about>About Me</a></li>
                    <li><a href=#project>Fara's Project</a></li>
                    <li><a href=#favorite>Favorite Part</a></li>
                    <li><a href=#contact>Contact</a></li>
                </ul>
            </nav>
            <div class="header-text">
                <p>College Student</p>
                <h1>Hi, I'm <span>Fara</span><br>From Indonesia</h1>
            </div>
        </div>
    </div>

<!-------about------->

    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                <img src="{{ url('Asset/me.png') }}">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About Me</h1>
                    <p>Hi, i'm Fara. Someone who knows me call me Cia. I'm from Banyuwangi, Jawa Timur, Indonesia.</p>
                    <p>Someone who likes cat, strawberry, and game.</p>
                    <p>Want to be pro player in some game.</p>
                    <p>Loving about Korean space like EXO.</p>


                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('education')">Education</p>
                        <p class="tab-links" onclick="opentab('skill')">Skill</p>
                    </div>

                    <div class="tab-contents active-tab" id="education">
                        <ul>
                            <li><span>Name</span><br>Yulia Riesta Faradila</li>
                            <li><span>NIM</span><br>22515060111006</li>
                            <li><span>Study Program</span><br>Information Technology Education</li>
                            <li><span>Faculty</span><br>Ilmu Komputer</li>
                            <li><span>College</span><br>Universitas Brawijaya</li>
                            
                            
                        </ul>
                    </div>

                    <div class="tab-contents" id="skill">
                        <ul>
                            <li><span>Drawing</span></li>
                            <li><span>Dancing</span></li>
                            <li><span>Playing a game</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!----------Project-------->
<div id="project">
    <div class="container">
        <h1 class="sub-title">Fara's Project</h1>
        <div class="pro-list">
            <div class="pro">
            <img src="{{ url('Asset/por1.png') }}">
            </div>
            <div class="fav">
            <img src="{{ url('Asset/por2.png') }}">
            </div>
        </div>
    </div>
</div>

<!----------Favorite-------->

<div id="favorite">
    <div class="container">
        <h1 class="sub-title">Favorite Part</h1>
        <div class="fav-list">
            <div class="fav">
            <img src="{{ url('Asset/fav1.jpg') }}">
            </div>
            <div class="fav">
            <img src="{{ url('Asset/fav2.JPG') }}">
            </div>
            <div class="fav">
            <img src="{{ url('Asset/fav3.jpg') }}">
            </div>
            <div class="fav">
            <img src="{{ url('Asset/fav4.jpg') }}">
            </div>
            <div class="fav">
            <img src="{{ url('Asset/fav5.jpg') }}">
            </div>
            <div class="fav">
            <img src="{{ url('Asset/fav6.JPG') }}">
            </div>
            <div class="fav">
            <img src="{{ url('Asset/fav7.jpg') }}">
            </div>
            <div class="fav">
            <img src="{{ url('Asset/fav8.jpg') }}">
            </div>
            <div class="fav">
            <img src="{{ url('Asset/fav9.jpg') }}">
            </div>
            <div class="fav">
            <img src="{{ url('Asset/fav10.jpg') }}">
            </div>
            <div class="fav">
            <img src="{{ url('Asset/fav13.jpg') }}">
            </div>
            <div class="fav">
            <img src="{{ url('Asset/fav14.jpg') }}">
            </div>
        </div>
    </div>
</div>

<!----------contact-------->

<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact">
            
                <h1 class="sub-title">Contact Me</h1>
                <p><i class="fa-solid fa-map-location-dot"></i>Jln. Sumbersari Gg. IV No. 60C, Lowokwaru, Kota Malang</p>
                <p><i class="fa-regular fa-envelope"></i>riestafara1@gmail.com</p>
                <p><i class="fa-brands fa-whatsapp"></i>0855-4627-6878</p>
                <p><i class="fa-solid fa-phone"></i>0856-0638-3623</p>
                <p><i class="fa-brands fa-telegram"></i>@rieefara</p>
                <div class="social-icons">
                    <a href="https://instagram.com/rieesta_?igshid=OGQ5ZDc2ODk2ZA=="><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://twitter.com/youklie?s=09"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="https://line.me/ti/p/Ikd9cm2sI4"><i class="fa-brands fa-line"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents");

        function opentab(tabname){
            for(tablink of tablinks){
                tablink.classList.remove("active-link");
            }
            for(tabcontenr of tabcontents){
                tabcontenr.classList.remove("active-tab");
        }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
    }
</script> 

</body>
</html>
