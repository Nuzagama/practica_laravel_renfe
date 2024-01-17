<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Ticket</title> 
</head>
<body>
    <form method="POST" action="{{route('tickets.store')}}">
        @csrf
        <label>Nombre:</label>
        <select name="tipo">
            @foreach($tickets as $ticket)
            <option selected hidden value="{{ $ticket->tipo_train->type}}">{{ $ticket->tipo_train->type }}</option>
            @endforeach
        </select>
        <br><br>
        <input type="submit" value="Crear">
    </form>
</body>
</html>