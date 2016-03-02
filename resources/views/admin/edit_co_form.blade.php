<div class="container">
    <form id="edit_final" method="post" action="#">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
    <div class="row">
        <div class="input-field col s12">
            <input type="text" name="name" value="{{$co[0]->name}}">
            <label for="name" class="active">Name of Course</label>
        </div>
    </div>
        <div class="row">
            <div class="input-field col s12">
                <input type="text" name="enid" value="{{$co[0]->code}}" disabled>
                <label for="enid" class="active">Course Code</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="desc" class="materialize-textarea"></textarea>
                <label for="desc">Description</label>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s12">
                <select name="sem[]" multiple>
                    <option value="1">I</option>
                    <option value="2">II</option>
                    <option value="3">III</option>
                    <option value="4">IV</option>
                    <option value="5">V</option>
                    <option value="6">VI</option>
                    <option value="7">VII</option>
                    <option value="8">VIII</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <select name="branch[]" multiple>
                    <option value="CSE" @if(in_array('CSE', $co[0]->branch))active selected @endif>CSE</option>
                    <option value="ECE" @if(in_array('ECE', $co[0]->branch))active selected @endif>ECE</option>
                    <option value="ME" @if(in_array('ME', $co[0]->branch))active selected @endif>ME</option>
                    <option value="CIVIL" @if(in_array('CIVIL', $co[0]->branch))active selected @endif>CIVIL</option>
                    <option value="EE" @if(in_array('EE', $co[0]->branch))active selected @endif>EE</option>
                    <option value="BBA" @if(in_array('BBA', $co[0]->branch))active selected @endif>BBA</option>
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
        var desc = $('#desc').val();
        var sem = $('[name="sem"]').val();
        var branch = $('[name="branch"]').val();
        var token = $('#token').val();
        
        $.ajax({
            url: 'edit_co',
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            data: {name:name, enid:enid, desc:desc, sem:sem, branch:branch},
            
            success: function(data) {
                $('#padd').html(data);
            }
        });
        return false;
    });
    $('[name="sem"]').val([1,2]).prop("selected", true);
    $('select').material_select();
</script>