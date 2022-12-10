var onlyLocalCheckBox = null;
var addNtimesButton = null;
var add1timeButton = null;
var loadSensorsButton = null;
var loadSensorDataButton = null;
var clearTextAreaButton = null;
var dataTextArea = null;
var sensorSelect = null;
var idSelect = null;
var valueInput = null;
var incrementInput = null;
var dateInput = null;
var periodicityInput = null;
var repeaterInput = null;

var sensorData;
var onlyLocal = true;

function soloLocal() {
    onlyLocal = onlyLocalCheckBox.checked;
}

function initComponents() {
    onlyLocalCheckBox = document.getElementById('onlyLocal');
    addNtimesButton = document.getElementById('addNtimes');
    add1timeButton = document.getElementById('add1time');
    loadSensorsButton = document.getElementById('loadSensor');
    loadSensorDataButton = document.getElementById('loadSensorData');
    clearTextAreaButton = document.getElementById('clearTextArea');
    dataTextArea = document.getElementById('textarea');
    sensorSelect = document.getElementById('sensor_type');
    idSelect = document.getElementById('sensor_id');
    valueInput = document.getElementById('value');
    incrementInput = document.getElementById('increment');
    dateInput = document.getElementById('date');
    periodicityInput = document.getElementById('periodicity');
    repeaterInput = document.getElementById('repeater');
}

function writeData(sensor, id, value, date) {
    dataTextArea.value += 'Sensor: ' + sensor + '\nId: ' + id + '\nValor: ' + value + '\nFecha: ' + date + '\n\n';
}

function loadSensor(data) {
    if (data === null) {
        alert('No hay sensores disponibles para visualizar y/o editar');
    }

    //Clearing Selects Components
    for (let i = sensorSelect.options.length; i >= 0; i--) {
        sensorSelect.remove(i);
    }
    for (let i = idSelect.options.length; i >= 0; i--) {
        idSelect.remove(i);
    }

    //Adding new sensor data
    for (let i = 0; i < data.length; i++) {
        const optionName = document.createElement('option');
        const optionId = document.createElement('option');
        const nameValue = data[i].sensor_name;
        const idValue = data[i].id;
        optionName.value = nameValue;
        optionName.text = nameValue;
        optionId.value = idValue;
        optionId.text = idValue;
        sensorSelect.appendChild(optionName);
        idSelect.appendChild(optionId);
    }

}

function getData(moreThanOneTime) {
    var sensor = sensorSelect.options[sensorSelect.selectedIndex].text;
    var id = idSelect.options[idSelect.selectedIndex].text;
    var increment = incrementInput.value;
    var value = valueInput.value;
    var date = new Date(Date.parse(dateInput.value));
    var periodicity = periodicityInput.options[periodicityInput.selectedIndex].text;
    var repeater = parseInt(repeaterInput.value);

    function updateValues() {
        value = (parseInt(value) + parseInt(increment)).toString();
        switch (periodicity) {
            case 'Minutos':
                date.setMinutes(date.getMinutes() + 1);
                break;
            case 'Horas':
                date.setHours(date.getHours() + 1);
                break;
            case 'Días':
                date.setDate(date.getDate() + 1);
                break;
        }
    }
    var dataArray = [];
    if (moreThanOneTime === true) {
        for (let i = 0; i < repeater; i++) {
            writeData(sensor, id, value, date);
            prepareDataForPost(dataArray,id,value,date);
            updateValues();
        }
    } else {
        writeData(sensor, id, value, date);
        prepareDataForPost(dataArray,id,value,date);
    }
    if (!onlyLocal) {
        postToSensorData(JSON.stringify(dataArray));
    }
}

function getSensors() {
    const request = new XMLHttpRequest();
    request.onload = function () {
        sensorData = JSON.parse(this.responseText);
        loadSensor(sensorData);
    };
    request.open('GET', 'http://proyectoweb22.test/api/get/sensors');
    request.send();
}

function matchNameIdOfSensorsInSelects(changeStatusCode) {
    //SensorSelect changed: 0
    //IdSelect changed: 1
    //Error: any other code
    var selected;
    var updated;
    var selectedProperty;
    var updatedProperty;

    if (changeStatusCode === 0) {
        selected = sensorSelect;
        updated = idSelect;
        selectedProperty = 'sensor_name';
        updatedProperty = 'id';
    } else if (changeStatusCode === 1) {
        selected = idSelect;
        updated = sensorSelect;
        selectedProperty = 'id';
        updatedProperty = 'sensor_name';
    } else {
        return;
    }

    var currentSelection = selected.options[selected.selectedIndex].text;

    for (let i = 0; i < sensorData.length; i++) {
        if (currentSelection === sensorData[i][selectedProperty].toString()) {
            updated.value = sensorData[i][updatedProperty];
        }
    }
}

function getSensorData() {
    const id = idSelect.options[idSelect.selectedIndex].text;
    var response = "";

    if (id === null) {
        alert("No se ha seleccionado ningún sensor");
        return;
    }

    const request = new XMLHttpRequest();
    request.onload = function () {
        response = JSON.parse(this.responseText);
        alert(response);
        processAndWriteSensorData(response);
    };
    const url = 'http://proyectoweb22.test/api/get/sensorData/' + id;
    request.open('GET', url);
    request.send();
}

function sqlToJsDate(sqlDate){
    var sqlDateArr1 = sqlDate.split("-");
    var sYear = sqlDateArr1[0];
    var sMonth = (Number(sqlDateArr1[1]) - 1).toString();
    var sqlDateArr2 = sqlDateArr1[2].split(" ");
    var sDay = sqlDateArr2[0];
    var sqlDateArr3 = sqlDateArr2[1].split(":");
    var sHour = sqlDateArr3[0];
    var sMinute = sqlDateArr3[1];
    var sqlDateArr4 = sqlDateArr3[2].split(".");
    var sSecond = sqlDateArr4[0];
    var sMillisecond = sqlDateArr4[1];

    return new Date(sYear,sMonth,sDay,sHour,sMinute,sSecond,sMillisecond);
}

function jsDateToSql (jsDate) {
    return jsDate.toISOString().split('T').join(' ').split('Z').join('');
}


function processAndWriteSensorData(response) {
    for (let i=0; i<response.length; i++) {
        var r = response[i];
        writeData(r.sensor_name,r.sensor_id, r.valor,sqlToJsDate(r.fecha));
    }
}

function prepareDataForPost(dataArray,sensorId,value,date) {
    var sensor = {
        'sensor_id' : parseInt(sensorId),
        'valor' : parseFloat(value),
        'fecha': jsDateToSql(date)
    };
    dataArray.push(sensor);
    return dataArray;
}

function postToSensorData(dataArray){
    console.log(dataArray);
    $.ajax({
        data: dataArray,
        url: 'http://proyectoweb22.test/api/add',
        contentType: 'application/json',
        type: 'post',
        beforeSend: function () {
            dataTextArea.value += "\n\n\nProcesando la petición de registro de datos...";
        },
        success: function (response) {
            dataTextArea.value += '\n\n\nPetición finalizada con estado: '+response+'\n\n\n';
        }
    });
}

function init() {

    initComponents();

    clearTextAreaButton.addEventListener('click', function () {
        dataTextArea.value = '';
    });
    add1timeButton.addEventListener('click', function () {
        getData(false);
    });
    addNtimesButton.addEventListener('click', function () {
        getData(true);
    });
    loadSensorsButton.addEventListener('click', getSensors);

    onlyLocalCheckBox.addEventListener('change', soloLocal);

    sensorSelect.addEventListener('change', function () {
        matchNameIdOfSensorsInSelects(0);
    });
    idSelect.addEventListener('change', function () {
        matchNameIdOfSensorsInSelects(1);
    });

    loadSensorDataButton.addEventListener('click', getSensorData);
}

window.onload = init;
