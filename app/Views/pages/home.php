<!DOCTYPE html>
<html>

<head>
    <title>Pedidos</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
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
            margin: 20px 0 10px;
            font-size: 36px;
            color: #333;
            text-align: center;
        }

        form {
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            min-width: 400px;
        }

        label {
            display: block;
            margin: 10px 0;
            font-size: 16px;
            color: #333;
        }

        input[type=text],
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin-top: 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type=submit]:hover {
            background-color: #45a049;
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
    <h1>Registrar pedido</h1>
    <form>
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" placeholder="Nombre completo" required>

        <label for="email">Correo electrónico:</label>
        <input type="text" id="email" name="email" placeholder="correo@ejemplo.com" required>

        <label for="address">Dirección:</label>
        <input type="text" id="address" name="address" placeholder="Dirección completa" required>

        <label for="product">Producto:</label>
        <select id="product" name="product" required>
            <option value="">Seleccione un producto</option>
            <option value="producto1">Producto 1</option>
            <option value="producto2">Producto 2</option>
            <option value="producto3">Producto 3</option>
        </select>

        <label for="quantity">Cantidad:</label>
        <input type="text" id="quantity" name="quantity" placeholder="Cantidad del producto" required>

        <input type="submit" value="Enviar pedido">
    </form>
</body>

</html>