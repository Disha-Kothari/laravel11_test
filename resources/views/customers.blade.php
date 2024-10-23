<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Customer Creation</h1>
    <form method="post" action="insert">
        @csrf
        <input type="text" placeholder="Enter Customer Name:" name="txtCustomerName"><br/><br/>
        <input type="text" placeholder="Enter Customer City:" name="txtCustomerCity"><br/><br/>
        <input type="text" placeholder="Enter Customer Mobile:" name="txtCustomerMobile"><br/><br/>
        <input type="email" placeholder="Enter Customer Email:" name="txtCustomerEmail"><br/><br/>
        <input type="Submit" value="Insert Customer"><br/>
</div>
</body>
</html>
