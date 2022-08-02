<html lang="cs-CZ">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QR platba </title>
    <link rel="stylesheet" type="text/css" media="all" href="style.css" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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




<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Ammount: <input type="text" name="amount">
VS: <input type="text" name="vs">
Message: <input type="text" name="message">
<input type="submit">
</form>





<a href = 'https://api.paylibo.com/paylibo/generator/czech/image?accountNumber=2113405855&bankCode=1100&amount=<?php echo $amount ?>&currency=CZK&vs=<?php echo $vs?>&message=<?php echo $message?> ' >generuj </a> <br>



</body>
</html>
