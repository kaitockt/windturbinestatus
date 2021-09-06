<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- JS -->
    <script src="myscript.js"></script>
    <title>Wind Turbine Status</title>
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
        <h1 class="text-2xl py-5 text-center">Wind Turbine Status</h1>
        <div id="list" class="flex flex-wrap"></div>
        <button class="rounded-lg my-3 p-2 w-full
            bg-blue-500 text-white
            hover:bg-blue-700" onclick="listItems()">Refresh</button>
    </div>
</body>
</html>