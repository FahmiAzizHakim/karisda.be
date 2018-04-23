<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
        <h3>Tentang Kami</h3>
            <form role="form">
                <div class="form-group">
	                <div class="block">
                        <textarea class="summernote" name="isi" id="isi">
                        {$data.isi}
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
        if($("#isi").val() == ""){
            alert("Nama Harus Diisi");
            $("#isi").focus();
            return false;
        };

        noty({text: 'Loading', layout: 'topCenter'});
        $("#BtnSubmit").attr("disabled", true);

        $.ajax({
            type: "POST",
            url: base_url + "about/about_us/edit",
            dataType: "json",
            data: { isi : $("#isi").code(),
                    lastupd_by : $("#s_user_name").val() },
            success: function(data) {
                $("#BtnSubmit").removeAttr("disabled");
                $("#noty_topCenter_layout_container").remove();

                if(data.status == "success")
                {
                    alert("Data Berhasil Diproses");
                    {/literal}
                    window.location.replace("{$base_url}about/about_us");
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