<div class="card">
    <div class="card-body">
        <h5 class="card-title mb-3">Buat Postingan</h5>
        <form wire:submit="simpan">
            <div class="form-group mb-3">
                <label for="title" class="mb-2">Judul</label>
                <input type="text" class="form-control" wire:model="title" id="title" placeholder="Isi dengan judul..." />
                @error('title')
                <div class="text-danger mt-1">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="body" class="mb-2">Body</label>
                <textarea class="form-control" wire:model="body" id="body" rows="4" placeholder="Anda ingin memposting apa hari ini..."></textarea>
                @error('body')
                <div class="text-danger mt-1">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>
    </div>
</div>