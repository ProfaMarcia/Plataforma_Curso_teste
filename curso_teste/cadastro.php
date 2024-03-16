<?php
          include "header.php";
?>

<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Cadastre-se!
        </div>
        <div class="card-body">
          <form method="POST" id="cadastroForm" onsubmit="return validarForm()">
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
              <label for="telefone">Telefone</label>
              <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(00) 00000-0000">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email">
            </div>
            <div class="form-group">
              <label for="senha">Senha</label>
              <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
            </div>
            <br>
            <input type="submit" name="enviar"  class="btn btn-primary">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
  function validarForm() {
    var nome = document.getElementById('nome').value;
    var telefone = document.getElementById('telefone').value;
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;

    if (nome === '' ||  telefone === '' || email === '' || senha === '') {
      alert('Por favor, preencha todos os campos.');
      return false;
    }

    return true;
  }
</script>
</body>
<br>
<br>
<br>
<br>


<?php 
error_reporting (0);
 
 include("conexao.php");
 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome	= $_POST ["nome"];
$telefone = $_POST ["telefone"];
$email = $_POST ["email"];
$senha = $_POST ["senha"];
$enviar = $_POST ["enviar"];


//Gravando no banco de dados !
 
//conectando com o localhost - mysql

if (isset($_POST['enviar'])){
    // removes backslashes
$query = "SELECT * FROM `alunos` WHERE email='$email'";
$result = mysqli_query($conect,$query);
$rows = mysqli_num_rows($result);

    if($rows==0){

        $query = "INSERT INTO alunos (id_aluno, nome , telefone, email,senha) 
        VALUES ('NULL','$nome' , '$telefone', '$email' , '$senha')";
         
        $query = mysqli_query($conect,$query);
        
        echo "<script>
        alert('Seu cadastro foi cadastrado com sucesso!');
        window.location='login.php';
        </script>";
   
     }else{

        echo "<script>
alert('E-mail já é cadastrado!');
window.location='cadastro.php';
</script>";

}


}
	


?> 

<!-- Rodapé -->
<?php
          include "rodape.php";
?>