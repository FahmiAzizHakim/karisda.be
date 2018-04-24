<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
        <h3>Keunggulan</h3>
            <form role="form">
                <div class="form-group">
                    <label>Judul</label>
                    <input id="name" type="text" class="form-control" placeholder="Judul" value="{$data.keunggulan_name}">
                    <input type="hidden" id="id" value="{$data.id}">
                </div>
                <div class="form-group">
                    <label>Detail</label>
	                <div class="block">
                        <textarea id="desc" class="form-control">{$data.keunggulan_desc}
                        </textarea>
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
        if($("#name").val() == ""){
            alert("Nama Harus Diisi");
            $("#name").focus();
            return false;
        };
        if($("#desc").val() == ""){
            alert("Keterangan Harus Diisi");
            $("#desc").focus();
            return false;
        };

        noty({text: 'Loading', layout: 'topCenter'});
        $("#BtnSubmit").attr("disabled", true);

        $.ajax({
            type: "POST",
            url: base_url + "about/keunggulan/edit",
            dataType: "json",
            data: { keunggulan_name : $("#name").val(),
                    keunggulan_desc : $("#desc").val(),
                    id : $("#id").val(),
                    lastupd_by : $("#s_user_name").val() },
            success: function(data) {
                $("#BtnSubmit").removeAttr("disabled");
                $("#noty_topCenter_layout_container").remove();

                if(data.status == "success")
                {
                    alert("Data Berhasil Diproses");
                    {/literal}
                    window.location.replace("{$base_url}about/keunggulan");
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