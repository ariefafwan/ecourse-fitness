<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editform" action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <label class="labels">Urutan Gerakan</label>
                        <input type="number" name="urutan" id="edit_urutan" class="form-control" placeholder="Urutan Gerakan Latihan" required>
                    </div>
                    <div>
                        <label class="labels">Nama Gerakan</label>
                        <input type="text" name="nama" id="edit_nama" class="form-control" placeholder="Nama Gerakan Latihan" required>
                    </div>
                    <div class="mt-2">
                        <label class="labels">Video Gerakan (Max 2Mb) (Optional atau Jika Ingin Mengupdate Saja)</label>
                        <input type="file" name="file" id="file" class="form-control" placeholder="Video Latihan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
