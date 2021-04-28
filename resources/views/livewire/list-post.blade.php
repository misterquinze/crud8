<div class="">
    @foreach ($posts as $post)
        <div class="p-4 my-4 bg-white shadow-xl rounded-md">
            <div>
                <span class="text-xl font-bold">{{$post->user->name}}</span>
                <span class="text-gray-600">{{$post->created_at->diffForHumans()}} </span>
            </div>
            <div>
                <span>{{$post->body}} </span>
            </div>
        </div>
    @endforeach
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
</div>
