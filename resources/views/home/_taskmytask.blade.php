@foreach($auth_tasks as $task)
<tr>
    <td>
        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
            <input data-index="{{ $task->id }}" name="btSelectItem" type="checkbox" data-type="{{ $task->tasktype == NULL?'sprint':'mytask' }}">
            <span></span>
        </label>
    </td>
    <td>
    {!! Util::shortText($task->description, 25) !!}
    </td>
    <td>{{ $task->due_date?\Carbon\carbon::parse($task->due_date)->format('d-m-Y'):null }}</td>
    <td>
    @if($task->tasktype == NULL)
        <span class="label label-sm label-danger"> {{'Sprint' }} </span>
    @elseif($task->tasktype == 'Jira')
        <span class="label label-sm label-success"> {{ $task->tasktype }} </span>
    @else($task->tasktype == 'Mytask')
        <span class="label label-sm label-warning"> {{ $task->tasktype }} </span>
    @endif
    </td>
</tr>
@endforeach
