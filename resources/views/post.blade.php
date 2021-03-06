<x-layout>
    <article>
        <h2>{{$post->title}}</h2>
        <p>
            By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in
            <a href="/categories/{{$post->category->slug}}">
                {{$post->category->name}}
            </a>
        </p>
        <div>
            {!!$post->body!!}
        </div>
    </article>
    <a href="/">Go Back</a>
</x-layout>