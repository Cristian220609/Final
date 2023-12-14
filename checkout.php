<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Integration (Stripe)</title>
    <link rel="stylesheet" href="./css/style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            font-size: 38px; 
        }

        .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            min-height: 80vh; 
            width: 90%;
            margin: 0 auto;
        }

        .form-container, .checkout-container {
            background-color: #fff;
            padding: 30px; 
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 45%;
            height: 100%; 
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input {
            margin-bottom: 15px;
            padding: 15px; 
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 28px; 
        }

        label {
            font-weight: bold;
        }

        .checkout-container img {
            max-width: 100%;
            border-radius: 5px;
            margin-top: 15px;
        }

        .stripe-button {
            margin-top: 15px;
        }

        .back {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 15px 30px; 
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 28px; 
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form autocomplete="off" action="checkout-charge.php" method="POST">
                <div>
                    <input type="text" name="c_name" required placeholder="Customer Name"/>
                </div>
                <div>
                    <input type="text" name="address" required placeholder="Address"/>
                </div>
                <div>
                    <input type="number" id="ph" name="phone" pattern="\d{10}" maxlength="10" required placeholder="Contact number"/>
                </div>
                <div>
                    <input type="text"  name="product_name" value="<?php echo $_GET["item_name"]?>" disabled required/>
                </div>
                <div>
                    <input type="text"  name="price" value="<?php echo $_GET["price"]?>" disabled required/>
                </div>
               
                <input type="hidden" name="amount" value="<?php echo $_GET["price"]?>">
                <input type="hidden" name="product_name" value="<?php echo $_GET["item_name"]?>">
                
                <script
                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="pk_test_51OKRzoCS9pysHZoeqQ8zJpPDdupLvBicSTH1c0CN7tQHetS1T3RDdV9CEIyZVALMO5HsF4qr3hpS1mSnt3cGEgqN0091JCpyhr"
                    data-amount=<?php echo str_replace(",","",$_GET["price"]) * 100?>
                    data-name="<?php echo $_GET["item_name"]?>"
                    data-description="<?php echo $_GET["item_name"]?>"
                    data-image="<?php echo $_GET["image"]?>"
                    data-currency="usd"
                    data-locale="auto">
                </script>
            </form>
        </div>
    
        <div class="checkout-container">
            <h2>Checkout Summary</h2>
            <h4>Product Name: <?php echo $_GET["item_name"]?></h4>
            <img src="<?php echo $_GET["image"]?>" alt="Product Image"/>
            <p>Price: <?php echo $_GET["price"]?></p>
        </div>
    </div>

    <button type="button" onclick="goBack()" class="back">Go Back</button>

    <script>
        function goBack() {
            window.history.go(-1);
        }

        document.getElementById('ph').addEventListener('input', function () {
            var maxLength = 10;
            if (this.value.length > maxLength) {
                this.value = this.value.slice(0, maxLength);
            }
        });
    </script>
</body>
</html>