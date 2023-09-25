<x-layout>

    <article class="mt-5">
        <a href="/" class="btn btn-primary mb-3"><i class="fa-solid fa-arrow-left"></i> Go Back</a>
        <h1>{{$post->title}}</h1>
        <hr>
        <span>Written By <a href="/users/posts/{{$post->author->username}}">{{ $post-> author->name }}</a></span>
        <p></p>
        <span class="pb-5">{!! $post->content !!}</span>

        <section class="mt-5 mb-5">

            @auth
            <form method="POST" action="/posts/{{$post->slug}}/message">
                @csrf
                <div class="mb-3">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea
                        class="form-control"
                        name="message"
                        id="message"
                        aria-describedby="message"></textarea>
                    @error('message')
                    <div id="emailHelp" class="text-danger">{{$message}}</div>
                    @enderror
                    <button class="btn btn-primary mt-3">Gönder</button>
                </div>
            </form>
            @endauth

            <h2>Messages ({{$post->comments->count()}})</h2>
            <hr>
            @if($post->comments->count()>0)
                @foreach($post->comments as $comment)
                    <div class="border border-secondary-subtle rounded mt-3 w-100 p-3 row">
                        <div class="col-2">
                            <img src="https://i.pravatar.cc/150?img={{$comment->user->id}}">
                            <p>{{$comment->user->name}}</p>
                        </div>
                        <div class="col-10">
                            <p>{{$comment->body}}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <p>Burada görüntülenecek birşey yok.</p>
            @endif
        </section>
    </article>
</x-layout>
