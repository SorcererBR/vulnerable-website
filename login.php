
<html>
<?php
    $login = $_POST['user'];
    $senha = $_POST['pass'];
    if($senha == '123' && $login == 'admin') {
      echo '<h2>Seja bem vindo, Administrador :)</h2><br/>';
      echo '<img src="_imgs/blackhat.png" style="height:300px;width:250px;"/>';
    } else {
      echo '<h2>Usuário e/ou senha invalido.</h2><br/>';
      echo '<img src="_imgs/blackhat_fail.jpg" style="height:300px;width:250px;"/>';
    }
 ?>
<br/>
<a href="index.php">Voltar</a>
</html>
