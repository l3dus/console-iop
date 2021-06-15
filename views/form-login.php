<?php
    $alertaLogin = strlen($alertaLogin) ? '<div class="alert alert-danger">'.$alertaLogin.'</div>' : '';
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <form class="form-signin" method="post">
                <label class="sr-only">Domínio</label>
                <select name="domain"  class="form-select form-select mb-3" aria-label=".form-select-lg example">
                    <option value="DPOATJ1\">DPOATJ1</option>
                </select>
                <hr>
                <label class="sr-only">Usuário</label>
                <input type="text" name="user" id="inputEmail" class="form-control" required autofocus>
                <label class="sr-only">Senha</label>
                <input type="password" name="pass" id="inputPassword" class="form-control" required>
                <?=$alertaLogin?>
                <button class="btn btn-lg btn-primary btn-block" name="action" value="signin" type="submit">Entrar</button>

            </form>
        </div>
    </div>
</div>