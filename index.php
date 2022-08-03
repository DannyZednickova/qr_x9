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
            <img src="img/logo-stomatologie.png">
            <div class ="logo"> 
                <h2>Platba QR </h2> 
            </div>
            
            <form class = "form" id="inputform"  method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                <div class="mb-3">
                    <label for="amount" class="form-label">Částka</label>
                        <input type="text" class="form-control numeric" name= "amount">
                        <div class="hidden-text"> Jen čísla </div>
                    </div>
                    <div class="mb-3">
                        <label for="vs" class="form-label">Variabilní symbol</label>
                        <input type="text" class="form-control numericvs" name="vs">
                        <div class="hidden-textvs"> Jen čísla </div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Zpráva pro příjemce</label>
                        <input type="text" class="form-control" name="message">
                    </div>
                        <button type="submit" class="btn btn-outline-primary" id="generatebutton">Vygenerovat kód</button>
                </form>
        
                
                <br>
                <?php 
                    
                

                    if ( (isset($amount)) && (isset($vs)) && (($amount !== NULL ) && ($vs !== NULL)) ) {
                        echo 'Číslo účtu: 1419326389 / 0800 <br>';
                        echo 'Častka: ' . $amount . '<br>';
                        echo 'Variabilní symbol: ' . $vs. '<br>';
                        echo 'Zpráva: ' . $message. '<br>';
                        echo '<img id="qrcode" style=" display: block;-webkit-user-select: none;margin: auto;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;" src="https://api.paylibo.com/paylibo/generator/czech/image?accountNumber=1419326389&amp;bankCode=0800&amp;amount='. $amount .'&amp;currency=CZK&amp;vs=' . $vs. '&amp;message=' .$message .' ">';
                    } 
                ?>

            
            
                <div class="generate-link ">   
                    <a target="_blank" href= 'https://api.paylibo.com/paylibo/generator/czech/image?accountNumber=1419326389&bankCode=0800&amount=<?php echo $amount ?>&currency=CZK&vs=<?php echo $vs?>&message=<?php echo $message?>' role="button" >Generovat QR kód na nové stránce  </a> 
                </div>

                <div class ="bottom-menu">   
                    <a  class= "btn btn-outline-danger" href="https://www.vladimirakratka.cz/qr/index.php"> Obnovit stránku </a>
                    <a  class= "btn btn-outline-primary" href="https://www.vladimirakratka.cz/"> Zpět na web ordinace </a>
                </div>
    </div>
    <script   src="https://code.jquery.com/jquery-3.6.0.slim.js"   integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="  crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>
