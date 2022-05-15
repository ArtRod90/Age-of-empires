<div class="contenedor reestablecer">
    <?php include_once __DIR__ . "/../templates/nombre-sitio.php"; ?>

<div class="contenedor-sm">
    <p class="descripcion-pagina">Coloca tu nueva Password</p>
    <?php include_once __DIR__ . "/../templates/alertas.php"; 
        if (empty($alertas)) {
            ?>
<form class="formulario" method="POST">
   
   <div class="campo">
       <label for="password">Password</label>
       <input required type="password" id="password" placeholder="Tu Password" name="password">
   </div>    
   
   <input type="submit" class="boton" value="Guardar Password">
</form>
       <?php }?>
    
    

<div class="acciones">    
    <a href="/crear">¿Aun no tienes una cuenta? obten una</a>
    <a href="/olvide">¿Olvidaste tu Password?</a>
</div>
</div>

</div>