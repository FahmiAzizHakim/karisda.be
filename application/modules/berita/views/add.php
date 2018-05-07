<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
        <h3>Berita</h3>
            <?php echo form_open_multipart("{$base_url}upload/aksi_upload");?>
                <div class="form-group">
                    <label>Judul</label>
                    <input id="judul" type="text" class="form-control" placeholder="Judul Berita">
                </div>
                <div class="form-group">
                    <label>Isi</label>
                    <div class="block">
                        <textarea class="summernote" id="news_detail">
                        </textarea>
                     </div>
                <div>
                <div class="form-group">
                    <label>Gambar</label>
                    <div class="block">
                        <input type="file" multiple class="file" data-preview-file-type="any" id="file" name="berkas" />
                     </div>
                <div>
                <button type="submit" id="BtnSubmit" class="btn btn-success active"><span class="fa fa-check"></span>Submit</button>
                <button type="button" class="btn btn-danger active"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
                </div>
            </form>

        </div>
    </div>
</div>
