<?= $this->extend('templates/admin') ?>

<?= $this->section('contenido') ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Claves API de Resend</h3>
        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modalCrearClave">
            Nueva Clave API
        </button>
    </div>
    <div class="card-body">
        <?php if (session('nueva_clave')): ?>
            <div class="alert alert-info">
                <strong>¡Nueva clave creada!</strong><br>
                <code><?= session('nueva_clave') ?></code><br>
                <small>Guarde esta clave en un lugar seguro. Solo se mostrará una vez.</small>
            </div>
        <?php endif; ?>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>ID</th>
                    <th>Creado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($claves as $clave): ?>
                <tr>
                    <td><?= $clave->name ?></td>
                    <td><?= $clave->id ?></td>
                    <td><?= date('d/m/Y H:i', $clave->created_at) ?></td>
                    <td>
                        <button class="btn btn-sm btn-danger"
                                onclick="confirmarEliminacion('<?= $clave->id ?>')">
                            Eliminar
                        </button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal para crear nueva clave -->
<div class="modal fade" id="modalCrearClave" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= site_url('admin/api-claves/crear') ?>" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Crear Nueva Clave API</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nombre descriptivo</label>
                        <input type="text" name="nombre" class="form-control" required
                               placeholder="Ej: Servidor de Producción">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Crear Clave</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function confirmarEliminacion(id) {
    if (confirm('¿Está seguro de eliminar esta clave API?')) {
        window.location.href = '<?= site_url('admin/api-claves/eliminar') ?>/' + id;
    }
}
</script>
<?= $this->endSection() ?>