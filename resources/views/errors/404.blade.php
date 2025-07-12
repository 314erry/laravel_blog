<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 Not Found</title>
    <style>
        body {
            background: #f8fafc;
            color: #333;
            font-family: 'Segoe UI', Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 90vh;
            margin: 0;
        }
        .container {
            text-align: center;
        }
        h1 {
            font-size: 6rem;
            margin-bottom: 0.5rem;
            color: #2b6cb0 ;
        }
        p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
        }
        a {
            color: #3182ce;
            text-decoration: none;
            font-weight: bold;
            border-bottom: 1px dashed #3182ce;
        }
        a:hover {
            color: #2b6cb0;
            border-bottom: 1px solid #2b6cb0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>404</h1>
        <p>Oops! The page you are looking for could not be found.</p>
        <a href="{{ url('/') }}">Go back home</a>
    </div>
</body>
</html>