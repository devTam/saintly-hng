<?php
//including the php page that will process the form
include('process_form.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="./assets/img/logo.svg"
      type="image/x-icon"
    />
    <!-- Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap"
      rel="stylesheet"
    />



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.css" />
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css" />

    <title>Saintly</title>
  </head>
  <body>
    <!-- Preloader -->
    <div class="preloader">
      <img src="./assets/img/logo.svg" alt="loader" class="loader-img" />
    </div>

    <!-- Navigation -->
    <nav
      class="navbar nav-custom navbar-expand-lg navbar-dark bg-dark fixed-top"
      id="navbar-example"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="#"
          ><img class="logo" src="./assets/img/Logo.svg" alt="Logo"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <!-- <span class="navbar-toggler-icon"></span> -->
          <div class="nav-toggle">
            <span class="nav-toggle-icon"></span>
            <span class="nav-toggle-icon"></span>
            <span class="nav-toggle-icon"></span>
          </div>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#get-notified"
                >GET NOTIFIED <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#features">FEATURES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#how-it-works">HOW IT WORKS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#screenshots">SCREENSHOTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#religions">SUPPORTED RELIGIONS</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Home -->

    <section class="home">
      <!-- Background video -->
      <video autoplay loop muted class="background-video">
        <source src="./assets/img/background.mp4" type="video/mp4" />
      </video>

      <div
        class="content h-100 d-flex justify-content-center align-items-center"
      >
        <div class="container-fluid h-100">
          <div class="row h-100">
            <div class="col-lg-4 h-100 d-none d-lg-flex" id="mobile-container" data-aos="zoom-in-up">
              <img
                src="./assets/img/home-phone.svg"
                alt="home-image"
                class="img-fluid home-img h-100"
              />
            </div>

            <div
              class="col-lg-8 h-100 d-flex justify-content-center align-items-center flex-column mobile-home"
            >
              <div class="typecon">
                <p class="home-text type">
                  IT'S NOT ENOUGH TO BE RELIGIOUS,<br />
                  THE QUESTION IS WILL YOU MAKE<br />
                  <span style="color: var(--btn-color);">HEAVEN</span> OR
                  <span style="color: var(--color-secondary);">HELL</span>?
                </p>
              </div>

              <div class="coming-soon" data-aos="zoom-in-up">
                <p>COMING SOON</p>
                <p>June 2021</p>

                <div id="timer">
                  <div class="time">
                    <div class="number">345</div>
                    <div class="alpha">DAYS</div>
                  </div>
                  <span class="column">:</span>
                  <div class="time">
                    <div class="number">17</div>
                    <div class="alpha">HOURS</div>
                  </div>
                  <span class="column">:</span>
                  <div class="time">
                    <div class="number">35</div>
                    <div class="alpha">MINUTES</div>
                  </div>
                  <span class="column">:</span>
                  <div class="time">
                    <div class="number">42</div>
                    <div class="alpha">SECONDS</div>
                  </div>
                </div>
              </div>

              <div class="notified">
                <div class="notified-btn">
                  <p>Get notified on release</p>
                  <a href="#get-notified" type="button" class="bounce">
                    <svg
                      width="60"
                      height="60"
                      viewBox="0 0 60 60"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle
                        cx="30"
                        cy="30"
                        r="29"
                        stroke="white"
                        stroke-width="2"
                      />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M17.5455 28.6824C17.7179 28.5095 17.9228 28.3723 18.1484 28.2787C18.374 28.1851 18.6158 28.1369 18.86 28.1369C19.1042 28.1369 19.3461 28.1851 19.5716 28.2787C19.7972 28.3723 20.0021 28.5095 20.1746 28.6824L30.0002 38.5118L39.8259 28.6824C40.1746 28.3337 40.6474 28.1379 41.1405 28.1379C41.6335 28.1379 42.1064 28.3337 42.455 28.6824C42.8037 29.031 42.9995 29.5039 42.9995 29.9969C42.9995 30.49 42.8037 30.9628 42.455 31.3115L31.3148 42.4517C31.1423 42.6246 30.9374 42.7618 30.7119 42.8554C30.4863 42.949 30.2445 42.9972 30.0002 42.9972C29.756 42.9972 29.5142 42.949 29.2886 42.8554C29.0631 42.7618 28.8582 42.6246 28.6857 42.4517L17.5455 31.3115C17.3726 31.139 17.2354 30.9341 17.1418 30.7085C17.0482 30.483 17 30.2411 17 29.9969C17 29.7527 17.0482 29.5109 17.1418 29.2853C17.2354 29.0597 17.3726 28.8548 17.5455 28.6824Z"
                        fill="white"
                      />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M30.0002 17C30.4927 17 30.9649 17.1956 31.3131 17.5438C31.6613 17.892 31.8569 18.3643 31.8569 18.8567V37.4237C31.8569 37.9162 31.6613 38.3884 31.3131 38.7366C30.9649 39.0848 30.4927 39.2804 30.0002 39.2804C29.5078 39.2804 29.0356 39.0848 28.6874 38.7366C28.3392 38.3884 28.1435 37.9162 28.1435 37.4237V18.8567C28.1435 18.3643 28.3392 17.892 28.6874 17.5438C29.0356 17.1956 29.5078 17 30.0002 17Z"
                        fill="white"
                      />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Get notified form -->
    <section class="get-notified" id="get-notified" >
      <h1 class="sr-only">Get Notified</h1>

      <p class="text-center" data-aos="fade-down">
        ENTER YOUR EMAIL TO BE NOTIFIED WHEN<br />
        <span style="color: var(--color-secondary);">SAINTLY</span> IS READY TO
        TRY OUT
      </p>

      <?php
      if(isset($success)){
        echo '<div class="alert alert-success" role="alert" style="font-size: 2rem;">' . $success . '</div>';
      }elseif(isset($error)){
        echo '<div class="alert alert-danger" role="alert" style="font-size: 2rem;">' . $error . '</div>';
      }
      
    ?>

      <form method="post" class="form-inline" data-aos="fade-up">
        <label for="email" class="sr-only">Email</label>
        <div class="input-group">
          <input
            type="email"
            class="form-control"
            id="email"
            name="email"
            placeholder="Enter Your Email"
          />
          <div class="input-group-append">
            <input
              type="submit"
              name="submit"
              value="NOTIFY ME"
              class="form-control notify-btn"
            />
          </div>
        </div>
      </form>
    </section>

    <!-- FEATURES -->

    <section class="features" id="features">
      <div class="container">
        <div class="features-heading">
          <p>FEATURES</p>

          <img
            src="./assets/img/underline.svg"
            alt="underline"
            class="img-fluid"
          />
        </div>
      </div>

      <div class="container">
        <img
          src="./assets/img/Features.svg"
          class="img-fluid"
          alt="App features"
        />
      </div>
    </section>

    <!-- HOW IT WORKS -->
    <section class="works" id="how-it-works">
      <div class="container">
        <div class="features-heading container">
          <p>HOW IT WORKS</p>

          <img
            src="./assets/img/underline.svg"
            alt="underline"
            class="img-fluid"
          />
        </div>
      </div>

      <div class="container">
        <article class="first" ">
          <div class="row">
            <div class="col-5" >
              <p class="number2" data-aos="flip-right">01.</p>
            </div>
            <div class="col-2 auth-vert">
              <img src="./assets/img/vertical.svg" alt="divider" />
            </div>
            <div class="col-5 auth" data-aos="flip-left">
              <p >
                <span class="first-text">User</span>
                <span class="second-text auth-sec">Authentication</span>
              </p>
              <br />

              <p class="desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Interdum velit in mi sed dictum varius elementum velit eleifend.
              </p>
            </div>
          </div>

          <div class="divider">
            <img src="./assets/img/divider.svg" class="img-fluid" alt="" />
          </div>
        </article>

        <article class="second">
          <div class="row">
            <div class="col-5" data-aos="flip-right">
              <p>
                <span class="first-text">Data</span>
                <span class="second-text">Fetching</span>
              </p>
              <br />

              <p class="desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Interdum velit in mi sed dictum varius elementum velit eleifend.
              </p>
            </div>
            <div class="col-2">
              <img src="./assets/img/vertical.svg" alt="divider" />
            </div>
            <div class="col-5" data-aos="flip-left">
              <p class="number2" >02.</p>
            </div>
          </div>

          <div class="divider">
            <img src="./assets/img/divider.svg" class="img-fluid" alt="" />
          </div>
        </article>

        <article class="first">
          <div class="row">
            <div class="col-5" data-aos="flip-right">
              <p class="number2">03.</p>
            </div>
            <div class="col-2">
              <img src="./assets/img/vertical.svg" alt="divider" />
            </div>
            <div class="col-5" data-aos="flip-left">
              <p>
                <span class="first-text">Verdict</span>
                <span class="second-text">Results</span>
              </p>
              <br />

              <p class="desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Interdum velit in mi sed dictum varius elementum velit eleifend.
              </p>
            </div>
          </div>

          <div class="divider">
            <img src="./assets/img/divider.svg" class="img-fluid" alt="" />
          </div>
        </article>

        <article class="second">
          <div class="row">
            <div class="col-5" data-aos="flip-right">
              <p>
                <span class="first-text">Convert</span>
                <span class="second-text">Now</span>
              </p>
              <br />

              <p class="desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Interdum velit in mi sed dictum varius elementum velit eleifend.
              </p>
            </div>
            <div class="col-2">
              <img src="./assets/img/vertical.svg" alt="divider" />
            </div>
            <div class="col-5" data-aos="flip-left">
              <p class="number2">04.</p>
            </div>
          </div>

          <div class="divider">
            <img src="./assets/img/divider.svg" class="img-fluid" alt="" />
          </div>
        </article>
      </div>
    </section>

    <!-- SCREENSHOTS -->

    <section class="screenshots ">
      <div class="features-heading container screenshot" id="screenshots">
        <p>SCREENSHOTS</p>

        <img
          src="./assets/img/underline.svg"
          alt="underline"
          class="img-fluid"
        />
      </div>

      <div class="screens d-none d-lg-flex">
        <a href="" class="screen1" data-toggle="modal"
        data-target="#screen1"
          ><img
            src="./assets/img/features1.svg"
            alt=""
            class="img-fluid screen-img"
        /></a>
        <a href="" class="screen2" data-toggle="modal"
        data-target="#screen2"
          ><img
            src="./assets/img/features2.svg"
            alt=""
            class="img-fluid screen-img"
        /></a>
        <a href="" class="screen3" data-toggle="modal"
        data-target="#screen3"
          ><img
            src="./assets/img/features3.svg"
            alt=""
            class="img-fluid screen-img"
        /></a>
        <a href="" class="screen4" data-toggle="modal"
        data-target="#screen4"
          ><img
            src="./assets/img/features4.svg"
            alt=""
            class="img-fluid screen-img"
        /></a>
        <a href="" class="screen5" data-toggle="modal"
        data-target="#screen5"
          ><img
            src="./assets/img/features5.svg"
            alt=""
            class="img-fluid screen-img"
        /></a>

      

        <!-- Modal 1-->
        <div
          class="modal fade"
          id="screen1"
          tabindex="-1"
          role="dialog"
          aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="./assets/img/features1.svg" alt="" class="img-fluid">
              </div>
              
            </div>
          </div>
        </div>

        <!-- MODAL 2 -->
        <div
          class="modal fade"
          id="screen2"
          tabindex="-1"
          role="dialog"
          aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="./assets/img/features2.svg" alt="" class="img-fluid">
              </div>
              
            </div>
          </div>
        </div>

        <!-- MODAL 3 -->
        <div
          class="modal fade"
          id="screen3"
          tabindex="-1"
          role="dialog"
          aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="./assets/img/features3.svg" alt="" class="img-fluid">
              </div>
              
            </div>
          </div>
        </div>

        <!-- MODAL 4 -->
        <div
          class="modal fade"
          id="screen4"
          tabindex="-1"
          role="dialog"
          aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="./assets/img/features4.svg" alt="" class="img-fluid">
              </div>
              
            </div>
          </div>
        </div>

        <!-- MODAL 5 -->
        <div
          class="modal fade"
          id="screen5"
          tabindex="-1"
          role="dialog"
          aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="./assets/img/features5.svg" alt="" class="img-fluid">
              </div>
              
            </div>
          </div>
        </div>


      </div>

      <div class="mobile-screen d-lg-none">

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="./assets/img/features1.svg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./assets/img/features2.svg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./assets/img/features3.svg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./assets/img/features4.svg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./assets/img/features5.svg" alt="Third slide">
            </div>
          </div>
        </div>

      </div>

    </section>

    <!-- RELIGIONS -->

    <section class="religions" id="religions">
      <div class="features-heading container">
        <p>SUPPORTED RELIGIONS</p>

        <img
          src="./assets/img/underline.svg"
          alt="underline"
          class="img-fluid"
        />
      </div>

      <div class="container">
        <div class="card-deck">
          <div class="card" data-aos="flip-left">
            <img
              class="card-img-top"
              src="./assets/img/christian.svg"
              alt="Card image cap"
            />
            <div class="card-body">
              <p>CHRISTIANITY</p>
            </div>
          </div>

          <div class="card" data-aos="flip-left" data-aos-delay="250">
            <img
              class="card-img-top"
              src="./assets/img/islam.svg"
              alt="Card image cap"
            />
            <div class="card-body">
              <p>ISLAM</p>
            </div>
          </div>

          <div class="card" data-aos="flip-left" data-aos-delay="500">
            <img
              class="card-img-top"
              src="./assets/img/buddhism.svg"
              alt="Card image cap"
            />
            <div class="card-body">
              <p>BUDDHISM</p>
            </div>
          </div>

          <div class="card" data-aos="flip-left" data-aos-delay="1000">
            <img
              class="card-img-top"
              src="./assets/img/hinduism.svg"
              alt="Card image cap"
            />
            <div class="card-body">
              <p>HINDUISM</p>
            </div>
          </div>
        </div>

        <div class="card-deck mt-5">
          <div class="card" data-aos="flip-right" data-aos-delay="2000">
            <img
              class="card-img-top"
              src="./assets/img/taoism.svg"
              alt="Card image cap"
            />
            <div class="card-body">
              <p>TAOISM</p>
            </div>
          </div>

          <div class="card" data-aos="flip-right" data-aos-delay="1750">
            <img
              class="card-img-top"
              src="./assets/img/shinto.svg"
              alt="Card image cap"
            />
            <div class="card-body">
              <p>SHINTO</p>
            </div>
          </div>

          <div class="card" data-aos="flip-right" data-aos-delay="1500">
            <img
              class="card-img-top"
              src="./assets/img/sikhism.svg"
              alt="Card image cap"
            />
            <div class="card-body">
              <p>SIKHISM</p>
            </div>
          </div>

          <div class="card" data-aos="flip-right" data-aos-delay="1250">
            <img
              class="card-img-top"
              src="./assets/img/judaism.svg"
              alt="Card image cap"
            />
            <div class="card-body">
              <p>JUDAISM</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4">
            <div class="touch">
              <p>Get in touch:</p>
              <br />
              <div class="touch-con">
                <img src="./assets/img/touch-img.svg" alt="" />
                <p class="touchspan">betatesting@saintly.faith</p>
              </div>
            </div>
          </div>

          <div class="col-4">
            <div class="call">
              <p>Call:</p>
              <br />
              <div class="touch-con">
                <img src="./assets/img/call-img.svg" alt="" />
                <span class="touchspan">+1 (826) 813-22-53</span>
              </div>
            </div>
          </div>

          <div class="col-4">
            <div class="social">
              <p>Social Media</p>
              <br />
              <div class="media-icons">
                <img src="./assets/img/TW.svg" alt="" />
                <img src="./assets/img/FB.svg" alt="" />
                <img src="./assets/img/IG.svg" alt="" />
              </div>
            </div>
          </div>
        </div>

        <div class="second-footer">
          <span>&copy; 2020 Saintly</span>
          <span>All rights reserved.</span>
        </div>
      </div>
    </section>


    <!-- IONICON -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

    <!-- Boostrap JS -->
    <script src="./assets/js/popper.js"></script>
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/bootstrap.js"></script>

    <!-- Typed JS -->
    <script src="./assets/js/typed.js"></script>
    <script type="text/javascript">
      var typed = new Typed('.type', {
        strings: [
          'IT\'S NOT ENOUGH TO BE RELIGIOUS,<br />THE QUESTION IS WILL YOU MAKE<br /><span style="color: var(--btn-color);">HEAVEN</span> OR <span style="color: var(--color-secondary);">HELL</span>?',
          'IT\'S NOT ENOUGH TO BE RELIGIOUS,<br />THE QUESTION IS WILL YOU MAKE<br /><span style="color: var(--btn-color);">HEAVEN</span> OR <span style="color: var(--color-secondary);">HELL</span>?',
          'Saintly App tells you with 100% certainty if you are worthy of <span style="color: var(--btn-color);">Eternal life</span> or <span style="color: var(--color-secondary);">not</span>!',
        ],
        typeSpeed: 50,
        backSpeed: 50,
        fadeOut: true,
        fadeOutDelay: 500,
        loop: true,
        loopCount: 2,
      });
    </script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 1500,
      });
    </script>
    <!-- Custom JS -->
    <script src="./assets/js/custom.js"></script>
  </body>
</html>
