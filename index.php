<html lang="cs-CZ">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QR platba </title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
    <meta http-equiv="pragma" content="no-cache" />
<body>
    

<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $amount = $_POST['amount'];
    $vs = $_POST['vs'];
    $message = $_POST['message'];


}

?>


<div class="container-sm">

    <form class = "form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div class="mb-3">
        <label for="vs" class="form-label">Částka</label>
            <input type="text" class="form-control" name= "amount">
        </div>
        <div class="mb-3">
            <label for="vs" class="form-label">Variabilní symbol</label>
            <input type="text" class="form-control" name="vs">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Zpráva pro příjemce</label>
            <input type="text" class="form-control" name="message">
        </div>
            <button type="submit" class="btn btn-outline-primary" id="generatebutton">Vygenerovat kód</button>
    </form>

    <div id="qr">   </div>
    <br>
        <img id="qrcode" style="display: block;-webkit-user-select: none;margin: auto;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;" src="https://api.paylibo.com/paylibo/generator/czech/image?accountNumber=2113405855&amp;bankCode=1100&amp;amount=<?php echo $amount ?>&amp;currency=CZK&amp;vs=<?php echo $vs?>&amp;message=<?php echo $message?>">
    <br>
    <div>
   
    <div class="generate-link ">   
        <a target="_blank" href= 'https://api.paylibo.com/paylibo/generator/czech/image?accountNumber=2113405855&bankCode=1100&amount=<?php echo $amount ?>&currency=CZK&vs=<?php echo $vs?>&message=<?php echo $message?>' role="button" >Generovat QR kód na nové stránce  </a> <br>
    </div>

    <small> https://api.paylibo.com/paylibo/generator/czech/image?accountNumber=2113405855&bankCode=1100&amount=<?php echo $amount ?>&currency=CZK&vs=<?php echo $vs?>&message=<?php echo $message?>
    </small>

</div>


</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/main.js"></script>
</html>
