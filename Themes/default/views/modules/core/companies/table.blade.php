@section('css')
    @include('datatables.datatables_css')
@endsection

{!! $dataTable->table(['width' => '100%']) !!}

@section('scripts')
    @include('datatables.datatables_js')
    {!! $dataTable->scripts() !!}
@endsection