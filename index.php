<?php include 'mail.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Website</title>
    <link href="//db.onlinewebfonts.com/c/e8c6a63541de0a4211a9358cbe74690f?family=Futura" rel="stylesheet"
        type="text/css" />
    <link href="//db.onlinewebfonts.com/c/9ab8abd11c40ee5c8d1905f9c9cb9ac8?family=Futura" rel="stylesheet"
        type="text/css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
    <script src="https://formspree.io/js/formbutton-v1.min.js" defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
        integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
    <link rel="stylesheet" href="main.css">

</head>
<body>
    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->

    <header>
        
        <button class="nav-toggle" aria-label="toggle navigation">
            <span class="hamburger"></span>
        </button>
        <nav class="nav">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="#home" class="nav__link">Home</a>
                </li>
                <li class="nav__item">
                    <a href="#about" class="nav__link">About me</a>
                </li>
                <li class="nav__item">
                    <a href="#skills" class="nav__link">Skills</a>
                </li>
                <li class="nav__item">
                    <a href="#work" class="nav__link">My projects</a>
                </li>
                <li class="nav__item">
                    <a href="#contact" class="nav__link">Contact</a>
                </li>
            </ul>
        </nav>
    </header>


    <!--Intro-->
    <section class="intro" id="home">
        <h1 class="section__title section__title--intro">
            Hi. I am <strong>Maria-Daniela Bosoancă</strong>
        </h1>
        <p class="section__subtitle section__subtitle--intro">Computer Science Student </p>
        <img src="images/20210401_171751.jpg" alt="imagine Dana" class="intro__img">
    </section>

    <!--About me-->
    <section class="about-me" id="about">
        <h2 class="section__title section__title--about">Who I am</h2>
        <p class="section__subtitle section__subtitle--about">
            <br>
         </p>
        <div class="about-me__body">
    
            <p>I am a 3rd year student at the Faculty of Automation and Computers in Timișoara. During high school,
I discovered my passion for websites when I developed a recipe site
for the certificate work. In the 2nd year of college, I returned to this passion, realizing a few
applications and sites for various projects. </p>
            <p>I'm an ambitious person,
motivated, who strives to do things well and in a timely manner.</p>
        </div>
        <img src="images/var2.jpg" alt="cuvinte" class="about-me__img">
    
    </section>

    <!--Skills-->
    <section class="my-skills" id="skills">
        <h2 class="section__title section__title--services">Skills</h2>
        <div class="skills-center container">
            <div class="skills-left">
                <div class="skills-box">
                    <h4>HTML5/CSS</h4>
                    <div class="skills-ilt">
                        <div class="skills-bar html"></div>
                        <span>60%</span>
                    </div>
                </div>
                <div class="skills-box">
                    <h4>JavaScript</h4>
                    <div class="skills-ilt">
                        <div class="skills-bar js"></div>
                        <span>20%</span>
                    </div>
                </div>
                <div class="skills-box">
                    <h4>PHP</h4>
                    <div class="skills-ilt">
                        <div class="skills-bar php"></div>
                        <span>20%</span>
                    </div>
                </div>
            </div>
            <div class="right">
                <h3>My creative skills and experience</h3>
                <ul>
                    <li> <i class="fas fa-comments"></i>Communication</li>
                    <li><i class="far fa-calendar-check"></i>Organization</li>
                    <li><i class="fas fa-user-clock"></i>Always punctual</li>
                    <li><i class="fas fa-sync-alt"></i>Adaptability</li>
                    <li> <i class="fas fa-users"></i>Friendly personality</li>
                </ul>
                <button class="tr1" id="pro"type="submit" onclick="work"><i class="fas fa-arrow-down"></i>My projects</button>

                <button class="tr1" type="submit" onclick="window.open('CV_Bosoancă-Maria-Daniela.pdf')">
                    
                    <i class="far fa-eye"></i></a>My resume</button>
                
            </div>
        </div>
    
    </section>

    
    <!--My projects-->
    <section class="my-work" id="work">
        <h2 class="section__title">My projects</h2>
        <div class="portfolio">
    <div class="portfolio__item">
    <img src="images/pro2.png" alt="" class="portfolio__img">
    <ul>
        <li>
            <div class="skills__data">
                <span class="skills__name"> Java</span>
                <span class="skills__number">81.3%</span>
                <span class="skills__bar skills__java1"></span>
            </div>
        </li>
        <li>
            <div class="skills__data">
                <span class="skills__name">TSQL</span>
                <span class="skills__number">18.7%</span>
                <span class="skills__bar skills__tsql1"></span>
            </div>
        </li>
    </ul>
    <a class="social-list__link" href=https://github.com/danabosoanca/FlightAttendant>
        <i class="fab fa-github"></i>
    </a>
    <!--<button class="tr"><i class="fa fa-play"></i>Watch Demo</button>-->
</div>
<!--<div class="trailer">
    <video class="video" src="proiectBD.mp4" controls="true"></video>
    <span class="close">&times;</span>
</div>-->


<div class="portfolio__item2">
    <img src="images/proiect3.png" alt="" class="portfolio__img">
    <ul>
        <li>
            <div class="skills__data">
                <span class="skills__name">Html</span>
                <span class="skills__number">22.2%</span>
                <span class="skills__bar1 skills__html1"></span>
            </div>
        </li>
        <li>
            <div class="skills__data">
                <span class="skills__name">css</span>
                <span class="skills__number">20.2%</span>
                <span class="skills__bar1 skills__css1"></span>
            </div>
        </li>
        <li>
            <div class="skills__data">
                <span class="skills__name">php</span>
                <span class="skills__number">20.8%</span>
                <span class="skills__bar1 skills__php1"></span>
            </div>
        </li>
        <li>
            <div class="skills__data">
                <span class="skills__name">JavaScript</span>
                <span class="skills__number">11.1%</span>
                <span class="skills__bar1 skills__js1"></span>
            </div>
        </li>
    </ul>
    <a class="social-list__link" href=https://github.com/danabosoanca/SitePW>
        <i class="fab fa-github"></i>
    </a>
    <button class="tr"><i class="fa fa-play"></i>Watch Demos</button>
</div>
<div class="trailer">
    <video src="proiecte.mp4" controls="true"></video>-
    <span class="close">&times;</span>

</div>

<div class="portfolio__item">
    <img src="images/pro4.png" alt="" class="portfolio__img">
    <ul>
        <li>
            <div class="skills__data">
                <span class="skills__name">Java</span>
                <span class="skills__number">100%</span>
                <span class="skills__bar skills__java2"></span>
            </div>
        </li> 
    </ul>
    <a class="social-list__link" href=https://github.com/danabosoanca/PrezenteSport>
        <i class="fab fa-github"></i>
    </a>
    <!--<button class="tr"><i class="fa fa-play"></i>Watch Demo</button>-->
</div>
<!--<div class="trailer">
    <video  src="proiectBD.mp4" controls="true"></video>
    <span class="close">&times;</span>
</div>-->

    </section>

<!--<section class="contact" id="contact">
    <h2 class="section__title section__title--services">Contact</h2>
    
</section>-->
<section class="contact" id="contact">
    
    <div class="contact-right">
        <h1 class="contact-heading">Contact</h1>

        <form action=""method="POST">

            <div class="input-group">
                <input type="text" class="field" placeholder="Nume" required="" name="name">
                
            </div>
            <div class="input-group">
                <input type="email" class="field" placeholder="Adresa de email" required="" name="email">
                
            </div>
            <div class="input-group">
                <textarea class="field" placeholder="Mesaj" required="" name="message"></textarea>
                
            </div>
            <input type="submit" class="submit-btn" value="Send" name="submit" />
        </form>

    </div>
    </div>
    
</section>

    <!--Footer-->
    <footer class="footer">
        <h3>Bosoancă Maria-Daniela</h3>
        <h3>Facultatea de Automatică și Calculatoare, UPT</h3>
        <h4>dana.bosoanca99@gmail.com</h4>
        </a>
        <ul class="social-list">
            <li class="social-list__item">
                <a class="social-list__link" href=https://www.facebook.com/dana.bosoanca>
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li class="social-list__item">
                <a class="social-list__link" href=https://www.instagram.com/dana_bosoanca/>
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
            
            <li class="social-list__item">
                <a class="social-list__link" href=https://github.com/danabosoanca>
                    <i class="fab fa-github"></i>
                </a>
            </li>
        </ul>
    </footer>


<script>
    const button = document.querySelector(".tr");
    const close = document.querySelector(".close");
    const trailer = document.querySelector(".trailer");
    const video = document.querySelector("video");
    

    button.addEventListener('click', () => {
        trailer.style.visibility = "visible";
        trailer.style.opacity = 1;
    });

    close.addEventListener('click', () => {
        trailer.style.visibility = "hidden";
        trailer.style.opacity = 0;

        video.pause();
        video.currentTime = 0;
    });
</script>


   <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>


<script src="script.js"></script>
</body>

</html>