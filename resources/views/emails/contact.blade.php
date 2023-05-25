<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.4.0/css/bootstrap.min.css">
    <style>
        <style>
        /* Add your custom CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #343a40;
            color: white;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 6px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .header {
            background-color: #815194;
            padding: 20px;
            border-radius: 6px 6px 0 0;
        }
        
        .content {
            padding: 20px;
        }
        
        h2 {
            margin-top: 0;
            color: #333333;
        }
        
        .card {
            background-color: #f9f9f9;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
        }
        
        .card-title {
            font-size: 18px;
            margin-bottom: 10px;
        }
        
        .card-text {
            margin-bottom: 5px;
        }
        
        .footer {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 0 0 6px 6px;
        }
        
        p {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Het contactforumlier van Accijnzen.be</h2>
        </div>
        
        <div class="content">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Gebruikersgegevens</h5>
                    <p class="card-text"><strong>Naam:</strong> {{ $data->name }}</p>
                    <p class="card-text"><strong>Email:</strong> {{ $data->email }}</p>
                    <p class="card-text"><strong>Bericht:</strong><br>{{ $data->message }}</p>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>