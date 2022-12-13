{!! PageBuilder::section('head') !!}
    <style>
        h1 {
            text-align: center;
        }

        .caja{
            overflow:hidden;
            border-radius: 10px;
            background-color:#d9edc2;
            border:1px solid #b2ce96;
        }
        .justificado {
            text-align: justify;
        }
        .contenedor {
            display: grid;
            grid-template-rows: auto;
            justify-content: space-evenly;
            column-gap: 10px;
            row-gap: 15px;
            justify-items: center;
            align-items: stretch;
        }
        .columna1, .columna2, .columna3 {
            margin: 10px;
            padding: 10px 10px 50px 10px;
        }

        .columna1 {
            grid-column-start: 1;
            grid-column-end: 2;
        }

        .columna2 {
            grid-column-start: 3;
            grid-column-end: 4;
        }

        .columna3 {
            grid-column-start:5;
            grid-column-end: 6;
        }

        .fila1 {
            grid-row-start: 1;
            grid-row-end: 2;
        }

        .fila2 {
            grid-row-start: 3;
            grid-row-end: 4;
        }

        .fila3 {
            grid-row-start: 5;
            grid-row-end: 6;
        }

        .button {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 15em;
        }
        .editar {
            background-color: #4CAF50;
        }
        .publicar {
            background-color: red;
        }
        /* GENERAR PRODUCTO */

        #añadirProducto {
            padding:  30px;
            background-color: darkseagreen;
            border-radius: 15px;
            width: fit-content;
            border: 1px solid black;
        }
        input{
            width: 300px;
        }
    </style>
<section>

    <h1>Generar producto</h1>
    <div class="contenedor" >
    <form id="añadirProducto" action="/action_page.php">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" value="Zanahorias"><br><br>

        <label for="descripcion">Descripción:</label><br>
        <input type="text" id="descripcion" name="descripcion" value="Recogida en Moya el día 10 de octubre"><br><br>

        <label for="precio">Precio:</label><br>
        <input type="text" id="precio" name="precio" value="3€"><br><br>

        <label for="Conversión">Conversión:</label><br>
        <input type="text" id="Conversión" name="conversion" value="10 Zanahorias"><br><br>

        <input type="submit" value="Submit">
    </form>
    </div>
<h1>Gestion Productos</h1>
<div class="contenedor">
    <div class="fila1 columna1 caja justificado"><h3>Título</h3>
        <div><strong>Descripción</strong></div>
        <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa porro cupiditate libero accusamus rerum possimus dolor sint quasi deserunt debitis? Natus quam fugit in nam placeat, exercitationem quidem rerum iure illum assumenda harum hic praesentium vitae quasi ratione optio est voluptates doloribus atque porro dignissimos temporibus? Excepturi possimus qui quaerat!</div>
        <div><strong>Precio</strong> 20€</div>
        <button class="button editar">Editar</button>
        <button class="button publicar">Publicar</button>
    </div>
    <div class="fila2 columna1 caja justificado"><h3>Título</h3>
        <div><strong>Descripción</strong></div>
        <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa porro cupiditate libero accusamus rerum possimus dolor sint quasi deserunt debitis? Natus quam fugit in nam placeat, exercitationem quidem rerum iure illum assumenda harum hic praesentium vitae quasi ratione optio est voluptates doloribus atque porro dignissimos temporibus? Excepturi possimus qui quaerat!</div>
        <div><strong>Precio</strong> 20€</div>
        <button class="button editar">Editar</button>
        <button class="button publicar">Publicar</button>
    </div>
    <div class="fila3 columna1 caja justificado"><h3>Título</h3>
        <div><strong>Descripción</strong></div>
        <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa porro cupiditate libero accusamus rerum possimus dolor sint quasi deserunt debitis? Natus quam fugit in nam placeat, exercitationem quidem rerum iure illum assumenda harum hic praesentium vitae quasi ratione optio est voluptates doloribus atque porro dignissimos temporibus? Excepturi possimus qui quaerat!</div>
        <div><strong>Precio</strong> 20€</div>
        <button class="button editar">Editar</button>
        <button class="button publicar">Publicar</button>
    </div>

    <div class="fila1 columna2 caja justificado"><h3>Título</h3>
        <div><strong>Descripción</strong></div>
        <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa porro cupiditate libero accusamus rerum possimus dolor sint quasi deserunt debitis? Natus quam fugit in nam placeat, exercitationem quidem rerum iure illum assumenda harum hic praesentium vitae quasi ratione optio est voluptates doloribus atque porro dignissimos temporibus? Excepturi possimus qui quaerat!</div>
        <div><strong>Precio</strong> 20€</div>
        <button class="button editar">Editar</button>
        <button class="button publicar">Publicar</button>
    </div>
    <div class="fila2 columna2 caja justificado"><h3>Título</h3>
        <div><strong>Descripción</strong></div>
        <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa porro cupiditate libero accusamus rerum possimus dolor sint quasi deserunt debitis? Natus quam fugit in nam placeat, exercitationem quidem rerum iure illum assumenda harum hic praesentium vitae quasi ratione optio est voluptates doloribus atque porro dignissimos temporibus? Excepturi possimus qui quaerat!</div>
        <div><strong>Precio</strong> 20€</div>
        <button class="button editar">Editar</button>
        <button class="button publicar">Publicar</button>
    </div>
    <div class="fila3 columna2 caja justificado"><h3>Título</h3>
        <div><strong>Descripción</strong></div>
        <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa porro cupiditate libero accusamus rerum possimus dolor sint quasi deserunt debitis? Natus quam fugit in nam placeat, exercitationem quidem rerum iure illum assumenda harum hic praesentium vitae quasi ratione optio est voluptates doloribus atque porro dignissimos temporibus? Excepturi possimus qui quaerat!</div>
        <div><strong>Precio</strong> 20€</div>
        <button class="button editar">Editar</button>
        <button class="button publicar">Publicar</button>
    </div>

    <div class="fila1 columna3 caja justificado"><h3>Título</h3>
        <div><strong>Descripción</strong></div>
        <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa porro cupiditate libero accusamus rerum possimus dolor sint quasi deserunt debitis? Natus quam fugit in nam placeat, exercitationem quidem rerum iure illum assumenda harum hic praesentium vitae quasi ratione optio est voluptates doloribus atque porro dignissimos temporibus? Excepturi possimus qui quaerat!</div>
        <div><strong>Precio</strong> 20€</div>
        <button class="button editar">Editar</button>
        <button class="button publicar">Publicar</button>
    </div>
    <div class="fila2 columna3 caja justificado"><h3>Título</h3>
        <div><strong>Descripción</strong></div>
        <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa porro cupiditate libero accusamus rerum possimus dolor sint quasi deserunt debitis? Natus quam fugit in nam placeat, exercitationem quidem rerum iure illum assumenda harum hic praesentium vitae quasi ratione optio est voluptates doloribus atque porro dignissimos temporibus? Excepturi possimus qui quaerat!</div>
        <div><strong>Precio</strong> 20€</div>
        <button class="button editar">Editar</button>
        <button class="button publicar">Publicar</button>
    </div>
    <div class="fila3 columna3 caja justificado"><h3>Título</h3>
        <div><strong>Descripción</strong></div>
        <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa porro cupiditate libero accusamus rerum possimus dolor sint quasi deserunt debitis? Natus quam fugit in nam placeat, exercitationem quidem rerum iure illum assumenda harum hic praesentium vitae quasi ratione optio est voluptates doloribus atque porro dignissimos temporibus? Excepturi possimus qui quaerat!</div>
        <div><strong>Precio</strong> 20€</div>
        <button class="button editar">Editar</button>
        <button class="button publicar">Publicar</button>
    </div>
</div>
<div style="width: 100%; text-align:center;">
    1, 2, 3, 4, ...
</div>
</section>
{!! PageBuilder::section('footer') !!}
