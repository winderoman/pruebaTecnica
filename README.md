## Tecnologías Utilizadas

-   **Laravel**: Framework PHP para el desarrollo de aplicaciones web.
-   **FilamentPHP**: Panel de administración para Laravel, utilizado para crear interfaces de administración intuitivas.
-   **PostgreSQL**: Sistema de gestión de bases de datos relacional utilizado para almacenar la información de la aplicación.

## Instalación

1. **Clonar el Repositorio**

    ```bash
    git clone https://github.com/winderoman/pruebaTecnica.git

    ```

2. **Instalar dependencias**

    ```bash
       composer install
    ```

3. **Configurar el Entorno**

    ```bash
       cp .env.example .env
    ```

4. **Generar Clave de Aplicación**

    ```bash
       php artisan key:generate
    ```

5. **Iniciar Servidor**

    ```bash
       php artisan serve
    ```
