# SIGATI – Sistema de Gestão de Ativos de TI

**SIGATI** é um sistema web voltado para a **gestão do ciclo de vida dos ativos de TI** em um departamento de Tecnologia da Informação.  
O sistema permite cadastro, controle, rastreabilidade e movimentação de ativos como desktops, notebooks, impressoras e monitores, garantindo governança e histórico completo de cada equipamento.


---

## 📄 Estrutura do Projeto

O repositório contém:

- `docs/` – Documentação do sistema, incluindo o **SRS (Software Requirements Specification)** detalhado.
- `app/` – Código-fonte do sistema desenvolvido em **CakePHP 2.10.x**.
- `db/` – Scripts de criação do banco de dados mínimo para o MVP.
- `README.md` – Este arquivo.

---

## 🎯 Objetivo do Sistema

- Cadastro individualizado de ativos de TI  
- Controle de status: **em uso, estoque, manutenção, baixado**  
- Registro de movimentações e histórico completo  
- Vinculação de ativos a usuários e locais  
- Registro de manutenção  
- Relatórios básicos para acompanhamento e auditoria  

---

## 👥 Perfis de Usuário

O MVP implementa **controle de acesso simples**, com dois perfis:

- **Administrador:** Gerencia ativos, usuários, movimentações, manutenção e relatórios.  
- **Leitura:** Apenas consulta dados e gera relatórios, sem alterar informações.

---

## 🛠 Tecnologias Utilizadas

- **Framework:** CakePHP 2.10.x  
- **Banco de dados:** PostgreSQL  
- **Servidor Web:** Apache  

---

## ⚙️ Configuração Inicial

1. Clonar o repositório:  
```bash
git clone <URL_DO_REPOSITORIO>
```
2. Caso acontece problemas com as permissões, se necessário execute: 
```bash
docker exec -it cake_app sh -c "chown -R www-data:www-data /var/www/html && chmod -R 777 /var/www/html/app/tmp"
```

## 📌 Observações

- Ajustar as credenciais de banco no arquivo app/Config/database.php.
- Configurar o banco de dados usando os scripts em db/.
- Todos os ativos devem ter número de série único para garantir rastreabilidade.
- O documento completo de requisitos está disponível em docs/SRS_SIGATI.pdf.
- Iniciar o servidor local (CakePHP) e acessar via navegador.

