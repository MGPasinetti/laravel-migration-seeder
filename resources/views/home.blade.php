<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Company</th>
                          <th scope="col">Departure station</th>
                          <th scope="col">Arrival station</th>
                          <th scope="col">Departure time</th>
                          <th scope="col">Arrival time</th>
                          <th scope="col">Date</th>
                          <th scope="col">Train code</th>
                          <th scope="col">Number carriages</th>
                          <th scope="col">Is in time</th>
                          <th scope="col">Is deleted</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($trains as $train)
                            <tr>
                                <th scope="row">{{ $train->id }}</th>
                                <td>{{ $train->company }}</td>
                                <td>{{ $train->departure_station }}</td>
                                <td>{{ $train->arrival_station }}</td>
                                <td>{{ $train->departure_time }}</td>
                                <td>{{ $train->arrival_time }}</td>
                                <td>{{ $train->date }}</td>
                                <td>{{ $train->train_code }}</td>
                                <td>{{ $train->number_carriages }}</td>
                                <td>{{ $train->is_in_time }}</td>
                                <td>{{ $train->is_deleted }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{ $trains->links() }}
</body>
</html>
