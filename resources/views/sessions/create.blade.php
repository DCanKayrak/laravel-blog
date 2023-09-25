<x-layout>

    <form method="POST" action="/login">
        @csrf
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
