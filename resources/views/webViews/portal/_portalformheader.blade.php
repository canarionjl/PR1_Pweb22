<style>

    .contenedor {

        padding: 30px;
        width: 100%;
    }

    .contenedorInterno {

        display: flex;
        flex-flow: row wrap;
        justify-content: center;

        gap: 30px;

    }

    .elemento {
        border-radius: 13px;
        background-color: rgba(144, 238, 144, 0.11);
        padding: 10px;
        max-width: 300px;
        min-width: 200px;
        box-shadow: 0 -5.8px 17px rgba(0, 0, 0, 0.064),
        0 2.8px 2.2px rgba(0, 0, 0, 0.034),
        0 6.7px 5.3px rgba(0, 0, 0, 0.048),
        0 12.5px 10px rgba(0, 0, 0, 0.06),
        0 16.3px 17.9px rgba(0, 0, 0, 0.072);

    }

    .buttons {
        display: flex;
    }

    .buttonContainer {
        flex: 1;
        margin: 5px;
    }

    button {
        width: 100%;
        overflow: hidden;
        border: none;

        border-radius: 3px;
        height: 40px;
        text-align: center;
        background-color: transparent;
        border: 1px solid transparent;

        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .deleteButton {
        color: #ff0000;
        border-color: #ff0000;
    }

    .deleteButton:hover {
        color: #fff;
        background-color: #ff0000;
        border-color: #ff0000;
    }

    .editButton {
        color: #000000;
        border-color: #000000;
    }

    .editButton:hover {
        color: #fff;
        background-color: #000000;
        border-color: #000000;
    }


</style>
<section>

    <style>

        /* GENERAR PRODUCTO */
        .createProduct {
            display: flex;
            justify-content: center;
        }

        #añadirProducto {
            padding: 30px;
            background-color: darkseagreen;
            border-radius: 15px;
            width: 600px;
            box-shadow: 0 -5.8px 17px rgba(0, 0, 0, 0.064),
            0 2.8px 2.2px rgba(0, 0, 0, 0.034),
            0 6.7px 5.3px rgba(0, 0, 0, 0.048),
            0 12.5px 10px rgba(0, 0, 0, 0.06),
            0 16.3px 17.9px rgba(0, 0, 0, 0.072),
            0 20.8px 33.4px rgba(0, 0, 0, 0.086);
        }

        .chart {
            display: flex;
        }

        .element {
            height: 100px;
        }

        #equivalencia, #conversion {
            height: 35px;
            width: 200px;
        }

        .nombreElement {
            flex: 1;
            margin: 10px 10px 10px 0;
        }
        h1{
            margin-left: 20px;
        }
    </style>
    {{--  CREADOR/EDITOR DE PRODUCTOS  --}}
    <h1>{{$btnText}} producto</h1>
    <div class="createProduct">
