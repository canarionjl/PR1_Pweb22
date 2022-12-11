<?php echo PageBuilder::section('head'); ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../themes/temaGrupo3/js/graficos.js"></script>
<section class="mainSection">
    <div class="menu">
        <select name="sensor_id" id="sensor_id">
        </select>
        <input name="startDate" type="date" id="startDate" value="2000-01-01"
               min="2000-01-01" max="2029-12-12">
        <input name="endDate" type="date" id="endDate" value="2029-12-31"
               min="2000-01-01" max="2029-12-31">
        <button id="submitButton" onclick="submitButtonClicked()">Submit</button>
<div class="break"></div>
    <div class="chart" >
        <canvas id="myChart"></canvas>
    </div>
    </div>
</section>
<style>
    .break{
        width:100%;
    }
    #submitButton {
        /* Style the button */
        background-color: green;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;

        /* Add a hover effect */
        transition: 0.3s;
    }
    #submitButton:hover {
         background-color: #5fb65f;
     }

    /* Add an animation */
    #submitButton:active {
         transform: translateY(2px);
     }

    #sensor_id{
    }
    .mainSection{

    }
    .menu{
        display: flex;
        flex-flow: row wrap;
        justify-content: center;
        align-items: stretch;
        column-gap: 30px
    }
    .chart{
        padding: 50px 50px 50px 50px;
        width:60%;
    }

</style>
<?php echo PageBuilder::section('footer'); ?>


<?php /**PATH C:\laragon\www\proyectoweb22\resources\views/themes/temaGrupo3/practica3_graficos.blade.php ENDPATH**/ ?>