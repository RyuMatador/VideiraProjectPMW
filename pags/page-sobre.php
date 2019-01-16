<!--HEADER-->
<?php /*Template Name: Sobre*/ get_header(); ?>

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
    <article class="container p-5 principal-style">
        <div class="row flex-column">
            <h1 class="display-5 pt-0 py-md-3">QUEM SOMOS ?</h1>
            <p>A igreja Videira em Palmas é um igreja em células iniciada no ano de 1999, tem como pastor senior o
                pastor
                Mauro Estival discípulo de Pr.Aluizio Silva atual presidente do Ministério Vinha. </p>
            <p> Temos como visão: "O Nosso encargo é edificar uma igreja de vencedores, onde cada membro é um ministro,
                cada casa uma extensão da igreja, conquistando assim a nossa geração para Cristo, através de células
                que se
                multiplicam."</p>
            <p> A igreja Videira de Palmas é uma igreja que supervisiona igrejas no estado do Tocantins, oeste da Bahia
                e
                sul do pará.</p>
        </div>

        <div class="row flex-column">
            <h1 class="display-5 pt-0 py-md-3">O QUE CREMOS ?</h1>
            <div class="accordion" id="accordionGeral">
                <!-- CARD01-->
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse01">
                            <h5 class="mb-0"> 1. Sola Scriptura </h5>
                        </button>
                    </div>

                    <div id="collapse01" class="collapse show" data-parent="#accordionGeral">
                        <div class="card-body">
                            1. Nós cremos na inspiração verbal e plena de todo o cânon aceito das escrituras como
                            originalmente dado. As Escrituras são infalíveis, inerrantes e autoridade final para todas
                            as questões de fé e conduta (II Tm. 3:16, I Cor. 2:13)
                        </div>
                    </div>
                </div>

                <!-- CARD02-->
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse02">
                            <h5 class="mb-0"> 2. Trindade </h5>
                        </button>
                    </div>

                    <div id="collapse02" class="collapse" data-parent="#accordionGeral">
                        <div class="card-body">
                            2. Nós cremos no Deus eterno que a si mesmo se revelou como único Deus existente em três
                            pessoas: Pai, Filho e Espírito Santo, distinguíveis, mas indivisíveis (Mt. 28:19, II Cor
                            13:14)
                        </div>
                    </div>
                </div>
                <!-- CARD03-->
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse03">
                            <h5 class="mb-0"> 3. Início </h5>
                        </button>
                    </div>

                    <div id="collapse03" class="collapse" data-parent="#accordionGeral">
                        <div class="card-body">
                            3. Nós cremos na criação, teste e queda do homem como relatado em Gênesis; sua total
                            depravação espiritual e incapacidade de alcançar a justiça divina (Rm.5:12 e 18).
                        </div>
                    </div>
                </div>

                <!-- CARD04-->
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse04">
                            <h5 class="mb-0"> 4. Cristo </h5>
                        </button>
                    </div>

                    <div id="collapse04" class="collapse" data-parent="#accordionGeral">
                        <div class="card-body">
                            4. Nós cremos no Senhor Jesus Cristo, o Salvador de todo homem, concebido do Espírito
                            Santo, nascido da virgem Maria, verdadeiro Deus e verdadeiro homem (Lucas 1:26-35, João
                            1:14-18, Isaias 7:14 e 9:6).
                        </div>
                    </div>
                </div>

                <!-- CARD05-->
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse05">
                            <h5 class="mb-0"> 5. Ressureição </h5>
                        </button>
                    </div>

                    <div id="collapse05" class="collapse" data-parent="#accordionGeral">
                        <div class="card-body">
                            5. Nós cremos que Cristo morreu por nossos pecados, foi sepultado e ressuscitou ao terceiro
                            dia, e apareceu pessoalmente a seus discípulos (ICor. 15:1-4, Rm.4:25)
                        </div>
                    </div>
                </div>

                <!-- CARD06-->
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse06">
                            <h5 class="mb-0"> 6. Ascensão </h5>
                        </button>
                    </div>

                    <div id="collapse06" class="collapse" data-parent="#accordionGeral">
                        <div class="card-body">
                            6. Nós cremos na ascensão física do Senhor Jesus aos céus, sua exaltação e em sua segunda
                            vinda pessoal, literal e em corpo para a sua Igreja (João 14:2,3 e I Ts. 4:13-18)
                        </div>
                    </div>
                </div>

                <!-- CARD07-->
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse07">
                            <h5 class="mb-0"> 7. Salvação pela Graça </h5>
                        </button>
                    </div>

                    <div id="collapse07" class="collapse" data-parent="#accordionGeral">
                        <div class="card-body">
                            7. Nós cremos na salvação dos pecadores pela graça de Deus, através do arrependimento e da
                            fé na perfeita e suficiente obra da cruz do Calvário, pela qual nós obtemos a remissão dos
                            pecados (Ef. 2:8-9, Hb. 9:12 e 22 e Rm 5:11)
                        </div>
                    </div>
                </div>

                <!-- CARD08-->
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse08">
                            <h5 class="mb-0"> 8. Batísmo nas águas </h5>
                        </button>
                    </div>

                    <div id="collapse08" class="collapse" data-parent="#accordionGeral">
                        <div class="card-body">
                            8. Nós cremos na necessidade do batismo nas águas por imersão no nome do Deus triúno: Pai,
                            Filho e Espírito Santo para cumprir o mandamento do Senhor Jesus Cristo (Mt. 28:19, At.
                            2:34-36, 19:1-6)
                        </div>
                    </div>
                </div>

                <!-- CARD09-->
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse09">
                            <h5 class="mb-0"> 9. No batísmo no Espírito </h5>
                        </button>
                    </div>

                    <div id="collapse09" class="collapse" data-parent="#accordionGeral">
                        <div class="card-body">
                            9. Nós cremos no batismo no Espírito Santo como uma experiência real e subseqüente à
                            salvação, com a evidência bíblica do falar em outras línguas como o Espírito nos concede
                            (At. 2:1-4, 8:14-17, 10:44-46, Gl. 3:14-15)
                        </div>
                    </div>
                </div>

                <!-- CARD10-->
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse10">
                            <h5 class="mb-0"> 10. Nos dons do Espírito </h5>
                        </button>
                    </div>

                    <div id="collapse10" class="collapse" data-parent="#accordionGeral">
                        <div class="card-body">
                            10. Nós cremos na operação dos dons do Espírito Santo como enumerados em I Coríntios 12-14
                            como manifestado na igreja primitiva.
                        </div>
                    </div>
                </div>

                <!-- CARD11-->
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse11">
                            <h5 class="mb-0"> 11. Viver em espírito e verdade </h5>
                        </button>
                    </div>

                    <div id="collapse11" class="collapse" data-parent="#accordionGeral">
                        <div class="card-body">
                            11. Nós cremos em uma vida cheia do Espírito, uma vida de separação do mundo em perfeita
                            santidade no temor de Deus, como expressão da verdadeira fé cristã (Ef. 5:18, II Cor. 6:14,
                            7:1)
                        </div>
                    </div>
                </div>

                <!-- CARD12-->
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse12">
                            <h5 class="mb-0"> 12. Cura </h5>
                        </button>
                    </div>

                    <div id="collapse12" class="collapse" data-parent="#accordionGeral">
                        <div class="card-body">
                            12. Nós cremos na cura do corpo pelo poder de Deus, ou cura divina em seus variados
                            aspectos como praticada na igreja primitiva (At. 4:30, Rm 8:11, I Cor. 12:9, Tg. 5:14)
                        </div>
                    </div>
                </div>

                <!-- CARD13-->
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse13">
                            <h5 class="mb-0"> 13. Ceia </h5>
                        </button>
                    </div>

                    <div id="collapse13" class="collapse" data-parent="#accordionGeral">
                        <div class="card-body">
                            13. Nós cremos na mesa do Senhor para os crentes, comumente chamada de santa ceia ou
                            comunhão do Senhor (I Cor. 11:28-32, Mt. 26:26-28)
                        </div>
                    </div>
                </div>

                <!-- CARD14-->
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse14">
                            <h5 class="mb-0"> 14. Nas potestades </h5>
                        </button>
                    </div>

                    <div id="collapse14" class="collapse" data-parent="#accordionGeral">
                        <div class="card-body">
                            14. Nós cremos na realidade e personalidade do Diabo e no julgamento eterno do lago de fogo
                            preparado para o Diabo e seus anjos (Mt. 25:41, Ap. 20:14-15)
                        </div>
                    </div>
                </div>

                <!-- CARD15-->
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse15">
                            <h5 class="mb-0"> 15. Céu e Inferno </h5>
                        </button>
                    </div>

                    <div id="collapse15" class="collapse" data-parent="#accordionGeral">
                        <div class="card-body">
                            15. Nós cremos na vida eterna dos crentes e na punição eterna para os incrédulos (Jo. 5:24,
                            3:16, Mc. 9:43-48, II Ts.1:9, Ap. 20:10-15)
                        </div>
                    </div>
                </div>

                <!-- CARD16-->
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse16">
                            <h5 class="mb-0"> 16. Igreja Universal </h5>
                        </button>
                    </div>

                    <div id="collapse16" class="collapse" data-parent="#accordionGeral">
                        <div class="card-body">
                            16. Nós cremos que há uma igreja universal, composta de crentes genuínos, mas que esta
                            igreja universal é composta de muitas igrejas locais. Estas igrejas estão debaixo da
                            liderança do Senhor Jesus Cristo exercendo governo autônomo debaixo dele, administrando
                            todas as atividades locais bem como a propagação do evangelho. (At. 15:22, com Mt. 16:18 e
                            18:15-20)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

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