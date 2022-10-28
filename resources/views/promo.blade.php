@extends('template')

@section('main')
<div class="container mt-10 col-md-10 card-body bg-secondary">
    <table class="table table-secondary table-striped">
        <thead>
            <tr>
            <th scope="col">Precio Original</th>
            <th scope="col">Descripción</th>
            <th scope="col">Precio con descuento</th>
            <th scope="col">Referecnia</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row" class="text-decoration-line-through">$200</th>
                <td>Capucha K-Style</td>
                <td class="text-danger">$150</td>
                <td><img src="#" alt="imagenCapucha"></td>
            </tr>
            <tr>
                <th scope="row" class="text-decoration-line-through">$400</th>
                <td>Joggers Nigth</td>
                <td class="text-danger">$250</td>
                <td><img src="#" alt="imagenJogger"></td>
            </tr>
            <tr>
                <th scope="row" class="text-decoration-line-through">$300</th>
                <td>Collar Goblin</td>
                <td class="text-danger">$230</td>
                <td><img src="#" alt="imagenGoblin"></td>
            </tr>
        </tbody>
    </table>
</div>
@stop