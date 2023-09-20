<x-layout title="Séries"> {{-- tag personalizada que eu criei, sempre começa com x- alguma_coisa --}}
    <a href="/series/criar">Adicionar</a>
    <ul>
        @foreach ($series as $serie)
            <li>{{ $serie }}</li> {{--as chaves duplas servem para dar o echo --}}
        @endforeach
        {{--esse @ vem do blade, uso para simplificar, ele me deixar tirar as tags do php sem que o código pare de funcionar--}}
    </ul>
</x-layout>
