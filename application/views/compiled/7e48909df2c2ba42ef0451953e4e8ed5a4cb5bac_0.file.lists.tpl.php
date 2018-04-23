<?php
/* Smarty version 3.1.30, created on 2018-04-23 10:44:22
  from "C:\xampp\htdocs\karisda.be\application\modules\about\views\product\lists.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5add9ce6ee5c28_04508414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e48909df2c2ba42ef0451953e4e8ed5a4cb5bac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karisda.be\\application\\modules\\about\\views\\product\\lists.tpl',
      1 => 1524473036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5add9ce6ee5c28_04508414 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
about/product/add"><button type="button" class="btn btn-success active">&nbsp;<span class="fa fa-plus"></span>Add&nbsp;</button></a>
            <br />
            <br />
                <div class="table-responsive">
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th width="200px">Nama</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <!-- <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_users']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['user_code'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['user_group'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['activestatus'];?>
</td>
                                    <td><button type="button" class="btn btn-success active" onclick="EditUser('<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
')"><span class="fa fa-pencil"></span>Edit</button></td>
                                </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 -->
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
    
    function EditUser(user_id){
        window.location = base_url + 'masterdata/users/edit?user_id=' + user_id;
        }
    
<?php echo '</script'; ?>
>
                            
                            <?php }
}
