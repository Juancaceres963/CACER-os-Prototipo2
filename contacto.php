<?php include_once "./includes/templates/header.php"; ?>
      <main>
        <h2 class="subtitulo">Planilla de contacto</h2>
        <div class="contenedor contenedor-form">
          <form action="" class="contacto">
            <fieldset>
              <legend>Informacion Personal</legend>
              <label for="nombre">Nombre: </label>
              <input type="text" id="nombre" placeholder="Tu Nombre" />

              <label for="email">E-mail: </label>
              <input
                type="email"
                id="email"
                placeholder="Tu Correo electronico"
                required
              />

              <label for="telefono">Telefono : </label>
              <input
                type="tel"
                id="telefono"
                placeholder="Tu numero de Telefono"
                required
              />

              <label for="mensaje">Mensaje : </label>
              <textarea id="mensaje" class="text-area"></textarea>
            </fieldset>

            <fieldset>
              <legend>Contacto</legend>
              <p>Como desea ser contactado:</p>
              <div class="forma-contacto">
                <label for="telefono2">Telefono</label>
                <input
                  type="radio"
                  id="telefono2"
                  name="contacto"
                  value="telefono"
                />
                <label for="correo">E-mail</label>
                <input
                  type="radio"
                  id="correo"
                  name="contacto"
                  value="e-mail"
                />
              </div>
              <p>Si eligio Telefono, elija la fecha y la hora de la llamada</p>

              <label for="fecha">Fecha:</label>
              <input type="date" id="fecha" />

              <label for="hora">Hora:</label>
              <input type="time" id="hora" min="09:00" max="18:00" />
            </fieldset>
            <input type="submit" value="Enviar" class="boton boton-verde" />
          </form>
        </div>
      </main>
      <?php include_once "./includes/templates/footer.php"; ?>