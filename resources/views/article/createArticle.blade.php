<x-master title='Formulaire'>
    <h3>Create Article</h3>
    @if ($errors->any())
        <x-alert type="danger">
            <h6>Errors :</h6>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
    </x-alert>
    @endif
    <form method="POST" action="{{ route('articles.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Titre Article :</label>
            <input type="text" name="titre" class="form-control" value={{ old('titre') }}>
        </div>
        <div class="mb-3">
            <label class="form-label">Contenu :</label>
            <textarea name="contenu" class="form-control">{{ old('contenu') }}</textarea>
        </div>
        <div class="d-grid my-5">
            <button class="btn btn-primary btn-block" type="submit">Ajouter</button>
        </div>
    </form>
</x-master>