<div>
    @forelse($tasks as $task)
        <div class="border shadow-lg mt-8 p-8">
            <div class="border-b-2 mb-3 uppercase">{{ $task->title }}</div>
            <div>{{ $task->description }}</div>
            @livewire('delete-task',['taskId'=>$task->id], key($task->id))
        </div>

    @empty
        <div class="mt-6 border shadow-lg p-8 text-center">
            {{ __('No tasks to show') }}
        </div>
    @endforelse
        <div class="mt-6">{{ $tasks->links() }}</div>
</div>
