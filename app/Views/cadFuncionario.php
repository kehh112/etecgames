<div class="formcad">
  <h1> Para cadastrar um funcionario, primeiro deve fazer o cadastrado como usuario</h1>
  <h2>Se já vez, Coloque a informaçãos abaixo:</h2>
    <form method="Post" class="border border-dark p-3 rounded">
        <div>
            <div class="col-md-8">
                <label for="codusu">Digite o Código do usuario </label>
                <input type="number" name="codusu" id="codusu" class="form-control" placeholder="Exemplo">
                
            </div>
        </div>
</div class="col-12">
<button type="submit" class="btn btn-primary">Buscar</button>
    </form>
</div>



<?php 

$request = service('request');
$codusu = isset($usuario->codusu)? $usuario->codusu : 0;
$emailUsu = isset($usuario->emailUsu)?$usuario->emailUsu:"";
    ?>

    <form method="Post">

  <div class="mb-3">
    <label for="codusu" class="form-label">Código Usuario</label>
    <input type="number" class="form-control" id="codusu" value="<?=$codusu?>" name="codusu" readonly aria-describedby="codHelp">
  </div>

  <div class="mb-3">
    <label for="emailusu" class="form-label">E-mail Usuario</label>
    <input type="email" class="form-control" id="emailUsu" value="<?=$emailUsu?>" name="emailUsu" aria-describedby="codHelp">
</div>

  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" name="nomeFun" aria-describedby="nomeHelp">
  </div>

  <div class="mb-3">
    <label for="Fone" class="form-label">Fone</label>
    <input type="text" class="form-control" id="fone" name="foneFun" aria-describedby="foneHelp">
  </div>

  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
