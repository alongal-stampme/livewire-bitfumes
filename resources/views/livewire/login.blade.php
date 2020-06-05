<div class="flex justify-center w-full my-10">
    <section class="w-6/12 p-4 bg-gray-200 border rounded shadow-lg">
        <h1 class="my-5 text-3xl text-center">Login Time</h1>
        <hr>
        <form class="my-4" wire:submit.prevent="submit">
            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                    <input type="email"
                           wire:model="form.email"
                           class="w-full p-2 border rounded shadow-sm"
                           placeholder="Email"
                    >
                    @error('form.email') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                    <input type="password"
                           wire:model="form.password"
                           class="w-full p-2 border rounded shadow-sm"
                           placeholder="Password"
                    >
                    @error('form.password') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                    <input type="submit" value="Login"
                           class="w-full p-2 tracking-wider text-white bg-gray-800 rounded cursor-pointer">
                </div>
            </div>
        </form>

    </section>
</div>
