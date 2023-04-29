<?php
 
    echo "Su numero de control es: ". $_GET['noControl'];
?>

        <form action="" method="">
            <div class="Solicitud">
                <p>Solicitud de proceso de titulacion</p>
                <button id="visualizar-btn">Ver solicitud</button>
            </div>

            <div class="Certificado">
                <p>Certificado total</p>
                <button id="visualizar-btn">ver certificado</button>
            </div>

            <div class="Ingles">
                <p>Hoja de liberacion de ingles</p>
                <button id="visualizar-btn">ver hoja de ingles</button>
            </div>

            <div class="No adeudo">
                <p>Hoja de no adeudo triplicado</p>
                <button id="visualizar-btn">ver hoja de no adeudo</button>
            </div>
            
            <div class="Asesor">
                <p>Nombre del asesor:</p>
            </div>

            <div class="Asesores">
                <p>Asignacion de Revisores</p>
                <input type="file" name="archivo">
                <input type="submit" name="submit" value="Subir documento">
             </div>

             <div class="Firmas">
                <p>Formato de 3 firmas</p>
                <button id="visualizar-btn">Formato de firmas</button>
            </div>

            <div class="Autorizacion">
                <p>Autorizacion de impresion</p>
                <button id="visualizar-btn">Autorizacion</button>
            </div>

            <div class="Liberacion">
                <p>Liberacion de titulacion</p>
                <button id="visualizar-btn">Liberacion</button>
            </div>

            <div class="Inconveniencia">
                <p>Hoja de no Inconveniencia</p>
            <button id="visualizar-btn">Ver hoja de no Inconveniencia</button>

            <div class="Protocolo">
                <p>Protocolo de titulacion</p>
                <input type="file" name="archivo">
                <input type="submit" name="submit" value="Subir documento">
             </div>
        </form>
    </div>

    <script src="assets/js/visualizar.js"></script>