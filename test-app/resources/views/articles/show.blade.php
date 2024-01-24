@extends('layout.master')

@section('content')
    <div class="container">
        <div class="show_wrapper">
            <div class="show_title">
                {{ $article->title }}
            </div>
            <div class="show_text">
                {{ $article->text }}
            </div>
            <img width="700" src="/images/{{ $article->image }}" alt="">
        </div>
        <style>
            .show_wrapper {
                display: flex;
                gap: 30px;
                flex-direction: column;
                align-items: center;
            }

            .show_title {
                font-size: 48px;
            }

            .show_text {
                font-size: 24px;
            }
        </style>
    </div>
@endsection
