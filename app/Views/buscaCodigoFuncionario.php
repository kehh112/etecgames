<div class="formcad">
  <h1> Busca por código o funcionario:</h1>
  
    <form method="Post" class="border border-dark p-3 rounded">
        <div>
            <div class="col-md-8">
                <label for="codfun">Digite o Código do funcionário </label>
                <input type="number" name="codFun" id="codfun" class="form-control" placeholder="Exemplo">
                
            </div>
        </div>
</div class="col-12">
<button type="submit" class="btn btn-primary">Buscar</button>
    </form>
</div>



<?php 

$request = service('request');

$codfun = isset($funcionario->codFun)? $funcionario->codFun: 0;
$nomeFun = isset($funcionario->nomeFun)?$funcionario->nomeFun:"";
$foneFun = isset($funcionario->foneFun)?$funcionario->foneFun:"";
if($codfun){
    ?>

    <form method="Post">

  <div class="mb-3">
    <label for="codFun" class="form-label">Código funcionario</label>
    <input type="number" class="form-control" id="codFun" value="<?=$codfun?>" name="codFunAlterar" readonly aria-describedby="codHelp">
  </div>

  <div class="mb-3">
    <label for="nomeFun" class="form-label">Nome funcionario</label>
    <input type="text" class="form-control" id="nomeFun" value="<?=$nomeFun?>" name="nomeFun" aria-describedby="codHelp">
</div>

<div class="mb-3">
    <label for="foneFun" class="form-label">Fone</label>
    <input type="number" class="form-control" id="foneFun" value="<?=$foneFun?>" name="foneFun" aria-describedby="codHelp">
</div>

  <button type="submit" class="btn btn-primary">Alterar</button>
  <button type="submit" class="btn btn-primary">Deletar</button>
</form>
<?php
}
?>