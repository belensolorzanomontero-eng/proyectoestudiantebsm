#Sistema de Gestión de Estudiantes (PHP MVC)
Este es un proyecto educativo de un CRUD completo desarrollado bajo el patrón de diseño Modelo-Vista-Controlador (MVC). El sistema permite administrar el registro de estudiantes de una universidad de forma organizada, escalable y segura.
 Características
•	CRUD Completo: Crear, Leer, Actualizar y Eliminar estudiantes.
•	Arquitectura MVC: Separación clara entre la lógica de negocio, los datos y la interfaz de usuario.
•	Front Controller: Uso de index.php como punto de entrada único para mejorar la seguridad y el enrutamiento.
•	PDO (PHP Data Objects): Conexión segura a la base de datos para prevenir inyecciones SQL.
•	Interfaz Responsiva: Diseño limpio con CSS moderno y ventanas modales dinámicas para formularios.
Estructura del Proyecto
Plaintext
proyecto-universidad/
├── config/              # Configuración y conexión a la BD (PDO)
├── controllers/         # Controladores (Lógica de control)
├── models/              # Modelos (Consultas SQL y lógica de datos)
├── views/               # Vistas (Interfaz dividida por módulos)
│   ├── layout/          # Componentes reutilizables (Header/Footer)
│   └── estudiantes/     # Vistas específicas del CRUD
└── public/              # Directorio público (Assets y Front Controller)
    ├── css/             # Estilos personalizados
    ├── js/              # Lógica de JavaScript (DOM)
    └── index.php        # Front Controller

 Instalación
1.	Clonar o Copiar el proyecto: Coloca la carpeta del proyecto en tu servidor local (ej. /Applications/XAMPP/htdocs/ en Mac).
2.	Configurar la Base de Datos:
o	Accede a phpMyAdmin.
o	Crea una base de datos llamada universidad_db.
o	Ejecuta el siguiente SQL:
SQL
CREATE TABLE estudiantes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    carrera VARCHAR(100) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
3.	Configurar Conexión: Revisa el archivo config/db.php y ajusta las credenciales si es necesario (usuario root y contraseña vacía por defecto en XAMPP).
4.	Ejecutar: Abre tu navegador y dirígete a http://localhost/nombre-de-tu-carpeta/public/.

 Tecnologías Utilizadas
•	Backend: PHP 8.x
•	Base de Datos: MySQL
•	Frontend: HTML5, CSS3, JavaScript (Vanilla)
•	Servidor Sugerido: XAMPP / Apache

