<div class="contenedor olvide">
    <?php include_once __DIR__ . "/../templates/nombre-sitio.php"; ?>

<div class="contenedor-sm">
    <p class="descripcion-pagina">Olvide mi Password</p>
    <?php include_once __DIR__ . "/../templates/alertas.php"; ?>
    <form class="formulario" action="/olvide" method="POST">
   
    <div class="campo">
        <label for="email">Email</label>
        <input required type="email" id="email" placeholder="Tu Email" name="email">
    </div>
    
    <input type="submit" class="boton" value="Nuevo Password">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes cuenta? Iniciar Sesion</a>
    <a href="/crear">¿Aun no tienes una cuenta? obten una</a>
</div>
</div>

</div>