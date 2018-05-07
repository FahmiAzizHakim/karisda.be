<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
        <h3>Berita</h3>
            <form role="form" id="submit">
                <div class="form-group">
                    <label>Judul</label>
                    <input name="judul" id="judul" type="text" class="form-control" placeholder="Judul Berita">
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
                        <input type="file" multiple class="file" data-preview-file-type="any" id="file" name="file" />
                     </div>
                <div>
                <button type="submit" id="BtnSubmit" class="btn btn-success active"><span class="fa fa-check"></span>Submit</button>
                <button type="button" class="btn btn-danger active"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
                </div>
            </form>

        </div>
    </div>
</div>

<script type="text/javascript">
    var base_url = '{$base_url}';
     {literal}
    $(document).ready(function(){

        $('#submit').submit(function(e){
            // alert('pk');return false;
            e.preventDefault(); 
                 $.ajax({
                     url: base_url + "berita/news/insert",
                     type:"post",
                     data:new FormData(this),
                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
                      success: function(data){
                          alert("Upload Image Berhasil.");
                   }
                 });
            });
         
 
    });
     {/literal}
</script>