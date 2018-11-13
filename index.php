<html>
<head>
   <meta charset="UTF-8"/>
   <title>Teste 2 - User Bruteforce</title>
</head>
<body>
  <h1>Seja bem vindo a uma pagina de login aleatória</h1>
  <p>Preciso saber se voce é administrador (admin) mesmo. Esta incrivel pagina irá provar-me sua autenticidade!</p>

  <form action='login.php' method='POST'>
      <fieldset style="width: 30%;">
        <legend> Autentique-se! </legend>
        <label>Usuário: </label><input type="text" name='user' /><br/><br/>
        <label>Senha: </label>&nbsp;&nbsp;&nbsp;<input type="password" name='pass' style="width: 100px;" /><br/><br/>
        <input type="submit" value="Entrar">
      </fieldset>
  </form>
  <br/>
  <img src='_imgs/secure.jpg' style="width: 200px;height: 200px;"/>
</body>
</html>
