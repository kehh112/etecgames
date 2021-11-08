<table class="table">
    <thead>
        <th>Código</th>
        <th>Email</th>
        <th>Alterar</th>
        <th>Excluir</th>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $usuario) : ?>
            <tr>
                <td>
                    <?php echo ($usuario->codusu) ?>
                </td>
                <td>
                    <?php echo ($usuario->emailUsu) ?>
                </td>
                <td>
                <form method="POST">
                        <input type="hidden" name="codusuAlterar" value="<?php echo ($usuario->codusu) ?>">
                        <button type="submit" class="btn btn-danger">Alterar</button>
                    </form>
                </td>
                <td>
                    <form method="POST">
                        <input type="hidden" name="codusu" value="<?php echo ($usuario->codusu) ?>">
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>

                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>