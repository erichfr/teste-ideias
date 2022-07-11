<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Editar Atividades</title>
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
  </head>
  <body>
  
        <div class="container mt-5">
            <?= form_open('atividade/store');?>
            <div class="form-group">
                <label for="created_at"></label>
                <input type="hidden" name="created_at" value="<?= isset($atividade['created_at']) ? $atividade['created_at'] : ''; ?>" id="created_at" class="form-control mb-3">
            </div> 
            <div class="form-group">
                <label for="id">ID Projeto </label>
                <select class="form-control" id="id" name="id">
                <option><?= isset($atividade['id']) ? $atividade['id'] : ''; ?></option>
                </select>
            </div>    
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" name="descricao" value="<?= isset($atividade['descricao']) ? $atividade['descricao'] : ''; ?>" id="descricao" class="form-control">
            </div>
            <button type="submit" value="Salvar" class="btn btn-primary mt-4">Salvar</button>
            <input type="hidden" name="id" value="<?= isset($atividade['id']) ? $atividade['id'] : ''; ?>" id="id" class="form-control">
            <?= form_close();?>
        </div>
    
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>