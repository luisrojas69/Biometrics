<div class="container">
    <form id="edit_final" method="post" action="#">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
    <div class="row">
        <div class="input-field col s12">
            <input type="text" name="name" value="{{$faculty[0]->name}}">
            <label for="name" class="active">Name of Faculty</label>
        </div>
    </div>
        <div class="row">
            <div class="input-field col s12">
                <input type="text" name="enid" value="{{$faculty[0]->fid}}" disabled>
                <label for="enid" class="active">Enrollment Key</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <select name="branch">
                    <option value="CSE" @if($faculty[0]->branch == 'CSE')active selected @endif>CSE</option>
                    <option value="ECE" @if($faculty[0]->branch == 'ECE')active selected @endif>ECE</option>
                    <option value="ME" @if($faculty[0]->branch == 'ME')active selected @endif>ME</option>
                    <option value="CIVIL" @if($faculty[0]->branch == 'CIVIL')active selected @endif>CIVIL</option>
                    <option value="EE" @if($faculty[0]->branch == 'EE')active selected @endif>EE</option>
                    <option value="BBA" @if($faculty[0]->branch == 'BBA')active selected @endif>BBA</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <select name="sub">
                    @forelse($faculty[0]->sub as $subject)
                </select>
            </div>
        </div>
        <div class="row center-align">
            <button type="submit" class="btn orange waves-effect space">Submit</button>
            <button type="reset" class="btn orange waves-effect">Reset</button>
        </div>
    </form>
</div>

<script type="text/javascript">
    $('#edit_final').submit(function() {
        var name = $('[name="name"]').val();
        var enid = $('[name="enid"]').val();
        var branch = $('[name="branch"]').val();
        var token = $('#token').val();
        
        $.ajax({
            url: 'edit_facu',
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            data: {name:name, enid:enid, branch:branch},
            
            success: function(data) {
                $('#padd').html(data);
            }
        });
        return false;
    });
    $('select').material_select();
</script>