<h1 align="center">Atividade Final</h1>

<p align="center">CRUD feito em Laravel de tabelas baseadas em um sistema na área da saúde</p>

# :incoming_envelope: API

<h2>Rotas de Usuários</h2>

-   <p><span style="color: #00b050">GET </span>/users - Usada para recuperar todos os usuários cadastrados, pode ser acessada sem autenticação.</p>

-   <p><span style="color: #00b050">GET </span>/users/{user} - Usada para buscar um usuário especifico cadastrado, pode ser acessada sem autenticação.</p>

-   <p><span style="color: #4472c4">POST </span>/users - Usada para criar um novo usuário, deve ser passado no corpo da requisição as informações do usuário a ser criado (name, email, password). Não precisa de nenhum acesso especial para ser acessada</p>

-   <p><span style="color: #7030a0">PUT </span>/users/{user} - Usada para atualizar um usuário cadastrado, pode ser acessada apenas por administradores autenticados.</p>
-   <p><span style="color: red">DELETE </span>/users/{user} - Usada para deletar um usuário da base de dados, é necessário estar autenticado.</p>

<h2>Rotas de Médicos</h2>

-   <p><span style="color: #00b050">GET </span>/doctors - Usada para recuperar todos os médicos cadastrados, pode ser acessada sem autenticação.</p>

-   <p><span style="color: #00b050">GET </span>/doctors/{doctor} - Usada para buscar um médico especifico cadastrado, pode ser acessada sem autenticação.</p>

-   <p><span style="color: #4472c4">POST </span>/doctors - Usada para criar um novo médico, deve ser passado no corpo da requisição as informações necessárias para o cadastro (name, crm, email). Somente administradores podem cadastrar novos médicos.</p>

-   <p><span style="color: #7030a0">PUT </span>/doctors/{doctor} - Usada para atualizar um médico cadastrado, pode ser acessada apenas por administradores autenticados.</p>
-   <p><span style="color: red">DELETE </span>/doctors/{doctor} - Usada para deletar um médico da base de dados, é necessário estar autenticado.</p>

<h2>Rotas de Consultas</h2>

-   <p><span style="color: #00b050">GET </span>/appointments - Usada para recuperar todas as consultas cadastradas, pode ser acessada sem autenticação.</p>

-   <p><span style="color: #00b050">GET </span>/appointments/{appointment} - Usada para buscar uma consulta especifica cadastrada, pode ser acessada sem autenticação.</p>

-   <p><span style="color: #4472c4">POST </span>/appointments - Usada para criar uma nova consulta, deve ser passado no corpo da requisição as informações da consulta a ser criada (description, date, type). Somente administradores podem criar novas consultas.</p>

-   <p><span style="color: #7030a0">PUT </span>/appointments/{appointment} - Usada para atualizar uma consulta cadastrada, pode ser acessada apenas por administradores autenticados.</p>
-   <p><span style="color: red">DELETE </span>/appointments/{appointment} - Usada para deletar uma consulta da base de dados, é necessário estar autenticado.</p>

<h2>Rotas de Vacinas</h2>

-   <p><span style="color: #00b050">GET </span>/vaccines - Usada para recuperar todas as vacinas cadastradas, pode ser acessada sem autenticação.</p>

-   <p><span style="color: #00b050">GET </span>/vaccines/{vaccine} - Usada para buscar uma vacina em especifico, pode ser acessada sem autenticação.</p>

-   <p><span style="color: #4472c4">POST </span>/vaccines - Usada para criar um novo registro de vacina, deve ser passado no corpo da requisição as informações do registro a ser criado (name, expected_date, application_date). Somente administradores podem criar novos registros de vacina.</p>

-   <p><span style="color: #7030a0">PUT </span>/vaccines/{vaccine} - Usada para atualizar uma vacina cadastrada, pode ser acessada apenas por administradores autenticados.</p>
-   <p><span style="color: red">DELETE </span>/vaccines/{vaccine} - Usada para deletar um registro de vacina da base de dados, é necessário estar autenticado.</p>
