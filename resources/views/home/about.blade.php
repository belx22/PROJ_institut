@extends('layouts.home')

@section('title')
A propos de nous
@endsection
        @section('logo')
        <img src="{{ asset('storage/settings/z6Pmut9pfSovcS9fSSYgxnAqUFVuaHHc64mRRrrx.jpg')}}" alt="logo ISEGMI" srcset="" width="100" height="150">            
        @endsection
@section('content')
    

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>A propos de nous<br></h1>
              <p class="mb-0">Notre vision est de créer une communauté académique et professionnelle qui forme 
                des leaders et des entrepreneurs capables de relever les défis économiques, sociaux et environnementaux
                 de demain. Nous souhaitons être reconnus comme l'un des meilleurs Institut privé d’enseignement Supérieur dans
                  la région de l’Extrême-Nord, au Cameroun voire dans la sous-région
                 Afrique centrale, en termes de qualité de l'enseignement, de la recherche et de l'innovation</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Acceuil</a></li>
            <li class="current">A propos de nous !<br></li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- About Us Section -->
    <section id="about-us" class="section about-us">

      <div class="container">

        <div class="row gy-4">

       
          <div class="col-lg-6 order-1 order-lg-2 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Objectifs stratégiques</h3>
            <p class="fst-italic">
             .
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Former des leaders et des entrepreneurs : Développer des programmes académiques qui forment des leaders et des entrepreneurs capables de relever les défis économiques, sociaux et environnementaux de demain..</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Renforcer la recherche et l'innovation : Encourager la recherche et l'innovation dans les domaines des sciences de gestion, de l'économie, du droit, de la gouvernance locale, des sciences sociales, des sciences biomédicales et médico-sanitaires..</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Développer des partenariats stratégiques : Établir des partenariats stratégiques avec des entreprises, des organisations et des universités pour renforcer la recherche, l'innovation et la formation.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Promouvoir la diversité et l'inclusion : Favoriser la diversité et l'inclusion dans la communauté académique et professionnelle de L’INSTITUT SUPÉRIEUR GERMINAL DE MOKOLO (ISGEMO)..</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Renforcer la réputation de L’INSTITUT SUPÉRIEUR GERMINAL DE MOKOLO (ISGEMO) : Renforcer la réputation de L’INSTITUT SUPÉRIEUR GERMINAL DE MOKOLO (ISGEMO) en tant qu'une des meilleures écoles de commerce au monde.</span></li>
            </ul>
          </div>
          <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('storage/img1.jpeg')}}" class="img-fluid" alt="">
          </div>

        </div>

      </div>
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('storage/img2.jpeg')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Nos Valeurs</h3>
            <p class="fst-italic">
             .
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Excellence : Nous nous engageons à offrir des formations et des services de haute qualité..</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Responsabilité sociale : Nous nous engageons à contribuer au développement économique et social de la société.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Innovation : Nous encourageons la créativité, l'innovation et l'entrepreneuriat.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Diversité et inclusion : Nous favorisons la diversité et l'inclusion dans la communauté académique et professionnelle de L’INSTITUT SUPÉRIEUR GERMINAL DE MOKOLO (ISGEMO).</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Intégrité : Nous nous engageons à agir avec intégrité et éthique dans toutes nos activités.</span></li>
            </ul>
          </div>

        </div>

      </div>
    </section><!-- /About Us Section -->





    <!-- Counts Section -->
    <section id="counts" class="section counts light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Students</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
              <p>Courses</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
              <p>Events</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
              <p>Trainers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Counts Section -->



    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Témoignages</h2>
        <p>Que disent-ils</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 2,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('home/assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="Portrait de Jean Mbappé">
                  <h3>Mamoudou ISSA</h3>
                  <h4>Étudiant en Sciences de Gestion</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>L’institut m’a permis de développer mes compétences en gestion et leadership. Les cours interactifs et les travaux pratiques m’ont préparé aux défis du monde professionnel.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
            
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('home/assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="Portrait de Fatima Ndongo">
                  <h3>Fatima Ndongo</h3>
                  <h4>Étudiante en Économie</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Grâce à l'accompagnement des professeurs et aux ressources de l'institut, j'ai acquis une solide base théorique et pratique en économie. Cela m'a permis de décrocher un stage dans une grande entreprise.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
            
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('home/assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="Portrait de Arnaud Essomba">
                  <h3>Moussa Adamou</h3>
                  <h4>Étudiant en Informatique</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Les cours de programmation et les projets pratiques proposés par l’institut m’ont aidé à développer des compétences techniques pointues. Aujourd’hui, je me sens prêt à relever les défis du secteur technologique.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
            

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

@endsection