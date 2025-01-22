# Sistema de Gerenciamento de Currículos 📄

## 📋 Sobre o Projeto

Este projeto foi desenvolvido utilizando Laravel como framework backend e Bootstrap para o frontend. Ele permite o envio de currículos através de um formulário e posteriormente o envio de e-mails de confirmação com uma cópia do seu curriculo.

O sistema foi criado com o objetivo de demonstrar habilidades em desenvolvimento web e boas práticas de programação.

---

##  Tecnologias Utilizadas

### Backend:
- XAMPP: Para configurar o servidor local (MySQL).
- MySQL: Banco de dados para armazenamento dos currículos enviados.
- Laravel: Framework PHP para gerenciamento do backend.

### Frontend:
- HTML5: Estruturação da interface.
- CSS3: Estilização personalizada.
- JavaScript: Funcionalidades dinâmicas do front-end (como mensagem de sucesso ao enviar curriculo).
- Bootstrap: Framework CSS para design responsivo e moderno.

---

## 🚀 Funcionalidades

### Sistema de Currículos:
   1. Formulário de envio de currículos com validação em tempo  real.
   2. Upload de arquivos em formatos .pdf, .doc, e .docx (limite de 1MB).
   3. Envio automático de e-mails:
   - Confirmação ao administrador.
   - Confirmação ao usuário.

### Validação:
1. Client-side: Validações feitas via JavaScript.
2. Server-side: Validações robustas implementadas no Laravel.

---
### 📚 Requisitos:

1. PHP 8.4 ou superior

2. Laravel 11.x

3. NodeJS

4. Composer

5. MySQL ou XAMPP 

---

---
### 🛠 Instalação:

1. Use o composer na pasta do projeto para baixar as dependências.
```
composer update
```

2. Depois rode a migração do banco de dados com:
(Certifique-se que seu servidor MySQL esteja ligado)
```
php artisan migrate
```

3. Localize e altere as configurações para o envio de e-mails no arquivo .env

(Preencha com os dados do seu provedor de e-mail)

```
MAIL_MAILER=
MAIL_HOST= 
MAIL_PORT=
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_FROM_ADDRESS=
MAIL_FROM_NAME=
```

3. Inicie o servidor do Laravel para o projeto com
```
php artisan serve
```

4. Acesse o URL indicado no terminal.

```
http://127.0.0.1:8000 (Padrão)
```

---

## 📷 Prints do Sistema

### 🖼 Formulário de Envio
[Insira aqui o print do formulário de envio]

---

### 🖼 E-mail Enviado ao Usuário
[Insira aqui o print do e-mail de confirmação]


---
## Implementação Adicional
[Insira aqui a ideia adicional]
## 📧 Contato

- Desenvolvedor: [David Jardim]
- E-mail: [djardim322@gmail.com]
- GitHub: [https://github.com/T-TheV](https://github.com/T-TheV)

---
