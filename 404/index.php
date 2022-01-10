<!DOCTYPE html>
<html>

<head>
    <title>404</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/mobile_style.css">
</head>

<body>
    <div class="warning">
    <h1 class="text-404">The Page You Entered Is Not Valid</h1>
    </div>
    <style>
        body {
            background-color: red;
            animation: backgroundColor 1s ease infinite;
        }
    </style>
    <script>
        setTimeout(() => {
            window.location.replace('/');
        }, 5000);
    </script>
</body>

</html>