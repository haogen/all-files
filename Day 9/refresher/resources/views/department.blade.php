<form action="{{ URL::route('save') }}" method="post">
    @csrf
    <input type="text" name="name" required>
    <select name="status">
        <option>active</option>
        <option>in-active</option>
    </select>
    <button class="btn btn-success">Save</button>
</form>

<ul>
    @foreach($data as $x)
        <li>
            {{ $x->name }}
            <small>
            (
                {{ $x->status }}
            )
            </small>
            <a href="{{ URL::route('delete') }}?id">x</a>
        </li>
    @endforeach
</ul>