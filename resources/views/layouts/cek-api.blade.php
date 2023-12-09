<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-light bg-success">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Data Api</a>
        </div>
    </nav>
    
    <table class="table table-success table-striped">
        
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">KELURAHAN</th>
            <th scope="col">KECAMATAN</th>
            <th scope="col">JML</th>
            <th scope="col">TOTAL</th>
            <th scope="col">DENDA</th>
            <th scope="col">JUMLAH</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($respon as $respone)
        <tr>
            <th scope="row">1</th>
            <td value="{{ $respone['ID'] }}"> {{ $respone['KELURAHAN'] }}</td>
            <td value="{{ $respone['ID'] }}"> {{ $respone['KECAMATAN'] }}</td>
            <td value="{{ $respone['ID'] }}"> {{ $respone['JML'] }}</td>
            <td value="{{ $respone['ID'] }}"> {{ $respone['TOTAL'] }}</td>
            <td value="{{ $respone['ID'] }}"> {{ $respone['DENDA'] }}</td>
            <td value="{{ $respone['ID'] }}"> {{ $respone['JUMLAH'] }}</td>
        </tr>
                @endforeach
        </tbody>
      </table>
      
</body>
</html>