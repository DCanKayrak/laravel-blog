<x-layout name="slot">
    <x-main>

    </x-main>
    <div class="container mx-auto">
        <h1>Latest Blogs</h1>
        <hr>

        <div class="d-flex flex-wrap">
            @foreach($posts as $post)
                <div class="col-md-3">
                    <x-card name="slot">
                        <img src="https://i.pinimg.com/originals/71/9e/80/719e80760999b4c355a723224120eb07.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <span class="badge rounded-pill text-bg-primary">{{$post->category->name}}</span>
                            <br>
                            <a href="/users/posts/{{$post->author->username}}">{{ $post->author->name }}</a>
                            <p class="card-text">{{ Str::limit($post->content, 20) }}...</p>
                            <p><i class="fa-solid fa-eye"></i> 0 <i class="fa-solid fa-comment"></i> {{$post->comments->count()}}</p>
                            <a href="/posts/{{$post->slug}}" class="btn btn-primary">Read More</a>
                        </div>
                    </x-card>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
