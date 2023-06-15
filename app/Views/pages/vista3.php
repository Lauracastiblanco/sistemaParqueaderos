<!DOCTYPE html>
<html>

<head>
    <title>Clientes - Pedidos</title>
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

        h1 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            margin-bottom: 40px;
            margin-left: 10px;
            margin-right: 30px;

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
    <h1>Clientes</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo Electrónico</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Cliente 1</td>
                <td>cliente1@example.com</td>
                <td>555-1234</td>
            </tr>
            <tr>
                <td>Cliente 2</td>
                <td>cliente2@example.com</td>
                <td>555-5678</td>
            </tr>
            <tr>
                <td>Cliente 3</td>
                <td>cliente3@example.com</td>
                <td>555-9012</td>
            </tr>
        </tbody>
    </table>
</body>

</html>