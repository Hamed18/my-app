<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series Result</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="">
    <div class="">
        <p class="">Fibonacci series:</p>
        <div class="">
            <p class="">{{ implode(', ', $series) }}</p>
        </div>
        <a
            href="/fibonacci"
            class="block"
        >
            submit again
        </a>
    </div>
</body>
</html>
