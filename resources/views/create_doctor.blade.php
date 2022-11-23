<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar médico</title>
</head>
<body>
    <h1>Criar médico</h1>
   <form action="/doctors" method="POST">
    <label for="name">Nome</label>
    <input type="text" name="name" id="name">

    <label for="crm">CRM</label>
    <input type="text" name="crm" id="crm">

    <label for="email">Email</label>
    <input type="text" name="email" id="email">

    <label for="password">Senha</label>
    <input type="text" name="password" id="password">
    <br /><button type="submit">Criar</button>
   </form>
</body>
</html>