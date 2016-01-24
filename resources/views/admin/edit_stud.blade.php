<div id="edit_stud_content">
    <div class="container">
        <form id="edit_stud_form" method="post" action="#">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <div class="row">
                <div class="input-field col s12">
                    <input type="text" name="id_edit_student" id="id_edit_student">
                    <label for="id_edit_student">Enter Student ID</label>
                </div>
            </div>
            <div class="row center-align">
                <button type="submit" class="btn orange waves-effect space">Submit</button>
                <button type="reset" class="btn orange waves-effect">Reset</button>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    $('select').material_select();
    $('#edit_stud_form').submit(function() {
        var id = $('#id_edit_student').val();
        var token = $('#token').val();
        
        $.ajax({
            url: 'post_req',
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            //dataType: 'json',
            data: {id:id},
            
            success: function(data) {
                $('#edit_stud_content').html(data);
            }
        });
        return false;
    });
</script>