<?php
/* Smarty version 3.1.30, created on 2018-04-23 10:22:56
  from "C:\xampp\htdocs\karisda.be\application\modules\about\views\legal\add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5add97e0de3215_38469855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9373de2632a5f4781ee7c14fb44c03130e3a9912' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karisda.be\\application\\modules\\about\\views\\legal\\add.tpl',
      1 => 1524471773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5add97e0de3215_38469855 (Smarty_Internal_Template $_smarty_tpl) {
?>
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

<?php echo '<script'; ?>
 type="text/javascript">
    
    $("#BtnSubmit").click(function(){
    
        var api_url = '<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
';
    
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
                    
                    window.location.replace("<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
masterdata/users");
                    
                }
                else
                {
                    alert("Data Gagal Diproses, Harap Hubungin Call Center");
                }

            }
        });
    });
    

<?php echo '</script'; ?>
><?php }
}
