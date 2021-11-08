<form method="POST">
    <div class="mb-3 col-2" >
        <label class="form-label" for="codigousuarioinput">Código: </label>
        <input class="form-control text-center" type="text" name="codusuAlterar" readonly id="codigousuarioinput" value="<?php echo($usuario->codusu)?>">
    </div>
    <div class="mb-3 col-6">
        <label class="form-label" for="emailusuarioinput">Email: </label>
        <input class="form-control" type="text" name="emailUsu" id="emailusuarioinput" value="<?php echo($usuario->emailUsu)?>">
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Alterar</button>
    </div>
</form>