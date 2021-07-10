<x-layout>
    <article>
        <h1>
            {{ $post->title }}
        </h1>

        Written by <a href="/user/{{ $post->user->id }}"> {{ $post->user->username }} </a> in <a href="/category/{{ $post->category->slug }}"> {{ $post->category->name }}</a>

        <div>
        <p>
            {{ $post->body }}
        </p>
        </div>
    </article>

    <a href="/">Go back</a>
</x-layout>