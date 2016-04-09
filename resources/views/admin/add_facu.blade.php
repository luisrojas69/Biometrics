<div class="container">
<form id="add_facu_form" method="post" action="#">
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
        <div id="sub_sec"></div>
    <div class="row center-align">
        <button type="submit" class="btn orange waves-effect space">Submit</button>
        <button type="reset" class="btn orange waves-effect">Reset</button>
    </div>
</form>
</div>
<script type="text/javascript">
    $('select').material_select();
    $('[name="branch"]').change(function() {
        var branch = $('ul.dropdown-content.select-dropdown li.selected').text();
        var token = $('#token').val();
        $.ajax({
            url: 'getSubjects',
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            data: {branch:branch},

            success: function(data) {
                $('#sub_sec').html(data);
                $('select').material_select();
            }
        });
        return false;
    });


    $('#add_facu_form').submit(function () {
        var sub = $('input:checkbox[name="sub_name"]:checked').serialize().split('=');
        for (var i = 1; i < sub.length - 1; i++) {
            sub[i] = sub[i].substring(0,sub[i].indexOf("&"));
        }
        sub.shift();

        var secs = [];
        for (var i = 0; i < sub.length; i++) {
            var str_tmp = '[name = "sec' + sub[i] + '"]';
            var value = document.querySelector(str_tmp);
            //value = $(value);
            value = $(value).prev();
            var options = $(value).children(".active").text();
            secs.push(options);
        }
        var name = $('[name="name"]').val();
        var fid = $('[name="fid"]').val();
        var email = $('[name="email"]').val();
        var branch = $('[name="branch"]').val();
        var token = $('#token').val();

        $.ajax({
            url: 'add_facu',
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            data: {name:name,fid:fid,email:email,sub:sub,branch:branch,sections:secs},

            success: function(data) {
                $('#padd').html(data);
            }
        });
        return false;
    });
</script>