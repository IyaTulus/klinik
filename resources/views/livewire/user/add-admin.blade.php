<div>
    <button wire:click = "toggle">Add</button>

    <div style="{{ $isOpen ? 'display: block;' : 'display: none;' }} margin-top: 10px;">
        <form wire:submit.prevent="store">
            <div>
                <select name="name" wire:model.live="user_id" wire:change="getData">
                    <option value="">--Select--</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <input type="text" name="username" wire:model.live="username" placeholder="Username">
            </div>
            <div>
                <input type="text" name="clinic" wire:model.live="clinic" placeholder="Klinik">
            </div>
            <button type="submit">Add</button>
        </form>
    </div>
    <span>{{$user_id}}</span>
    <span>{{$username}}</span>
</div>
