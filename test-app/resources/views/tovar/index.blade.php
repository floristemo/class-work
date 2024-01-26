@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{{ route('tovar.create') }}" class="btn btn-primary">Новый товар</a>
        </div>
        <div class="row">
            @if($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            @endif
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
                @forelse($products as $product)
                    <tr>
                        <th scope="row">
                            {{ $product->id }}
                        </th>
                        <td>
                            {{ $product->name }}
                        </td>
                        <td>
                            {{ $product->text }}
                        </td>
                        <td>
                            {{ $product->category->name }}
                        </td>
                        <td>
                            @if ($product->is_active == 0)
                                <div class="alert alert-danger text-center">
                                    {{ __('Не активна') }}
                                </div>
                            @else
                                <div class="alert alert-success text-center">
                                    {{ __('Активна') }}
                                </div>
                            @endif
                        </td>
                    </tr>
                @empty
                    Данных нет
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
