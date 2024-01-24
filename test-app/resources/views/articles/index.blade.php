@if($message = Session::get('success'))

    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<row>
    <a href="{{ route('article.create') }}" class="button button-primary">{{__('Новый Пост')}}</a>
</row>
<row>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название поста</th>
            <th scope="col">Описание поста</th>
            <th scope="col">Изображение</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        @forelse($articles as $article)
            <tr>
                <th scope="row">{{ $article->id }}</th>
                <td>{{ $article->title }}</td>
                <td>{{ $article->text }}</td>
                <td><img width="150" height="150" src="/images/{{$article->image}}" alt=""></td>
                <td>
                    <a href="{{ route('article.edit', $article->id) }}" class="btn btn-success">Редактировать</a>
                    <a href="{{ route('article.show', $article->id) }}" class="btn btn-warning">Подробнее</a>
                    <form method="ARTICLE" action="{{ route('article.delete', $article->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </td>
            </tr>
        @empty
            {{__('Данные не найдены')}}
        @endforelse

        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
        </tbody>
    </table></row>
</div>
@endsection
