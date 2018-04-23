<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
        <h3>Data User</h3>
            <form role="form">
                <div class="form-group">

	                <label>Nama </label>
	                <input id="field_name" type="text" class="form-control" placeholder="Nama User">
                </div>
           
                <div class="form-group">
                    <label>Keterangan</label>
                     <textarea id="activestatus" class="form-control"></textarea>
                    
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
        var api_url = '{$api_url}';
    {literal}
        if($("#field_name").val() == ""){
            alert("Nama Harus Diisi");
            $("#field_name").focus();
            return false;
        };
        if($("#field_code").val() == ""){
            alert("User Code Harus Diisi");
            $("#field_code").focus();
            return false;
        };
        if($("#field_password").val() == ""){
            alert("Password Harus Diisi");
            $("#field_password").focus();
            return false;

        };
        if($("#field_password2").val() != $("#field_password").val()){
            alert("Password Harus Sama");
            $("#field_password").focus();
            return false;
            
        };
        if($("#field_role").val() == ""){
            alert("Peran Harus Diisi");
            $("#field_role").focus();
            return false;

        };

        noty({text: 'Loading', layout: 'topCenter'});
        $("#BtnSubmit").attr("disabled", true);

        $.ajax({
            type: "POST",
            url: api_url + "Master_data/field_insert_user",
            dataType: "json",
            data: { field_name : $("#field_name").val(),
                    field_code : $("#field_code").val(),
                    field_password : $("#field_password").val(),
                    field_role : $("#field_role").val(),
                    activestatus : $("#activestatus").val(),
                    created_by : $("#s_user_name").val(),
                    company_code : $("#s_company_code").val() },
            success: function(data) {
                $("#BtnSubmit").removeAttr("disabled");
                $("#noty_topCenter_layout_container").remove();
                alert(data.status);

                if(data.status == "success")
                {
                    alert("Data Berhasil Diproses");
                    {/literal}
                    window.location.replace("{$base_url}masterdata/users");
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