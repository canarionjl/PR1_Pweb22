{!! PageBuilder::section('head') !!}
<html>
<head>
        <script src="{{ PageBuilder::js('sensores') }}"></script>
        <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
        <style>
            main {
                padding: 100px;
                display: flex;
                flex-flow: row wrap;
                justify-content: space-around;
                align-items: center;
            }

            main .group {
                display: flex;
                justify-content: flex-start;
                align-items: center;
            }

            main .subgroup {
                padding: 20px;
            }
        </style>
</head>

<body>
    <main>
        <div class="areaSection">
            <h2 class="h2login">Visualización de los datos</h2>
            <textarea name="textarea" id="textarea" rows="10" cols="50" data-role="none" style="resize: none;"></textarea>
        </div>

        <div class="configSection" id="configSection">
            <div class="group">
                <div class="subgroup">
                    <h4>Tipo de sensor</h4>
                    <select name="sensor_type" id="sensor_type">
{{--                        <option value="humidity">Humedad</option>--}}
{{--                        <option value="rain probability">Probabilidad de lluvia</option>--}}
                    </select>
                </div>
                <div class="subgroup">
                    <h4>ID del sensor</h4>
                    <select name="sensor_id" id="sensor_id">
{{--                        <option value="humidity">1</option>--}}
{{--                        <option value="rain_probability">2</option>--}}
                    </select>
                </div>
                <div class="subgroup">
                    <h4>Valor</h4>
                    <input name="value" type="number" id="value" step="0.1">
                </div>
            </div>
            <div class="group">

                <div class="subgroup">
                    <h4>Incremento</h4>
                    <input name="increment" id="increment" type="number" step="0.1">
                </div>
                <div class="subgroup">
                    <h4>Fecha</h4>
                    <input name="date" type="datetime-local" id="date" step="0.1">
                </div>
                <div class="subgroup">
                    <h4>Periodicidad</h4>
                    <select name="periodicity" id="periodicity">
                        <option value="minutes">Minutos</option>
                        <option value="hours">Horas</option>
                        <option value="days">Días</option>
                    </select>
                </div>
            </div>
            <div class="group" id="group">
                <div class="subgroup">
                    <h4>Repetir N veces</h4>
                    <input name="repeater" id="repeater" type="number" step="1">
                </div>
                <div class="subgroup" id="subgroup">
                    <h4>Solo Local</h4>
                    <input type="checkbox" id='onlyLocal' checked> Solo Local
                </div>
                <div class="subgroup">
                    <h4>Borrar datos</h4>
                    <input type="button" id="clearTextArea" value="Limpiar ventana de datos">
                </div>
            </div>
            <div class="group">
                <div class="subgroup">
                    <h4>Añadir una vez</h4>
                    <input type="button" id="add1time" value="Añadir una vez">
                </div>
                <div class="subgroup">
                    <h4>Añadir N veces</h4>
                    <input type="button" id="addNtimes" value="Añadir N veces">
                </div>
                <div class="subgroup">
                    <h4>Cargar sensores</h4>
                    <input type="button" id="loadSensor" value="Cargar sensores">
                </div>
                <div class="subgroup">
                    <h4>Cargar datos del sensor</h4>
                    <input type="button" id="loadSensorData" value="Cargar datos">
                </div>
            </div>
        </div>
        </div>
    </main>
</body>
</html>

{!! PageBuilder::section('footer') !!}
