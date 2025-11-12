jQuery(document).ready(function ($){
    
    //Funcion para habilitar o deshabilitar el boton remove dependiendo del numero de filas
    function updateRemoveButton(){
        //Obtenemos el numero de filas
        var rowCount = $('#custom-array-tbody tr').length;
        $('#remove-row').prop('disabled', rowCount === 1);
    }
    
    //añadir una nueva fila cuando pulsemos el boton add item
    
    $('#add-row').on('click', function() {
       var lastRow = $('#custom-array-tbody tr:last');
       var hasValue =  lastRow.find('input[type=text]').filter( function() {
           return $(this).val().trim() !== '';
       }).length > 0;
       
       //Tenemos que añadir una fila solo si la ultima no esta vacia
       if(hasValue){
           var rowCount = $('#custom-array-tbody tr').length;
           var newRow = '<tr><td><input type="text" class="td-name" name="vfh_custom_array_field['+ rowCount +'][key1]" value=""></td><td><input type="text" class="td-rol" name="vfh_custom_array_field[' + rowCount +'][key2]" value=""></td><td><button type="button" id="remove-row" class="td-delete"><span class="dashicons dashicons-dismiss"></span> Remove</button></td></tr>';
           $('#custom-array-tbody').append(newRow);
           updateRemoveButton();
       }
        
    });
    
    
    //Eliminar la fila al pulsar el boton remove
   $('#custom-array-metabox').on('click','#remove-row', function() {
        $(this).closest('tr').remove();
        updateRemoveButton();
    });
    
    updateRemoveButton();
    
});



