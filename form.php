<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon Customer Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h2 {
            text-align: center;
        }
        label {
            margin-top: 10px;
            display: block;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h2>Amazon Customer Registration Form</h2>
    <form action="connect.php" method="post">
        <label for="customer_id">Customer ID:</label>
        <input type="number" id="customer_id" name="customer_id" placeholder="Enter ID" required>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" maxlength="100" placeholder="Enter Name" required>

        <label for="contact_information">Contact Information:</label>
        <select id="country_code" name="country_code" required>
            <option value="1">+1 (USA)</option>
            <option value="44">+44 (UK)</option>
            <option value="91">+91 (India)</option>
            <option value="61">+61 (Australia)</option>
            <!-- Add more country codes as needed -->
        </select>
        <input type="tel" id="contact_number" name="contact_number" pattern="[0-9]{10}" placeholder="1234567890" required>

        <label for="shipping_address">Shipping Address:</label>
        <input type="text" id="shipping_address" name="shipping_address" placeholder="Enter Address" maxlength="255" required>

        <label for="payment_method">Payment Method:</label>
        <select id="payment_method" name="payment_method" required>
            <option value="Credit Card">Credit Card</option>
            <option value="PayPal">PayPal</option>
            <option value="Amazon Pay">Amazon Pay</option>
            <option value="Bank Transfer">Bank Transfer</option>
            <!-- Add more payment methods as needed -->
        </select>

        <input type="submit" value="Register">
    </form>
</body>
</html>
