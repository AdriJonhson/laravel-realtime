@extends('adminlte::page')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Novo Produto</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{ route('product.store') }}">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome do produto" required>
                </div>
                <div class="form-group">
                    <label for="price">Preço</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Preço do produto" required>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantidade no disponível</label>
                    <input type="number" min="1" class="form-control" id="quantity" name="Quantidade do produto" required>
                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
@stop