@extends('layouts.app')

@section('content')
    <section class="first">
      <div class="wrap">
        <h1>Joris Pienne</h1>
        <img class="logo" src="@asset('images/logos/logo-white.svg')" alt="logo-white">
        <p>Portfolio Developpeur Web</p>
        <p class="scroll">Scrolldown</p>
      </div>
    </section>

    <section class="second">
      <img class="triangle" src="@asset('images/triangle-white.png')" alt="triangle blanc">

      <div class="wrap">
        <h2>A propos de moi</h2>

        <div class="about-container">
          <div class="little-menu">
            <p class="infos">Mes infos</p>
            <p class="competences">Compétences</p>
            <p class="logiciels">Logiciels utilisés</p>
          </div>

          <div class="about-content">
            <div class="info-content">
              <p>Salut c'est Joris Pienne, bienvenue sur mon site ! Je suis né à Chambéry en 2001. J'ai commencé à m'intéressé à la crétion de site web après mon Bac, j'ai donc opté pour un DUT Métiers du Multimédia et de l'Internet. J'aimerai par la suite faire une LP Métiers du Numérique: Développeur Web et Mobile et pourquoi pas un Master Développeur Full Stack. Je me projete développeur Front-End ou Full Stack.</p>

              <p>J'aime quand mon code fonctionne du premier coup, développer des sites originaux graphiquements. A part le code, j'aime aller au cinéma, voir mes amis, et manger des aliments sucrés .</p>

              <p>J'ai un Bac STI2D avec mentions assez bien et un Dut MMI spécialité programmation.</p>
            </div>

            <div class="skill-content">
              <div class="skill-box">
                <div class="html-css">
                  <svg class="progress blue noselect" data-progress="88" x="0px" y="0px" viewBox="0 0 776 628">
    		              <path class="track" d="M723 314L543 625.77 183 625.77 3 314 183 2.23 543 2.23 723 314z"></path>
    		              <path class="fill" d="M723 314L543 625.77 183 625.77 3 314 183 2.23 543 2.23 723 314z"></path>
    		              <text class="value" x="50%" y="61%">html / css</text>
    		              <text class="text" x="50%" y="122%">1 an et 7 mois</text>
    	            </svg>
                </div>

                <div class="js">
                  <svg class="progress blue noselect" data-progress="65" x="0px" y="0px" viewBox="0 0 776 628">
    		              <path class="track" d="M723 314L543 625.77 183 625.77 3 314 183 2.23 543 2.23 723 314z"></path>
    		              <path class="fill" d="M723 314L543 625.77 183 625.77 3 314 183 2.23 543 2.23 723 314z"></path>
    		              <text class="value" x="50%" y="61%">js</text>
    		              <text class="text" x="50%" y="122%">10 mois</text>
    	            </svg>
                </div>

                <div class="jquerry">
                  <svg class="progress blue noselect" data-progress="60" x="0px" y="0px" viewBox="0 0 776 628">
    		              <path class="track" d="M723 314L543 625.77 183 625.77 3 314 183 2.23 543 2.23 723 314z"></path>
    		              <path class="fill" d="M723 314L543 625.77 183 625.77 3 314 183 2.23 543 2.23 723 314z"></path>
    		              <text class="value" x="50%" y="61%">jquery</text>
    		              <text class="text" x="50%" y="122%">10 mois</text>
    	            </svg>
                </div>

                <div class="sass">
                  <svg class="progress blue noselect" data-progress="92" x="0px" y="0px" viewBox="0 0 776 628">
    		              <path class="track" d="M723 314L543 625.77 183 625.77 3 314 183 2.23 543 2.23 723 314z"></path>
    		              <path class="fill" d="M723 314L543 625.77 183 625.77 3 314 183 2.23 543 2.23 723 314z"></path>
    		              <text class="value" x="50%" y="61%">sass</text>
    		              <text class="text" x="50%" y="122%">7 mois</text>
    	            </svg>
                </div>
              </div>

              <div class="skill-box">
                <div class="php">
                  <svg class="progress blue noselect" data-progress="70" x="0px" y="0px" viewBox="0 0 776 628">
    		              <path class="track" d="M723 314L543 625.77 183 625.77 3 314 183 2.23 543 2.23 723 314z"></path>
    		              <path class="fill" d="M723 314L543 625.77 183 625.77 3 314 183 2.23 543 2.23 723 314z"></path>
    		              <text class="value" x="50%" y="61%">php</text>
    		              <text class="text" x="50%" y="122%">1 an</text>
    	            </svg>
                </div>

                <div class="mysql">
                  <svg class="progress blue noselect" data-progress="67" x="0px" y="0px" viewBox="0 0 776 628">
    		              <path class="track" d="M723 314L543 625.77 183 625.77 3 314 183 2.23 543 2.23 723 314z"></path>
    		              <path class="fill" d="M723 314L543 625.77 183 625.77 3 314 183 2.23 543 2.23 723 314z"></path>
    		              <text class="value" x="50%" y="61%">mysql</text>
    		              <text class="text" x="50%" y="122%">10 mois</text>
    	            </svg>
                </div>

                <div class="wordpress">
                  <svg class="progress blue noselect" data-progress="55" x="0px" y="0px" viewBox="0 0 776 628">
    		              <path class="track" d="M723 314L543 625.77 183 625.77 3 314 183 2.23 543 2.23 723 314z"></path>
    		              <path class="fill" d="M723 314L543 625.77 183 625.77 3 314 183 2.23 543 2.23 723 314z"></path>
    		              <text class="value" x="50%" y="61%">wordpress</text>
    		              <text class="text" x="50%" y="122%">3 mois</text>
    	            </svg>
                </div>

                <div class="laravel">
                  <svg class="progress blue noselect" data-progress="5" x="0px" y="0px" viewBox="0 0 776 628">
    		              <path class="track" d="M723 314L543 625.77 183 625.77 3 314 183 2.23 543 2.23 723 314z"></path>
    		              <path class="fill" d="M723 314L543 625.77 183 625.77 3 314 183 2.23 543 2.23 723 314z"></path>
    		              <text class="value" x="50%" y="61%">laravel</text>
    		              <text class="text" x="50%" y="122%">1 semaine</text>
    	            </svg>
                </div>
              </div>

              <div class="other-skills">
                <div class="language">
                  <p>Langues :</p>
                  <p>Anglais <span>-</span> C1</p>
                  <p>Espagnol <span>-</span> B2</p>
                </div>

                <div class="work-method">
                  <p>Methode agile</p>
                  <p>Travail en groupe <span>/</span> seul</p>
                  <p>Travail avec CdC <span>/</span> sans CdC</p>
                </div>
              </div>

            </div>

            <div class="software-content">
              <div class="software-box">
                <div class="atom">
                  <img src="@asset('images/logos/logo-atom.svg')" alt="">
                  <p>Atom</p>
                </div>
                <div class="insomnia">
                  <img src="@asset('images/logos/logo-insomnia.svg')" alt="">
                  <p>Insomnia</p>
                </div>
              </div>
              <div class="software-box">
                <div class="adobe">
                  <img src="@asset('images/logos/logo-adobe.svg')" alt="">
                  <p>Suite Adobe</p>
                </div>
                <div class="filezilla">
                  <img src="@asset('images/logos/logo-filezilla.svg')" alt="">
                  <p>Filezilla</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="third">

      <div class="wrap">
        <h2>Mes Réalisations</h2> <!-- mettre un after pour le span -->

        <div class="project-box">
          <div class="more-projects">
            <a href="{{get_permalink( get_page_by_title( 'projets' ))}}">Voir plus de projets</a>
            <img src="@asset('images/arrows/arrow-more-projects.png')" alt="fleche-plus-de-projets">
          </div>

          <div class="projects">
            <div class="project">
              <img class="project" src="" alt="projet">

              <div class="overlay">
                <div class="little-wrap">
                  <p>Project Name</p>
                  <p>- Caractéristique</p>
                  <p>- Caractéristique</p>
                  <p>- Caractéristique</p>

                  <div class="view-project">
                    <a href="#">Voir le site</a>
                    <img src="@asset('images/arrows/arrow-view-project.png')" alt="fleche-regarder-projet">
                  </div>
                </div>
              </div>
            </div>

            <div class="project">
              <img class="project" src="" alt="projet">

              <div class="overlay">
                <div class="little-wrap">
                  <p>Project Name</p>
                  <p>- Caractéristique</p>
                  <p>- Caractéristique</p>
                  <p>- Caractéristique</p>

                  <div class="view-project">
                    <a href="#">Voir le site</a>
                    <img src="@asset('images/arrows/arrow-view-project.png')" alt="fleche-regarder-projet">
                  </div>
                </div>
              </div>
            </div>

            <div class="project">
              <img class="project" src="" alt="projet">

              <div class="overlay">
                <div class="little-wrap">
                  <p>Project Name</p>
                  <p>- Caractéristique</p>
                  <p>- Caractéristique</p>
                  <p>- Caractéristique</p>

                  <div class="view-project">
                    <a href="#">Voir le site</a>
                    <img src="@asset('images/arrows/arrow-view-project.png')" alt="fleche-regarder-projet">
                  </div>
                </div>
              </div>
            </div>

            <div class="project">
              <img class="project" src="" alt="projet">

              <div class="overlay">
                <div class="little-wrap">
                  <p>Project Name</p>
                  <p>- Caractéristique</p>
                  <p>- Caractéristique</p>
                  <p>- Caractéristique</p>

                  <div class="view-project">
                    <a href="#">Voir le site</a>
                    <img src="@asset('images/arrows/arrow-view-project.png')" alt="fleche-regarder-projet">
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </section>
@endsection
