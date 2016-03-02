<div id="edit_co_content">
    <div class="container">
        <form id="edit_co_form" method="post" action="#">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <div class="row">
                <div class="input-field col s12">
                    <input type="text" name="id_edit_co" id="id_edit_co">
                    <label for="id_edit_co">Enter Course ID</label>
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
    $('#edit_co_form').submit(function() {
        var id = $('#id_edit_co').val();
        var token = $('#token').val();
        
        $.ajax({
            url: 'edit_co_post',
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            data: {id:id},
            
            success: function(data) {
                $('#edit_co_content').html(data);
            }
        });
        return false;
    });
</script>