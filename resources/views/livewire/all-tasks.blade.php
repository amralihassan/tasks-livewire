<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{$task->title}}</td>
                    <td>{{$task->description}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
