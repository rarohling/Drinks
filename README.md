<h1>Autor</h1>
<b>Ricardo Alves Rohling</b><br>
e-mail: r.a.rohling@gmail.com

<h1>Drinks</h1>
<p>Projeto Front End, com implementação de uma Single Page Application para consumir os endpoints constantes no sítio https://www.thecocktaildb.com/api.php?ref=apilist.fun</p>

Tela inicial: 
Pagína onde é possível o usuário listar drinks por categories, glasses, ingredients ou alcoholic.

Tela com filtros: 
Pagína com o filtro selecionado inicialmente pelo usuário na tela inicial.

Tela de Drinks: 
Exibi Cards dos drinks disponíveis contendo imagem, descrição e botão de [+] detalhes que redireciona para uma outra tela.

Tela de detalhamento: 
Detalhamento baseando no Drink selecionado pelo usuário exibindo todas as informações.

Botão compartilhamento: 
Botão de compartilhamento disponivel na descrição do Drink.

Botão avaliação do Drink: 
Será disponivel um botão para avaliar o Drink, ao clicar o usuário tera a acesso a um modal onde podera avaliar o Drink com 1 até 5 estrelas.

Confirmação da avaliação: 
Após clicar nas estrelas desejadas o sistema processara a avaliação do Drink, e o usuário receberá uma mensagem de agradecimento.

<h1>PrtScn do Projeto</h1>
<img src="https://docs.google.com/uc?id=14-hXPB2zg0sAZk-xRZoxJWtndTHyhE3D"/>
<img src="https://docs.google.com/uc?id=1JAdLKmFXN3z1tc_lBp_pL7qvHxNffLbR"/>
<img src="https://docs.google.com/uc?id=1ME9_iSLDaaM6HCt8i0hbyZWRgWjEoR1i"/>
<img src="https://docs.google.com/uc?id=1IgH1YiIuckKPTVN0ad4pSmsbqG7EOgEs"/>
<img src="https://docs.google.com/uc?id=17D_YaB4bnXxzM8a--n6n54AZ5VP4zXEn"/>
<img src="https://docs.google.com/uc?id=177B839toSB21tuCk7QvAoBGBKojQruNe"/>
<img src="https://docs.google.com/uc?id=16ViRn1BA-AxXsv6uMPH6BPUvF_sLOUDZ"/>
<img src="https://docs.google.com/uc?id=1nnGg-0AZ56v7yltPzcfSMGoJyMZnFt8Y"/>

<h1>Tecnologias utilizadas</h1>
- PHP<br>
- CURL<br>
- HTML<br>
- CSS<br>
- JAVASCRIPT<br>

<h1>Rodar aplicação localmente</h1>

Para utilizar a aplicação localmente o usuário devera possuir um software de interpretação de scripts locais.

Orientamos a instalação do WampServer software interpretador de scripts locais.

Tutorial de instalação: https://wampserver.aviatechno.net/

Após instalação do WampServer o usuário deve mover os arquivos do projeto para a pasta "www" localizada dentro da pasta de instalaçao do WampServer.

Inicie o WampServer abra o navegador e digite o endereço "localhost/drink". (dentro da pasta drink deve existir todas as documentações deste projeto.)

Pronto, o projeto iniciara localmente.

<h1>Rodar aplicação web (deploy)</h1>

Para rodar a aplicação web o usuário precisara de um servidor de hospedagem e um dominio ativo.

Com as informações de hospedagens em mão o usuário deverá realizar os seguintes passos:

Passo 1: O primeiro passo é logar no cPanel. Para isso use o endereço seudominio/cpanel, adicione o login e senha nos campos respectivos. E depois clique em login.

Passo 2: Já dentro do painel, vamos localizar e selecionar a opção gerenciador de aquivos. 

Passo 3: Você precisar localizar a pasta public_html, a qual pertence à parte principal do seu site. Você deve clicar em cima dela e entrar na pasta. 

Passo 4: Já dentro da public_html, clique em carregar.

Na próxima tela, você pode clicar no botão selecionar o arquivo. Ou pode também arrastar os arquivos do projeto para dentro do cpanel.

Depois, o sistema vai iniciar o upload. Aguarde finalizar, e clique em voltar.

Na tela anterior, você vai ver que os arquivos que enviamos, agora estão presentes dentro da public_html.

Acesse novamente seu domínio, e seu site estará publicado.
