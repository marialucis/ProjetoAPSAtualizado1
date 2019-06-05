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
            <!-- inicio do listar -->
            <div class="tab-pane fade show" id="list-listar" role="tabpanel" aria-labelledby="list-messages-list">
                <div class="col-lg-12 text-center">
                    <div class="listarAluno text-left">
                        <h3 class="titulo">Listagem das disciplinas</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur optio labore, aperiam quasi, dolor debitis quidem quibusdam voluptas.</p>
                    </div>
                    <!-- table -->
                    <table class="table">

                        <thead class="thead">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Disciplina</th>
                                <th scope="col">Conteudo</th>
                                <th scope="col">Categoria</th>
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
                                    <td><?php echo $veiculo["marca"]; ?></td>
                                    <td><?php echo $veiculo["anoFabricacao"]; ?></td>
                                    <td><?php echo $veiculo["categoria"]; ?></td>
                                    <td>
                                        <a href="editarDisciplina.php?id=<?php echo $veiculo['id']; ?>" class="btn btn-success">
                                            <i class="fas fa-pencil-alt"></i>
                                            Editar
                                        </a>
                                        <a href="excluir.php?id=<?php echo $veiculo['id']; ?>" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                            Eliminar
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
            <?php include_once('footer.php') ?>
        </div>
    </div>
</div>