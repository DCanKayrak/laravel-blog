<x-layout name="slot">
    <x-main>

    </x-main>
    <div class="container mx-auto">
        <h1>Latest Blogs</h1>
        <hr>
        @auth
        <div class="d-flex justify-content-end">
            <button class="btn btn-success mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#newPost"><i class="fa-solid fa-plus"></i> Yeni Gönderi</button>
        </div>
        @endauth

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
    <div class="modal fade" id="newPost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New Post</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/posts">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title" aria-label="Title">
                        </div>
                        <div class="input-group mb-3">
                        <select id="category" class="form-select" id="category_id" name="category_id" aria-label="Default select example">
                            <option value="0">Kategori</option>
                            @php
                            $categories = App\Models\Category::all();
                            @endphp
                            @foreach($categories as $category)
                            <option value={{$category->id}}>{{$category->name}}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" aria-label="Title">
                        </div>
                        <div class="input-group mb-3">
                            <textarea type="text" class="form-control" id="content" name="content" placeholder="Content" aria-label="Title"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
