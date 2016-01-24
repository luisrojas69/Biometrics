<div class="container">
{!! Form::open(array('url' => 'edit_co')) !!}
    <div class="row">
        <div class="input-field col s12">
            <input type="text" name="id_edit_co">
            <label for="id">Enter Subject Code</label>
        </div>
    </div>
    <div class="row center-align">
        <button type="submit" class="btn orange waves-effect space">Submit</button>
        <button type="reset" class="btn orange waves-effect">Reset</button>
    </div>
{!! Form::close() !!}
</div>