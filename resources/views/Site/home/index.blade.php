@extends('site.template.template2')

@section('test')
    <h1>Home Page do Site</h1>

    @if ($var1 == '123')
        <p>É igual</p>
    @else
        <p>É diferente</p>
    @endif

    @for($i = 0; $i <0; $i++)
        <p>Valor de i = {{$i}}</p>
    @endfor

    @forelse($array as $arrayData)
        <p>Valor: {{$arrayData}}</p>
    @empty
        <p>Não existe itens para serem impressos</p>
    @endforelse


@endsection

@push('scripts')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endpush
