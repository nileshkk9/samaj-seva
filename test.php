<?php
require_once("razor-pay/config.php");
?>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width">
    <title>Document</title>
</head>

<body>
    <form action="https://www.example.com/payment/success/" method="POST">
        <script src="https://checkout.razorpay.com/v1/checkout.js" data-key=<?php echo $razor_api_key; ?>
            data-amount="5055" data-currency="INR" data-buttontext="Pay with Razorpay"
            data-name="Samaj Seva Bharati Paschimbanga" data-description="Charity"
            data-image="https://cdn.razorpay.com/logos/EhQZSz19zq2g6p_medium.png" data-prefill.name="Gaurav Kumar"
            data-prefill.email="" data-prefill.contact="" data-theme.color="#F37254">
        </script>
        <input type="hidden" custom="Hidden Element" name="hidden">
    </form>
</body>

</html>