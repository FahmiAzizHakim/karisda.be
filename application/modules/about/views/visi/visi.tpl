<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
        <h3>Visi</h3>
            <form role="form">
                <div class="form-group">
                    <label>Visi</label>
                    <input id="visi" type="text" class="form-control" value="{$visi.isi}">
                </div>
                <div class="form-group">
                    <label>Motto</label>
                    <input id="motto" type="text" class="form-control" value="{$motto.isi}">
                </div>
                <div class="form-group">
	                <label>Misi</label>
                    <textarea class="summernote" id="misi">{$misi.isi}
                    </textarea>
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
        if($("#visi").val() == ""){
            alert("visi Harus Diisi");
            $("#visi").focus();
            return false;
        };
        if($("#motto").val() == ""){
            alert("motto Harus Diisi");
            $("#motto").focus();
            return false;
        };
        if($("#misi").val() == ""){
            alert("misi Harus Diisi");
            $("#misi").focus();
            return false;

        };

        noty({text: 'Loading', layout: 'topCenter'});
        $("#BtnSubmit").attr("disabled", true);

        $.ajax({
            type: "POST",
            url: base_url + "about/visi/edit",
            dataType: "json",
            data: { visi : $("#visi").val(),
                    misi : $("#misi").code(),
                    motto : $("#motto").val(),
                    lastupd_by : $("#s_user_name").val() },
            success: function(data) {
                $("#BtnSubmit").removeAttr("disabled");
                $("#noty_topCenter_layout_container").remove();

                if(data.status == "success")
                {
                    alert("Data Berhasil Diproses");
                    {/literal}
                    window.location.replace("{$base_url}about/visi");
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