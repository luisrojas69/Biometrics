<table class="highlight">
    <thead>
        <th class="center-align">No.</th>
        <th class="center-align">Roll No</th>
        <th class="center-align">Name</th>
        <th class="center-align">Semester</th>
        <th class="center-align">Section</th>
        <th class="center-align"></th>
    </thead>
    <tbody>
    @foreach($stu as $st)
        <tr>
            <td class="center-align">#1</td>
            <td class="center-align">{{$st->enid}}</td>
            <td class="center-align">{{$st->name}}</td>
            <td class="center-align">{{$st->sem}}</td>
            <td class="center-align">{{$st->section}}</td>
            <td class="center-align">
                <a class=" btn-flat btn-floating btn-waves orange">
                    <i class="material-icons">more_horiz</i>
                </a>
            </td>
        </tr>
        <tr class="hide">
            <td colspan="6">Heloow</td>
        </tr>
    @endforeach
    </tbody>
</table>