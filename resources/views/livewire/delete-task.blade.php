<div class="flex flex-col mt-6 mb-0 border-t-2 py-2 px-4">
    <button
        class="bg-red-500 capitalize mx-auto p-3 rounded g-red-light font-bold py-2 px-4 inline-flex items-center"
        type="submit" wire:click="delete()">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
        </svg>
        {{ __('Delete') }}</button>
</div>

