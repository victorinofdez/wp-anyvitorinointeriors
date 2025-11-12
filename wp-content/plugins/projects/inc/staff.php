<div id="custom-array-metabox">
    <table class="staff-table">
        <thead>
            <tr>
                <th class="th-name">Name:</th>
                <th class="th-rol">Rol:</th>
                <th class="th-delete"></th>
            </tr>
        </thead>
        <tbody id="custom-array-tbody">
            <?php
                if(!empty($custom_array_values)){
                    foreach($custom_array_values as $index => $row){
                        ?>
                            <tr>
                                <td><input type="text" class="td-name" name="vfh_custom_array_field[<?php echo $index; ?>][key1]" value="<?php echo $row['key1'];?>"></td>
                                <td><input type="text" class="td-rol" name="vfh_custom_array_field[<?php echo $index; ?>][key2]" value="<?php echo $row['key2'];?>"></td>
                                <td><button type="button" id="remove-row" class="td-delete"><span class="dashicons dashicons-dismiss"></span> Remove</button></td>
                            </tr>
                        
                        <?php
                    }
                }else{
                    ?>
                            <tr>
                                <td><input type="text" class="td-name" name="vfh_custom_array_field[0][key1]" value=""></td>
                                <td><input type="text" class="td-rol" name="vfh_custom_array_field[0][key2]" value=""></td>
                                <td><button type="button" id="remove-row" class="td-delete"><span class="dashicons dashicons-dismiss"></span> Remove</button></td>
                            </tr>
                    
                    <?php
                }
            ?>
        </tbody>
    </table>
    <p>
        <button type="button" id="add-row" class="button button-add"><span class="dashicons dashicons-plus-alt"></span>&nbsp;Add item</button>
    </p>
</div>