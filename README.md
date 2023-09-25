# Design patterns

### O que são design patterns?
* Padrões de projeto são soluções genéricas para problemas recorrentes do desenvolvimento de software
* Existem três principais categorias de padrões de projeto
    * Comportamentais:
    Esses padrões se concentram nas interações entre objetos e como eles comunicam e colaboram uns com os outros. Eles ajudam a tornar o sistema mais flexível e fácil de entender. Alguns exemplos incluem o padrão <b>Observer, Strategy e Command</b>
        <br>
    * Estruturais
    Esses padrões lidam com a composição de classes e objetos para formar estruturas maiores. Eles ajudam a garantir que os sistemas sejam escaláveis e fáceis de modificar. Alguns exemplos são o padrão <b>Adapter, Bridge e Composite</b>
    <br>
    * Criacionais
    Estes padrões tratam da criação de objetos de forma apropriada para a situação, ajudando a garantir que o sistema seja flexível e fácil de manter. Exemplos incluem o padrão <b>Singleton, Factory Method e Abstract Factory</b>.

#### Padrões comportamentais
##### Strategy
Como diminuir a complexidade do nosso código, trocando múltiplas condicionais por classes
[https://refactoring.guru/design-patterns/strategy](https://refactoring.guru/design-patterns/strategy)

##### Chain of Responsability
O padrão Chain of Responsibility é um padrão comportamental que permite que você passe solicitações por uma cadeia de manipuladores. Cada manipulador decide se processa a solicitação ou a passa para o próximo manipulador na cadeia

[https://refactoring.guru/pt-br/design-patterns/chain-of-responsibility](https://refactoring.guru/pt-br/design-patterns/chain-of-responsibility)

##### Template method

Template method é um padrão comportamental que define a estrutura de um algoritmo em uma classe base, mas permite que as subclasses substituam partes desse algoritmo sem alterar sua estrutura geral, dessa forma é fácil reutilizar código comum.

[https://refactoring.guru/design-patterns/template-method](https://refactoring.guru/design-patterns/template-method)

##### State method

O padrão State tem como objetivo permitir que um objeto altere seu comportamento interno quando seu estado muda. Isso é útil quando um objeto pode estar em um de vários estados e precisa executar diferentes ações com base em seu estado atual.

[https://refactoring.guru/design-patterns/state](https://refactoring.guru/design-patterns/state)

##### Command

[https://refactoring.guru/pt-br/design-patterns/command](https://refactoring.guru/pt-br/design-patterns/command)

##### Observer

[https://refactoring.guru/pt-br/design-patterns/observer](https://refactoring.guru/pt-br/design-patterns/observer)


##### Iterator

O Iterator é um padrão de projeto comportamental que permite a você percorrer elementos de uma coleção sem expor as representações dele.

[https://refactoring.guru/pt-br/design-patterns/iterator](https://refactoring.guru/pt-br/design-patterns/iterator)


#### Padrões estruturais

##### Adapter

O Adapter é um padrão que permite que objetos incompativeis possam trabalhar juntas. Isso atende o Principio da inversão de dependência do SOLID.

[https://refactoring.guru/pt-br/design-patterns/adapter](https://refactoring.guru/pt-br/design-patterns/adapter)

##### Bridge

ChatGPT:

O padrão de design Bridge é um padrão estrutural que visa separar uma abstração de sua implementação, permitindo que ambas possam evoluir de forma independente sem que uma afete a outra. Esse padrão é útil quando você tem um conjunto de classes complexas que podem ter múltiplas variações, e deseja evitar a explosão de subclasses ao lidar com essas variações.

O Bridge é composto por duas hierarquias de classes separadas:

<b>Abstraction (Abstração)</b>: Essa hierarquia representa a interface do cliente e contém uma referência a um objeto da hierarquia de implementação. A Abstração define métodos e comportamentos que serão usados pelo cliente, geralmente em um nível mais alto de abstração. No entanto, esses métodos delegam a implementação real para o objeto da hierarquia de Implementação.

<b>Implementor (Implementação)</b>: Essa hierarquia contém as classes que implementam a funcionalidade real. Ela define a interface para as implementações concretas e contém os métodos que realmente executam o trabalho.

O principal objetivo do Bridge é permitir que você combine diferentes abstrações com diferentes implementações de forma flexível, sem que seja necessário criar subclasses para todas as combinações possíveis, como aconteceria em uma abordagem de herança simples.

Vantagens do Bridge Pattern:

* Separação de preocupações: O Bridge separa a abstração da implementação, o que facilita a manutenção e a evolução de ambas independentemente.

* Flexibilidade: Permite que você crie novas abstrações e implementações de forma independente, facilitando a composição de diferentes combinações.

* Redução de classes filhas: Evita a criação de uma hierarquia massiva de subclasses quando há várias variações tanto na abstração quanto na implementação.

* Extensibilidade: Facilita a adição de novas funcionalidades ou variações sem afetar o código existente.

Um exemplo comum de Bridge Pattern poderia ser a criação de formas geométricas, onde você tem diferentes tipos de formas (círculos, quadrados, triângulos) e diferentes modos de desenho (desenho a lápis, pintura, desenho digital). O Bridge permitiria criar abstrações para as formas e implementações para os modos de desenho, permitindo que você combine qualquer forma com qualquer modo de desenho de forma flexível.

Em resumo, o padrão Bridge é útil quando você precisa separar uma abstração da sua implementação, facilitando a composição de diferentes combinações e evitando a criação excessiva de subclasses. Isso torna o código mais flexível e mais fácil de manter à medida que novas variações são introduzidas.

[https://refactoring.guru/pt-br/design-patterns/bridge](https://refactoring.guru/pt-br/design-patterns/bridge)

##### Decorator

O Decorator é um padrão que permite adicionar responsabilidades a um objetos de formadinâmica, sem a necessidade de criar subclasses infinitas.

[https://refactoring.guru/pt-br/design-patterns/decorator](https://refactoring.guru/pt-br/design-patterns/decorator)