<div class="flex justify-center">
    <div class="w-full">
        <h1 class="my-10 text-3xl">Comments</h1>
        @error('newComment') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
        <div>
            @if (session()->has('message'))
                <div class="p-3 bg-green-300 text-green-800 rounded shadow">
                    {{ session('message') }}
                </div>
            @endif
        </div>

        <section>
            @if($image)
                <img src="{{ $image }}" width="200"/>
            @endif
            <input type="file" id="image"
                   wire:change="$emit('fileChosen')">
        </section>

        <form class="flex my-4" wire:submit.prevent="addComment">
            <input type="text"
                   class="w-full p-2 my-2 mr-2 border rounded shadow"
                   placeholder="What's in your mind."
                   wire:model.debounce.500ms="newComment"
            >
            <div class="py-2">
                <button class="w-20 p-2 text-white bg-blue-500 rounded shadow"
                >
                    Add
                </button>
            </div>
        </form>
        @foreach ($comments as $comment)
            <div class="p-3 my-2 border rounded shadow">
                <div class="flex justify-between">
                    <div class="flex justify-start my-2">
                        <p class="text-lg font-bold">{{ $comment->creator->name }}</p>
                        <p class="py-1 mx-3 text-xs font-semibold text-gray-500">{{ $comment->created_at->diffForHumans() }}</p>
                    </div>
                    <i class="text-red-200 cursor-pointer fa fa-times hover:text-blue-600"
                       wire:click="remove({{ $comment->id }})"
                    ></i>
                </div>
                <p class="text-gray-800">{{ $comment->body }}</p>
                @if($comment->image)
                    <img src="{{ $comment->imagePath }}" />
                @endif
            </div>
        @endforeach

        {{ $comments->links('pagination-links') }}
    </div>
</div>

<script>
    window.livewire.on('fileChosen', postId => {
        let inputField = document.getElementById('image')
        let file = inputField.files[0]
        let reader = new FileReader()
        reader.onloadend = () => {
            window.livewire.emit('fileUpload', reader.result)
        }
        reader.readAsDataURL(file)
    })
</script>
