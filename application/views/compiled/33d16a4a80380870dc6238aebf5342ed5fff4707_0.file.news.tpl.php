<?php
/* Smarty version 3.1.30, created on 2018-04-23 09:28:03
  from "C:\xampp\htdocs\karisda.be\application\modules\berita\views\news.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5add8b035e9411_29343147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33d16a4a80380870dc6238aebf5342ed5fff4707' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karisda.be\\application\\modules\\berita\\views\\news.tpl',
      1 => 1523966198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5add8b035e9411_29343147 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
masterdata/lapangan/add"><button type="button" class="btn btn-success active">&nbsp;<span class="fa fa-plus"></span>Add&nbsp;</button></a>
            <br />
            <br />
                <div class="table-responsive">
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th width="20px">No. Lap.</th>
                            <th>Nama Lapangan</th>
                            <th>Ruangan</th>
                            <th>Jenis Lapangan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_lapangan']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['field_no'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['field_name'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['field_room_name'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['field_type_name'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['activestatus_name'];?>
</td>
                                    <td><button type="button" class="btn btn-success active" onclick="EditLapangan('<?php echo $_smarty_tpl->tpl_vars['row']->value['field_id'];?>
')"><span class="fa fa-pencil"></span>Edit</button></td>
                                </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
base_url = '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
';

    function EditLapangan(field_id){
        window.location = base_url + 'masterdata/lapangan/edit?field_id=' + field_id;
        }
<?php echo '</script'; ?>
>
                            
                            <?php }
}
