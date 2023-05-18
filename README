# CRUD de Usuários utilizando CodeIgniter

Este é um projeto de exemplo que demonstra a criação de um CRUD (Create, Read, Update, Delete) de usuários utilizando o framework CodeIgniter. O projeto possui uma estrutura básica para gerenciar informações de usuários, como nome, telefone, endereço, cidade e país.

## Pré-requisitos

Certifique-se de ter os seguintes requisitos instalados em seu ambiente de desenvolvimento:

- PHP versão 7.2 ou superior
- CodeIgniter versão 3.x
- Banco de dados compatível com CodeIgniter (MySQL, PostgreSQL, etc.)

## Configuração

1. Clone este repositório em sua máquina local ou faça o download dos arquivos.

2. Importe o script SQL fornecido abaixo para criar a tabela de usuários e inserir dados de exemplo:

```sql
CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255),
  telefone VARCHAR(15),
  endereco VARCHAR(255),
  cidade VARCHAR(100),
  pais VARCHAR(100)
);

INSERT INTO usuarios (nome, telefone, endereco, cidade, pais)
VALUES
  ('João Silva', '(11) 1234-5678', 'Rua A, 123', 'São Paulo', 'Brasil'),
  ('Maria Santos', '(21) 9876-5432', 'Avenida B, 456', 'Rio de Janeiro', 'Brasil'),
  ('Pedro Almeida', '(31) 5555-1234', 'Rua C, 789', 'Belo Horizonte', 'Brasil'),
  ('Ana Oliveira', '(51) 9999-8888', 'Rua D, 321', 'Porto Alegre', 'Brasil'),
  ('Carlos Pereira', '(85) 7777-2222', 'Avenida E, 654', 'Fortaleza', 'Brasil');
```

Certifique-se de executar o script SQL em seu banco de dados antes de prosseguir.

3. Configure a conexão com o banco de dados no arquivo `application/config/database.php` do CodeIgniter, fornecendo as informações corretas para o seu banco de dados:

```php
$db['default'] = array(
	...
	'hostname' => 'seu_host',
	'username' => 'seu_usuario',
	'password' => 'sua_senha',
	'database' => 'seu_banco_de_dados',
	...
);
```

Substitua `'seu_host'`, `'seu_usuario'`, `'sua_senha'` e `'seu_banco_de_dados'` pelas informações de conexão corretas.

4. Após configurar a conexão com o banco de dados, você pode iniciar o servidor local ou implantar o projeto em um servidor web compatível com PHP.

## Funcionalidades

O projeto possui as seguintes funcionalidades básicas:

- Listagem de todos os usuários cadastrados.
- Visualização dos detalhes de um usuário específico.
- Adição de um novo usuário.
- Edição dos dados de um usuário existente.
- Exclusão de um usuário.

## Contribuição

Contribuições são bem-vindas! Se você quiser melhorar este projeto, sinta-se à vontade para enviar pull requests.

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).
