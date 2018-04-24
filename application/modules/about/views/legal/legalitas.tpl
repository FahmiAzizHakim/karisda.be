    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
            <a href="{$base_url}about/legalitas/add"><button type="button" class="btn btn-success active">&nbsp;<span class="fa fa-plus"></span>Add&nbsp;</button></a>
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
                            {foreach from=$data item=row}
                                <tr>
                                    <td>{$row.legalitas_name}</td>
                                    <td>{$row.legalitas_desc}</td>
                                    <td><button type="button" class="btn btn-success active" onclick="EditUser('{$row.id}')"><span class="fa fa-pencil"></span>Edit</button></td>
                                </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
<script type="text/javascript">
    base_url = '{$base_url}';
    {literal}
    function EditUser(id){
        window.location = base_url + 'about/legalitas/update?id=' + id;
        }
    {/literal}
</script>
                            
                            