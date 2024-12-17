<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="">
    <div class="">
        <h1 class="">Fibonacci Series</h1>
        <form action="/fibonacci" method="POST" class="space-y-4">
            @csrf
            <input
                type="number"
                id="n"
                name="n"
                min="1"
                required
                class="border"
            >
            @error('n')
                <p class="">{{ $message }}</p>
            @enderror
            <button
                type="submit"
                class=""
            >
                submit
            </button>
        </form>
    </div>
</body>
</html>
