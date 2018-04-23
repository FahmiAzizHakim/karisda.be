<?php
/* Smarty version 3.1.30, created on 2018-04-23 10:16:48
  from "C:\xampp\htdocs\karisda.be\application\modules\about\views\legal\legalitas.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5add9670e9e9f1_76517804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8584bc910ec5f4e6baa68e9c8acf621092e6265' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karisda.be\\application\\modules\\about\\views\\legal\\legalitas.tpl',
      1 => 1524471405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5add9670e9e9f1_76517804 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
about/legalitas/add"><button type="button" class="btn btn-success active">&nbsp;<span class="fa fa-plus"></span>Add&nbsp;</button></a>
            <br />
            <br />
                <div class="table-responsive">
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fahmi</td>
                                <td>Aktif</td>
                                <td><button type="button" class="btn btn-success active"><span class="fa fa-pencil"></span>Edit</button></td>
                            </tr>
                            <tr>
                                <td>Kholil</td>
                                <td>Aktif</td>
                                <td><button type="button" class="btn btn-success active"><span class="fa fa-pencil"></span>Edit</button></td>
                            </tr>
                            <tr>
                                 <td>Indra</td>
                                <td>Aktif</td>
                                <td><button type="button" class="btn btn-success active"><span class="fa fa-pencil"></span>Edit</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
                            
                            <?php }
}
