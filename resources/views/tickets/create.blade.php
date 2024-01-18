<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Ticket - Renfe</title> 
</head>
<body>
    <form action="{{ route('tickets.store') }}" method="POST">
        @csrf
    
        <label for="ticket_type_id">Tipo de Ticket:</label>
        <select name="ticket_type_id" id="ticket_type_id">
            @foreach ($ticketTypes as $type)
                <option value="{{ $type->id }}">{{ $type->type }}</option>
            @endforeach
        </select>
    
        <label for="train_id">Tren:</label>
        <select name="train_id" id="train_id">
            @foreach ($trains as $train)
                <option value="{{ $train->id }}">{{ $train->name }}</option>
            @endforeach
        </select>

        <label>Precio: </label>
        <input type="number" step="0.1" name="precio" value=""><br><br>
        <input type="date" name="fecha" id="date">
        
        


    
        <button type="submit">Crear Ticket</button>
    </form>
    
</body>
</html>