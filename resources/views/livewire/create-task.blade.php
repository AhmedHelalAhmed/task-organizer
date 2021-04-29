<div class="container border-black shadow-lg p-4">
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <form wire:submit.prevent="store">
    <div class="flex flex-col mb-4">
        <label
            class="mb-2 capitalize font-bold text-lg text-grey-darkest"
            for="title">{{ __('title') }}</label>
        <input
            wire:model="title"
            id="title"
            class="border py-2 px-3 text-grey-darkest"
            placeholder="{{ __('Enter title') }}">
        @error('title')
        <div class="text-red-600">{{ $message }}</div>
        @enderror
    </div>
    <div class="flex flex-col mb-4">
        <label
            class="mb-2 capitalize font-bold text-lg text-grey-darkest"
            for="description">{{ __('description') }}</label>
        <textarea
            wire:model="description"
            id="description"
            placeholder="{{ __('Enter description') }}"
            class="border py-2 px-3 text-grey-darkest auto-rows-max" rows="7"></textarea>
        @error('description')
        <div class="text-red-600">{{ $message }}</div>
        @enderror
    </div>
    <button
        class="block bg-green-500 capitalize mx-auto p-3 rounded"
        type="submit">{{ __('Save') }}</button>
    </form>
</div>
