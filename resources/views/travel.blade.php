<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Travels</title>

        
    </head>
    <body>
        <h1>Scegli il pacchetto che fa per te</h1>
        <section class="container">
            @foreach ($travels as $item)

            <div class="card">
                <div class="trasparency">
                <h2>{{ $item->name }}</h2>
                <h3>Partenza da {{ $item->airport_name}}</h3>
                <p>Paese: {{ $item->province_of}}
                <h4>Arrivo a {{ $item->destination}} e soggiornerai all' Hotel {{ $item->name_hotel}}</h4>
                <small>Orario partenza e Data {{ $item->date_and_time}}</small>
                <p>Il prezzo del viaggio è <strong>{{ $item->price}} &euro;</strong></p>
            </div>
            </div>
          @endforeach
          
        </section>  
    </body>
</html>
