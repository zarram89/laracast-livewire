<div>
    <div>
        Hello, {{$name}}!
    </div>
    <form
        wire:submit="changeName(document.querySelector('#newName').value)"
    >
        <div class="mt-2">
            <input
                id="newName"
                type="text"
                class="block w-full p-4 border rounded-md bg-white text-black"
            >
        </div>
        <div class="mt-2">
            <button
                type="submit"
                class="text-white font-medium rounded-md px-4 py-2 bg-black"
            >
                Greet
            </button>
        </div>
    </form>
</div>
