<x-master title="Commentaire">
    <h3>Commentaire</h3>
    <div class="container w-75 mx-auto">
        <div class="row">
            @foreach ($commentaires as $commentaire)
                <x-commentaireCard :commentaire="$commentaire" />
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{ $commentaires->links() }}
    </div>
</x-master>