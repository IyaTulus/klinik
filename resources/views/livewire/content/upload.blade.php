<div>
    <form action="{{ route('content.upload.submit') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div style="margin-bottom: 15px;">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" wire:model.live="title">
            @error('title') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div style="margin-bottom: 15px;">
            <label for="caption">Description</label>
            <textarea id="description" name="caption" wire:model.live="caption"></textarea>
            @error('description') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div style="margin-bottom: 15px;">
            <label for="file">File</label>
            <input type="file" id="file" name="file" wire:model="file">
            @error('file') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
        
    </form>
    <div border="1" style="margin-top: 15px; display: flex; flex-direction: column; align-items: center; width: 500px; border: solid 2px black;">
        <span>Content View</span>
        <div wire:loading wire:target="file">
            <h3 style="color: red">Proses Upload....</h3>
        </div>
        @if ($file)
        <div>
            <h3>{{ $title }}</h3>
        </div>
        <div wire:loading.remove wire:target="file">
            <img src="{{ $file->temporaryUrl() }}" alt="" width="200">
        </div>
        <div>
            <h3>{{ $caption }}</h3>
        </div>
        @endif
    </div>
    {{-- <img src="{{ URL('storage/images/Shutterstock.jpg')}}" alt=""> --}}
</div>
