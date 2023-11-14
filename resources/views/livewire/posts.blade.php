<div>
    @if (session()->has('successmessage'))
<div class="alert alert-success">{{ session('successmessage') }}</div>


@endif
@if($edit_mode)
    @include('livewire.edit')
@else
    @include('livewire.create')
@endif
    <hr>
    <table class="table table-responsive">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>
            <th>Action</th>
        </tr>
        @foreach ($posts as $post)

        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->body }}</td>
            <td><button wire:click="edit({{ $post->id }})" class="btn btn-warning" type="button" name="edit">Edit</button></td>
            <td><button wire:confirm="Are you sure want to delete" wire:click="delete({{ $post->id }})" class="btn btn-danger" type="button" name="delete">Delete</button></td>
        </tr>
        @endforeach

    </table>
</div>
