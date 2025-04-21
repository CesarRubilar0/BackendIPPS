<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h2 class="text-center mb-4">Contáctanos</h2>
        <form id="contactForm" novalidate>
            <div class="mb-2">
                <label for="nombre" class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre completo" required>
                <div class="invalid-feedback">Por favor, ingresa tu nombre completo.</div>
            </div>
            <div class="mb-2">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo electrónico" required>
                <div class="invalid-feedback">Por favor, ingresa un correo electrónico válido que contenga @.</div>
                <div id="emailError" class="text-danger"></div>
            </div>
            <div class="mb-2">
                <label for="telefono" class="form-label">Número de Contacto</label>
                <input type="tel" class="form-control" id="telefono" placeholder="Ingresa tu número de contacto" required>
                <div class="invalid-feedback">Por favor, ingresa tu número de contacto.</div>
                <div id="telefonoError" class="text-danger"></div>
            </div>
            <div class="mb-2">
                <label for="servicio" class="form-label">Servicio a Cotizar</label>
                <select class="form-select" id="servicio" required>
                    <option value="">Selecciona un servicio</option>
                    <option value="1">Consultoría Digital</option>
                    <option value="2">Soluciones Multiexperiencia</option>
                    <option value="3">Evolución de Ecosistemas</option>
                    <option value="4">Soluciones Low-Code</option>
                </select>
                <div class="invalid-feedback">Por favor, selecciona un servicio.</div>
            </div>
            <div class="mb-2">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea class="form-control" id="mensaje" rows="3" placeholder="Escribe tu mensaje aquí"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-verde">Enviar</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/validarFormulario.js"></script>
    <script src="../js/validarEmail.js"></script>
    <script src="../js/validarTelefono.js"></script>
</body>
</html>
