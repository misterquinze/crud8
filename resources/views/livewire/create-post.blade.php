<div class="p-4">

    <textarea wire:model="body" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none" rows="4" placeholder="Post something...">

    </textarea>

    <div class="mt-2 flex justify-end">
        <button wire:click="createPost" class="px-4 py-2 bg-blue-600 text-white hover:bg-blue-400 rounded-md">Post</button>
    </div>
</div>
