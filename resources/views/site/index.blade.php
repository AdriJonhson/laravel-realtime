@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <h4>Produtos disponíveis para venda</h4>
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Preço</th>
                        <th width="200px">Quantidade Disponível</th>
                        <th width="20px">Comprar</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>R$ {{ number_format( $product->price, 2, ',', '.')  }}</td>
                            <td>{{$product->quantity}}</td>
                            <td>
                                <a href="#"><i class="fas fa-cart-plus"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                           <td colspan="3">Nenhum produto disponível</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
