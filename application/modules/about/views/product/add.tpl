<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
        <h3>Product dan Layanan</h3>
            <form role="form">
                <div class="form-group">
                    <label>Judul</label>
                     <div class="form-group">
                    <input id="product_name" type="text" class="form-control" placeholder="">
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea id="product_desc" class="summernote">
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
        if($("#Judul").val() == ""){
            alert("Nama Harus Diisi");
            $("#Judul").focus();
            return false;
        };

        noty({text: 'Loading', layout: 'topCenter'});
        $("#BtnSubmit").attr("disabled", true);

        $.ajax({
            type: "POST",
            url: base_url + "about/product/insert",
            dataType: "json",
            data: { product_name : $("#product_name").val(),
                    product_desc : $("#product_desc").code(),
                    lastupd_by : $("#s_user_name").val() },
            success: function(data) {
                $("#BtnSubmit").removeAttr("disabled");
                $("#noty_topCenter_layout_container").remove();

                if(data.status == "success")
                {
                    alert("Data Berhasil Diproses");
                    {/literal}
                    window.location.replace("{$base_url}about/product");
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