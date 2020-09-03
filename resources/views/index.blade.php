<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="mt-5"></div>
    <div class="container">
        <h3>All Dogs </h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th><th>Birthday</th><th>Breed</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dogs as $dog)
                    <tr>
                        <td>{{$dog->name}}</td><td>{{$dog->date_of_birth}}</td><td>{{$dog->breed->name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <hr>
        <h3>Only the Labrador Retrievers </h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th><th>Birthday</th><th>Breed</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($retrievers as $retriever)
                <tr>
                    <td>{{$retriever->name}}</td><td>{{$retriever->date_of_birth}}</td><td>{{$retriever->breed->name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <hr>
        <h3>Breed Names</h3>
        <ul class="list-group">
            @foreach ($breedNames as $name)
                <li class="list-group-item">
                    {{$name}}
                </li>
            @endforeach
        </ul>
        <h3>All Retrievers</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th><th>Birthday</th><th>Breed</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allRetrieverDogs as $allRetrieverDog)
                    @foreach ($allRetrieverDog as $dog)
                        <tr>
                            <td>{{$dog->name}}</td><td>{{$dog->date_of_birth}}</td><td>{{$dog->breed->name}}</td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
        <hr>
        <h3>Old Dogs</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th><th>Birthday</th><th>Breed</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($oldDogs as $dog)
                    <tr>
                        <td>{{$dog->name}}</td><td>{{$dog->date_of_birth}}</td><td>{{$dog->breed->name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <hr>
        <h3>All the dogs that are not Retrievers sorted by breed name </h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th><th>Birthday</th><th>Breed</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notRetrieverDogs as $notRetrieverDog)
                    @foreach ($notRetrieverDog as $dog)
                        <tr>
                            <td>{{$dog->name}}</td><td>{{$dog->date_of_birth}}</td><td>{{$dog->breed->name}}</td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
        <hr>
    </div>
    
</body>
</html>