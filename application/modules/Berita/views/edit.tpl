<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
        <h3>Berita</h3>
            <form role="form">
                <div class="form-group">
                    <label>Judul</label>
                    <input id="judul" type="text" class="form-control" placeholder="Judul Berita" value="{$data.berita_judul}">
                    <input id="id" type="hidden" class="form-control" placeholder="Judul Berita" value="{$data.id}">
                </div>
                <div class="form-group">
                    <label>Isi</label>
                    <div class="block">
                        <textarea class="summernote" id="news_detail">{$data.berita_isi}
                        </textarea>
                     </div>
                <div>
                <div class="form-group">
                    <label>Gambar</label>
                    <div class="block">
                        <input type="file" multiple class="file" data-preview-file-type="any"/>
                     </div>
                <div>
                <button type="button" id="BtnSubmit" class="btn btn-success active"><span class="fa fa-check"></span>Submit</button>
                <button type="button" class="btn btn-danger active"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
                </div>
            </form>

        </div>
    </div>
</div>

<script type="text/javascript">
    {literal}
    $("#BtnSubmit").click(function(){
    {/literal}
        var base_url = '{$base_url}';
    {literal}
        if($("#judul").val() == ""){
            alert("Judul Harus Diisi");
            $("#name").focus();
            return false;
        };
        if($("#news_detail").val() == ""){
            alert("Isi Harus Diisi");
            $("#news_detail").focus();
            return false;
        };

        noty({text: 'Loading', layout: 'topCenter'});
        $("#BtnSubmit").attr("disabled", true);

        $.ajax({
            type: "POST",
            url: base_url + "berita/news/edit",
            dataType: "json",
            data: { berita_judul : $("#judul").val(),
                    id : $("#id").val(),
                    berita_isi : $("#news_detail").code(),
                    lastupd_by : $("#s_user_name").val() },
            success: function(data) {
                $("#BtnSubmit").removeAttr("disabled");
                $("#noty_topCenter_layout_container").remove();

                if(data.status == "success")
                {
                    alert("Data Berhasil Diproses");
                    {/literal}
                    window.location.replace("{$base_url}berita/news");
                    {literal}
                }
                else
                {
                    alert("Data Gagal Diproses, Harap Hubungin Call Center");
                }

            }
        });
    });
    {/literal}

</script>