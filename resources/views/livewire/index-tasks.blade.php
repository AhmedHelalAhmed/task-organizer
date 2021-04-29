<div>
    @forelse($tasks as $task)
        <div class="border shadow-lg mt-8 py-1 px-4 border 2xl:shadow-md">
            <div class="border-b-2 mb-3 uppercase p-2 border-black-600 shadow-sm">{{ $task->title }}</div>
            <div>{{ empty($task->description)? __('No content'):$task->description }}</div>
            @livewire('delete-task',['taskId'=>$task->id], key($task->id))
        </div>
    @empty
        <div class="mt-6 border shadow-lg py-1 px-4  text-center">
            {{ __('No tasks to show') }}
        </div>
    @endforelse
    <div class="mt-6">{{ $tasks->links() }}</div>
</div>
