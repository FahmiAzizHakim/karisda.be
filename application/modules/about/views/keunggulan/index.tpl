<div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
            <a href="{$base_url}about/keunggulan/add"><button type="button" class="btn btn-success active">&nbsp;<span class="fa fa-plus"></span>Add&nbsp;</button></a>
            <br />
            <br />
                <div class="table-responsive">
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th width="200px">Judul</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <!-- {foreach from=$data_users item=row}
                                <tr>
                                    <td>{$row.user_code}</td>
                                    <td>{$row.user_name}</td>
                                    <td>{$row.user_group}</td>
                                    <td>{$row.activestatus}</td>
                                    <td><button type="button" class="btn btn-success active" onclick="EditUser('{$row.user_id}')"><span class="fa fa-pencil"></span>Edit</button></td>
                                </tr>
                            {/foreach} -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
<script type="text/javascript">
    base_url = '{$base_url}';
    {literal}
    function EditUser(user_id){
        window.location = base_url + 'masterdata/users/edit?user_id=' + user_id;
        }
    {/literal}
</script>
                            
                            