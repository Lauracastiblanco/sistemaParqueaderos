<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0px;
    }

    header {
        background-color: rgba(247, 248, 249, 1);
        padding: .4rem 0 0;
    }

    .menu {
        padding: .4rem 2rem;
    }

    header ul {
        border-bottom: 1px solid rgba(242, 242, 242, 1);
        list-style-type: none;
        margin: 0;
        overflow: hidden;
        padding: 0;
        text-align: right;
    }

    header li {
        display: inline-block;
    }

    header li a {
        border-radius: 5px;
        color: rgba(0, 0, 0, .5);
        display: block;
        height: 44px;
        text-decoration: none;
    }

    header li.menu-item a {
        border-radius: 5px;
        margin: 5px 0;
        height: 38px;
        line-height: 36px;
        padding: .4rem .65rem;
        text-align: center;
    }

    header li.menu-item a:hover,
    header li.menu-item a:focus {
        background-color: #4CAF50;
        color: white;
    }

    header .logo {
        float: left;
        height: 44px;
        padding: .4rem .5rem;
    }

    header .menu-toggle {
        display: none;
        float: right;
        font-size: 2rem;
        font-weight: bold;
    }

    header .menu-toggle button {
        background-color: rgba(221, 72, 20, .6);
        border: none;
        border-radius: 3px;
        color: rgba(255, 255, 255, 1);
        cursor: pointer;
        font: inherit;
        font-size: 1.3rem;
        height: 36px;
        padding: 0;
        margin: 11px 0;
        overflow: visible;
        width: 40px;
    }

    header .menu-toggle button:hover,
    header .menu-toggle button:focus {
        background-color: rgba(221, 72, 20, .8);
        color: rgba(255, 255, 255, .8);
    }

    h1 {
        text-align: center;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2
    }

    th {
        background-color: #4CAF50;
        color: white;
    }
</style>

<body>
    <header>
    <div class="menu">
        <ul>
            <li class="logo">
            </li>
            <li class="menu-toggle">
                <button onclick="toggleMenu();">&#9776;</button>
            </li>
            <li class="menu-item hidden"><a href="vista2">Productos</a>
            <li class="menu-item hidden"><a href="vista3">Clientes</a></li>
            </li>
            <li class="menu-item hidden"><a href="vista4">Pedido</a></li>
            <li class="menu-item hidden"><a href="home">Registrar Pedido</a></li>
        </ul>
    </div>
    </header>
    <h1>Pedidos</h1>
    <table>
        <thead>
            <tr>
                <th>Número de Pedido</th>
                <th>Fecha de Pedido</th>
                <th>Nombre del Cliente</th>
                <th>Estado del Pedido</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>01/01/2023</td>
                <td>Cliente 1</td>
                <td>Pendiente</td>
            </tr>
            <tr>
                <td>2</td>
                <td>02/01/2023</td>
                <td>Cliente 2</td>
                <td>En Proceso</td>
            </tr>
            <tr>
                <td>3</td>
                <td>03/01/2023</td>
                <td>Cliente 3</td>
                <td>Entregado</td>
            </tr>
        </tbody>
    </table>
</body>

</html>