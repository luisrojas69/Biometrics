<div class="container">
{!! Form::open(array('url' => 'add_facu', 'id' => 'add_facu')) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
    <div class="row">
        <div class="input-field col s12">
            <input type="text" name="name">
            <label for="name">Name of Faculty</label>
        </div>
    </div>
        <div class="row">
            <div class="input-field col s12">
                <input type="text" name="fid">
                <label for="enid">Faculty ID</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input type="text" name="email">
                <label for="email">Faculty E-Mail ID</label>
            </div>
        </div>
        <!--<div class="row">
            <div class="input-field col s12">
                <input type="text" name="f_enid">
                <label for="enid">Faculty Enrollment ID</label>
            </div>
        </div>-->
        <div class="row" id="branch">
            <div class="input-field col s12">
                <select name="branch">
                    <option value="" disabled selected>Choose Branch</option>
                    <option value="CSE">CSE</option>
                    <option value="ECE">ECE</option>
                    <option value="ME">ME</option>
                    <option value="CIVIL">CIVIL</option>
                    <option value="EE">EE</option>
                    <option value="BBA">BBA</option>
                </select>
            </div>
        </div>
        <div class="row" id="sub"></div>
    <div class="row center-align">
        <button type="submit" class="btn orange waves-effect space">Submit</button>
        <button type="reset" class="btn orange waves-effect">Reset</button>
    </div>
{!! Form::close() !!}
</div>
<script type="text/javascript">
    $('select').material_select();
    $('[name="branch"]').change(function() {
        var branch = $('ul.dropdown-content li.selected').text();
        var token = $('#token').val();
        $.ajax({
            url: 'getSubjects',
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            data: {branch:branch},

            success: function(data) {
                $('#sub').html(data);
                $('select').material_select();
            }
        });
        return false;
    });
</script>