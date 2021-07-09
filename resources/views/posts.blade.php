<x-layout>
    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>

            <p>
                Written by <a href="/users/{{ $post->user->id }}"> {{ $post->user->username }} </a> in <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }} </a>
            </p>
            
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
</x-layout>