# 🎓 Sistema de Gerenciamento de Alunos (PHP & MySQL)

Este projeto demonstra a integração entre uma aplicação web desenvolvida em **PHP** e um banco de dados **MySQL** utilizando a extensão **PDO** (PHP Data Objects), que garante uma comunicação segura e eficiente com o banco de dados.

---

## 🚀 Funcionalidades

* **Conexão com Banco de Dados**: Centralizada em um único arquivo para fácil manutenção.
* **Listagem em Tempo Real**: Exibe todos os alunos cadastrados em uma tabela HTML estilizada.
* **Exclusão Segura**: Permite remover registros utilizando *Prepared Statements* para evitar ataques de SQL Injection.
* **Redirecionamento Automático**: Após excluir um registro, o usuário é levado de volta à página principal.

---

## 📂 Estrutura de Arquivos

| Arquivo | Descrição |
| :--- | :--- |
| `conexao.php` | Configurações de acesso ao MySQL (Host, DB, Usuário e Senha). |
| `index.php` | Página principal que consulta e exibe a tabela de alunos. |
| `excluir.php` | Script lógico que processa a remoção do aluno via ID. |
| `script.sql` | Comandos SQL para criação do banco, tabela e inserção de dados iniciais. |

---

## 🛠️ Como Configurar

### 1. Preparar o Banco de Dados
Certifique-se de ter um servidor MySQL ativo (como XAMPP, WAMP ou Docker). Execute o conteúdo do arquivo `script.sql` no seu terminal ou ferramenta de gerenciamento (como phpMyAdmin):

* Cria o banco de dados `projeto`.
* Cria a tabela `aluno` com campos `id`, `nome` e `idade`.
* Insere 5 registros de exemplo para teste.

### 2. Configurar a Conexão
Se o seu usuário ou senha do MySQL forem diferentes do padrão, altere as variáveis no arquivo `conexao.php`:

* **Host:** `127.0.0.1`
* **DB:** `projeto`
* **User:** `root`
* **Password:** `ceub123456`

---

## 🖥️ Como Funciona o Fluxo

1.  O **`index.php`** solicita todos os dados da tabela `aluno`.
2.  Um loop `while` percorre os resultados e renderiza cada linha na tabela.
3.  Ao clicar no link **"Excluir"**, o ID do aluno é enviado via parâmetro GET para o **`excluir.php`**.
4.  O script de exclusão executa o comando `DELETE` no banco e retorna o usuário para a lista atualizada.

---

