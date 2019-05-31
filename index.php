<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php 
    include 'conectaDB.php';
    session_cache_expire(30);
    session_start();
    require 'validaSessao.php';

    if (isset($_POST['addCliente'])) 
    {
        include 'menu.php';
        include 'cliente.php'; 
        include 'contador.php';                 
    }
    elseif (isset($_POST['gerarPDF'])) 
    {
        include 'menu.php';
        include 'gerar_pdf.php';
        include 'contador.php';
    } 

    elseif (isset($_POST['verPedido'])) 
    {
        include 'menu.php';
        include 'verPedido.php';
        include 'contador.php';
    } 
    elseif (isset($_POST['finalizaPedido'])) 
    {
        include 'menu.php';
        include 'QProdutoPedido.php';
    } 
    elseif (isset($_POST['addPedido'])) 
    {
        include 'menu.php';
        include 'pedido.php';
        include 'contador.php';
    } 
    elseif (isset($_POST['btnDelProduto'])) 
    {
        include 'menu.php';
        include 'QDelProduto.php';
    }
    elseif (isset($_POST['btnDelCliente'])) 
    {
        include 'menu.php';
        include 'QDelCliente.php';
    }
    //MENU CLIENTE
    elseif (isset($_POST['verCliente'])) 
    {
        include 'menu.php';
        include 'verCliente.php';
        include 'contador.php';  
    }
    elseif (isset($_POST['delCliente'])) 
    {
        include 'menu.php';
        include 'delCliente.php';
        include 'contador.php';  
    }
    elseif (isset($_POST['editCliente'])) 
    {
        include 'menu.php';
        include 'editCliente.php';
        include 'contador.php';  
    }
    //MENU PRODUTO
    elseif (isset($_POST['editProduto'])) 
    {
        include 'menu.php';
        include 'editProduto.php';
        include 'contador.php';  
    }
    elseif (isset($_POST['delProduto'])) 
    {
        include 'menu.php';
        include 'delProduto.php';
        include 'contador.php';  
    }
    elseif (isset($_POST['verProduto'])) 
    {
        include 'menu.php';
        include 'verProduto.php';
        include 'contador.php';  
    }
    //INSERE PEROUTO E CLIENTE
    elseif (isset($_POST['addProduto'])) 
    {
        include 'menu.php';
        include 'produto.php';
        include 'contador.php';  
    }
    elseif (isset($_POST['btnProduto'])) 
    {
        include 'menu.php';
        include 'insereProduto.php';
        include 'contador.php';            
    }
    elseif (isset($_POST['btnCliente'])) 
    {
        include 'menu.php';
        include 'insereCliente.php';
        include 'contador.php';           
    }
    //VALIDAÇÕES
    elseif (isset($_POST['validaLoginUsuario']))
    {
        include 'login.php';
    }
    elseif (isset($_POST['logoff']))
    {
        include 'logoff.php';
    }
    elseif (isset($_SESSION['LOGADO']))
    {
        include ('menu.php');
        include 'contador.php';  
    }
    else {
        include 'form_login.php';
    }


    ?>
</body>
</html>
