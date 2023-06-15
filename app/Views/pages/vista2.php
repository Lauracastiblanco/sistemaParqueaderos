<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
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
</head>

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
    <h1>Productos</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre del Producto</th>
                <th>Descripción</th>
                <th>Cantidad Disponible</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Producto 1</td>
                <td>Descripción del Producto 1</td>
                <td>10</td>
            </tr>
            <tr>
                <td>Producto 2</td>
                <td>Descripción del Producto 2</td>
                <td>5</td>
            </tr>
            <tr>
                <td>Producto 3</td>
                <td>Descripción del Producto 3</td>
                <td>20</td>
            </tr>
        </tbody>
    </table>
</body>

</html>