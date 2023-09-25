<x-layout>

    <form method="POST" action="/register">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input
                type="text"
                class="form-control"
                name="name"
                id="name"
                value="{{ old('name') }}"
                aria-describedby="emailHelp">
            @error('name')
                <div id="emailHelp" class="text-danger">{{$message}}</div>
            @enderror

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input
                type="text"
                class="form-control"
                name="username"
                id="username"
                value="{{ old('username') }}"
                aria-describedby="emailHelp">
            @error('username')
            <div id="emailHelp" class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input
                type="email"
                class="form-control"
                name="email"
                id="email"
                value="{{ old('email') }}"
                aria-describedby="emailHelp">
            @error('email')
            <div id="emailHelp" class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input
                type="password"
                class="form-control"
                name="password"
                id="password">
            @error('password')
            <div id="emailHelp" class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
