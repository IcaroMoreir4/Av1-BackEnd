# Sistema de Gerenciamento de Empréstimos de Livros

Este repositório contém o código PHP para um sistema de gerenciamento de empréstimos de livros para uma biblioteca, desenvolvido como parte de uma avaliação de backend da faculdade. O código é uma interpretação de um diagrama UML fornecido durante a avaliação. O sistema permite a criação e gerenciamento de empréstimos, livros, membros da biblioteca e bibliotecários.

## Estrutura do Código

O sistema é composto por várias classes que representam diferentes entidades dentro da biblioteca:

- `Emprestimo`: Gerencia os detalhes de um empréstimo, incluindo a data de empréstimo e devolução, livro emprestado, membro que pegou o livro emprestado e o status do empréstimo.
- `Bibliotecario`: Responsável por realizar e consultar empréstimos e consultar detalhes dos livros.
- `Livro`: Mantém informações sobre os livros, como ID, nome, autor e status de disponibilidade.
- `Membro`: Representa um membro da biblioteca que pode consultar seus empréstimos.
- `Pessoa`: Classe abstrata que define propriedades e métodos comuns a `Bibliotecario` e `Membro`.

## Funcionalidades

O sistema possui várias funcionalidades principais:

- **Gerenciamento de Empréstimos**: Inclui a criação de novos empréstimos, renovação e devolução de empréstimos.
- **Consulta de Livros**: Permite aos bibliotecários consultar informações sobre livros, como nome e autor.
- **Reserva de Livros**: Livros podem ser reservados, mudando seu status para "Reservado".

## Configuração e Uso

Para utilizar este sistema, você precisará de um servidor com suporte para PHP. Faça o upload dos arquivos para o seu servidor e acesse-os através do navegador para começar a utilizar as funcionalidades do sistema.

## UML Diagram

O sistema foi desenvolvido com base em um diagrama UML fornecido. Você pode visualizar o diagrama de UML aqui: 
![Diagrama UML](./Imagem%20do%20WhatsApp%20de%202024-04-23%20à(s)%2018.41.24_57aabfd6.jpg).

## Contribuições

Contribuições para o projeto são bem-vindas. Se você identificar bugs ou quiser adicionar novas funcionalidades, sinta-se à vontade para criar um pull request.

---
