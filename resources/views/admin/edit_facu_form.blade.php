<script type="text/javascript">
    $('select').material_select();
    //edit_stud
</script>
<h3>Hello {{$faculty[0]->name}} </h3>

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
                <select name="sem">
                    <option value="1" @if($faculty[0]->sem == '1')active selected @endif>I</option>
                    <option value="2" @if($faculty[0]->sem == '2')active selected @endif>II</option>
                    <option value="3" @if($faculty[0]->sem == '3')active selected @endif>III</option>
                    <option value="4" @if($faculty[0]->sem == '4')active selected @endif>IV</option>
                    <option value="5" @if($faculty[0]->sem == '5')active selected @endif>V</option>
                    <option value="6" @if($faculty[0]->sem == '6')active selected @endif>VI</option>
                    <option value="7" @if($faculty[0]->sem == '7')active selected @endif>VII</option>
                    <option value="8" @if($faculty[0]->sem == '8')active selected @endif>VIII</option>
                </select>
            </div>

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
        var sem = $('[name="sem"]').val();
        var branch = $('[name="branch"]').val();
        var token = $('#token').val();
        
        $.ajax({
            url: 'edit_facu',
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            data: {name:name, enid:enid, sem:sem, branch:branch},
            
            success: function(data) {
                $('#padd').html(data);
            }
        });
        return false;
    });
</script>