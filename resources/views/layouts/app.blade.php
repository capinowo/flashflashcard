<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Flashcard App' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            background-color: #FFE5DE; /* soft peach background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: sans-serif;
        }
        .card {
            background-color: #F9A58C; /* peach card */
            padding: 2rem;
            border-radius: 1.5rem;
            width: 300px;
            min-height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 0 8px 24px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="card">
        @yield('content')
    </div>
</body>
</html>
