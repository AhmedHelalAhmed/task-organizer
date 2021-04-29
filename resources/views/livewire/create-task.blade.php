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
                for="title">{{ __('title') }} <code class="text-red-600">*</code></label>
            <input
                wire:model="title"
                id="title"
                class="border py-2 px-3 text-grey-darkest @if($errors->has('title')) border-2 border-red-500 @endif"
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
                class="border py-2 px-3 text-grey-darkest auto-rows-max @if($errors->has('description')) border-2 border-red-500 @endif"
                rows="7"></textarea>
            @error('description')
            <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>
        <div class="flex flex-col mb-4">
            <button
                class="bg-green-500 capitalize mx-auto p-3 rounded g-grey-light font-bold py-2 px-4 inline-flex items-center"
                type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                </svg>
                {{ __('Save') }}

            </button>
        </div>
    </form>
</div>
