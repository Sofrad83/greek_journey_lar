<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- color of address bar in mobile browser -->
  <meta name="theme-color" content="#2B2B35">
  <!-- favicon  -->
  <link rel="shortcut icon" href="img/thumbnail.ico" type="image/x-icon">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/plugins/bootstrap.min.css">
  <!-- font awesome css -->
  <link rel="stylesheet" href="css/plugins/font-awesome.min.css">
  <!-- swiper css -->
  <link rel="stylesheet" href="css/plugins/swiper.min.css">
  <!-- fancybox css -->
  <link rel="stylesheet" href="css/plugins/fancybox.min.css">
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css">

  <title>Sofiane RADJAH</title>
</head>

<body>

  <!-- app -->
  <div class="art-app">

    <!-- mobile top bar -->
    <div class="art-mobile-top-bar"></div>

    <!-- app wrapper -->
    <div class="art-app-wrapper">

      <!-- app container end -->
      <div class="art-app-container">

        <!-- info bar -->
        <div class="art-info-bar">

          <!-- menu bar frame -->
          <div class="art-info-bar-frame">

            <!-- info bar header -->
            <div class="art-info-bar-header">
              <!-- info bar button -->
              <a class="art-info-bar-btn" href="#.">
                <!-- icon -->
                <i class="fas fa-ellipsis-v"></i>
              </a>
              <!-- info bar button end -->
            </div>
            <!-- info bar header end -->

            <!-- info bar header -->
            <div class="art-header">
              <!-- avatar -->
              <div class="art-avatar">
                <a data-fancybox="avatar" href="img/face-1.jpg" class="art-avatar-curtain">
                  <img src="img/face-1.jpg" alt="avatar">
                  <i class="fas fa-expand"></i>
                </a>
                <!-- available -->
                <div class="art-lamp-light">
                  <!-- add class 'art-not-available' if not available-->
                  <div class="art-available-lamp"></div>
                </div>
              </div>
              <!-- avatar end -->
              <!-- name -->
              <h5 class="art-name mb-10"><a href="/home.html">Sofiane RADJAH</a></h5>
              <!-- post -->
              <div class="art-sm-text">Ingénieur multimédia - Spécialisé Développement Web</div>
            </div>
            <!-- info bar header end -->

            <!-- scroll frame -->
            <div id="scrollbar2" class="art-scroll-frame">

              <!-- info bar about -->
              <div class="art-table p-15-15">
                <!-- about text -->
                <ul>
                  <!-- country -->
                  <li>
                    <h6>Pays:</h6><span>France</span>
                  </li>
                  <!-- city -->
                  <li>
                    <h6>Ville:</h6><span>Toulon</span>
                  </li>
                  <!-- age -->
                  <li>
                    <h6>Age:</h6>
                    <span>
                      <?php
                      // Date du jour
                      $dateJour = new DateTime();
                      // Date de référence (03 11 2000)
                      $dateReference = DateTime::createFromFormat('d m Y', '03 11 2000');
                      // Calcul de la différence
                      $diff = $dateJour->diff($dateReference);
                      // Nombre d'années de différence
                      $age = $diff->y;
                      // Affichage du résultat
                      echo $age;
                      ?>
                    </span>
                  </li>
                </ul>
              </div>
              <!-- info bar about end -->

              <!-- divider -->
              <div class="art-ls-divider"></div>

              <!-- links frame -->
              <div class="art-links-frame p-15-15">

                <!-- download cv button -->
                <a href="files/cv.pdf" class="art-link" download>Télécharger mon cv <i class="fas fa-download"></i></a>

              </div>
              <!-- links frame end -->

              <!-- divider -->
              <div class="art-ls-divider"></div>

              <!-- language skills -->
              <div class="art-lang-skills p-30-15">

                <!-- skill -->
                <div class="art-lang-skills-item w-50">
                  <div id="circleprog1" class="art-cirkle-progress"></div>
                  <!-- title -->
                  <h6>Français</h6>
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-lang-skills-item w-50">
                  <div id="circleprog2" class="art-cirkle-progress"></div>
                  <!-- title -->
                  <h6>Anglais <br> Niv B2 <br> TOEIC : 835</h6>
                </div>
                <!-- skill end -->

                <!-- skill -->
                <!-- <div class="art-lang-skills-item"> -->
                  <!-- <div id="circleprog3" class="art-cirkle-progress"></div> -->
                  <!-- title -->
                  <!-- <h6>Italien</h6> -->
                <!-- </div> -->
                <!-- skill end -->

              </div>
              <!-- language skills end -->

              <!-- divider -->
              <div class="art-ls-divider"></div>

              <!-- hard skills -->
              <div class="art-hard-skills p-30-15">

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>PHP</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog1"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>LARAVEL</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog2"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>Symfony</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog3"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>HTML</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog4"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>CSS</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog5"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>Javascript</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog6"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>jQuery</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog7"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>C# (Unity)</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog8"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>Flutter</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog11"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>C++</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog9"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>Python</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog10"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>JAVA</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog12"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

              </div>
              <!-- language skills end -->

              <!-- divider -->
              <div class="art-ls-divider"></div>

              <!-- knowledge list -->
              <ul class="art-knowledge-list p-15-0">
                <li>Bases de données (MySQL, PLSQL, PostgreSQL, SQLite)</li>
                <li>Bootstrap</li>
                <li>Twig, Blade</li>
                <li>GIT, Github, Gitlab, Bitbucket</li>
              </ul>
              <!-- knowledge list end -->
            </div>
            <!-- scroll frame end -->

            <!-- sidebar social -->
            <div class="art-ls-social">
              <!-- social link -->
              <a href="#." target="_blank"><i class="far fa-circle"></i></a>
              <!-- social link -->
              <a href="#." target="_blank"><i class="far fa-circle"></i></a>
              <!-- social link -->
              <a href="#." target="_blank"><i class="far fa-circle"></i></a>
              <!-- social link -->
              <a href="#." target="_blank"><i class="far fa-circle"></i></a>
              <!-- social link -->
              <a href="#." target="_blank"><i class="far fa-circle"></i></a>
            </div>
            <!-- sidebar social end -->

          </div>
          <!-- menu bar frame end -->

        </div>
        <!-- info bar end -->

        <!-- content -->
        <div class="art-content">

          <!-- curtain -->
          <div class="art-curtain"></div>

          <!-- top background -->
          <div class="art-top-bg" style="background-image: url(img/bg.jpg)">
            <!-- overlay -->
            <div class="art-top-bg-overlay"></div>
            <!-- overlay end -->
          </div>
          <!-- top background end -->

          <!-- swup container -->
          <div class="transition-fade" id="swup">

            <!-- scroll frame -->
            <div id="scrollbar" class="art-scroll-frame">

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row p-60-0 p-lg-30-0 p-md-15-0">
                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- banner -->
                    <div class="art-a art-banner" style="background-image: url(img/bg.jpg)">
                      <!-- banner back -->
                      <div class="art-banner-back"></div>
                      <!-- banner dec -->
                      <div class="art-banner-dec"></div>
                      <!-- banner overlay -->
                      <div class="art-banner-overlay">
                        <!-- main title -->
                        <div class="art-banner-title">
                          <!-- title -->
                          <h1 class="mb-15">Découvrez mes <br>Projets!</h1>
                          <!-- suptitle -->
                          <div class="art-lg-text art-code mb-25">&lt;<i>code</i>&gt; Je réalise <span class="txt-rotate" data-period="2000"
                              data-rotate='[ "des projets Web (PHP, HTML, CSS, JS)", "des simulations 3D ou des jeux vidéos (C# unity)", "des applications Android (Flutter ou JAVA)", "le projet de vos rêves ;) " ]'></span>&lt;/<i>code</i>&gt;</div>
                          <div class="art-buttons-frame">
                            <!-- button -->
                            <a href="/portfolio-2-col.php" class="art-btn art-btn-md"><span>En savoir plus</span></a>
                          </div>
                        </div>
                        <!-- main title end -->
                        <!-- photo -->
                        <!-- <img src="img/face-2.png" class="art-banner-photo" alt="Sofiane RADJAH"> -->
                      </div>
                      <!-- banner overlay end -->
                    </div>
                    <!-- banner end -->

                  </div>
                  <!-- col end -->
                </div>
                <!-- row end -->

              </div>
              <!-- container end -->

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row p-30-0">

                  <!-- col -->
                  <div class="col-md-3 col-6">

                    <!-- couner frame -->
                    <div class="art-counter-frame">
                      <!-- counter -->
                      <div class="art-counter-box">
                        <!-- counter number -->
                        <span class="art-counter">
                        <?php
                        // Date du jour
                        $dateJour = new DateTime();
                        // Date de référence (03 11 2000)
                        $dateReference = DateTime::createFromFormat('d m Y', '01 09 2018');
                        // Calcul de la différence
                        $diff = $dateJour->diff($dateReference);
                        // Nombre d'années de différence
                        $age = $diff->y;
                        // Affichage du résultat
                        echo $age;
                        ?>
                        </span><span class="art-counter-plus">+</span>
                      </div>
                      <!-- counter end -->
                      <!-- title -->
                      <h6>Années d'étude en informatique</h6>
                    </div>
                    <!-- couner frame end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-md-3 col-6">

                    <!-- couner frame -->
                    <div class="art-counter-frame">
                      <!-- counter -->
                      <div class="art-counter-box">
                        <!-- counter number -->
                        <span class="art-counter">3</span><span class="art-counter-plus">+</span>
                      </div>
                      <!-- counter end -->
                      <!-- title -->
                      <h6>Années d'expérience professionnelles concrètes</h6>
                    </div>
                    <!-- couner frame end -->

                  </div>
                  <!-- col end -->

                </div>
                <!-- row end -->

              </div>
              <!-- container end -->

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row">

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- section title -->
                    <div class="art-section-title">
                      <!-- title frame -->
                      <div class="art-title-frame">
                        <!-- title -->
                        <h4>Mes Compétences</h4>
                      </div>
                      <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-4 col-md-6">

                    <!-- service -->
                    <div class="art-a art-service-icon-box">
                      <!-- service content -->
                      <div class="art-service-ib-content">
                        <!-- title -->
                        <h5 class="mb-15">Développement Web</h5>
                        <!-- text -->
                        <div class="mb-15">Le développement Web est le domaine dans lequel je suis le plus à l'aise, je pratique depuis presque cinq années et je pense pouvoir réaliser tout types de projets. Je suis à l'aise avec la plupart des langages de programmation Web notamment avec PHP, HTML, CSS et Javascript. J'ai également l'habitude d'utiliser des frameworks de développement comme Symfony ou LARAVEL pour PHP ou bien jQuery pour JS. Je m'adapte facilement et l'apprentissage de nouvelles technologies ne me fait pas peur, au contraire. J'ai commencé en parallèle à me former à Vue.js et React.js</div>
                      </div>
                      <!-- service content end -->
                    </div>
                    <!-- service end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-4 col-md-6">

                    <!-- service -->
                    <div class="art-a art-service-icon-box">
                      <!-- service content -->
                      <div class="art-service-ib-content">
                        <!-- title -->
                        <h5 class="mb-15">Programmation orientée objet</h5>
                        <!-- text -->
                        <div class="mb-15">
                          J'utilise la programmation orientée objet (POO) dans le développement Web mais pas seulement, je l'utilise également lors du développement d'applications mobile ou bien de logiciels.
                          Je possède une bonne maîtrise des différents langage de POO. C# pour le développement de simulation 3D ou de jeux vidéo avec le moteur de jeu Unity. C++ pour la création de logiciel. JAVA notamment pour le développement d'application Android ou bien encore Flutter pour le même type de projet. J'aime découvrir de nouveaux langages de programmation, ce n'est donc pas un obstacle pour moi de me former sur de nouvelles technologies.
                        </div>
                      </div>
                      <!-- service content end -->
                    </div>
                    <!-- service end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-4 col-md-6">

                    <!-- service -->
                    <div class="art-a art-service-icon-box">
                      <!-- service content -->
                      <div class="art-service-ib-content">
                        <!-- title -->
                        <h5 class="mb-15">Gestion de projet</h5>
                        <!-- text -->
                        <div class="mb-15">
                          Durant mon cursus d'ingénieur, j'ai pu acquérir un solide savoir théorique en gestion de projet avec notamment l'étude des méthodologies agiles, scrum ou bien encore des cycles en V. Cependant je n'ai pas pu les appliquer concrètement en entreprise à cause du fait que j'ai uniquement travaillé dans des petites structures (PME) avec de très petits effectifs. C'est pour cela que je suis à la recherche d'un contrat dans un grand groupe qui possède des processus de gestion de projet clairs et bien établis afin de pouvoir monter en compétences sur ce point là et enfin pouvoir confronter et remettre en question les connaissances que j'ai pu acquérir durant ma formation.
                         </div>
                      </div>
                      <!-- service content end -->
                    </div>
                    <!-- service end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-4 col-md-6">

                    <!-- service -->
                    <div class="art-a art-service-icon-box">
                      <!-- service content -->
                      <div class="art-service-ib-content">
                        <!-- title -->
                        <h5 class="mb-15">Travail d'équipe</h5>
                        <!-- text -->
                        <div class="mb-15">
                          J'ai travaillé sur la plupart de mes projets en équipe, je sais donner le meilleur de moi-même à l'équipe avec laquelle je travaille.
                          Le travail d'équipe n'est pas une difficulté pour moi, je sais m'adapter aux différents collaborateurs que je rencontre pour travailler dans les meilleures conditions
                          possible. C'est l'aspect de mon métier que je trouve le plus important, avec la bonne équipe et la bonne cohésion, la réussite de n'importe quel projet n'est qu'une question de temps.
                         </div>
                      </div>
                      <!-- service content end -->
                    </div>
                    <!-- service end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-4 col-md-6">

                    <!-- service -->
                    <div class="art-a art-service-icon-box">
                      <!-- service content -->
                      <div class="art-service-ib-content">
                        <!-- title -->
                        <h5 class="mb-15">Base de données</h5>
                        <!-- text -->
                        <div class="mb-15">
                          Je suis à l'aise avec la modélisation et la mise en place de base de données plus ou moins complexes. Je sais analyser les besoins d'un projet et proposer ainsi la meilleure modélisation pour la gestion des différentes données qui seront en jeu. Je possède une bonne maîtrise de MySQL et connaît également d'autres alternatives tels que PostgreSQL ou encore SQLite pour les bases de données local sous Android.
                        </div>
                      </div>
                      <!-- service content end -->
                    </div>
                    <!-- service end -->

                  </div>
                  <!-- col end -->
                  <!-- col -->
                  <div class="col-lg-4 col-md-6">

                    <!-- service -->
                    <div class="art-a art-service-icon-box">
                      <!-- service content -->
                      <div class="art-service-ib-content">
                        <!-- title -->
                        <h5 class="mb-15">Gestion de version</h5>
                        <!-- text -->
                        <div class="mb-15">
                          J'ai l'habitude de toujours versionner les projets que je réalise, même mes projets personnels. Je suis familier avec l'utilisation de Git, GitHub et GitLab. Il m'est également arrivé d'utiliser BitBucket pour certains projets notamment avec le logiciel SourceTree.
                        </div>
                      </div>
                      <!-- service content end -->
                    </div>
                    <!-- service end -->

                  </div>
                  <!-- col end -->


                </div>
                <!-- row end -->

              </div>
              <!-- container end -->

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row">

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- section title -->
                    <div class="art-section-title">
                      <!-- title frame -->
                      <div class="art-title-frame">
                        <!-- title -->
                        <h4>Mon parcours professionnel</h4>
                      </div>
                      <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- slider container -->
                    <div class="swiper-container art-testimonial-slider1" style="overflow: visible">
                      <!-- slider wrapper -->
                      <div class="swiper-wrapper">
                        <!-- slide -->
                        <div class="swiper-slide">

                          <!-- testimonial -->
                          <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                              <!-- photo -->
                              <img class="art-testimonial-face" src="img/testimonials/megara.png" alt="face">
                              <!-- name -->
                              <br><br>
                              <h5>Alternant développeur Web pour Megara (Berceau Magique)</h5>
                              <div class="art-el-suptitle mb-15">2020 - 2023</div>
                              <!-- text -->
                              <div class="mb-15">
                                Je termine mon alternance d'ingénieur informatique
                                chez Megara (Berceau Magique) en août 2023, je m'occupe de la maintenance et de la création
                                de nouvelles fonctionnalités pour la gestion de leur site web berceaumagique.com. J'y travaille en tant que développeur Web
                                notamment avec le framework LARAVEL (PHP).
                            </div>
                            </div>
                            <!-- testimonial body end -->
                            <!-- testimonial footer -->
                            <div class="art-testimonial-footer">
                              <div class="art-left-side">
                              </div>
                              <div class="art-right-side">

                              </div>
                            </div>
                            <!-- testimonial footer end -->
                          </div>
                          <!-- testimonial end -->

                        </div>
                        <!-- slide end -->

                        <!-- slide -->
                        <div class="swiper-slide">

                          <!-- testimonial -->
                          <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                              <!-- photo -->
                              <img class="art-testimonial-face" src="img/testimonials/pdm.png" alt="face">
                              <!-- name -->
                              <br><br>
                              <h5>Second stage pour les Presses Du Midi</h5>
                              <div class="art-el-suptitle mb-15">Janvier 2020</div>
                              <!-- text -->
                              <div class="mb-15">
                                Dans le cadre du cursus de deuxième année du 
                                BTS SIO j'ai effectué un nouveau stage au sein des
                                Presses du Midi. L'objectif a été d'améliorer l'application
                                mis en oeuvre l'année précédente afin de soliciter les nouvelles
                                compétences que j'ai pu acquérir. J'ai pu utiliser le framework Symfony (PHP) et donc
                                me former sur cette technologie.
                            </div>
                            </div>
                            <!-- testimonial body end -->
                            <!-- testimonial footer -->
                            <div class="art-testimonial-footer">
                              <div class="art-left-side">
                              </div>
                              <div class="art-right-side">

                              </div>
                            </div>
                            <!-- testimonial footer end -->
                          </div>
                          <!-- testimonial end -->

                        </div>
                        <!-- slide end -->

                        <!-- slide -->
                        <div class="swiper-slide">

                          <!-- testimonial -->
                          <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                              <!-- photo -->
                              <img class="art-testimonial-face" src="img/testimonials/proman.png" alt="face">
                              <!-- name -->
                              <br><br>
                              <h5>Travail saisonnier en tant qu'intérimaire (Proman)</h5>
                              <div class="art-el-suptitle mb-15">Juillet 2019</div>
                              <!-- text -->
                              <div class="mb-15">
                                J'ai eu l'occasion de travailler en tant qu'intérimaire 
                                dans le BTP sur un chantier dirigé par le Groupe Murello Construction.
                                Cette expérience m'a permis de réaliser la difficulté des travaux dans ce secteur
                                et m'a fait prendre conscience de la valeur des études que je suivais à ce moment.
                            </div>
                            </div>
                            <!-- testimonial body end -->
                            <!-- testimonial footer -->
                            <div class="art-testimonial-footer">
                              <div class="art-left-side">
                              </div>
                              <div class="art-right-side">

                              </div>
                            </div>
                            <!-- testimonial footer end -->
                          </div>
                          <!-- testimonial end -->

                        </div>
                        <!-- slide end -->

                        <!-- slide -->
                        <div class="swiper-slide">

                          <!-- testimonial -->
                          <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                              <!-- photo -->
                              <img class="art-testimonial-face" src="img/testimonials/pdm.png" alt="face">
                              <!-- name -->
                              <br><br>
                              <h5>Stage pour les Presses Du Midi</h5>
                              <div class="art-el-suptitle mb-15">Mai 2019</div>
                              <!-- text -->
                              <div class="mb-15">
                                Dans le cadre du cursus de première année du 
                                BTS SIO j'ai dû effectuer un stage d'une durée
                                de 6 semaines en entreprise afin de mettre en oeuvre
                                les différentes compétences acquises en classe. J'ai réalisé une application web
                                qui avait pour but la gestion informatisé de la librairie. L'application a été développée entièrement
                                en PHP from Scratch.
                            </div>
                            </div>
                            <!-- testimonial body end -->
                            <!-- testimonial footer -->
                            <div class="art-testimonial-footer">
                              <div class="art-left-side">
                              </div>
                              <div class="art-right-side">

                              </div>
                            </div>
                            <!-- testimonial footer end -->
                          </div>
                          <!-- testimonial end -->

                        </div>
                        <!-- slide end -->

                      </div>
                      <!-- slider wrapper end -->
                    </div>
                    <!-- slider container end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- slider navigation -->
                    <div class="art-slider-navigation">

                      <!-- left side -->
                      <div class="art-sn-left">

                        <!-- slider pagination -->
                        <div class="swiper-pagination1"></div>

                      </div>
                      <!-- left side end -->

                      <!-- right side -->
                      <div class="art-sn-right">

                        <!-- slider navigation -->
                        <div class="art-slider-nav-frame">
                          <!-- prev -->
                          <div class="art-slider-nav art-testi-swiper-prev1"><i class="fas fa-chevron-left"></i></div>
                          <!-- next -->
                          <div class="art-slider-nav art-testi-swiper-next1"><i class="fas fa-chevron-right"></i></div>
                        </div>
                        <!-- slider navigation -->

                      </div>
                      <!-- right side end -->

                    </div>
                    <!-- slider navigation end -->

                  </div>
                  <!-- col end -->

                </div>
                <!-- row end -->

              </div>
              <!-- container end -->
              <br>
              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row">

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- section title -->
                    <div class="art-section-title">
                      <!-- title frame -->
                      <div class="art-title-frame">
                        <!-- title -->
                        <h4>Mon parcours scolaire</h4>
                      </div>
                      <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- slider container -->
                    <div class="swiper-container art-testimonial-slider2" style="overflow: visible">
                      <!-- slider wrapper -->
                      <div class="swiper-wrapper">
                        <!-- slide -->
                        <div class="swiper-slide">

                          <!-- testimonial -->
                          <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                              <!-- photo -->
                              <img class="art-testimonial-face" src="img/testimonials/cnam.png" alt="face">
                              <!-- name -->
                              <br><br>
                              <h5>Apprenti Ingénieur Sciences et Technologie des Médias Numériques</h5>
                              <div class="art-el-suptitle mb-15">2020 - 2023</div>
                              <!-- text -->
                              <div class="mb-15">
                                Conservatoire National des Arts et Métiers
                            </div>
                            </div>
                            <!-- testimonial body end -->
                            <!-- testimonial footer -->
                            <div class="art-testimonial-footer">
                              <div class="art-left-side">
                              </div>
                              <div class="art-right-side">

                              </div>
                            </div>
                            <!-- testimonial footer end -->
                          </div>
                          <!-- testimonial end -->

                        </div>
                        <!-- slide end -->

                        <!-- slide -->
                        <div class="swiper-slide">

                          <!-- testimonial -->
                          <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                              <!-- photo -->
                              <img class="art-testimonial-face" src="img/testimonials/bona.png" alt="face">
                              <!-- name -->
                              <br><br>
                              <h5>BTS Services Informatiques aux Organisations option SLAM</h5>
                              <div class="art-el-suptitle mb-15">2018 - 2020</div>
                              <!-- text -->
                              <div class="mb-15">
                                Lycée Bonaparte
                            </div>
                            </div>
                            <!-- testimonial body end -->
                            <!-- testimonial footer -->
                            <div class="art-testimonial-footer">
                              <div class="art-left-side">
                              </div>
                              <div class="art-right-side">

                              </div>
                            </div>
                            <!-- testimonial footer end -->
                          </div>
                          <!-- testimonial end -->

                        </div>
                        <!-- slide end -->

                        <!-- slide -->
                        <div class="swiper-slide">

                          <!-- testimonial -->
                          <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                              <!-- photo -->
                              <img class="art-testimonial-face" src="img/testimonials/bona.png" alt="face">
                              <!-- name -->
                              <br><br>
                              <h5>Baccalauréat Général série Scientifique spécialité Sciences de la Vie et de la Terre</h5>
                              <div class="art-el-suptitle mb-15">2015 - 2018</div>
                              <!-- text -->
                              <div class="mb-15">
                                Lycée Bonaparte
                            </div>
                            </div>
                            <!-- testimonial body end -->
                            <!-- testimonial footer -->
                            <div class="art-testimonial-footer">
                              <div class="art-left-side">
                              </div>
                              <div class="art-right-side">

                              </div>
                            </div>
                            <!-- testimonial footer end -->
                          </div>
                          <!-- testimonial end -->

                        </div>
                        <!-- slide end -->

                        

                      </div>
                      <!-- slider wrapper end -->
                    </div>
                    <!-- slider container end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- slider navigation -->
                    <div class="art-slider-navigation">

                      <!-- left side -->
                      <div class="art-sn-left">

                        <!-- slider pagination -->
                        <div class="swiper-pagination2"></div>

                      </div>
                      <!-- left side end -->

                      <!-- right side -->
                      <div class="art-sn-right">

                        <!-- slider navigation -->
                        <div class="art-slider-nav-frame">
                          <!-- prev -->
                          <div class="art-slider-nav art-testi-swiper-prev2"><i class="fas fa-chevron-left"></i></div>
                          <!-- next -->
                          <div class="art-slider-nav art-testi-swiper-next2"><i class="fas fa-chevron-right"></i></div>
                        </div>
                        <!-- slider navigation -->

                      </div>
                      <!-- right side end -->

                    </div>
                    <!-- slider navigation end -->

                  </div>
                  <!-- col end -->

                </div>
                <!-- row end -->

              </div>
              <!-- container end -->

              <br><br>

              <!-- container -->
              <div class="container-fluid">

                <!-- footer -->
                <footer>
                  <!-- copyright -->
                  <div>© <span>
                  <?php
                  // Date du jour
                  $dateJour = new DateTime();
                  // Affichage du résultat
                  echo $dateJour->format('Y');
                  ?>
                  </span> Sofiane RADJAH</div>
                </footer>
                <!-- footer end -->

              </div>
              <!-- container end -->

            </div>
            <!-- scroll frame end -->

          </div>
          <!-- swup container end -->

        </div>
        <!-- content end -->

        <!-- menu bar -->
        <div class="art-menu-bar">

          <!-- menu bar frame -->
          <div class="art-menu-bar-frame">

            <!-- menu bar header -->
            <div class="art-menu-bar-header">
              <!-- menu bar button -->
              <a class="art-menu-bar-btn" href="#.">
                <!-- icon -->
                <span></span>
              </a>
              <!-- menu bar button end -->
            </div>
            <!-- menu bar header end -->

            <!-- current page title -->
            <div class="art-current-page"></div>
            <!-- current page title end -->

            <!-- scroll frame -->
            <div class="art-scroll-frame">

              <!-- menu -->
              <nav id="swupMenu">
                <!-- menu list -->
                <ul class="main-menu">
                  <!-- menu item -->
                  <li class="menu-item current-menu-item"><a href="/home.php">Accueil</a></li>
                  <!-- menu item -->
                  <li class="menu-item"><a href="/portfolio-2-col.php">Portfolio</a></li>
                  <!-- menu item -->
                  <li class="menu-item"><a href="/contact.php">Contact</a></li>
                </ul>
                <!-- menu list end -->
              </nav>
              <!-- menu end -->

              <!-- language change -->
              <ul class="art-language-change">
                <!-- language item -->
                <li class="art-active-lang"><a href="#.">FR</a></li>
              </ul>
              <!-- language change end -->

            </div>
            <!-- scroll frame end -->

          </div>
          <!-- menu bar frame -->

        </div>
        <!-- menu bar end -->

      </div>
      <!-- app container end -->

    </div>
    <!-- app wrapper end -->

    <!-- preloader -->
    <div class="art-preloader">
      <!-- preloader content -->
      <div class="art-preloader-content">
        <!-- title -->
        <h4>Sofiane RADJAH <br> Portefolio</h4>
        <!-- progressbar -->
        <div id="preloader" data-load="1" class="art-preloader-load"></div>
      </div>
      <!-- preloader content end -->
    </div>
    <!-- preloader end -->

  </div>
  <!-- app end -->

  <!-- jquery js -->
  <script src="js/plugins/jquery.min.js"></script>
  <!-- anime js -->
  <script src="js/plugins/anime.min.js"></script>
  <!-- swiper js -->
  <script src="js/plugins/swiper.min.js"></script>
  <!-- progressbar js -->
  <script src="js/plugins/progressbar.min.js"></script>
  <!-- smooth scrollbar js -->
  <script src="js/plugins/smooth-scrollbar.min.js"></script>
  <!-- overscroll js -->
  <script src="js/plugins/overscroll.min.js"></script>
  <!-- typing js -->
  <script src="js/plugins/typing.min.js"></script>
  <!-- isotope js -->
  <script src="js/plugins/isotope.min.js"></script>
  <!-- fancybox js -->
  <script src="js/plugins/fancybox.min.js"></script>
  <!-- swup js -->
  <script src="js/plugins/swup.min.js"></script>

  <script>
    var load = true;
  </script>

  <!-- main js -->
  <script src="js/main.js"></script>

</body>

</html>
