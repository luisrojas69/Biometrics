<div class="container">
{!! Form::open(array('url' => 'add_co')) !!}
    <div class="row">
        <div class="input-field col s12">
            <input type="text" name="name">
            <label for="name">Name of Course</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input type="text" name="code">
            <label for="code">Subject Code</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <textarea id="txtarea1" class="materialize-textarea" name="desc"></textarea>
            <label for="txtarea1">Description</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <select name="sem[]" multiple>
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
            <select name="branch[]" multiple>
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
<div class="row center-align">
    <button type="submit" class="btn orange waves-effect space">Submit</button>
    <button type="reset" class="btn orange waves-effect">Reset</button>
</div>
{!! Form::close() !!}
</div>
<script type="text/javascript">
    $('select').material_select();
</script>