<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca - Buscar Libros</title>
    <link rel="stylesheet" href="CSS/biblioteca.css">
</head>
<body>
    <div class="container"s>
        <h1>Biblioteca</h1>
        <form id="busquedaForm">
            <div class="form-group">
                <label for="busqueda">Buscar librs</label>
                <input type="text" id="busqueda" name="busqueda" placeholder="Título, autor o ISBN..." required>
            </div>
            <button type="submit">Buscar</button>
        </form>
        <div class="result" id="resultado">
            <!-- Aquí aparecerán los resultados de la búsqueda y disponibilidad -->
        </div>
    </div>
    <script>
    // Demo: mostrar resultado simulado
    document.getElementById('busquedaForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const query = document.getElementById('busqueda').value.trim();
        if(query.length === 0) return;
        // Aquí iría la llamada AJAX real
        document.getElementById('resultado').innerHTML = `<b>Resultados para:</b> "${query}"<br><br><i>Ejemplo:</i> <br>Libro: El Quijote<br>Disponibilidad: <span style='color:green;'>Disponible</span>`;
    });
    </script>
</body>
</html>