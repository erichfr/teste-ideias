<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Atividades</title>
    <style>
        ul.pagination li {
            display: inline;
        }
        ul.pagination li a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
        }
        .active {
            background-color: #4CAF50;
            color: white;
        }
        ul.pagination li a:hover:not(.active) {
            background-color: #ddd;
        }
 </style>    
 <script>
    function confirma(){
    if(!confirm('Deseja realmente excluir?')){
        return false;
    }
    return true;
}
 </script>
  </head>
  <body>
    <div class="container mt-5">
        <?= anchor(base_url('atividade/create'), 'Nova Atividade', ['class' => 'btn btn-success mb-3']) ?>
        <?= anchor(base_url('projeto/create'), 'Cadastrar Projeto', ['class' => 'btn btn-info mb-3 ml-3']) ?>
        <?= anchor(base_url('atividade/search'), 'Buscar Atividade', ['class' => 'btn btn-secondary mb-3 ml-3']) ?>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Data de Cadastro</th>
            <th>Descrição</th>
            <th>Id do Projeto</th>
            <th>Ações</th>
        </tr>
        <?php foreach($atividades as $atividade): ?>
            <tr>
                <td><?= $atividade['id'] ?></td>
                <td><?= $atividade['dataCadastro'] ?></td>
                <td><?= $atividade['descricao'] ?></td>
                <td><?= $atividade['idProjeto'] ?></td>
                
                <td>
                <?= anchor('atividade/edit/'.$atividade['id'], 'Editar', ['class' => 'btn btn-primary']) ?>
                <?= anchor('atividade/delete/'.$atividade['id'], 'Excluir', ['onclick' => 'return confirma()', 'class' => 'btn btn-danger']) ?>
                </td>
            </tr>
        <?php endforeach; ?>    
    </table>
    <?= $pager->links(); ?>

    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>