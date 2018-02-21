<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href='../css/style.css'/> -->
        <link rel="stylesheet" href='../css/app.css'/>
        <link rel="stylesheet" href='../css/icon-font.css'/>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

        <!-- Styles -->
        <style>

        </style>

        <link rel="shortcut icon" href="http://www.iconj.com/ico/3/y/3yzvlny7kc.ico" type="image/x-icon" />
    </head>
    <body>

      <div class="navigation">
        <input type="checkbox" id="navi-toggle" class="navigation__checkbox">

        <label for="navi-toggle" class="navigation__button">
          <span class="navigation__icon">&nbsp;</span>
        </label>

        <div class="navigation__background">&nbsp;</div>

        <nav class="navigation__nav"> 
          <ul class="navigation__list">
            <li class="navigation__item"><a href="#" class="navigation__link"><span>01</span>About Natous</a></li>
            <li class="navigation__item"><a href="#" class="navigation__link"><span>02</span>Your benfits</a></li>
            <li class="navigation__item"><a href="#" class="navigation__link"><span>03</span>Popular tours</a></li>
            <li class="navigation__item"><a href="#" class="navigation__link"><span>04</span>Stories</a></li>
            <li class="navigation__item"><a href="#" class="navigation__link"><span>05</span>Book now</a></li>
          </ul>
        </nav>
      </div>

      <header class="header">
          <div class="header__logo-box">
            <img src="images/logo-white.png" alt="logo" class="header__logo">
          </div>

          <div class="header__text-box">
            <h1 class="heading-primary">
              <span class="heading-primary--main">Outdoors</span>
              <span class="heading-primary--sub">ITS NOT INDOORS</span>
            </h1>
            <a href="#" class="btn btn--white btn--animated">Discover our Tours</a>

          </div>
      </header>

      <main>

        <section class="section-about">
          <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary u-margin-bottom-small">
              Exciting tours for adventurous people 
            </h2>
          </div>

          <div class="row">
            <div class="col-1-of-2">
              <h3 class="heading-tertiary u-margin-bottom-small">You're going to fall in love with nature</h3>
              <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>

              <h3 class="heading-tertiary">Live like you've never lived before</h3>
              <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>

              <a href="#" class="btn-text">Learn More &rarr;</a>
            </div>

            <div class="col-1-of-2">
                <div class="composition">
                  <img src="../images/nat-1-large.jpg" alt="" class="composition__photo composition__photo--p1"/>
                  <img src="../images/nat-2-large.jpg" alt="" class="composition__photo composition__photo--p2"/>
                  <img src="../images/nat-3-large.jpg" alt="" class="composition__photo composition__photo--p3"/>
                </div>
            </div>
          </div>
        </section>

        <section class="section-features">

            <div class="row">
              <div class="col-1-of-4">
                <div class="feature-box">
                  <i class="feature-box__icon icon-basic-world"></i>
                  <h3 class="heading-tertiary u-margin-bottom-small">Explore the world</h3>
                  <p class="feature-box__text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Incididunt dolore magna aliqua.
                  </p>
                </div>
              </div>

              <div class="col-1-of-4">
                <div class="feature-box">
                  <i class="feature-box__icon icon-basic-compass"></i>
                  <h3 class="heading-tertiary u-margin-bottom-small">Meet nature</h3>
                  <p class="feature-box__text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Incididunt dolore magna aliqua.
                  </p>
                </div>
              </div>

              <div class="col-1-of-4">
                <div class="feature-box">
                  <i class="feature-box__icon icon-basic-map"></i>
                  <h3 class="heading-tertiary u-margin-bottom-small">Find your way</h3>
                  <p class="feature-box__text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Incididunt dolore magna aliqua.
                  </p>
                </div>
              </div>

              <div class="col-1-of-4">
                <div class="feature-box">
                  <i class="feature-box__icon icon-basic-heart"></i>
                  <h3 class="heading-tertiary u-margin-bottom-small">Live a healthier life</h3>
                  <p class="feature-box__text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Incididunt dolore magna aliqua.
                  </p>
                </div>
              </div>
            </div> 
        </section>

        <section class="section-tours">
          <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary u-margin-bottom-small">
              Most popular tours 
            </h2>
          </div>

          <div class="row">
              <div class="col-1-of-3"> <!-- Card 1-->
                <div class="card">
                  <div class="card__side card__side--front">
                    <div class="card__picture card__picture--1">
                        &nbsp; <!--Html for empty space-->
                    </div>
                    <h4 class="card__heading">
                      <span class="card__heading-span card__heading-span--1">The sea explorer</span>
                    </h4>
                    <div class="card__details">
                        <ul>
                          <li>3 day tours</li>
                          <li>up to 30 people</li>
                          <li>2 tour guides</li>
                          <li>Sleep in cozy hotels</li>
                          <li>Difficulty: easy</li>
                        </ul> 
                    </div>
                  </div>
                  <div class="card__side card__side--back card__side--back-1">
                    <div class="card__cta">
                      <div class="card__price-box">
                          <div class="card__price-only">Only</div>
                          <div class="card__price-value">$297</div>
                      </div>
                      <a class="btn btn--white" href="#">Book Now!</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-1-of-3"> <!-- Card 2-->
              <div class="card">
                  <div class="card__side card__side--front">
                    <div class="card__picture card__picture--2">
                        &nbsp; <!--Html for empty space-->
                    </div>
                    <h4 class="card__heading">
                      <span class="card__heading-span card__heading-span--2">The forest hiker</span>
                    </h4>
                    <div class="card__details">
                        <ul>
                          <li>7 day tour</li>
                          <li>up to 40 people</li>
                          <li>6 tour guides</li>
                          <li>Sleep in provided tents</li>
                          <li>Difficulty: medium</li>
                        </ul> 
                    </div>
                  </div>
                  <div class="card__side card__side--back card__side--back-2">
                    <div class="card__cta">
                      <div class="card__price-box">
                          <div class="card__price-only">Only</div>
                          <div class="card__price-value">$497</div>
                      </div>
                      <a class="btn btn--white" href="#">Book Now!</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-1-of-3"> <!-- Card 3-->
              <div class="card">
                  <div class="card__side card__side--front">
                    <div class="card__picture card__picture--3">
                        &nbsp; <!--Html for empty space-->
                    </div>
                    <h4 class="card__heading">
                      <span class="card__heading-span card__heading-span--3">The snow adventurer</span>
                    </h4>
                    <div class="card__details">
                        <ul>
                          <li>5 day tours</li>
                          <li>up to 15 people</li>
                          <li>3 tour guides</li>
                          <li>Sleep in provided tents</li>
                          <li>Difficulty: hard</li>
                        </ul> 
                    </div>
                  </div>
                  <div class="card__side card__side--back card__side--back-3">
                    <div class="card__cta">
                      <div class="card__price-box">
                          <div class="card__price-only">Only</div>
                          <div class="card__price-value">$897</div>
                      </div>
                      <a class="btn btn--white" href="#">Book Now!</a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="u-center-text u-margin-top-big">
          <a class="btn btn--green" href="#">Discover all tours</a>
          </div>
        </section>

        <section class="section-stories">
          <div class="bg-video">
            <video class="bg-video__content" autoplay muted loop>
              <source src="/images/video.mp4" trype="video/mp4">
              <source src="/images/video.webm" trype="video/webm">
              Your browser is not supported!
            </video>
          </div>


          <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
              We make people genuinely happy
            </h2>
          </div>

          <div class="row">
            <div class="story">
                <figure class="story__shape">
                  <img src="/images/nat-8.jpg" alt="Person on a tour" class="story__image">
                  <figure-caption class="story__caption">Mary Smith</figure-caption>
                </figure>
                <div class="story__text">
                <h3 class="heading-tertiary u-margin-bottom-small">I had the best week ever with my family</h3>
                <p class="feature-box__text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Incididunt dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </p>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="story">
                <figure class="story__shape">
                  <img src="/images/nat-9.jpg" alt="Person on a tour" class="story__image">
                  <figure-caption class="story__caption">Jack Wilson</figure-caption>
                </figure>
                <div class="story__text">
                <h3 class="heading-tertiary u-margin-bottom-small">WOW! My life is completely different now</h3>
                <p class="feature-box__text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Incididunt dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </p>
                </div>
            </div>
          

          <div class="u-center-text u-margin-top-big">
          <a class="btn btn-text" href="#">Read all stories &rarr;</a>
          </div>
        </section>

        <section class="section-book">
          <div class="row">
            <div class="book">
              <div class="book__form">
                <form action="#" class="form" autocomplete="off">
                  <div class="u-margin-bottom-big">
                    <h2 class="heading-secondary">
                    start booking now
                    </h2>
                  </div>
                  <div class="form__group">
                    <input type="text" class="form__input" placeholder="Full Name"  id="name" required>
                    <label for="name" class="form__label">Full Name</label>
                  </div>

                  <div class="form__group">
                    <input type="email" class="form__input" placeholder="Email Address" id="email" required>
                    <label for="email" class="form__label">Email</label>
                  </div>

                  <div class="form__group">
                    <div class="form__radio-group">
                        <input type="radio" class="form__radio-input" id="small" name="radio-btns">
                        <label for="small" class="form__radio-label">
                          <span class="form__radio-button"></span>
                          Small tour group</label>
                    </div>
                  </div>
                  <div class="form__group">
                    <div class="form__radio-group">
                        <input type="radio" class="form__radio-input" id="large" name="radio-btns">
                        <label for="large" class="form__radio-label">
                          <span class="form__radio-button"></span>
                          Large tour group</label>
                    </div>
                  </div>
                  
                  <div class"form__group form__group--last">
                    <button class="btn btn--green">Next step &rarr;</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </main>

      <footer class="footer">
        <div class="footer__logo-box">
          <img src="img/logo-green-2x.png" alt="Full logo" class="foter__logo">
        </div>
        <div class="row">
          <div class="col-1-of-2">
            <div class="footer__navigation">
              <div class="footer_list">
                <ul class="footer__list">
                  <li class="footer__item"><a href="#" class="footer__link">Company</a></li>
                  <li class="footer__item"><a href="#" class="footer__link">Contact us</a></li>
                  <li class="footer__item"><a href="#" class="footer__link">Carrers</a></li>
                  <li class="footer__item"><a href="#" class="footer__link">Privacy policy</a></li>
                  <li class="footer__item"><a href="#" class="footer__link">Company</a></li>
                </ul>
              </div>
            </div>
            <div class="col-1-of-2">
              <p class="footer__copyright">
                Built by <a href="#" class="footer__link">Jonas Schmedtmann</a> 
                for his online course <a href="#" class="footer__link">Advanced CSS and Sass</a>.
                Copyright &copy; by Jonas Schmedtmann. 
                You are 100% allowed to use this webpage for both personal and comercial use, 
                but NOT to claim it as your own design. A credit to the original author, 
                Jonas Schmedtmann, is of course highly appreciated!
              </p>
            </div>
          </div>
        </div>
      </footer>

      <!--Modal -->

      <div class="popup">
        <div class="popup__content">
            <div class="popup__left">
              <img src="images/nat-8.jpg" alt="Tour photo" class="popup__img">
              <img src="images/nat-9.jpg" alt="Tour photo" class="popup__img">
            </div>
            <div class="popup__right">
              <h2 class="heading-secondary u-margin-bottom-small">Start Booking now</h2>
              <h3 class="heading-tertiary u-margin-bottom-small">Important &ndash; Please read these terms before booking</h3>
              <p class="popup__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <a href="#" class="btn btn--green">Book now</a>
            </div>
        </div>
      </div>

</body>
</html>

      <!-- <section class="grid-test">
        <div class="row">
          <div class="col-1-of-2">
            Col 1 of 2
          </div>
          <div class="col-1-of-2">
            Col 1 of 2
          </div>
        </div>

        <div class="row">
          <div class="col-1-of-3">
            Col 1 of 3
          </div>
          <div class="col-1-of-3">
            Col 1 of 3
          </div>
          <div class="col-1-of-3">
            Col 1 of 3
          </div>
        </div>

        <div class="row">
          <div class="col-1-of-3">
            Col 1 of 3
          </div>
          <div class="col-2-of-3">
            Col 2 of 3
          </div>
        </div>

        <div class="row">
          <div class="col-1-of-4">
            Col 1 of 4
          </div>
          <div class="col-1-of-4">
            Col 1 of 4
          </div>
          <div class="col-1-of-4">
            Col 1 of 4
          </div>
          <div class="col-1-of-4">
            Col 1 of 4
          </div>
        </div>

        <div class="row">
          <div class="col-1-of-4">
            Col 1 of 4
          </div>
          <div class="col-1-of-4">
            Col 1 of 4
          </div>
          <div class="col-2-of-4">
            Col 2 of 4
          </div>
        </div>

        <div class="row">
          <div class="col-1-of-4">
            Col 1 of 4
          </div>
          <div class="col-3-of-4">
            Col 3 of 4
          </div>
        </div>

      </section> --!>



    </body>
</html>
