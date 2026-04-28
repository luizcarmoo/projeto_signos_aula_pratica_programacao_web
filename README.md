# 🌌 Projeto: Descubra seu Signo

Aplicação web desenvolvida em PHP que identifica o signo do zodíaco a partir da data de nascimento informada pelo usuário.

---

## 📌 Objetivo

Desenvolver uma aplicação web simples utilizando PHP, HTML, CSS e XML, capaz de:

* Receber a data de nascimento do usuário
* Processar essa informação
* Identificar e exibir o signo correspondente

---

## 🛠 Tecnologias Utilizadas

* **HTML5** – Estrutura da página
* **CSS3** – Estilização (Glassmorphism + UI moderna)
* **PHP** – Processamento backend
* **XML** – Armazenamento dos dados dos signos
* **Bootstrap (CDN)** – Apoio inicial de layout

---

## 📂 Estrutura do Projeto

```
Project/
│
├── index.php
├── show_zodiac_sign.php
├── signos.xml
│
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── images/
│   │   └── bg.jpg
│       └── zodiac.png
│
└── layouts/
    └── header.php
```

---

## ⚙️ Funcionamento

### 🔹 1. Página Inicial (`index.php`)

* Exibe um formulário com campo de data
* Usuário informa sua data de nascimento
* Dados são enviados via **POST**

### 🔹 2. Processamento (`show_zodiac_sign.php`)

* Recebe a data informada
* Converte para timestamp
* Lê o arquivo `signos.xml`
* Compara a data com os intervalos dos signos
* Retorna:

  * Nome do signo
  * Descrição

### 🔹 3. Base de Dados (`signos.xml`)

Contém:

* Nome do signo
* Data de início
* Data de fim
* Descrição

---

## ✨ Melhorias Implementadas

Além do básico solicitado, foram adicionadas melhorias visuais:

* 💎 Efeito **Glassmorphism (cartão de vidro)**
* 🌌 Fundo com gradiente moderno
* 🌠 Partículas animadas (estrelas)
* 🔗 Efeito de **constelação (linhas entre partículas)**
* 🎨 Botões com gradiente e animação
* 🖼 Imagem temática do zodíaco
* 📱 Layout responsivo e centralizado

---

## 🚀 Como Executar

1. Instale o XAMPP
2. Coloque o projeto em:

   ```
   C:\xampp\htdocs\Project
   ```
3. Inicie o Apache
4. Acesse no navegador:

   ```
   http://localhost/Project/
   ```

---

## 📚 Aprendizados

* Manipulação de formulários com PHP
* Leitura de XML com `simplexml_load_file`
* Comparação de datas
* Separação entre dados e lógica
* Criação de interfaces modernas com CSS

---

## 📈 Possíveis Melhorias Futuras

* Alterar cor do tema conforme o signo
* Ícones dinâmicos por signo
* Integração com API de horóscopo
* Animações mais avançadas

---

## ✅ Conclusão

O projeto atende aos requisitos propostos e foi além, incorporando melhorias visuais e técnicas modernas de UI. A atividade contribuiu para o desenvolvimento de habilidades tanto no backend quanto no frontend.

---

## 👨‍💻 Autor

**Luiz Nicolau Pereira do Carmo**
Projeto acadêmico – Engenharia de Software - Ananhanguera

---
