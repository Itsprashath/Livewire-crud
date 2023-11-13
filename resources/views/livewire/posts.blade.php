<div>
    @if (session()->has('successmessage'))
<div class="alert alert-success">{{ session('successmessage') }}</div>


@endif  
    @include('livewire.create')
  {{-- Because she competes with no one, no one can compete with her. --}}
</div>
