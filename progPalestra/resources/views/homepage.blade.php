<x-main>

    <x-navbar />

    <header>
        <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
        <div class="overlay"></div>

        <!-- The HTML5 video element that will create the background video on the header -->
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="{{ url('Media\GymPromo.mp4') }}" type="video/mp4">
        </video>

        <!-- The header content -->
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <h1 class="display-3 animation-home">Palestra GymTonic</h1>
                </div>
            </div>
        </div>
    </header>


    <!-- Page Content -->
    <div class="container bg-project mt-5 pb-5 pt-5 mb-5">

        <!-- Project One -->
        <div class="row" data-aos="zoom-in">
            <div class="col-md-6 ms-2">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0"
                        src="https://assets.sweat.com/shopify_articles/images/010/005/285/original/BackToGymSWEATf1f07a7f6f79e7b8807d2436a6ae8e8b.jpg?1625801362"
                        alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Allenamenti sempre aggiornati</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita
                    laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos
                    perspiciatis atque eveniet unde.</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Two -->
        <div class="row" data-aos="zoom-in">
            <div class="col-md-6 ms-2" data-aos="zoom-in">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0"
                        src="https://cdn.shopify.com/s/files/1/1785/5867/products/PT_754x500_37e65233-3c88-4b58-97b2-71dde2443677_1024x.jpg?v=1617963048"
                        alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Corsi efficaci</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque
                    repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse
                    totam tempore.</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Three -->
        <div class="row" data-aos="zoom-in">
            <div class="col-md-6 ms-2" data-aos="zoom-in">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0"
                        src="https://cdn.cdnparenting.com/articles/2018/12/05161926/590825882-H-1024x700.webp"
                        alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Piani alimentari perfetti per te</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, temporibus, dolores, at, praesentium
                    ut unde repudiandae voluptatum sit ab debitis suscipit fugiat natus velit excepturi amet commodi
                    deleniti alias possimus!</p>
            </div>
        </div>
        <!-- /.row -->

    </div>

    <hr class="border border-danger border-2 opacity-50">


    <section class="pricing" data-aos="fade-up">
        <div class="container">
            <h2 class="my-4 mb-5 text-center">Scegli il piano adatto a te!
            </h2>
            <div class="row">
                <!-- Free Tier -->
                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0 prices">
                        <div class="card-body">
                            <h6 class="card-price text-center">€20,00<span class="period">/mese</span></h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Sala attrezzi illimitata
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Prima consulenza gratuita
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Accesso agli spogliatoi</li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-end m-4">
                            <a href="/contatti" class="btn btn-warning text-uppercase w-100">Contattaci!</a>
                        </div>
                    </div>
                </div>
                <!-- Plus Tier -->
                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0 prices">
                        <div class="card-body">
                            <h6 class="card-price text-center">€40,00<span class="period">/month</span></h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Sala attrezzi illimitata
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Corsi illimitati
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Tre consulenze gratuita
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Accesso agli spogliatoi</li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-end m-4">
                            <a href="/contatti" class="btn btn-warning text-uppercase w-100">Contattaci!</a>
                        </div>
                    </div>
                </div>
                <!-- Pro Tier -->
                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0 prices">
                        <div class="card-body">
                            <h6 class="card-price text-center">€80,00<span class="period">/mese</span></h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Sala attrezzi illimitata
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Corsi illimitati
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Consulenze gratuite
                                    illimitate
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Accesso spa
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Accesso agli spogliatoi</li>
                            </ul>
                            <div class="d-flex align-items-end mb-3 ms-2 me-2">
                                <a href="/contatti" class="btn btn-warning text-uppercase w-100">Contattaci!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="border border-danger border-2 opacity-50">

    <div class="container bg-aboutus mt-5 mb-5 rounded-pill staff" data-aos="fade-up" id="chisiamo">
        <div class="row">
            <h2 class="text-center mb-5 mt-5">Il nostro staff</h2>
            <div class="col-lg-4 text-center mb-5">
                <span>
                    <img style="width: 140px; height:140px" class="rounded-circle mb-4 "
                        src="https://img.photolamus.com/GJKVLP58/x660/dae15d40fe52fced9d7c04acdd5c405f/caricatura-della-palestra.jpg"
                        alt="">
                </span>

                <h3>Lina</h3>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 text-center">
                <span>
                    <img style="width: 140px; height:140px" class="rounded-circle mb-4"
                        src="https://img.photolamus.com/mTGorCpN/x660/228a702843d6dc335093f45f48708156/caricatura-della-palestra.jpg"
                        alt="">
                </span>

                <h3>Pino</h3>


            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 text-center">
                <span>
                    <img style="width: 140px; height:140px" class="rounded-circle mb-4"
                        src="https://banner2.cleanpng.com/20180219/qgq/kisspng-kettlebell-cartoon-fitness-centre-weight-training-gym-cartoon-images-5a8b3160cab8b9.6422727315190715848304.jpg"
                        alt="">
                </span>

                <h3>Gino</h3>

            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div>

    <x-footer />

</x-main>
