<div class="container">
{!! Form::open(array('url' => 'del_stud')) !!}
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
{!! Form::close() !!}
</div>
<script type="text/javascript">
    $('select').material_select();
</script>