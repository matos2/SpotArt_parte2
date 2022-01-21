<?php
//arquivo de conexao
require_once('config/conn.php');

//seleciona foto
$stmt = $pdo->query('SELECT id, nome, tipo, tamanho FROm fotos');
?>

<div class="row">

<?php while ($foto = stmt->fetchObject()): ?>

<div class="col-sm-6 col-md-4">

<div class="thumbnail">

<img scr="imagem.php?id=<?php echo $foto->id ?>" />

<div class="caption">
<strong>Nome:</strong> <?php echo $foto->nome ?> <br/>
<strong>Tipo:</strong> <?php echo $foto->tipo ?> <br/>
<strong>Tamanho:</strong> <?php echo $foto->tamanho ?> <br/>
</div>

</div>

</div>

<?php endwhile ?>

</div>