{!! PageBuilder::section('head') !!}

<script src="{{ PageBuilder::js('basico') }}">
</script>

<section class="mainSection" style="display:flex;">
    <div class="leftDiv">
        <input id="text-1" type="text">
        <textarea id="textarea"></textarea>
    </div>
    <div class="rightDiv" style="display: flex; flex-direction: column;">
        <button id="button1" onclick="buton1click()">Button 1</button>
        <button id="button2" onclick="buton2click()">Button 2</button>
        <input placeholder="Number from 0 to 60" id="text-2" type="text">
        <button onclick="buton3click()">Button 3</button>
    </div>
</section>

<style>
    .leftDiv{
        display: flex;
        flex-direction: column;
        flex: 1;
    }
    .rightDiv{
        display: flex;
        flex-direction: column;
        flex: 0.6;
    }
    .mainSection{
        display: flex;
        flex-direction: row;
        padding : 220px 50px 120px 50px
    }
    /* Material Design-inspired styles for buttons */
    button {
        text-decoration: none;
        border: none;
        padding: 12px 40px;
        font-size: 16px;
        background-color: green;
        color: #fff;
        border-radius: 5px;
        box-shadow: 7px 6px 28px 1px rgba(0, 0, 0, 0.24);
        cursor: pointer;
        outline: none;
        transition: 0.2s all;
        margin: 35px 10px 35px 10px;
    }
    /* Adding transformation when the button is active */
    #text-2{
        background-color: white;
        color: black;
        padding: 12px 40px;
        font-size: 16px;
        border: 1px solid #11b712;;
        border-radius: 5px;
        box-shadow: 7px 6px 28px 1px rgba(0, 0, 0, 0.24);
        resize: vertical;
        margin: 35px 10px 35px 10px;

    }
    button:active {
        transform: scale(0.98);
        /* Scaling button to 0.98 to its original size */
        box-shadow: 3px 2px 22px 1px rgba(0, 0, 0, 0.24);
        /* Lowering the shadow */
    }
    button:hover {
        background-color: rgba(24, 187, 51, 0.67);
        color: #ffffff;
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2), inset 0 0 5px #178f2c;
    }


    /* Material Design-inspired styles for textareas */
    textarea {
        height: 400px;
        background-color: white;
        color: black;
        padding: 0.5em 1em;
        border: 1px solid #11b712;;
        border-radius: 3px;
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
        resize: vertical;
        margin: 10px 10px 10px 10px;
    }
    input{
        background-color: white;
        color: black;
        padding: 0.5em 1em;
        border: 1px solid #11b712;;
        border-radius: 3px;
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
        resize: vertical;
        margin: 10px 10px 10px 10px;
    }
</style>


{!! PageBuilder::section('footer') !!}
