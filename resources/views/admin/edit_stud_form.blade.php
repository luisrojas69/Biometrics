<script type="text/javascript">
    $('select').material_select('destroy');
</script>

<h3>Hello {{$student[0]->name}} </h3>

<div class="container">
{!! Form::open(array('url' => 'edit_stud')) !!}
    <div class="row">
        <div class="input-field col s12">
            <input type="text" name="name" value="{{$student[0]->name}}">
            <label for="name" class="active">Name of Student</label>
        </div>
    </div>
        <div class="row">
            <div class="input-field col s12">
                <input type="text" name="enid" value="{{$student[0]->enid}}" disabled>
                <label for="enid" class="active">Enrollment Key</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <?php echo Form::select('sem', array('1' => 'I',
                                                     '2' => 'II',
                                                     '3' => 'III',
                                                     '4' => 'IV',
                                                     '5' => 'V',
                                                     '6' => 'VI',
                                                     '7' => 'VII',
                                                     '8' => 'VIII'), $student[0]->sem); ?>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <?php echo Form::select('branch', array('CSE' => 'CSE',
                                                        'ECE' => 'ECE',
                                                        'ME' => 'ME',
                                                        'CIVIL' => 'CIVIL',
                                                        'EE' => 'EE',
                                                        'BBA' => 'BBA'), $student[0]->branch); ?>
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