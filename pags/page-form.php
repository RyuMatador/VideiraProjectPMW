<!-- HEADER -->
<?php /*Template Name: Formulário*/ get_header(); ?>

  <!-- MODAL -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
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
  
  <!-- FORMULÁRIO-->
  <section class="container">
    <div class="my-5 text-center">
      <span class="h6 d-block">Faça parte do Instituto Vinha</span>
      <h1 class="display-4 text-primary">INSCREVA-SE</h1>
    </div>
    <div class="row">
      <form class="col-lg-6" action="">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputNome">Nome</label>
            <input type="text" class="form-control" id="inputNome" placeholder="Nome completo">
          </div>
          <div class="form-group col-md-6">
            <label for="inputCPF">CPF</label>
            <input type="text" class="form-control" id="inputCPF" placeholder="xxx.xxx.xxx-xx">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Seu email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputSenha">Senha</label>
            <input type="password" class="form-control" id="inputSenha" placeholder="Senha de acesso">
          </div>
          <div class="form-group col-12">
            <label for="inputEndereco">Endereço</label>
            <input type="text" class="form-control" id="inputEndereco" placeholder="Número, nome da rua e bairro.">
          </div>
          <div class="form-group col-md-6">
            <label for="inputCidade">Cidade</label>
            <input type="text" class="form-control" id="inputCidade">
          </div>
          <div class="form-group col-md-3 col-6">
            <label for="inputCidade">Estado</label>
            <select id="inputCidade" class="form-control">
              <option>Selecione o Estado</option>
              <option>Rio de Janeiro</option>
              <option>São Paulo</option>
              <option>Paraná</option>
              <option>Ceará</option>
              <option>Acre</option>
            </select>
          </div>
          <div class="form-group col-md-3 col-6">
            <label for="inputCidade">Cep</label>
            <input type="text" class="form-control" id="inputCidade" placeholder="xxxxx-xxx">
          </div>
        </div>
        <div class="bg-light rounded box-shadow p-3 form-group">
          <h2 class="h6 text-primary">FORMA DE PAGAMENTO</h2>
          <nav class="nav btn-group mb-3" id="formaPagamento" role="tablist">
            <button type="button" class="btn btn-secondary active btn-sm" id="nav-cartao-tab" data-toggle="tab" href="#nav-cartao"
              role="tab" aria-controls="nav-cartao" aria-selected="true">Cartão de Crédito</button>
            <button type="button" class="btn btn-secondary btn-sm" id="nav-boleto-tab" data-toggle="tab" href="#nav-boleto"
              role="tab" aria-controls="nav-boleto" aria-selected="false">Boleto Bancário</button>
          </nav>
          <div class="tab-content" id="formaPagamentoConteudo">
            <div class="tab-pane fade show active" id="nav-cartao" role="tabpanel" aria-labelledby="nav-cartao-tab">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputNomeCartao">Nome no Cartão</label>
                  <input type="text" class="form-control" id="inputNomeCartao" placeholder="Nome impresso no cartão">
                </div>
                <div class="form-group col-md-3 col-6">
                  <label for="inputCidade">Mês</label>
                  <select id="inputCidade" class="form-control">
                    <option>Expira mês...</option>
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                    <option>04</option>
                    <option>05</option>
                  </select>
                </div>
                <div class="form-group col-md-3 col-6">
                  <label for="inputAno">Ano</label>
                  <select id="inputAno" class="form-control">
                    <option>Expira ano...</option>
                    <option>2017</option>
                    <option>2018</option>
                    <option>2019</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputNumeroCartao">Número do Cartão</label>
                  <input type="text" class="form-control" id="inputNumeroCartao" placeholder="5555 5555 5555 5555">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputCodigo">Código de Segurança</label>
                  <input type="text" class="form-control" id="inputCodigo" placeholder="XXX">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-boleto" role="tabpanel" aria-labelledby="nav-boleto-tab">
              <p class="lead">Clique em contratar plano que enviaremos um boleto para o seu e-mail.</p>
            </div>
          </div>
        </div>
  </section>
  
  <!--FOOTER-->
  <?php get_footer(); ?>