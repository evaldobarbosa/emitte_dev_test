# Olá, candidato!

Você que chegou aqui já foi selecionado para fazer o nosso teste, esperamos que você venha trabalhar conosco.

## Sobre o que você deve executar neste desafio

Vamos criar um serviço novo, exclusivo para clientes que geram muitas notas fiscais por dia. Um cliente novo somente fechará com a gente sob a promessa de que faremos um serviço personalizado para a necessidade dele e você é o desenvolvedor que está disponível para o desafio.

O nosso cliente tem um volume de notas fiscais bem grande e seus colaboradores levam muito tempo para gerar todas as NFs, então vamos ter que processá-las em lote. Para isso você receberá um arquivo CSV contendo os dados do consumidor e os dados dos itens de cada nota fiscal a ser processada. Para processar as notas você enviará requisições para o endpoint fake.geradornf.test/nfs/{tipo}.

Para enviar o arquivo, faça uma tela onde o cliente possa selecionar o arquivo em sua própria máquina e enviar para processamento. Salve os dados da nota fiscal no seu banco de dados antes de enviar.

Você deve guardar os dados de todas as notas processadas na nossa base de dados utilizando o endpoint fake.geradornf.test/processamento/nfs informando os dados de cada nota fiscal (cnpj, número e tipo da nota) e o cliente deve ser notificado com o total de notas processadas do arquivo.

Para mais informações sobre os endpoints, veja o arquivo [api/APIs.md](api/APIs.md). Utilize o arquivo nf.csv para o seu teste.

> IMPORTANTE: O escopo deste teste é totalmente fictício e não iremos utilizar o seu código para economizar o nosso trabalho.

## Fique atento

### Você deve ter em mente as seguintes restrições

- O usuário que tem acesso a essa funcionalidade deve estar logado e só vai poder processar arquivos com notas do cnpj da empresa à qual está vinculado;
- O arquivo deve ser guardado para conferência posterior;
- Você deve guardar informações sobre o processamento de cada item;
- Documente ao máximo que puder a sua solução.

## Instruções para a parte do Frontend

A aplicação frontend deve ser desenvolvida na pasta `src`, que se encontra dentro da pasta `web`. O projeto frontend, baseado em React, já possui as configurações iniciais para desenvolvimento com Vite, ESLint, Prettier e Typescript.

Quanto à estilização, você tem total liberdade. Pode-se utilizar qualquer biblioteca de componentes, como Chakra-UI, Material-UI, Styled-Components, entre outras, ou até mesmo CSS puro.

Segue o link para o  [Figma](https://www.figma.com/file/Dx9V3dLGvKDa0euP7rA299/Teste-Emitte?type=design&node-id=0%3A1&mode=design&t=fp4FgS7KjEiU0hVN-1), onde você encontrará o layout da aplicação. Siga o ao máximo.

## Quanto tempo você tem para desenvolver a solução

Você tem o prazo de 3 dias para implementar essa funcionalidade. Quando terminar, faça um Pull Request para este repositório.

## O que eu devo fazer para iniciar esta aplicação

Você deve fazer um fork deste repositório, baixá-lo na sua máquina e rodar na sua máquina a sequência de comandos:

### Se você tem docker na sua máquina

```
docker-compose up -d
docker-compose exec php_teste_emitte composer install
docker-compose exec php_teste_emitte php artisan key:generate
docker-compose exec php_teste_emitte composer renew
```

### Se você ainda não usa docker

Instale um servidor de banco de dados como postgres, mysql ou sqlite. Configure o seu arquivo .env e depois rode os comandos.

```
composer install
php artisan key:generate
composer renew
```

Agora adicione o host `fake.geradornf.test` necessário na sua máquina. Se você usa linux, ele deve ser adicionado no final do arquivo /etc/hosts. Adicione também o nf.processador.test ao seu /etc/hosts.

Você pode adicionar uma linha assim no seu arquivo:

```
127.0.0.1   fake.geradornf.test nf.processador.test
```

Você poderá utilizar o usuário emitte@emitte.com.br com a senha emitte2023 para fazer login na sua aplicação e processar o arquivo.

Você vai trabalhar com Laravel e Postgres neste teste.

Você encontrará um arquivo com uma coleção básica de requisições para o

## Ficamos felizes com o seu interesse

A emitte está em crescimento. Agradecemos o seu interesse em trabalhar conosco e estamos ansiosos pelo seu PR.
