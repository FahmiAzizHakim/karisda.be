<div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
            <a href="{$base_url}berita/news/add"><button type="button" class="btn btn-success active">&nbsp;<span class="fa fa-plus"></span>Add&nbsp;</button></a>
            <br />
            <br />
                <div class="table-responsive">
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th>Judul Berita</th>
                            <th>Isi</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <!-- {foreach from=$data_lapangan item=row}
                                <tr>
                                    <td>{$row.field_no}</td>
                                    <td>{$row.field_name}</td>
                                    <td>{$row.field_room_name}</td>
                                    <td>{$row.field_type_name}</td>
                                    <td>{$row.activestatus_name}</td>
                                    <td><button type="button" class="btn btn-success active" onclick="EditLapangan('{$row.field_id}')"><span class="fa fa-pencil"></span>Edit</button></td>
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

    function EditLapangan(field_id){
        window.location = base_url + 'masterdata/lapangan/edit?field_id=' + field_id;
        }
</script>
                            
                            