<x-layout title="Listar Dogs">
    <ul class="list-group">
        @foreach ($Dogs as $Dog)
            <li class="list-group-item">{{ $Dog }}</li>
        @endforeach
    </ul>
</x-layout>
