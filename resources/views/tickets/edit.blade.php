<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Ticket - Renfe</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                   Editar Ticket | Regresar <a href="{{ route('tickets.index') }}">↩️</a>
                </h2>
            </div>
    <div class="mt-16">
    <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
        <form method="post" action="{{route('tickets.update', ['ticket'=>$ticket->id])}}">
        @csrf
        {{ method_field('PUT') }}
        <label>📅</label>
        <input
        type="date" name="date" value="{{ $ticket->date }}"><br><br>
        <label>🎟️</label>
        <select name="ticket_type_id">
            @foreach ($ticketTypes as $type)
                <option value="{{ $type->id }}" {{ $type->id == $ticket->ticket_type_id ? 'selected' : '' }}>
                    {{ $type->type }}
                </option>
            @endforeach
        </select>
        <br><br>
        <label>🚂</label>
        <select name="train_id">
            @foreach ($trains as $train)
                <option value="{{ $train->id }}" {{ $train->id == $ticket->train_id ? 'selected' : '' }}>
                    {{ $train->name }}
                </option>
            @endforeach
        </select>
        <br><br>
        <label>💰</label>
        <input type="number" step="0.1" name="price" value="{{ $ticket->price }}"><br><br>
        <button style="color:#4b5563;" type="submit" value="">Modificar Ticket</button>
    </form>
    </div>
    </div>
    </div>
    </div>
</body>
</html>