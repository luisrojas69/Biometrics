<h3>Hello {{$student[0]->name}} </h3>

<div class="container">
{!! Form::open(array('url' => 'edit_stud')) !!}
    <div class="row">
        <div class="input-field col s12">
            <input type="text" name="name" value="{{$student[0]->name}}">
            <label for="name">Name of Student</label>
        </div>
    </div>
        <div class="row">
            <div class="input-field col s12">
                <input type="text" name="enid" value="{{$student[0]->enid}}">
                <label for="enid">Enrollment Key</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <select name="sem">
                    <option value="{{$student[0]->sem}}" disabled selected>{{$student[0]->sem}}</option>
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
                    <option value="{{$student[0]->branch}}" disabled selected>{{$student[0]->branch}}</option>
                    <option value="CSE">CSE</option>
                    <option value="ECE">ECE</option>
                    <option value="ME">ME</option>
                    <option value="CIVIL">CIVIL</option>
                    <option value="EE">EE</option>
                    <option value="BBA">BBA</option>
                </select>
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