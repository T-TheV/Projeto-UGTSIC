`---

## Sistema de Cadastro e Envio de Currículos 📄

## 📋 Sobre o Projeto
Este projeto é uma aplicação web para cadastro e envio de currículos. Ele permite:
- Submeter informações através de um formulário com validação.
- Realizar upload de arquivos com restrições de tamanho e formato.
- Armazenar os dados no banco de dados, incluindo IP, data e hora do envio.
- Enviar um e-mail com as informações do formulário e o arquivo anexado.

Este projeto foi desenvolvido utilizando **Laravel** no backend, com design responsivo utilizando **Bootstrap** no frontend.

---

## Teste Demonstrativo
Acesse o site [Projeto Curriculo](https://davidwebdev.tech/) e poderá simular um registro, envio de curriculo e login. 

---

## 🚀 Funcionalidades
1. Formulário de envio de currículos com os seguintes campos:
   - Nome (Obrigatório)
   - E-mail (Obrigatório)
   - Telefone (Obrigatório)
   - Cargo Desejado (Texto livre, Obrigatório)
   - Escolaridade (Select, Obrigatório)
   - Observações (Opcional)
   - Arquivo (Obrigatório, formatos permitidos: `.doc`, `.docx`, `.pdf`, tamanho máximo de 1MB)
2. Validação dos campos no frontend e backend.
3. Armazenamento seguro das informações no banco de dados.
4. Envio automático de e-mails com os dados e o currículo anexado.
5. Implementações adicionais:
   - **Administração:** Uma interface para administradores visualizarem os currículos enviados, com as opções de aprovar ou recusar.
   - **Controle de edição:** Os usuários podem editar seus currículos enquanto o status estiver pendente. Após aprovação ou recusa, os currículos se tornam somente leitura.
   - **Registro do IP e Data/Hora:** Os metadados de envio são salvos automaticamente.

---

## 🛠 Tecnologias Utilizadas

### Backend:
- **PHP 8.1** (ou superior)
- **Laravel 9.x** (ou superior)
- **MySQL 8.x** (ou MariaDB)
- **Composer** (Gerenciador de dependências do PHP)

### Frontend:
- **HTML5**
- **CSS3**
- **Bootstrap 5**
- **JavaScript**

---

## 📚 Requisitos

Para executar este projeto, você precisará dos seguintes softwares instalados:
1. **PHP** (8.2 ou superior)
2. **Composer**
3. **Node.js** (16.x ou superior)
4. **MySQL** (ou MariaDB)

---

## 🛠 Instalação e Configuração

Siga os passos abaixo para configurar o projeto no seu ambiente local:

### 1. Clone o Repositório
```bash
git clone https://github.com/T-TheV/Projeto-UGTSIC.git
cd projeto-curriculos
```

### 2. Instale as Dependências do PHP e Node.js
```bash
composer install
npm install && npm run build
```

### 3. Configure o Arquivo `.env`
Renomeie o arquivo `.env.example` para `.env` e configure os seguintes itens:
```plaintext
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=usuario
DB_PASSWORD=senha

MAIL_MAILER=smtp
MAIL_HOST=smtp.example.com
MAIL_PORT=587
MAIL_USERNAME=seu-email@example.com
MAIL_PASSWORD=sua-senha
MAIL_FROM_ADDRESS=seu-email@example.com
MAIL_FROM_NAME="Sistema de Currículos"
```

### 5. Execute as Migrações
```bash
php artisan migrate
```

### 6. Gere a Chave da Aplicação
```bash
php artisan key:generate
```

### 7. Inicie o Servidor de Desenvolvimento
```bash
php artisan serve
```

Acesse o projeto no navegador:
```
http://127.0.0.1:8000
```

---

## 📧 Envio de E-mails
Certifique-se de configurar corretamente os campos de envio de e-mail no arquivo `.env`:
```plaintext
MAIL_MAILER=smtp
MAIL_HOST=smtp.example.com
MAIL_PORT=587
MAIL_USERNAME=seu-email@example.com
MAIL_PASSWORD=sua-senha
MAIL_FROM_ADDRESS=seu-email@example.com
MAIL_FROM_NAME="Sistema de Currículos"
```

Após configurar, o envio de e-mails será automático.

---

## 🖥 Utilização

1. **Usuário Final:**
   - Acesse a página inicial para cadastro ou login.
   - Preencha o formulário e envie seu currículo.
   - Edite seu currículo enquanto o status for pendente.

2. **Administrador:**
   - Acesse a área administrativa em:
     ```
     http://127.0.0.1:8000/admin/curriculo
     ```
   - Aprove ou recuse currículos diretamente na interface.

---

## 🌟 Implementações Adicionais
1. **Interface Administrativa:** Listagem, aprovação e recusa de currículos.
2. **Controle de Edição:** Currículos aprovados ou recusados não podem ser editados, apenas visualizados.

---

## 📸 Imagens do funcionamento do sistema
1. Registro de Usuário![Registro de Usuário](https://imgur.com/oKXjkPh.png)

2. Login do Usuário![Login do Usuário](https://imgur.com/okX9m0P.png)

3. Preenchimento de dados pro Curriculo![Preenchimento de dados pro Curriculo](https://imgur.com/AZweJfE.png)

4. Tela atualizada após envio com a edição![Tela atualizada após envio com a edição](https://imgur.com/XIiiMtw.png)

5. Email pro usuário ao enviar curriculo![Email pro usuário ao enviar curriculo](https://imgur.com/GBtqpu1.png)

6. Email pro administrador ao receber curriculo![Email pro administrador ao receber curriculo](https://imgur.com/oiTsvGn.png)

7. Curriculo Aprovado![Curriculo Aprovado](https://imgur.com/ORwtN3P.png)

8. Curriculo Recusado![Curriculo Recusado](https://imgur.com/mvykPwv.png)

9. Painel ADM para analise![Painel ADM para analise](https://imgur.com/U1zHeWV.png)

10. Painel ADM após aprovar![Painel ADM após aprovar](https://imgur.com/QzfnifW.png)

---

## 📧 Contato

**Desenvolvedor:** David Jardim  
**E-mail:** [djardim322@gmail.com](mailto:djardim322@gmail.com)  
**GitHub:** [T-TheV](https://github.com/T-TheV)  

---

## 📃 Licença

Este projeto é distribuído sob a licença MIT. Consulte o arquivo `LICENSE` para mais detalhes.