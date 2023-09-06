@if(flash()->message)
<div class="alert {{ flash()->class }} alert-dismissible fade show" role="alert">
    <strong>{{ flash()->class === 'alert-success' ? 'Berhasil!' : 'Gagal!' }}</strong> {{ flash()->message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif