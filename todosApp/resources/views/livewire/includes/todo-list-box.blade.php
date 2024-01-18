<div>

        @if (session('error'))
            <div class="alert alert-danger my-3" role="alert">
                    {{ session('error')}}
            </div>
        @endif
    <form>

        <hr class="border border-primary-subtle border-2 opacity-75">
        <h2>Create New Todo</h2>
        <div class="mb-4">
            <label for="name" class="form-label">* Todo</label>
            <input  wire:model="name" type="text" class="form-control border-primary-subtle" id="name" placeholder="todo">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <button wire:click.prevent='create' type="button" class="btn btn-primary">Create +</button>
            @if (session('success'))
                <span class="text-success">{{ session('success')}}</span>
            @endif
        </div>
    </form>
</div>
