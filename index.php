<?php

include('connexion/pdo.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/desc.css">
    <link rel="stylesheet" href="public/css/projets.css">
    <link rel="stylesheet" href="public/css/anime.css">
    <link rel="stylesheet" href="public/css/modal.css">
    <link rel="stylesheet" href="public/css/contact.css">
    <link rel="stylesheet" href="public/css/media.css">
    <script src="https://kit.fontawesome.com/ce5f912fe9.js" crossorigin="anonymous"></script>

    <title>Charfi Mohamed - Portfolio</title>

</head>

<body>
    <div class="multiplehr" id="hrb">
        <hr class="hrfirst" id="hrf">
        <hr class="hrsecond" id="hrs">
        <hr class="hrthird" id="hrt">
    </div>

    <div id="none">
    <i class="menu fa-solid fa-bars fa-2x" id="menu"></i>
    </div>

    <div id="backtoup"></div>
    <i class="fa-solid fa-circle-up" id="backtotop"></i>

    <header id="uphome">

        <div class="upblock" id="newnav">
            <i class="fa-solid fa-circle-xmark fa-2x" id="closenav"></i>
            <div class="logo">
                <img src="public/img/mremove.png" alt="logo">
            </div>

            <div class="uptxt">
                <div id="home">
                    <span class="minicircle"></span>
                    <span>Accueil</span>
                </div>
                <div id="descp">
                    <span class="minicircle2"></span>
                    <span>Description</span>
                </div>
                <div id="work">
                    <span class="minicircle3"></span>
                    <span>Projets</span>
                </div>
                <div id="contact">
                    <span class="minicircle4"></span>
                    <span>Contact</span>
                </div>
            </div>

        </div>
        <div class="head">
            <h1>Bonjour.</h1>
            <p>
                Bienvenue, je suis un <strong>designer web</strong> vivant en France.
                Je vous laisse découvrir mon <strong>portfolio</strong>, n'hésitez pas à me <span onclick="Copy()" class="btn-contact">contacter</span> si
                vous le souhaitez.
            </p>
        </div>

    </header>

    <main>

        <div class="description" id="desc">
            <div class="titledesc">
                <h1 id="titled">Description</h1>
                <h2>Charfi Mohamed, 29ans</h2>
            </div>
            <div class="parcour">
                <h2>Parcours</h2>
                <p>Diplomé en développement web fullstack de l'école <strong>Simplon</strong> en 2019, je me suis pris de passion pour les lignes de codes.</p>
                <p>Par la suite, je me suis lancé en <strong>Freelance</strong> et j'ai continué d'apprendre en autodidacte.</p>
                <p>J'ai souhaité approfondir mes connaissances en design et en expérience utilisateur, j'ai donc entrepris une formation en <strong>UI designer</strong>, en février 2022 (en cours).</p>
            </div>
            <div class="perso">
                <h2>Personnalité</h2>
                <p>Je suis un personne <strong>déterminée</strong>, qui va au bout de ses projets.</p>
                <p>Le <strong>respect</strong>, <strong>la ponctualité</strong> et <strong>le travail</strong> sont mes maîtres-mots.</p>
                <p>La <strong>créativité</strong> est pour moi primordiale.</p>
            </div>
            <div class="skillstitle">
                <h2>Compétences</h2>
            </div>
            <div class="skills">
                <div class="blockskills">

                    <div class="blocklists">
                        <div class="imglists">
                            <img src="public/img/adobe.png" alt="adobe">
                        </div>
                        <div>
                            <h3>Suite Adobe</h3>
                            <ul class="lists">
                                <li>Illustrator</li>
                                <li>Photoshop</li>
                            </ul>
                        </div>
                    </div>

                    <div class="blocklists">
                        <div class="imglists">
                            <img src="public/img/design.png" alt="design web">
                        </div>
                        <div>
                            <h3>Design web</h3>
                            <ul class="lists">
                                <li>Html/Css</li>
                                <li>Javascript</li>
                            </ul>
                        </div>
                    </div>

                    <div class="blocklists">
                        <div class="imglists">
                            <img src="public/img/coding.png" alt="back-end">
                        </div>
                        <div>
                            <h3>Back-end</h3>
                            <ul class="lists">
                                <li>Php</li>
                                <li>MySql</li>
                            </ul>
                        </div>
                    </div>

                    <div class="blocklists">
                        <div class="imglists">
                            <img src="public/img/framework.png" alt="framework">
                        </div>
                        <div>
                            <h3>Framework</h3>
                            <ul class="lists">
                                <li>Symfony</li>
                            </ul>
                        </div>
                    </div>

                    <div class="blocklists">
                        <div class="imglists">
                            <img src="public/img/prototyping.png" alt="prototype">
                        </div>
                        <div>
                            <h3>Prototypage</h3>
                            <ul class="lists">
                                <li>Figma</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="projets">
            <div class="titleproj" id="titlep">
                <h1>Projets</h1>
            </div>
            <!-- Requête liste catégories  -->
            <div class="blockprojets">
                <div class="categories">
                    <?php

                    include('sql/select.php');

                    while ($donnees = $reqCategories->fetch()) {
                        $name = $donnees['name'];

                    ?>
                        <h3 id="<?php echo $donnees['id'] ?>" class="categorielist"><?php echo $name ?></h3>
                    <?php
                    }
                    ?>
                </div>
                <div class="allp" id="bp">
                    <?php

                    include('sql/select.php');

                    while ($d = $reqAll->fetch()) {

                    ?>
                        <div class="cardprojets" id="<?php echo $d['id'] ?>">
                            <div class="cardimg">
                                <img src="public/<?php echo $d['img'] ?>" alt="image projet" />
                                <div class="cardtitle">
                                    <div class="cardtitlecontent">
                                        <h2><?php echo $d['title'] ?></h2>
                                        <span><?php echo $d['date'] ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="contact" id="contactblock">
            <form id="formContact">
                <h2>Formulaire de contact</h2>
                <label for="name"><i class="fa-solid fa-user-astronaut"></i> Veuillez taper votre nom</label>
                <span class="errorForm" id="errorName"></span>
                <input type="text" value="" name="name" id="name" placeholder="Exemple: Roger Dupont">
                <label for="mail"><i class="fa-solid fa-at"></i> Veuillez taper votre email</label>
                <span class="errorForm" id="errorMail"></span>
                <input type="email" value="" name="mail" id="mail" placeholder="Exemple: rogerdupont@mail.com">
                <label for="msg"><i class="fa-solid fa-comments"></i> Veuillez taper votre message</label>
                <span class="errorForm" id="errorMessage"></span>
                <textarea name="message" value="" id="msg" cols="30" rows="10" placeholder="Votre message" maxlength="150" size="200"></textarea>
                <input type="submit" name="submit" id="btnSubmit" class="btn" value="Valider le formulaire">
                <div id="messForm"></div>
            </form>
        </div>
    </main>

    <div class="input">
        <input type="text" value="charfm197@gmail.com" name="copy" id="mail" class="offscreen" aria-hidden="true">
    </div>
    <div class="cardmess" id="mess">
        <div class="imgcheck">
            <img src="public/img/check.png" alt="check">
        </div>
        <div>
            <p>Vous avez copié l'adresse email.</p>
            <p>Merci, à bientôt !</p>
        </div>
    </div>

    <div id="appendmodal"></div>

    <footer>
        <p>Charfi Mohamed, designer Web. ©Copyright 2022.</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="public/js/index.js"></script>
    <script src="public/js/ajax.js"></script>
    <script src="public/js/form.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script>
    <script type="text/javascript">
        (function() {
            emailjs.init("user_776lhXQAdgfWEESY5clCH");
        })();
    </script>

    <script>
        function Copy() {
            var copyText = document.getElementById("mail");
            copyText.select();
            document.execCommand("copy");
            document.getElementById('mess').style.display = 'block';
            setTimeout(() => {
                document.getElementById('mess').style.display = 'none';
                document.getElementById('mess').style.removeProperty('style')
            }, 5000);
        }
    </script>
</body>

</html>