@extends('layouts.app')
@section('content')
    <div class="container mt-3">
        <h2>Data Siswa RPL C</h2>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nama</th>
                <th scope="col">NIS</th>
                <th scope="col">Alamat</th>
                <th scope="col">Foto</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <td>Prasetya</td>
                    <td>1234</td>
                    <td>Tugu</td>
                    <td><img src="{{ asset('img/profile.jpg') }}" width="100px" alt=""></td>
                </tr>
                <tr>
                    <td>Novian</td>
                    <td>5678</td>
                    <td>Tugu</td>
                    <td><img src="{{ asset('img/pipin.jpg') }}" width="100px" alt=""></td>
                </tr>
                <tr>
                    <td>Nikolas</td>
                    <td>9012</td>
                    <td>Suruh</td>
                    <td><img src="{{ asset('img/IMG_20221205_140435.jpg') }}" width="100px" alt=""></td>
                </tr>
                <tr>
                    <td>Rifandi</td>
                    <td>3456</td>
                    <td>Pule</td>
                    <td><img src="{{ asset('img/nizar.jpg') }}" width="100px" alt=""></td>
                </tr>
                <tr>
                    <td>Mige</td>
                    <td>7890</td>
                    <td>Karangan</td>
                    <td><img src="{{ asset('img/mimig.jpg') }}" width="100px" alt=""></td>
                </tr>
                <tr>
                    <td>Yudi</td>
                    <td>2345</td>
                    <td>Tugu</td>
                    <td><img src="{{ asset('img/yudi.jpg') }}" width="100px" alt=""></td>
                </tr>
                <tr>
                    <td>Octavian</td>
                    <td>6789</td>
                    <td>Karangan</td>
                    <td><img src="{{ asset('img/kikik.jpg') }}" width="100px" alt=""></td>
                </tr>
                <tr>
                    <td>Nandito</td>
                    <td>0123</td>
                    <td>Karangan</td>
                    <td><img src="{{ asset('img/dito.jpg') }}" width="100px" alt=""></td>
                </tr>
                <tr>
                    <td>Bobot</td>
                    <td>4567</td>
                    <td>Trenggalek</td>
                    <td><img src="{{ asset('img/bobot.jpg') }}" width="100px" alt=""></td>
                </tr>
                <tr>
                    <td>Vicky</td>
                    <td>8901</td>
                    <td>Prambon</td>
                    <td><img src="{{ asset('img/piki.jpg') }}" width="100px" alt=""></td>
                </tr>
            </tbody>
          </table>
    </div>
@endsection

</body>
</html>