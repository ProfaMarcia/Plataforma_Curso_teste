<?php
          include "header.php";
?>

<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Login
        </div>
        <div class="card-body">
          <form id="loginForm" onsubmit="return validarForm()">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email">
            </div>
            <div class="form-group">
              <label for="senha">Senha</label>
              <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Entrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>




<!-- Bootstrap JavaScript e dependências -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  function validarForm() {
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;

    if (email === '' || senha === '') {
      alert('Por favor, preencha todos os campos.');
      return false;
    }

    // Aqui você pode adicionar a lógica para autenticação com o backend

    return true;
  }
</script>

<?php
          include "rodape.php";
?>

</body>