<div>
    @if($updateMode)
        @include('livewire.updateP')
    @else
        @include('livewire.createP')
    @endif
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Title</th>
                <th>Body</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->title }}</td>
                <td>{{ $value->body }}</td>
                <td>
                <button wire:click="editp({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>
                <button wire:click="deletep({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

