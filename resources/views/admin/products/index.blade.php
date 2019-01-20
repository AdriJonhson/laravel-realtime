@extends('adminlte::page')

@section('content')
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Produtos</h3>
                <a class="btn btn-success" href="{{ route('product.create') }}">Novo Produto</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="dataTables_wrapper form-inline dt-bootstrap table-responsive">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="datatable" class="table table-bordered table-hover dataTable">
                                <thead>
                                    <tr role="row">
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Preço</th>
                                        <th>Quantidade em Estoque</th>
                                        <th>Editar</th>
                                        <th>Excluir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
@stop
@section('js')
    <script>
        $('#datatable').DataTable({
            processing: true,
            bLengthChange: false,
            ajax: '/admin/products/paginate/',
            columns: [
                {'data': 'id'},
                {'data': 'name'},
                {'data': 'price'},
                {'data': 'quantity'},
                {render: renderBtnEdit},
                {render: renderBtnDelete},
            ]
        });

        function renderBtnEdit(){
            return `<a class='btn btn-primary disabled'>Editar</a>`;
        }

        function renderBtnDelete(){
            return `<a class='btn btn-danger disabled'>Excluir</a>`;
        }
    </script>
@stop