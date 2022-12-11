window.onload = init;
var dataCollection;
var startDate = '01012022';
var endDate = '01012024';
var sensor_id = 2;
var sensorId;
var chart;
var dateRange;
var dataLabel;
var unit;
var startDateObject;
var endDateObject

function initComponents() {
    sensorId = document.getElementById('sensor_id');
    startDateId = document.getElementById('startDate');
    endDateId = document.getElementById('endDate');
}

function formatDate(date){
    var day = date.getUTCDate().toString();
    var month = (parseInt(date.getUTCMonth())+1).toString();
    var year = date.getUTCFullYear();
    day = day.length === 1 ? '0'+day: day;
    month = month.length === 1 ? '0'+month : month;
    return ''+day+''+month+''+year;
}
function submitButtonClicked(){
    chart!=null ? chart.destroy() : void(0);
    dataCollection = [];
    sensor_id = parseInt(sensorId.options[sensorId.selectedIndex].value);
    dataLabel = sensorId.options[sensorId.selectedIndex].text;

    /* Establishing dates */
    startDateObject = new Date(Date.parse(startDateId.value));
    endDateObject = new Date(Date.parse(endDateId.value));
    startDate = formatDate(startDateObject);
    endDate = formatDate(endDateObject);
    /* Getting the request and creating the charts */
    sensorDataRequest();
}

function sensorNameRequest(){
    $.ajax({
        url: '/api/get/sensors',
        type: 'GET',
        success: function(response){
            return loadOptions(response);
        }
    });
}
function loadOptions(response){
    for(const sensor in response){
        var newOption = document.createElement('option');
        newOption.text = response[sensor]["sensor_name"];
        newOption.value = parseInt(sensor)+1;
        sensorId.appendChild(newOption);
    }
}

function reformatObj(obj) {
    obj['x'] = obj['fecha'].substring(0,19);
    obj['y'] = obj['valor'];
    delete obj['fecha'];
    delete obj['valor'];
}
function orderArrayByDate(array){
    array.sort(function(a,b) {
        var keyA = new Date(a['fecha']);
        var keyB = new Date(b['fecha']);
        if (keyA < keyB) return -1;
        if (keyA > keyB) return 1;
        return 0;
    });
}
function createDataCollection(response){
    for (const i in response){
        dataCollection.push(response.map(({fecha, valor}) => ({fecha, valor}))[i]);
    }
    console.log(dataCollection);
    orderArrayByDate(dataCollection);
    dataCollection.forEach( obj => reformatObj( obj) );
    /* Update time Unit*/
    dateRange = (new Date(Date.parse(dataCollection[0]['x'])) -
        new Date(Date.parse(dataCollection[dataCollection.length-1]['x'])))/86400000;
    console.log(dateRange);
    unit = dateRange<60 ? 'day' : 'month';
}
function sensorDataRequest(){
    $.ajax({
        url: '/api/get/date/'+startDate+'/'+endDate+'/'+sensor_id,
        type: 'GET',
        success: function(response){
            createDataCollection(response);
            showChart();
        }
    });
}

function showChart() {

    const data = {
        smooth: true,
        datasets: [{
            label: dataLabel,
            backgroundColor: ['#eb4034'],
            data: dataCollection,
        }]
    };
    const options = {
        elements: {
          line:{
              tension: 0.3,
          }
        },
        interaction: {
            intersect: false,
        },
        scales: {
            x: {
                type: 'time',
                time: {
                    unit: unit,
                }
            }
        },
        animation: {
            onComplete: () => {
                delayed = true;
            },
            delay: (context) => {
                let delay = 0;
                if (context.type === 'data' && context.mode === 'default' && !delayed) {
                    delay = context.dataIndex * 100 + context.datasetIndex * 100;
                }
                return delay;
            },
        }
    };
    let delayed;
    const config = {
        type: 'line',
        data: data,
        options: options
    };
    chart = new Chart(
        document.getElementById('myChart'),
        config
    );
}

function init(){
    initComponents();
    sensorNameRequest();
}
