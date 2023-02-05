<x-layout title="Nova Serie">
    <h1>Nova Serie</h1>

    <a href="/series" class="btn btn-dark mb-2">Voltar</a>

    <form action="/series/salvar" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>
