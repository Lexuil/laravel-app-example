@auth
    <x-panel>
        <form method="post" action="/post/{{ $post->slug  }}/comments">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/100?u={{ auth()->id() }}" alt="" width="60"
                     class="rounded-full">
                <h2 class="ml-3">Leave your comment</h2>
            </header>

            <div class="mt-5">
                            <textarea name="body" class="w-full" rows="5"
                                      placeholder="Quick, thing of something to say!" required></textarea>
                @error('body')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end mt-5">
                <x-submit-button>Post</x-submit-button>
            </div>
        </form>
    </x-panel>
@else
    <x-panel>
        <p class="text-center">
            <a href="/register" class="text-blue-500">Register</a> or
            <a href="/login" class="text-blue-500">login</a>
            to leave a comment.
        </p>
    </x-panel>
@endauth
