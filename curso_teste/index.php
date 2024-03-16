<?php
          include "header.php";
?>

<!-- Banner principal -->
<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">Aprenda algo novo hoje!</h1>
    <p class="lead text-muted">Explore nossa vasta coleção de cursos online em diversas áreas.</p>
    <p>
      <a href="cursos.php" class="btn btn-primary my-2">Explorar Cursos</a>
      <a href="cadastro.php" class="btn btn-success my-2">Inscreva-se</a>
    </p>
  </div>
</section>

<!-- Seção de cursos em destaque -->
<section class="container">
  <h2 class="text-center mb-4">Cursos em Destaque</h2>
  <div class="row">
  <?php
          include "conexao.php";
          $dest = "SELECT * FROM destaque WHERE ativo='SIM'";
          $res = mysqli_query($conect, $dest);                
              while ($r = mysqli_fetch_array($res)) {
                $id = $r['id_destaque'];
                $nome = $r['nome_curso'];
          ?>
    <!-- Card de exemplo - Você pode adicionar mais cards com informações sobre cursos -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <div class="card-body">
          <h5 class="card-title"><?php echo $r['titulo'] ?></h5>
          <img src="<?php echo $r['link'] ?>" alt="cursovideophp" width="320" height="200"/>
          <p style="text-align: justify;" class="card-text"><?php echo $r['descricao'] ?></p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
            <?php echo '<a href="cursodescricao.php?curso='.$nome.'&id='.$id.'';?>" ><button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button></a>
            <a href="cadastro.php"><button type="button" class="btn btn-sm btn-outline-secondary">Inscreva-se</button></a>
             
            </div>
          </div>
        </div>
      </div>
    </div>
            <?php    
                 }
              ?>
    <!-- Fim do card de exemplo -->

   

     

    
  </div>
</section>

<!-- Seção de depoimentos de alunos -->
<section class="bg-light">
  <div class="container py-4">
    <h2 class="text-center mb-4">Depoimentos de Alunos</h2>
    <div class="row">
      <!-- Card de depoimento de aluno -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
            <p class="card-text">"Excelente plataforma! Os cursos são muito bem estruturados e fáceis de entender. Recomendo a todos."</p>
          </div>
          <div class="card-footer text-center">
            <small class="text-muted">- João Silva</small>
          </div>
        </div>
      </div>
      <!-- Fim do card de depoimento de aluno -->
   
      <!-- Adicione mais cards de depoimentos aqui -->

        <!-- Card de depoimento de aluno -->
        <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
            <p class="card-text">"Excelente plataforma! Os cursos são muito bem estruturados e fáceis de entender. Recomendo a todos."</p>
          </div>
          <div class="card-footer text-center">
            <small class="text-muted">- João Silva</small>
          </div>
        </div>
      </div>
      <!-- Fim do card de depoimento de aluno -->

        <!-- Card de depoimento de aluno -->
        <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
            <p class="card-text">"Excelente plataforma! Os cursos são muito bem estruturados e fáceis de entender. Recomendo a todos."</p>
          </div>
          <div class="card-footer text-center">
            <small class="text-muted">- João Silva</small>
          </div>
        </div>
      </div>
      <!-- Fim do card de depoimento de aluno -->
    </div>
  </div>
</section>



<!-- Rodapé -->
<?php
          include "rodape.php";
?>