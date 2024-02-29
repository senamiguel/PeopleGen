<?php 
include "gerador.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PeopleGen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form action="random.php" method="get">
        <label for="number" >Quantas pessoas quer gerar?</label>
        <input type="number" name="number" min="1"max="20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="container">
    <div class="row">
        <?php if(isset($numero)){
        foreach ($pessoas as $pessoa): ?>
            <div class="col-sm-5 col-md-2 mb-3"> 
                <div class="card">
                    <img src="<?php echo $pessoa['foto']; ?>" class="card-img-top"> 
                    <div class="card-body">
                        <p class="card-title"><?php echo $pessoa['nome'] . ' ' . $pessoa['sobrenome']; ?></p>
                        <p class="card-text"><?php echo $pessoa['username']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach;} ?>
    </div>
</div>
</body>
</html>