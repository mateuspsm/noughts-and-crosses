# Joga Da Velha
## Versão
## Sobre o Jogo

### Descrição

O objetivo deste projeto é a construção de uma implementação para a web de uma aplicação web em PHP, sem o uso de bancos de dados.
Cada projeto deve ser realizado por uma equipe de, no máximo, 2 alunos.
Atenção:
1. O projeto será avaliado de acordo principalmente com o código PHP implementado (design e
aparência da página não são importantes, desde que cumpridos os requisitos abaixo).
2. Todos os membros da equipe devem ser capazes de explicar todas as linhas de código do projeto.

### Arquitetura do site
Deve ser desenvolvido um site completo e navegável, utilizando HTML, CSS e imagens conforme necessário. Deve haver uma página inicial chamada index.php e um design coerente que permita o acesso fácil às seções do site.

Todas as páginas que compõem o site devem ter um layout consistente, com elementos comuns como cabeçalho da página, menu de navegação e rodapé com informações. Para tal, deve ser usado um dos dois métodos:
1. O cabeçalho e o rodapé da página são armazenados em arquivos separados e são incluídos dinamicamente em todas as seções do site.
2. Apenas a página index.php é chamada pelo usuário, com as seções sendo passadas como parâmetros (ex.: index.php?s=sobre ). Nesse caso, o conteúdo é armazenado em arquivos separados, incluídos dinamicamente na página principal. 

Além do conteúdo principal, o site deve conter, no mínimo, as seguintes seções:
1. Página inicial com uma descrição geral do site.
2. Informações sobre os autores.

### Conteúdo principal: Jogo da velha

1. Antes de iniciar cada partida, o jogador deve poder escolher quem começa: ele ou a máquina. No momento em que o jogo começa, deve ser iniciada uma contagem de tempo.
2. O programa deve gerar uma tabela em HTML correspondente a uma grade 3x3, a qual deve estar contida em um formulário. Nas células em branco, deve haver um elemento que permita ao jogador escolher ⨯ ou ○ . A cada jogada, o usuário deve preencher uma única célula e enviar a informação ao servidor. Deve ser usada uma sessão, para rastrear o progresso do jogador.
3. Após cada jogada do usuário, o programa deve realizar a sua jogada e retornar a grade ao usuário com valores atualizados nos campos já preenchidos. A jogada do programa pode ser realizada de forma aleatória ou
(preferencialmente) seguindo estratégias pré-definidas. As estratégias do jogo-da-velha são bem conhecidas e fáceis de se encontrar na web.
4. Ao concluir o jogo, o programa deve exibir uma mensagem informando quem foi o vencedor (ou se houve empate) e informar o tempo total de jogo.