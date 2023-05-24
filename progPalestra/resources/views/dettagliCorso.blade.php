<x-main>
    <x-navbar />
    <h1>{{ $nome }}</h1>

    <ul>
        <li>
            {{ $corso['orario'] }}
        </li>
        <li>
            {{ $corso['prezzo'] }}
        </li>
        <li>
            {{ $corso['durata'] }}
        </li>
    </ul>
    <x-footer />
</x-main>
