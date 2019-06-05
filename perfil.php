<?php include_once('header.php') ?>
<div class="container-fluid">
    <!-- <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php include_once('header.php'); ?>
        </div>
    </div> -->
    <div class="row">
        <div class="col-lg-1 col-md-2 col-sm-3 col-xs-12 menu-esquerdo">
            <?php include_once('aside.php') ?>
        </div>
        <div class="col-lg-11 col-md-10 col-sm-9 col-xs-12 menu-direito">
            <?php include_once('section.php') ?>
            <div class="container">
                <div class="row linhaPrincipal">
                    <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12">
                        <div class="dadosPerfil text-center">
                            <img src="img/perfil.jpg" alt="perfil" class="img-fluid img-circle mx-auto" style="width: 5rem;">
                            <br>
                            <span class="nome">
                                Isaque Lopes
                            </span>
                            <img src="img/brasil.png" class="img-fluid mx-auto" style="width: 1rem;" alt="brasileiro">
                            <br>
                            <span class="disciplinaPrincipal"> Desenvolvedor Web</span>
                        </div>

                        <div class="dadosPerfilCampo">
                            <label for="idade">Data Nasc.:</label>
                            <input type="text" class="form-control" value="03/02/1996" disabled>

                            <label for="idade">E-mail:</label>
                            <input type="email" class="form-control" value="isaquelopesiwd@gmail.com" disabled>

                            <label for="idade">Password:</label>
                            <input type="text" class="form-control" value="****1234" disabled>
                        </div>

                        <div class="botoes">
                            <input type="submit" class="btn btn-success" value="Alterar">
                            <input type="submit" class="btn btn-dark" value="Limpar">
                        </div>

                        <div class="progressoCursos">
                            <h3 class="titulo">Progresso dos cursos</h3>
                            <p class="descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-circle icone-verde"></i>Matematica</li>
                                <li class="list-inline-item"><i class="fas fa-circle icone-vermelho"></i>Biologia</li>
                                <li class="list-inline-item"><i class="fas fa-circle icone-amarelo"></i>Quimica</li>
                                <li class="list-inline-item"><i class="fas fa-circle icone-azul"></i>Fisica</li>
                            </ul>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 10%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                            </div>
                        </div>

                        <div class="historicoHorario">
                            <h3 class="titulo">Sua atividade no SIC</h3>
                            <p class="descricao">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                            <span><strong>10h35m</strong></span>
                            <p class="dados">Tempo médio que você passsou por dia usando o sistema do SIC na última semana. </p>

                            <span><strong>0h25m</strong></span>
                            <p class="dados">Tempo médio que você passsou ausente no sistema por dia usando o sistema do SIC na última semana.</p>

                            <span><strong>0h51m</strong></span>
                            <p class="dados">Tempo médio entre cursos que você passsou por dia usando o sistema do SIC na última semana.</p>


                        </div>

                        <div class="cursosPreferidos">
                            <h3 class="titulo">Disciplinas mais acessadas</h3>
                            <p class="descricao">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>

                            <div class="progress">
                                <div class="progress-bar bg-primeiroLugar" role="progressbar" style="width: 50%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">50%</div>
                                <div class="progress-bar bg-segundoLugar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                                <div class="progress-bar bg-terceiroLugar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                            </div>

                            <ul class="list-unstyled">
                                <li class="">
                                    <i class="primeiroLugar fas fa-trophy"></i> Física
                                </li>
                                <li class="">
                                    <i class="segundoLugar fas fa-award"></i> Quimica
                                </li>
                                <li class="">
                                    <i class="terceiroLugar fas fa-award"></i> Matematica
                                </li>
                            </ul>

                        </div>


                    </div>

                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 ">

                        <div class="conteudoSecundario">
                            <h3 class="titulo">Cursos cadastrados</h3>
                            <p class="descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <!-- table -->
                        <table class="table">

                            <thead class="thead">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $servidor = mysqli_connect("localhost", "root", "", "veiculos");
                                $veiculos = mysqli_query($servidor, "select * from cadastro");
                                while ($veiculo = mysqli_fetch_array($veiculos)) {
                                    ?>
                                    <tr>
                                        <td scope="row"><?php echo $veiculo["id"]; ?></td>
                                        <td><?php echo $veiculo["placa"]; ?></td>
                                        <td>

                                            <a href="listar.php" class="btn btn-dark">
                                                <i class="fas fa-plus"></i>
                                            </a>
                                            <a href="editarDisciplina.php?id=<?php echo $veiculo['id']; ?>" class="btn btn-success">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a href="excluir.php?id=<?php echo $veiculo['id']; ?>" class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>

                                        </td>
                                    </tr>
                                <?php
                            } ?>
                            </tbody>
                        </table>
                        <!-- fim table -->
                    </div>

                </div>
            </div>
            <?php include_once('footer.php') ?>
        </div>
    </div>
</div>