# Mini Framework PHP com Docker

Este é um mini framework PHP simplificado que inclui suporte para Docker para facilitar o desenvolvimento e implantação.

## Pré-requisitos

Certifique-se de ter o Docker e o Docker Compose instalados em sua máquina.

- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Configuração

1. **Clone o repositório:**

    ```bash
    git clone https://github.com/seu-usuario/seu-mini-framework.git
    ```

2. **Navegue até o diretório do projeto:**

    ```bash
    cd seu-mini-framework
    ```

3. **Copie o arquivo de exemplo de configuração:**

    ```bash
    cp .env.example .env
    ```

4. **Edite o arquivo `.env` com as configurações específicas do seu ambiente.**

## Uso

### Iniciar o ambiente de desenvolvimento

```bash
docker-compose up -d

