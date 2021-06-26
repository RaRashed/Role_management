<script>

    $("#checkPermissionAll").click(function(){
        if($(this).is(':checked')){
            //Check all the checkbox
            $('input[type=checkbox]').prop('checked',true);
        }
        else {
            //Check all the checkbox
            $('input[type=checkbox]').prop('checked',false);

        }
    });
    function checkPermissionByGroup(className, checkThis){
        const groupIdName = $("#"+checkThis.id);
        const classCheckBox = $('.'+className+' input');
        if(groupIdName.is(':checked')){
            //Check all the checkbox
            classCheckBox.prop('checked',true);
        }
        else {
            //Check all the checkbox
            classCheckBox.prop('checked',false);

        }


    }
</script>
