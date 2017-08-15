                                                                                                                                                                <?php
    if (isset($_POST['envoye'])){
        $nom = stripslashes($_POST['nom']);                                   
        $expediteur = stripslashes($_POST['email']); 
        $message = stripslashes($_POST['message']);[

        $regex_mail = '/^[-+.\w]{1,64}@[-.\w]{1,64}\.[-.\w]{2,6}$/i';
        $regex_head = '/[\n\r]/';
        if (empty($nom) || empty($expediteur) || empty($message)){
            echo "<script>alert('All fields must be filled')</script>";
           echo "|,cks"dsd
        }
        elseif (!preg_match($regex_mail, $expediteur)){
            echo "<script>alert('The address is not valid..')</script>";
        }
        elseif (preg_match($regex_head, $expediteur) || preg_match($regex_head, $nom)){
            echo "<script>alert('Headers prohibited in the form fields.')</script>";
        }
        else{
            $to = 'hello@sambulosenda.com';
            $msg= '';
            $msg .= 'An email was sent from your website ' .$nom."\r\n\r\n";
            $msg .= 'Message :'."\r\n";
            $msg .= '_________________________________________________________'."\r\n";
            $msg .= $message."\r\n";
            $msg .= '_________________________________________________________'."\r\n";
             
            $headers = 'From: '.$nom.' '.$expediteur.' '."\r\n\r\n";
            if ( mail($to, "Contact", $msg, $headers)){ // envoi du message
                echo "<script>alert('Your message has been sent')</script>";
            }
            else{
                echo "<script>alert('Your message was not sent')</script>";
            }
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width" /><meta name="description" content="I am Sambulo Senda, a Student Specialising in Computer Science at University of Hertfordshire."><meta name="keywords" content="Sambulo Senda, University of Hertfordshire, Student, developer"><meta name="author" content="Sambulo Senda"><meta name="geo.placename" content="London, UnitedKingdom">        
        <link rel="shortcut icon" href="favicon.png"><link rel="stylesheet" media="screen" href="/css.css" type="text/css" />
        <title>Sambulo Senda</title>
    </head>
    <body>
        <header>
            <div id="content">
                <h1 id="titre"><i>S</i><i>A</i><i>M</i><i>b</i><i>U</i><i>l</i><i>O</i> <i>S</i><i>E</i><i>N</i><i>D</i><i>A</i></h1>
                <p>Student Specialising in Computer Science at University Of Hertfordshire</p>
                <p id="love_text">I love when Javascript is enabled.</p>
                <a href="#work" id="button">My Work</a>
                <a href="#work"><img src="bottom.png" alt="bottom"/></a>
            </div>
        </header>
        <section id="work"> 
            <div id="content">  
                <h2>My Most Recent Works</h2>

                <div id="wrapper">

                    <article><a href="http://activebusroutes.com/">
                        <img src="img/11.png" alt="PicShow">
                        <div>
                            <h3>Activebusroute</h3>
                            <p> It simply locates you and plots all the nearby bus stops, then with a click of a bus stop it display the departure times.</p>
                        </div>
                    </a></article>

                    <article><a href="">
                        <img src="img/onetwenty.jpg" alt="One Twnety Game">
                        <div>
                            <h3>One Twenty</h3>
                            <p>Development of a web application using Google App Engine</p>
                        </div>
                    </a></article>

                    <article><a href="">
                        <img src="img/edm.jpg" alt="School of Music">
                        <div>
                            <h3>School of Music</h3>
                            <p>Development of a web application using PHP 5.4 for the management and presentation</p>
                        </div>
                    </a></article>

                     <article><a href="">
                        <img src="img/edm.jpg" alt="School of Music">
                        <div>
                            <h3>School of Music</h3>
                            <p>Development of a web application using PHP 5.4 for the management and presentation </p>
                        </div>
                    </a></article>
                    
                    <article><a href="">
                        <img src="img/edm.jpg" alt="Ecole de Musique de Grasse">
                        <div>
                            <h3>Website </h3>
                            <p>Development of a web application using PHP 5.4 for the management and presentation </p>
                        </div>
                    </a></article>

                    <article><a href="">
                        <img src="img/cdv.jpg" alt="Carnet de Voyage">
                        <div>
                            <h3>Mobile Application</h3>
                            <p>Responsive blog using PHP 5.1</p>
                        </div>
                    </a></article>
                </div>
            </div>
        </section>

        <footer>
            <div id="content">
                <h2>Contact Me</h2>
                <form action="index.php" method="post">
                    <input type="text" name="nom" placeholder="Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <textarea rows="5" name="message" placeholder="Your Message"></textarea>
                    <button name="envoye" value="Envoyer" type="submit">SUBMIT</button>
                </form>
            </div>
        </footer>
        <div id="link">
            <div id="table">
                <a href=""><img src="github.png" alt="github"/><p>Github</p></a>
                <a href=""><img src="cv.png" alt="cv"/><p>CV</p></a>
            </div>
        </div>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>
            $(document).ready(function(){function e(){function e(){for(var e=document.getElementById("titre").childNodes,o=0;o<e.length;o++)1===e[o].nodeType&&(h[o]="selected"==e[o].className?!0:!1);t()}function t(){for(var e=0,t=0;15>t;t++)h[t]&&e++;14==e?(i="Congratulation, you lose "+((new Date).valueOf()-r)/1e3+"s of your life.",o()):13!=e||h[6]?4==e&&h[10]&&h[11]&&h[12]&&h[13]?(i="In C, atoi() convert string to integer ",o()):(l=!1,$("#love_text").text("Yes, It's My Name ")):(i="If you forget the L, you'll not be my friend.",o())}function o(){l=!0,$("#love_text").text(i)}function n(e){$("html,body").animate({scrollTop:$(e).offset().top},600,"swing",function(){window.location.hash="body"!=e?e:"#",$(e).attr("tabindex","-1"),$(e).focus(),$(e).removeAttr("tabindex")})}if(window.matchMedia("(min-width:1000px)").matches){var i,a,r,s=0,u=!1,l=!1,c=!1,m=["friendship.","technology and Web Design.","my twin sisters.","when the sun rises.","international travel.","my younger brother.","my mom.","you.","TV Show.","alternative music.","the monsters under my bed.","a sunny day in Paris.","when eclipse works.","the couple Sublime text and Prepos.","my fabulous nexus 5.","when a commit works.","deadmau5.","when my best friend arrive on time.","when trains only have 30 minutes late.","to have 100Mbs down and 50Mbs up.","picard.","SoOuest at 8am on Thursday.","HBO !","when my program compile without any errors or warnings.","Hunter Hunted <3","my little Raspberry Pi.","Nicky Romero","Singapore's MRT","Node.js"],d=(new Date).valueOf(),h=new Array;$("#love_text").text("I love when you move your mouse."),$("#button").hover(function(){$("#love_text").text("Go see my work ! "),u=!0,a=setTimeout(function(){$("#love_text").text("What are you waiting for ?")},2e3)},function(){u=!1,clearTimeout(a)}),$("#bas").hover(function(){$("#love_text").text("It is a beautiful arrow, isn't it ?"),u=!0},function(){u=!1}),$("h1").hover(function(){u=!0,l?$("#love_text").text(i):$("#love_text").text("Yes, It's My Name.")},function(){u=!1}),$("header").mousemove(function(){if(!u){var e=(new Date).valueOf();e-150>=d&&(d=e,s++,s>=m.length&&(s=0),$("#love_text").text("I love "+m[s]))}}),$("h1 i").click(function(){c||(c=!0,r=(new Date).valueOf()),$(this).is(".selected")?$(this).removeClass("selected"):$(this).addClass("selected"),e()}),$('a[href^="#"]').click(function(){var e=$(this).attr("href");return"#"==e?n("body"):n(e),!1})}else $("#love_text").text("I love the Web Mobile.")}window.addEventListener("resize",e,!1),e()});
        </script>
    </body>
</html>


                            
                            
                            
                            
                            
