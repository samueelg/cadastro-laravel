# Sistema de Gerenciamento de Usuários

Este é um aplicativo simples de cadastro e edição de usuários desenvolvido com **Laravel** e **Bootstrap**. A aplicação permite adicionar, editar e gerenciar usuários de forma intuitiva e responsiva.

## 📌 Funcionalidades

- **Cadastro de usuários** com informações básicas
- **Edição e atualização** de dados dos usuários
-  **Lista de usuários** cadastrados
-  **Design responsivo** utilizando **Bootstrap**
- **Operações CRUD** implementadas com **Laravel**

## 🛠️ Tecnologias Utilizadas
- **Backend:** Laravel 10+
- **Frontend:** Bootstrap 5
- **Banco de Dados**: MySQL (ou SQLite para testes)
- **Ambiente de Desenvolvimento**: Localhost (XAMPP)

## 🚀 Como Executar o Projeto
### 1️⃣ Pré-requisitos:
- **PHP 8**+ instalado
- **Composer** instalado
- **MySQL or SQLite** configurado
- **Node.js & NPM** (para dependências do frontend)

### 2️⃣ Clonando o repositório:

```console
git clone https://github.com/samueelg/cadastro-laravel
cd doctor-ticket
```
### 3️⃣ Instalando dependências:
```console
composer install
npm install
```

### 4️⃣ Configurando o ambiente:
- Copie o arquivo ``` .env.example``` e renomeie para ```.env```
- Configure as credenciais do banco de dados no ```.env```

```console
php artisan key:generate
php artisan migrate --seed
```

### 5️⃣ Executando a aplicação:
```console
 php artisan serve
```
Em seguida, acesse http://localhost:8000 no seu navegador.

## 📜Licença
Este projeto está sob a licença MIT

# User Management System

This is a simple user registration and editing application built with **Laravel** and **Bootstrap**. The application allows users to be added, edited, and managed in an intuitive and responsive interface.

## 📌 Features

- **User registration** with basic details
- **Edit and update** user information
- **List of registered users**
- **Responsive design** using **Bootstrap**
- **CRUD operations** implemented with **Laravel**

## 🛠️ Technologies Used
- **Backend:** Laravel 10+
- **Frontend:** Bootstrap 5
- **Database:** MySQL
- **Development Environment**: Localhost (XAMPP)

## 🚀 How to Run the Project
### 1️⃣ Prerequisites:
- **PHP 8**+ installed
- **Composer** installed
- **MySQL or SQLite** configured
- **Node.js & NPM** (for frontend dependencies)

### 2️⃣ Cloning the repository:

```console
git clone https://github.com/samueelg/cadastro-laravel
cd cadastro-laravel
```
### 3️⃣ Installing dependences:
```console
composer install
npm install
```

### 4️⃣ Setting up the environment:
- Copy the ``` .env.example``` file and rename it to ```.env```
- Configure database settings in ```.env```

```console
php artisan key:generate
php artisan migrate --seed
```

### 5️⃣ Running the application:
```console
 php artisan serve
```
Then, access http://localhost:8000 in your browser.

## 📜License
This project is licensed under the MIT license.
