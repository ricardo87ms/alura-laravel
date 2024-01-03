<x-layout title="Editar Série '{{ $series->nome }}'">
    <x-series.formulario :action="route('series.update', $series->id)" :series="$series"/>
</x-layout>
