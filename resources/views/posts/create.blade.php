<x-layout>
    <section class="px-6 py-8">
        <x-panel class="max-w-sm mx-auto">
            <form method="post" action="/admin/post" enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="title">
                        Title
                    </label>

                    <input
                        class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="title"
                        id="title"
                        value="{{ old('title') }}"
                        required
                    >

                    @error('title')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="thumbnail">
                        Thumbnail
                    </label>

                    <input
                        class="border border-gray-400 p-2 w-full"
                        type="file"
                        name="thumbnail"
                        id="thumbnail"
                        value="{{ old('thumbnail') }}"
                        required
                    >

                    @error('thumbnail')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="slug">
                        Slug
                    </label>

                    <input
                        class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="slug"
                        id="slug"
                        value="{{ old('slug') }}"
                        required
                    >

                    @error('slug')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="excerpt">
                        Excerpt
                    </label>

                    <textarea
                        class="border border-gray-400 p-2 w-full"
                        name="excerpt"
                        id="excerpt"
                        required
                    >{{ old('excerpt') }}</textarea>

                    @error('excerpt')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="body">
                        Body
                    </label>

                    <textarea
                        class="border border-gray-400 p-2 w-full"
                        name="body"
                        id="body"
                        required
                    >{{ old('body') }}</textarea>

                    @error('body')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="category_id">
                        Category
                    </label>

                    <select
                        class="border border-gray-400 p-2 w-full"
                        name="category_id"
                        id="category_id"
                        required
                    >
                        @foreach($categories as $category)
                            <option
                                value="{{ $category->id }}"
                                {{ old('category_id') == $category->id ? 'selected' : '' }}
                            >
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>

                    @error('category')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <x-submit-button>Publish</x-submit-button>
            </form>
        </x-panel>
    </section>
</x-layout>
