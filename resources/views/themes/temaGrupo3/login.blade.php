{!! PageBuilder::section('head') !!}

<style>
    input{
        border: 1px solid #939393;
        border-radius: 5px;
        background-color: rgba(243, 243, 243, 0.81);
        transition: all .3s ease-out;
        margin:auto;
        height: 4rem;
        font-size: 1.4em;
        width: 100%;
    }
    :focus-visible{
        outline: #d7d7d7 auto 1px;
    }

    input:focus{
        background-color: rgba(255, 255, 255, 1)
    }
    form{
    }
    main div {
        display: block;
        padding: .5rem 3rem .5rem 7rem
    }
    main section{
        height: 650px;
        max-width: 40rem;
        display:block;
    }
    h1 {
        padding: 1rem 1rem 1rem 3rem;
    }
    main{
        display: flex;
        justify-content: center;
        padding:190px 0 100px 0;
        background-color: white;

    }
    .h2login{
        padding: 1rem 1rem 1rem 1rem;
        font-weight: bold;
        font-size:3rem;
        margin:0 0 0 0;
    }
    .h3login {
        padding: 1rem 1rem 1rem 1rem;
        font-size: 2rem;
        font-weight: 100;
        margin: 0 0 0 0;
    }
    .fSection{
        border-right: 1px solid rgba(0,0,0,0.2);
        margin-top: 20px;
    }
    .sSection{
        width:40rem;
    }
    .inputIntro{
        padding: 0 3rem 0 5rem;
        font-size: 2.5rem;
    }
    .inputIntro:after{
        margin: 0 0 0 0;
        background: none;
    }
    #secondText{
        margin-bottom: 30px;

    }
    .loginButton {
        border: 1px solid #939393;
        border-radius: 5px;
        background-color: rgb(143, 236, 143);
        transition: all .3s ease-out;
        margin: auto auto 35px auto;
        height: 4rem;
        font-size: 1.4em;
        width: 100%;
    }
    .loginButton:hover {
        background-color: rgb(175, 252, 175);
    }
    .loginButton:after{

    }
    .login2Button{
        border: 1px solid #939393;
        border-radius: 5px;
        background-color: rgba(243, 243, 243, 0.81);
        transition: all .3s ease-out;
        margin:auto;
        height: 4rem;
        font-size: 1.4em;
        width: 100%;
    }
    .login2Button:hover {
        background-color: rgb(222, 255, 222);
    }
    #fButton:after{
        content: "";
        display: block;
        margin: 0 0 20px 0;
        background: #c2c2c2;
        height: 1px;
        width: 100%;
        padding: 0 5px 0 5px ;
    }
</style>
<main>
<section class="fSection">
    <h2 class="h2login">Gestiona tus pedidos</h2>
        <h3 class="h3login">Ten el control de todos tus pedidos y recibe notificaciones con el seguimiento</h3>
    <h2 class="h2login">Lista de deseos personalizada</h2>
        <h3 class="h3login">Guarda tus productos favoritos en las listas de deseos personalizadas</h3>
</section>
<section class="sSection">
    <h1>Iniciar Sesión</h1>
<form>
    <h3  class="inputIntro">Nombre de usuario:</h3>
    <div>
        <input type="text">
    </div>
    <h3  class="inputIntro">Contraseña:</h3>
    <div id="secondText">
        <input type="password">
    </div>
    <div id="fButton">
        <button class="loginButton">Iniciar Sesión</button>
    </div>
    <div>
        <button class="login2Button">Crear cuenta</button>
    </div>
</form>
</section>
</main>
{!! PageBuilder::section('footer') !!}
