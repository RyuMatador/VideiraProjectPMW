<!-- HEADER -->
<?php /*Template Name: Redes*/ get_header(); ?>

    <!-- MODAL -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastro - Novo Membro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nome</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">Enviaremos mensagem para você.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Número de celular</label>
                            <input type="number" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Maior de idade</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- PRINCIPAL -->
    <section class="py-4 bg-white text-center">
        <div class="container">
            <h1 class="display-4">Nossas redes</h1>
            <p>Saiba mais sobre a organização da nossa igreja</p>

            <div class="row">
                <div class="col-sm-12 col-md-4 pb-2">
                    <div class="bg-success rounded p-2 nav-shadow | redes-style |" data-toggle="tooltip" title="Rede Sião" data-placement="top">
                        <h2 class="text-white">Rede Jovens</h2>
                        <ul class="list-unstyled">
                            <li>Jovens comprometidos com o mover e a obra.</li>
                            <li>Idade: 14 a ∞</li>
                            <li class="text-justify pt-3"><p>Faça valer seu caráter original, entre na rede Sião e siga neste momento da vida ao lado de irmãos que certamente vão te ajudar a qualquer momento.</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 pb-2">
                    <div class="bg-warning rounded p-2 nav-shadow | redes-style | ">
                        <h2 class="text-white">Rede Adolescentes</h2>
                        <ul class="list-unstyled">
                            <li>Jovens comprometidos com o mover e a obra.</li>
                            <li>Idade: 14 a ∞</li>
                            <li class="text-justify pt-3"><p>Faça valer seu caráter original, entre na rede Sião e siga neste momento da vida ao lado de irmãos que certamente vão te ajudar a qualquer momento.</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 pb-2">
                    <div class="bg-danger rounded p-2 nav-shadow | redes-style | ">
                        <h2 class="text-white">Rede Casais</h2>
                        <ul class="list-unstyled">
                            <li>Jovens comprometidos com o mover e a obra.</li>
                            <li> Idade 14 a ∞</li>
                            <li class="text-justify pt-3"><p>Faça valer seu caráter original, entre na rede Sião e siga neste momento da vida ao lado de irmãos que certamente vão te ajudar a qualquer momento.</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEWSLETTER -->
    <div class="container-fluid | newsletter-style |">
        <div class="row d-flex justify-content-center align-items-center flex-column">
            <div class="text-center">
                <h2 class="display-5"> Newsletter Videira Palmas </h2>
                <p>Receba pregações e informativos diretamente no seu email. </p>
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
    
    <!--FOOTER-->
    <?php get_footer(); ?>