
<!-- html  -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Code Clause - Payment API Integration Project</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/345587e4ce.js" crossorigin="anonymous"></script>
	<style>
		body{
			background-color: rgb(188, 218, 218) !important;
		}
        main{
            width: 30%;
            margin: 0 auto !important;
            border: 1px solid white;
			border-radius:20px;
			padding: 20px;
        }
       
	</style>
</head>

<body class="response">


		<nav class="navbar navbar-expand-lg ms-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img src="../img/codeclause.png" class="img-fluid ml-5 logo"
                        alt="CodeClause"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" id="nav-btn"></span>
                </button>
                <div class="collapse navbar-collapse ml-25" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto ms-4 mb-2 mb-lg-0">
                        <li class="nav-item pe-2">
                            <a class="nav-link" aria-current="page"  href="../index.php">Go ToHome</a>
                        </li>
                        
                    </ul>
                </div>
                <span class="me-4"><i class="fa-solid fa-user me-1"></i>CC1078</span>
            </div>
        </nav>

    <main>

		<!-- php  -->
		<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		// echo "<b>Transaction Successful</b>" . "<br/>";
		echo "<h3 class='text-center text-success mb-4'>Transaction Successful</h3>";

		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		// echo "<b>Transaction status is failure</b>" . "<br/>";
		echo "<h3 class='text-center text-success mb-4'>Transaction status is failure</h3>";
	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
		foreach($_POST as $paramName => $paramValue) {
				
				if($paramName=="MID"){ 
					// nothing to do 
				}
				elseif($paramName=="RESPCODE"){
					// nothing to do 
				}
				elseif($paramName=="CHECKSUMHASH"){
					// nothing to do 
				}
				else{
					// echo "<br/>" . $paramName . " = " . $paramValue;
					echo "<p class='text-dark ms-4'>$paramName = $paramValue</p>";

				}
		}
	}
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>

        <!-- <h3 class="text-center text-success">Transaction Successful</h3>
        <div class="info-container">
            <p class="text-dark card-title ms-4">ORDERID = ORDS9005514</p>
        </div> -->
    </main>
   
</body>

</html>