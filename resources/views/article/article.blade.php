<x-master title='Article'>
    <h3>Article</h3>
    <br>
    <x-articleCard :canUpdate="auth()->user() === $article->user_id" :article="$article" />
    <br>
    {{-- <div class="row">
        <h3>Vous Commentaire</h3>
        <div class="container w-75 mx-auto">
            <div class="row">
                @foreach ($article->commentaires as $commentaire)
                    <x-commentaireCard :canDelete="auth()->article()->id === $commentaire->article_id" :commentaire="$commentaire" />
                @endforeach
            </div>
        </div>
    </div> --}}
</x-master>