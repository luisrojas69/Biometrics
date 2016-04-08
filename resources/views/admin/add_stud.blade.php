<div class="container">
{!! Form::open(array('url' => 'add_stud')) !!}
    <div class="row">
        <div class="input-field col s12">
            <input type="text" name="name">
            <label for="name">Name of Student</label>
        </div>
    </div>
        <div class="row">
            <div class="input-field col s12">
                <input type="text" name="enid">
                <label for="enid">Enrollment Key</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <select name="sem">
                    <option value="" disabled selected>Choose A Sem</option>
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
                <select name="branch">
                    <option value="" disabled selected>Choose A Branch</option>
                    <option value="CSE">CSE</option>
                    <option value="ECE">ECE</option>
                    <option value="ME">ME</option>
                    <option value="CIVIL">CIVIL</option>
                    <option value="EE">EE</option>
                    <option value="BBA">BBA</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <select name="section">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </div>
        </div>
    <div class="row center-align">
        <button type="submit" class="btn orange waves-effect space">Submit</button>
        <button type="reset" class="btn orange waves-effect">Reset</button>
    </div>
{!! Form::close() !!}
</div>
<script type="text/javascript">
    $('select').material_select();
</script>