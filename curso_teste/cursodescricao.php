<?php
          include "header.php";
?>

<!-- Conteúdo principal -->
<section class="container my-5">
  <div class="row align-items-center">
    <!-- Vídeo -->
    <div class="col-md-6 mb-4">
      <div class="video-container">
      <?php
    error_reporting (0);

    $id = $_GET["id"];
    $curso = $_GET["curso"];
    
          include "conexao.php";
          $dest = "SELECT * FROM cursos WHERE id_curso='$id' and nome_curso='$curso'";
          $res = mysqli_query($conect, $dest);                
              while ($r = mysqli_fetch_array($res)) {
               echo $r['link'] ?> 
      </div>
    </div>
    <!-- Texto -->
    <div class="col-md-6 mb-4">
      <h2><?php echo $r['titulo'] ?></h2>
      <p style="text-align: justify;">
        <?php echo $r['descricao'] ?>
      </p>
      <p>
        <strong>Categoria: </strong><?php echo $r['categoria'] ?>.<br>
             </p>
      <a href="cadastro.php" class="btn btn-primary">Inscrever-se</a>
    </div>
    <?php    
                 }
              ?>
  </div>
</section>
<br>
<br>
<br>



<!-- Rodapé -->
<?php
          include "rodape.php";
?>
