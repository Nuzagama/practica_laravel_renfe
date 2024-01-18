<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Ticket - Renfe</title>
</head>
<body>
    <form method="post" action="{{route('tickets.update', ['ticket'=>$ticket->id])}}">
        @csrf
        {{ method_field('PUT') }}
        <label>Fecha: </label>
        <input type="date" name="date" value="{{ $ticket->date }}"><br><br>
        <label>Precio: </label>
        <input type="number" step="0.1" name="price" value="{{ $ticket->price }}"><br><br>
        <label>Tren: </label>
        <select name="train_id">
            @foreach ($trains as $train)
                <option value="{{ $train->id }}" {{ $train->id == $ticket->train_id ? 'selected' : '' }}>
                    {{ $train->name }}
                </option>
            @endforeach
        </select>
        
        <label>Tipo de Tren: </label>
        <select name="ticket_type_id">
            @foreach ($ticketTypes as $type)
                <option value="{{ $type->id }}" {{ $type->id == $ticket->ticket_type_id ? 'selected' : '' }}>
                    {{ $type->type }}
                </option>
            @endforeach
        </select>
        <br><br>
        <input type="submit" value="Modificar Ticket">
    </form>
</body>
</html>