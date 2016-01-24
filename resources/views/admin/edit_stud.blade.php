<div class="container">
{!! Form::open(array('url' => 'edit_stud')) !!}
    <div class="row">
        <div class="input-field col s12">
            <input type="text" name="id_edit_student" id="id_edit_student">
            <label for="id_edit_student">Enter Student ID</label>
        </div>
    </div>
</div>
    <div class="row center-align">
        <button type="submit" class="btn orange waves-effect space">Submit</button>
        <button type="reset" class="btn orange waves-effect">Reset</button>
    </div>
{!! Form::close() !!}
<script type="text/javascript">
    $('select').material_select();
</script>