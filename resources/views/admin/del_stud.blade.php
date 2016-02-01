<div class="container">
    <form id="del_stud_form" method="post" action="#">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <div class="row">
            <div class="input-field col s12">
                <input type="text" name="id_del_student">
                <label for="id">Enter Student ID</label>
            </div>
        </div>
        <div class="row center-align">
            <button type="submit" class="btn orange waves-effect space">Submit</button>
            <button type="reset" class="btn orange waves-effect">Reset</button>
        </div>
    </form>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Modal Header</h4>
        <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action waves-effect waves-green btn-flat" id="del_final">Agree</a>
        <a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat" id="close">Disagree</a>
    </div>
</div>
<script type="text/javascript">
    $('.modal-trigger').leanModal();
    $('#del_stud_form').submit(function() {
        var enid = $('[name="id_del_student"]').val();
        var token = $('#token').val();
        
       $.ajax({
            url: 'del_stud',
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            data: {enid:enid},
            
            success: function(data) {
                $('.modal-content').html(data);
                $('#modal1').openModal();
            }
        });
        return false;
    });
    
    $('#del_final').click(function() {
        var enid = $('[name="id_del_student"]').val();
        var token = $('#token').val();
        
       $.ajax({
            url: 'del_final',
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            data: {enid:enid},
            
            success: function() {
                $('#del_final').html('Deleted');
                $('#close').html('Close');
            }
        });
        return false;
    });
</script>