<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="Tarea_final_CSS.css">
</head>
<body>

    <header>
        <h1>Contacto</h1>
        <nav>
            <ul>
                <li><a href="Tarea_final_HTML.html">Inicio</a></li>
                <li><a href="productos.html">Productos</a></li>
                <li><a href="Contactos.html">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="Contacto">
            <h2>Formulario de Contacto</h2>
            <form>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" required>

                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" required pattern="[0-9]{9}">

                <label for="comentarios">Comentarios:</label>
                <textarea id="comentarios" name="comentarios" required></textarea>

                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Mi Sitio Web. Todos los derechos reservados.</p>
    </footer>

</body>
</html>