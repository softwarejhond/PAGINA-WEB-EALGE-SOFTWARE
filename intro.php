
<style>
#hero {
  width: 100%;
  background: url(../img/hero-bg.jpeg) no-repeat;
  position: relative;
  padding: 140px 0 0 0;
}

#hero:before {
  content: "";
  background: rgba(0, 72, 155, 0.9);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#hero h1 {
  margin: 0 0 20px 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 56px;
  color: rgba(255, 255, 255, 0.8);
}

#hero h1 span {
  color: #fff;
  border-bottom: 4px solid #FEEB46;
}

#hero h2 {
  color: rgba(255, 255, 255, 0.8);
  margin-bottom: 40px;
  font-size: 24px;
}

#hero .btn-get-started {
  font-family: "Montserrat", sans-serif;
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 30px;
  transition: 0.5s;
  color: #ffffff;
  background: red;
}

#hero .btn-get-started:hover {
  background: #ffffff;
  color: red;
}

#hero .animated {
  animation: up-down 2s ease-in-out infinite alternate-reverse both;
}.neon {
	color: #fff;
	margin-top: 80%;
	text-shadow:
		0 0 5px rgba(175, 4, 255, 0.644),
		0 0 10px rgb(255, 230, 2),
		0 0 20px rgba(0,178,255,1),
		0 0 40px rgba(38,104,127,1),
		0 0 80px rgb(124, 38, 127),
		0 0 90px rgb(99, 38, 127),
		0 0 100px rgba(38,104,127,1),
		0 0 140px rgba(38,104,127,1),
		0 0 180px rgba(38,104,127,1);
}

@media (min-width: 1024px) {
  #hero {
    background-attachment: fixed;
  }
}

@media (max-width: 991px) {
  #hero {
    padding-top: 80px;
  }
  #hero .animated {
    -webkit-animation: none;
    animation: none;
  }
  #hero .hero-img {
    text-align: center;
  }
  #hero .hero-img img {
    max-width: 50%;
  }
  #hero h1 {
    font-size: 28px;
    line-height: 32px;
    margin-bottom: 10px;
  }
  #hero h2 {
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 30px;
  }
}

@media (max-width: 575px) {
  #hero .hero-img img {
    width: 80%;
  }
}

@-webkit-keyframes up-down {
  0% {
    transform: translateY(10px);
  }
  100% {
    transform: translateY(-10px);
  }
}

@keyframes up-down {
  0% {
    transform: translateY(10px);
  }
  100% {
    transform: translateY(-10px);
  }
}

.hero-waves {
  display: block;
  margin-top: 60px;
  width: 100%;
  height: 60px;
  z-index: 5;
  position: relative;
}

.wave1 use {
  -webkit-animation: move-forever1 10s linear infinite;
  animation: move-forever1 10s linear infinite;
  -webkit-animation-delay: -2s;
  animation-delay: -2s;
}

.wave2 use {
  -webkit-animation: move-forever2 8s linear infinite;
  animation: move-forever2 8s linear infinite;
  -webkit-animation-delay: -2s;
  animation-delay: -2s;
}

.wave3 use {
  -webkit-animation: move-forever3 6s linear infinite;
  animation: move-forever3 6s linear infinite;
  -webkit-animation-delay: -2s;
  animation-delay: -2s;
}

@-webkit-keyframes move-forever1 {
  0% {
    transform: translate(85px, 0%);
  }
  100% {
    transform: translate(-90px, 0%);
  }
}

@keyframes move-forever1 {
  0% {
    transform: translate(85px, 0%);
  }
  100% {
    transform: translate(-90px, 0%);
  }
}

@-webkit-keyframes move-forever2 {
  0% {
    transform: translate(-90px, 0%);
  }
  100% {
    transform: translate(85px, 0%);
  }
}

@keyframes move-forever2 {
  0% {
    transform: translate(-90px, 0%);
  }
  100% {
    transform: translate(85px, 0%);
  }
}

@-webkit-keyframes move-forever3 {
  0% {
    transform: translate(-90px, 0%);
  }
  100% {
    transform: translate(85px, 0%);
  }
}

@keyframes move-forever3 {
  0% {
    transform: translate(-90px, 0%);
  }
  100% {
    transform: translate(85px, 0%);
  }
}
</style>

<section id="home" class="intro-section hero">
  <div class="container">
    <div class="row align-items-center text-white">
      <!-- START THE CONTENT FOR THE INTRO  -->
      <div class="col-md-6 intros text-start">
        <h1 class="display-2">
          <span class="display-2--intro" style=" text-transform: uppercase;">Únete a nosotros en el viaje hacia la innovación</span>
          <span class="display-2--description lh-base">
          ¡Eagle Software, donde las ideas vuelan alto!
          </span>
        </h1>
        <button type="button" class="rounded-pill btn-rounded"><i class="fa-brands fa-whatsapp"></i> ¡Escríbenos ahora!
        <a aria-label="Chat on WhatsApp" href="https://wa.me/573015606006" target="_blank"> <img alt="Chat on WhatsApp" src="images/logoEagle.png" width="30px" /></a>
        </button>
      </div>
      <!-- START THE CONTENT FOR THE VIDEO -->
      <div class="col-md-6 intros text-end">
        <div class="video-box">
          <img src="images/arts/intros.png" alt="video illutration" class="img-fluid">
          <a href="#" class="glightbox position-absolute top-50 start-50 translate-middle">
            <span>
              <i class="fas fa-play-circle"></i>
            </span>
            <span class="border-animation border-animation--border-1"></span>
            <span class="border-animation border-animation--border-2"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
      viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

</section>
<br>