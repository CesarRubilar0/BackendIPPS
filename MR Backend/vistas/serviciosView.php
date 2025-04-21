<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h2 class="text-center mb-4">Nuestros Servicios</h2>
        <div class="row g-4">
            <?php if (!empty($servicios)): ?>
                <?php foreach ($servicios as $servicio): ?>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($servicio['nombre']); ?></h5>
                                <p class="card-text"><?php echo htmlspecialchars($servicio['descripcion']); ?></p>
                                <p><strong>Valor CLP:</strong> $<?php echo number_format($servicio['valor_clp'], 0, ',', '.'); ?></p>
                                <p><strong>Valor USD:</strong> $<?php echo number_format($servicio['valor_usd'], 2); ?></p>
                                <a href="#contact" class="btn btn-primary w-100">Cotizar</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No hay servicios disponibles</p>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
