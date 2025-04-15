{{-- enctype menandakan fomnya untuk up data yg type file --}}
<form method="POST" action="{{ route('file.upload') }}" enctype="multipart/form-data">
    @csrf
    <label for="file_path">Photo</label>
    <input type="file" name="file_path" id="file_path" class="form-control" >
    <button type="submit">Upload</button>
</form>

{{-- <form method="POST" action="{{ route('storage.store') }}" enctype="multipart/form-data">
    @csrf
    <div>
        <label>Nama</label>
        <input type="text" name="name" required>
    </div>
    <div>
        <label>Deskripsi</label>
        <textarea name="description"></textarea>
    </div>
    <div>
        <label>File (Max 2MB)</label>
        <input type="file" name="document" accept=".jpg,.png,.pdf" required>
    </div>
    <button type="submit">Simpan</button>
</form> --}}

{{-- <div class="mb-2">
    <label for="file_path">Photo</label>
    <input type="file" name="file_path" id="file_path" class="form-control" >
</div> --}}
