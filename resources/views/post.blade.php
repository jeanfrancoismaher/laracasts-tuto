<x-layout>
    <article>
        <h1>
            {{ $post->title }}
        </h1>

        <p>
            Written by <a href="/author/{{ $post->author->username }}"> {{ $post->author->name }} </a> in <a href="/category/{{ $post->category->slug }}"> {{ $post->category->name }}</a>
        </p>

        <div>
        <p>
            {{ $post->body }}
        </p>
        </div>
    </article>

    <a href="/">Go back</a>
</x-layout>