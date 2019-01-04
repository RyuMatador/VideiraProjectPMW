    <?php get_header(); ?>
    <!-- CAROUSSEL -->
    <section class="container-fluid">
        <div class="row">
            <div class="col-lg-1 carousel-sides bg-dark d-none d-md-block"></div>
            <div class="col-lg-10 col-md-12 col-sm-12 carousel-style">
                <div id="carouselTransition" class="carousel slide" data-ride="carousel">
                    <!-- Links -->
                    <ol class="carousel-indicators">
                        <li data-target="#carouselTransition" data-slide="0"></li>
                        <li data-target="#carouselTransition" data-slide="1"></li>
                        <li data-target="#carouselTransition" data-slide="3"></li>
                    </ol>
                    <!-- Imagens -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri()?>/imgs/banner-1.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri()?>/imgs/banner-2.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri()?>/imgs/banner-3.jpg">
                        </div>
                    </div>
                    <!-- Controles -->
                    <a class="carousel-control-prev" href="#carouselTransition" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselTransition" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-1 carousel-sides bg-dark d-none d-md-block"></div>
        </div>
    </section>

       <!-- NEWS -->
       <article class="py-4 news-total-style">

    <div class="text-center py-2">
        <h1 class="display-5 d-block"> Últimas Notícias</h1>
    </div>

    <article class="container">
        <div class="row align-items-stretch">

            <div class="col-md-6">
                <img src="<?php echo get_stylesheet_directory_uri()?>/imgs/img-news.png" class="img-fluid rounded">
            </div>

            <div class="col-md-6">
                <div class="container mt-3 mt-md-0">
                    <div class="row">
                        <div class="col-md-3 py-1 bg-white">
                            <img src="<?php echo get_stylesheet_directory_uri()?>/icons/logo-videira-color.png" class="img-fluid">
                        </div>
                        <div class="col-md-7 py-1 bg-secondary"> Lorem ipsum dolor, sit amet consectetur
                            adipisicing elit. Maiores esse ratione, aperiam placeat voluptatem alias.
                        </div>
                        <div class="col-md-2 py-1 text-white d-flex align-items-center" style="background-color: rgba(0, 0, 0, 0.8);">
                            Info...
                        </div>
                    </div>
                </div>

                <div class="container my-2">
                    <div class="row">
                        <div class="col-md-3 py-1 bg-white">
                            <img src="<?php echo get_stylesheet_directory_uri()?>/icons/logo-videira-color.png" class="img-fluid"></div>
                        <div class="col-md-7 py-1 bg-secondary"> Lorem ipsum dolor, sit amet consectetur
                            adipisicing elit. Maiores esse ratione, aperiam placeat voluptatem alias.
                        </div>
                        <div class="col-md-2 py-1 text-white d-flex align-items-center" style="background-color: rgba(0, 0, 0, 0.8);">
                            Info...
                        </div>
                    </div>
                </div>

                <div class="container my-2">
                    <div class="row">
                        <div class="col-md-3 py-1 bg-white">
                            <img src="<?php echo get_stylesheet_directory_uri()?>/icons/logo-videira-color.png" class="img-fluid">
                        </div>
                        <div class="col-md-7 py-1 bg-secondary"> Lorem ipsum dolor, sit amet consectetur
                            adipisicing elit. Maiores esse ratione, aperiam placeat voluptatem alias.
                        </div>
                        <div class="col-md-2 py-1 text-white d-flex align-items-center" style="background-color: rgba(0, 0, 0, 0.8);">
                            Info...
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </article>
    </article>

    <!-- GALLERY -->
    <section class="gallery-style py-2">
        <section class="container">
            <div class="text-center text-md-left py-3">
                <h1 class="display-5 d-block">Galeria Videira</h1>
            </div>
            <div class="row">
                <div class="col-md">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/imgs/img-exemplo.png" class="img-fluid rounded mb-4">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/imgs/img-exemplo.png" class="img-fluid rounded mb-4">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/imgs/img-exemplo.png" class="img-fluid rounded mb-4">
                </div>
                <div class="col-md">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/imgs/img-exemplo.png" class="img-fluid rounded mb-4">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/imgs/img-exemplo.png" class="img-fluid rounded mb-4">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/imgs/img-exemplo.png" class="img-fluid rounded mb-4">
                </div>
            </div>
        </section>
    </section>

    <!-- HERO -->
    <section class="container-fluid py-5 hero-style">
        <div>
            <h1 class="display-5 text-center text-white mb-4">Mensagem do dia</h1>
        </div>
        <div class="text-center">
            <p class="text-white"> Não sabe o que fazer olhe para a cruz.</p>
            <footer class="blockquote-footer text-white text-end"><cite> by Pr. Naor Pedrosa</cite></footer>
        </div>
    </section>

    <!-- EVENTOS -->
    <section class="bg-light m-0 p-0 py-4">
        <section class="container">
            <div>
                <h1 class="display-5 text-center pb-0">Próximos eventos</h1>
                <p class="h5 pb-2 pt-1 pb-3 text-center"> Veja aqui o que vamos fazer em 2019</p>
            </div>
            <table class="table table-hover mb-0">
                <thead>
                  <tr>
                    <th scope="col">Data Provável</th>
                    <th scope="col">Evento</th>
                    <th scope="col">Quem participa ?</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">01/2019</th>
                    <td>Celebração "Virada do Ano"</td>
                    <td>Toda Igreja</td>
                  </tr>
                  <tr>
                    <th scope="row">04/2019</th>
                    <td>Dia das Mães</td>
                    <td>Toda Igreja</td>
                  </tr>
                  <tr>
                    <th scope="row">07/2019</th>
                    <td colspan="2">Holy Fest</td>
                  </tr>
                </tbody>
              </table>
        </section>
    </section>
    <!-- MENSAGEM -->
    <div class="container-fluid py-4 mb-0 mensagem-style">
        <p class="display-4 text-center text-white text-center mb-0 pb-4"> Fundamentos </p>
    </div>
    <section class="mensagem-style">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-start">
                <div class="col-lg-4 col-md-6 text-center" >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="height: 6em;"><path d="M8.535 426.668A8.54 8.54 0 0 1 0 418.133V76.8C0 34.457 34.457 0 76.8 0h332.8a8.54 8.54 0 0 1 8.531 8.535v341.332c0 4.7-3.824 8.53-8.53 8.53H76.8c-32.937 0-59.734 26.797-59.734 59.734a8.54 8.54 0 0 1-8.531 8.535zM76.8 17.066c-32.937 0-59.734 26.797-59.734 59.734v293.1c14.1-17.414 35.637-28.578 59.734-28.578h324.266V17.066zm59.735 409.602H76.8a8.54 8.54 0 0 1-8.535-8.535 8.54 8.54 0 0 1 8.535-8.531h59.734c4.707 0 8.53 3.82 8.53 8.53a8.54 8.54 0 0 1-8.531 8.535zm102.4 0h-51.2a8.54 8.54 0 0 1-8.535-8.535 8.54 8.54 0 0 1 8.535-8.531h51.2a8.54 8.54 0 0 1 8.53 8.53 8.54 8.54 0 0 1-8.531 8.535zm170.668 0h-42.668a8.54 8.54 0 0 1-8.535-8.535 8.54 8.54 0 0 1 8.535-8.531h42.668c4.707 0 8.53 3.82 8.53 8.53a8.54 8.54 0 0 1-8.531 8.535zm0 0"/><path d="M8.535 426.668A8.54 8.54 0 0 1 0 418.133V76.8C0 38.238 28.887 5.512 67.2.664a8.48 8.48 0 0 1 6.707 2.066 8.53 8.53 0 0 1 2.895 6.398v341.336c0 4.3-3.2 7.926-7.47 8.465-29.797 3.762-52.266 29.22-52.266 59.203a8.54 8.54 0 0 1-8.531 8.535zm51.2-407.05C34.84 27.05 17.066 50.133 17.066 76.8v293.18c10.605-13.125 25.48-22.75 42.668-26.668zm0 0"/><path d="M8.535 196.266A8.54 8.54 0 0 1 0 187.734V135.34c0-38.562 28.887-71.3 67.2-76.137 2.44-.332 4.875.445 6.707 2.066a8.54 8.54 0 0 1 2.895 6.398v52.395a8.53 8.53 0 0 1-7.469 8.465c-29.797 3.766-52.266 29.22-52.266 59.207 0 4.7-3.824 8.53-8.53 8.53zm51.2-118.102c-24.895 7.434-42.668 30.516-42.668 57.184v4.242c10.605-13.125 25.48-22.75 42.668-26.668zm-51.2 255.234A8.54 8.54 0 0 1 0 324.863V272.47c0-38.562 28.887-71.285 67.2-76.133a8.45 8.45 0 0 1 6.715 2.063c1.828 1.613 2.887 3.953 2.887 6.402v52.395c0 4.3-3.2 7.926-7.47 8.465-29.797 3.762-52.266 29.22-52.266 59.203a8.54 8.54 0 0 1-8.531 8.535zm51.2-118.1c-24.895 7.43-42.668 30.512-42.668 57.18v4.242c10.605-13.125 25.48-22.75 42.668-26.668zm128 296.702a8.55 8.55 0 0 1-6.035-2.5l-19.566-19.566-19.566 19.566c-2.44 2.44-6.1 3.156-9.3 1.852a8.55 8.55 0 0 1-5.266-7.887v-85.332a8.54 8.54 0 0 1 8.535-8.531h51.2c4.7 0 8.53 3.82 8.53 8.53v85.332a8.55 8.55 0 0 1-5.266 7.887 8.58 8.58 0 0 1-3.266.648zm-25.602-42.668c2.184 0 4.37.836 6.035 2.5l11.03 11.035v-56.2h-34.133v56.2l11.035-11.035c1.664-1.664 3.848-2.5 6.03-2.5zm0 0"/><path d="M409.602 460.8H187.734a8.54 8.54 0 0 1-8.535-8.535v-25.598h-34.133v25.598a8.54 8.54 0 0 1-8.531 8.535h-59.734c-23.527 0-42.668-19.14-42.668-42.668s19.14-42.668 42.668-42.668h332.8a8.54 8.54 0 0 1 8.531 8.535v68.266a8.54 8.54 0 0 1-8.531 8.535zm-213.336-17.066h204.8v-51.2H76.8c-14.113 0-25.602 11.484-25.602 25.598s11.488 25.602 25.602 25.602H128v-25.602a8.54 8.54 0 0 1 8.535-8.531h51.2c4.71 0 8.53 3.82 8.53 8.53zm0 0"/><path d="M409.602 494.934H187.734a8.54 8.54 0 0 1-8.535-8.535v-59.73h-34.133v59.73a8.54 8.54 0 0 1-8.531 8.535H76.8c-42.344 0-76.8-34.457-76.8-76.8s34.457-76.8 76.8-76.8h332.8a8.54 8.54 0 0 1 8.531 8.535v136.53a8.54 8.54 0 0 1-8.531 8.535zm-213.336-17.066h204.8v-119.47H76.8c-32.937 0-59.734 26.797-59.734 59.734s26.797 59.734 59.734 59.734H128v-59.734a8.54 8.54 0 0 1 8.535-8.531h51.2c4.7 0 8.53 3.82 8.53 8.53zm76.8-153.602H204.8a8.54 8.54 0 0 1-8.535-8.531V179.2h-59.73a8.54 8.54 0 0 1-8.535-8.531v-59.734a8.54 8.54 0 0 1 8.535-8.535h59.73V42.67a8.54 8.54 0 0 1 8.535-8.535h68.266a8.54 8.54 0 0 1 8.535 8.535v59.73h59.73a8.54 8.54 0 0 1 8.535 8.535v59.734a8.54 8.54 0 0 1-8.535 8.531H281.6v136.535a8.54 8.54 0 0 1-8.535 8.531zM213.332 307.2h51.203V170.67a8.54 8.54 0 0 1 8.531-8.535H332.8v-42.668h-59.734c-4.7 0-8.53-3.82-8.53-8.53V51.2h-51.203v59.734c0 4.7-3.82 8.53-8.53 8.53H145.07v42.668h59.73a8.54 8.54 0 0 1 8.531 8.535zm0 0"/>
                    </svg>
                    <p class="pt-2 text-white">Nosso encargo é edificar uma igreja de vencedores, onde cada membro é um
                        ministro e cada casa uma extensão da igreja, conquistando, assim, a geração para Cristo,
                        através das células que se multiplicam uma vez ao ano.
                        Este é o nosso slogan, a nossa declaração de propósito.</p>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="height: 6em;"><path d="M504.5 472.95h-11.45L342.063 178.52c-5.863-11.426-19.977-16.05-31.465-10.31l-12.137 6.07-20.316-28.445c-3.594-5.027-8.812-8.316-14.645-9.43V79.13h72.66a7.5 7.5 0 0 0 6.242-11.66l-13.258-19.89 13.258-19.887a7.5 7.5 0 0 0-6.242-11.66h-72.66V7.5c0-4.14-3.36-7.5-7.5-7.5s-7.5 3.36-7.5 7.5v130.93c-4.723 2.332-8.562 6.22-10.87 11.223L157.5 323.258l-9.043-12.06c-4.78-6.38-12.387-9.88-20.344-9.363s-15.047 4.965-18.97 11.902L19.156 472.95H7.5c-4.14 0-7.5 3.36-7.5 7.5a7.5 7.5 0 0 0 7.5 7.5h497a7.5 7.5 0 0 0 7.5-7.5c0-4.14-3.36-7.5-7.5-7.5zM322.148 31.03l-8.262 12.39c-1.68 2.516-1.68 5.8 0 8.316l8.262 12.39H263.5V31.03zm-199.945 290.1a8.39 8.39 0 0 1 6.879-4.316 8.39 8.39 0 0 1 7.375 3.395l22.04 29.387c2.488 3.313 7.188 3.984 10.5 1.5s3.984-7.184 1.5-10.5l-2.77-3.69L215.27 233.89l24.1 24.1a23.38 23.38 0 0 0 33.281 0l14.395-14.395c.043-.043.164-.156.395-.148s.336.145.375.19l2.4 3.016a7.5 7.5 0 0 0 11.711-9.371l-2.4-3.016a15.52 15.52 0 0 0-11.258-5.797c-4.406-.242-8.71 1.402-11.828 4.52l-14.398 14.395c-1.61 1.613-3.754 2.5-6.03 2.5s-4.422-.887-6.03-2.5l-28-28 29.277-63.437c1.855-4.023 5.477-4.78 6.945-4.918s5.168-.074 7.746 3.535l24.04 33.656c2.148 3.004 6.16 4 9.457 2.352l17.87-8.937c4.168-2.082 9.285-.406 11.4 3.738l39.73 77.477-11.754 23.508c-1.328 2.652-3.78 4.355-6.73 4.668a8.38 8.38 0 0 1-7.562-3.156l-20.648-25.81a7.5 7.5 0 0 0-10.543-1.172c-3.234 2.586-3.758 7.31-1.172 10.543l20.648 25.81c4.512 5.637 11.23 8.836 18.34 8.836.836 0 1.676-.047 2.516-.133 8.023-.852 14.965-5.664 18.57-12.88l6.828-13.656 99.254 193.55H331.57l-88.95-102.633c-4.684-5.402-11.457-8.352-18.613-8.105a23.43 23.43 0 0 0-17.996 9.398l-6.125 8.164-10.66-14.21a7.5 7.5 0 0 0-10.5-1.5c-3.312 2.484-3.984 7.188-1.5 10.5l16.66 22.21a7.5 7.5 0 0 0 12 0l12.125-16.164c1.555-2.074 3.934-3.316 6.523-3.406 2.582-.094 5.05.977 6.75 2.938l80.437 92.813H36.387zm0 0"/></svg>
                    <p class="pt-2 text-white">A nossa missão
                        Conquistar a nossa geração, a nossa cidade e a nossa nação através da pregação e da vivência
                        integral do Evangelho de Cristo, por meio da multiplicação anual das células.</p>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"viewBox="0 0 512 512" style="height: 6em;"><path d="M503.467 247.467H486.4C482.008 126.8 385.2 29.992 264.533 25.6V8.533C264.533 3.82 260.713 0 256 0s-8.533 3.82-8.533 8.533V25.6C126.8 29.992 29.992 126.8 25.6 247.467H8.533C3.82 247.467 0 251.287 0 256s3.82 8.533 8.533 8.533H25.6C29.992 385.2 126.8 482.008 247.467 486.4v17.067c0 4.713 3.82 8.533 8.533 8.533s8.533-3.82 8.533-8.533V486.4C385.2 482.008 482.007 385.2 486.4 264.533h17.067c4.713 0 8.533-3.82 8.533-8.533s-3.82-8.533-8.533-8.533zm-256 221.866c-111.25-4.368-200.432-93.55-204.8-204.8h17.067c4.34 101.83 85.902 183.394 187.733 187.733v17.067zm0-34.645c-92.06-4.497-165.697-78.095-170.24-170.155h102.485c4 35.632 32.122 63.755 67.755 67.755v102.4zm0-119.637c-26.163-3.804-46.713-24.354-50.517-50.517h50.517v50.517zm0-67.584H196.95c3.804-26.163 24.354-46.713 50.517-50.517v50.517zm0-67.755c-35.632 4-63.755 32.122-67.755 67.755h-102.4c4.497-92.06 78.095-165.697 170.155-170.24v102.485zm0-119.98c-101.83 4.34-183.395 85.903-187.734 187.734H42.667c4.368-111.25 93.55-200.432 204.8-204.8v17.066zm17.066 17.58c92.062 4.497 165.697 78.095 170.24 170.155H332.288c-4-35.632-32.122-63.755-67.755-67.755v-102.4zm0 119.637c26.163 3.804 46.713 24.354 50.517 50.517h-50.517V196.95zm0 67.584h50.517c-3.804 26.163-24.354 46.713-50.517 50.517v-50.517zm0 67.755c35.632-4 63.755-32.122 67.755-67.755h102.4c-4.497 92.062-78.095 165.697-170.155 170.24V332.288zm0 137.045v-17.067c101.83-4.34 183.394-85.902 187.733-187.733h17.067c-4.367 111.25-93.55 200.433-204.8 204.8zm187.734-221.866c-4.34-101.83-85.902-183.394-187.733-187.733V42.667c111.25 4.368 200.432 93.55 204.8 204.8h-17.067z"/></svg>
                    <p class="pt-2 text-white">A igreja é composta e edificada através de discípulos. Não recrutamos
                        membros, mas fazemos discípulos que serão agentes de transformação e de conquista da nossa
                        geração para Deus. Onde eles estiverem, ali estará uma igreja atuando e cumprindo o propósito
                        de expansão do Reino de Deus.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- NEWSLETTER -->
    <div class="container-fluid newsletter-style">
        <div class="row d-flex justify-content-center align-items-center flex-column">
            <div class="text-center">
                <h2 class="display-5"> Newsletter Videira Palmas </h2>
                <p>Receba pregações e informativos diretamente no seu email.</p>
            </div>

            <form>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="E-mail">
                    <div class="input-group-btn input-group-lg">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">
                                Enviar
                            </button>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php get_footer(); ?>