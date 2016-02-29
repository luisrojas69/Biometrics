<div class="container">
{!! Form::open(array('url' => 'add_facu')) !!}
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
        <div class="row">
            <div class="input-field col s12">
                <select name="branch">
                    <option value="" disabled>Choose A Branch</option>
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
                <select name="subjects" multiple>
                    <option value="" disabled>Select all subjects that apply</option>
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