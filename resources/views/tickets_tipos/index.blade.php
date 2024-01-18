<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tickets Tipo - Renfe</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>


</body>

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                    Tipos de Tickets - <i>La Renfe Buena</i>
                </h2>
            </div>

            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8">

                    <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <p class="mt-6 text-m font-semibold text-gray-900 dark:text-white">
                            <br>
                            Aquí puedes ver los tipos de tickets que existen. <br> También puedes crear nuevos tipos, editarlos o eliminarlos.
                        </p>

                        <p id="newTicket" class="mt-6 text-m font-semibold text-gray-900 dark:text-white">
                            Ver Trenes &nbsp;
                            <a href="{{ route('trenes.index') }}">🚂</a>
                            
                            Ver Tickets &nbsp;
                            <a href="{{ route('tickets.index') }}">🎟️</a>
                            <br><br>
                            ¿Quieres crear un nuevo Ticket tipo? &nbsp;
                            <a href="{{ route('tickets_tipos.create') }}">➕</a>
                        </p>

                    
                    </div>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <table class="table-auto">
                                <thead class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                                    <tr>
                                        <th>🎟️</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    @foreach($ticketTypes as $ticketType)
                                    <tr>
                                        <td>{{ $ticketType->type }}</td>
                                        <td>
                                            <a href="{{ route('tickets_tipos.show', $ticketType->id) }}">🔎</a>
                                            <a href="{{ route('tickets_tipos.edit', $ticketType->id) }}">✏️</a>
                                            <form action="{{ route('tickets_tipos.destroy', $ticketType->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">❌</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach         
                                </tbody>
                            </table>
                        </div>

            <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                    <div class="flex items-center gap-4">
                        <a href="https://github.com/Nuzagama" target="_blank" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"></path>
                            </svg>
                            Álvaro Romero
                        </a>
                    </div>
                </div>

                <div class="mt-8 ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                    La Renfe Buena | Laravel v10.41.0 (PHP v8.2.6)
                </div>
            </div>
        </div>
    </div>


</body>
</html>