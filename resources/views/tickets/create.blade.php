<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Ticket - Renfe</title> 
        <link rel="icon" href="img/favicon.ico">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&amp;display=swap" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                   Crear Ticket
                </h2>
            </div>
    <div class="mt-16">
    <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
    <form action="{{ route('tickets.store') }}" method="POST">
        @csrf
    
        <label for="ticket_type_id">🎟️</label>
        <select name="ticket_type_id" id="ticket_type_id">
            @foreach ($ticketTypes as $type)
                <option value="{{ $type->id }}">{{ $type->type }}</option>
            @endforeach
        </select>
        <br><br>
    
        <label for="train_id">🚂</label>
        <select name="train_id" id="train_id">
            @foreach ($trains as $train)
                <option value="{{ $train->id }}">{{ $train->name }}</option>
            @endforeach
        </select>
        <br><br>
        <label>💰</label>
        <input type="number" step="0.1" name="precio" value="" placeholder="€">
        <br><br>
        <label>📅</label>
        <input type="date" name="fecha" id="date">
        <br><br>
        


    
        <button style="color:#4b5563;" type="submit">Crear Ticket</button>
    </form>
</div>
<div class="flex justify-center">
    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
       Regresar <a href="{{ route('tickets.index') }}">↩️</a>
    </h2>
</div>
</div>
</div>
</div>
</body>
</html>