<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tickets - Renfe</title>
</head>
<body>

    <p>
        <a href="{{route('tickets.create')}}">Tickets Logs</a>
    </p>

    <table>
     <thead>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Train Tipo</th>
            <th>Ticket Tipo</th>
        </tr>
     </thead>
     <tbody>
        @foreach($tickets as $ticket)
        <tr>
            <td>{{ $ticket->date }}</td>
            <td>{{ $ticket->price }}</td>
            <td>{{ $ticket->tipo_ticket->type }}</td>
            <td>{{ $ticket->tipo_train->type }}</td>   
        @endforeach
     </tbody>
    </table>
</body>
</html>