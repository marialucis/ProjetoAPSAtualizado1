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
            <form action="" method="" class="formularioCadastro">
                <div class="container">
                    <h3 class="formularioDisciplina">Alteração de disciplina</h3>
                    <p class="textoFormularioDisciplina">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label class="textoFormulario" for="nome">Nome:</label>
                            <input type="text" id="nome" class="form-control inputFormulario" placeholder="Ex: Português" maxlength="50">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label class="textoFormulario" for="conteudo">Conteúdo:</label>
                            <input type="text" id="conteudo" class="form-control inputFormulario" placeholder="Ex: Artigos" maxlength="50">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label class="textoFormulario" for="categoria">Categoria:</label>
                            <select class="custom-select inputFormulario" id="categoria" name="categoria">
                                <option>Selecione</option>
                                <option value="ensinoFundamental">Ensino Fundamental</option>
                                <option value="ensinoMedio">Ensino Médio</option>
                                <option value="ensinoSuperior">Ensino Superior</option>
                            </select>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-success" value="Alterar">
                    <input type="submit" class="btn btn-danger" value="Cancelar">
                    <input type="submit" class="btn btn-dark" value="Limpar">
                </div>

            </form>
            <?php include_once('footer.php') ?>
        </div>
    </div>
</div>