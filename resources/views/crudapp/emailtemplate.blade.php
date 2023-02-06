<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        body 
        {
            background-color: aliceblue;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            box-sizing: border-box;
        }
        .email-send
        {
            width: 100%;
            height: auto;
            padding: 25px 5px;
            font-size: 15px;
            background-color: lightgray;

        }
    </style>
</head>
<body>

    <div class="email-send">
        <h1>Contact us Email details</h1>
        <p><img src="https://media1.giphy.com/media/BPJmthQ3YRwD6QqcVD/giphy.gif"></p>
        <p>Hi i am just sending contact us details in emails</p>
        <p>Welcome to Our Website {{ $data["name"] }} </p>
        
        <p>Contact us or email us <a href="mailto:amikhunt91@gmail.com">amikhunt91@gmail.com</a></p>
        <p>Our Address : Tops Technology pvt ltd<br> 1st floor above sbi bank near <br> indira circle rajkot-360005 Gujrat</p>
    </div>
    
</body>
</html>