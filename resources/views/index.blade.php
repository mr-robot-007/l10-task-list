@extends("layouts.app")

@section("title", "The list of tasks")

@section("content")

<div>
    <a class="link text-lg"
        href="{{ route('tasks.create') }}">Create new task</a>
</div>

<div class='bg-gray-100 p-4 rounded-md'>
    @forelse($tasks as $task)
        <nav class="mb-4 hover:font-semibold hover:text-blue-500"> 
            <a href="{{ route("tasks.show", ['task' => $task->id]) }}"
                @class(['text-green-700' => $task->completed ])>
               ⭕ {{ $task->title }}</a>
        </nav>
    @empty
        <div>There are no tasks</div>
    @endforelse
 
    @if($tasks->count())
        <nav class="mt-4">
            {{ $tasks->links() }}
        </nav>
    @endif
</div>

@endsection
