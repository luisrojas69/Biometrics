<table class="highlight">
    <thead>
        <th class="center-align">No.</th>
        <th class="center-align">ID</th>
        <th class="center-align">Name</th>
        <th class="center-align">Branch</th>
        <th class="center-align">Email</th>
        <th class="center-align"></th>
    </thead>
    <tbody>
    @foreach($facu as $f)
        <tr>
            <td class="center-align">#1</td>
            <td class="center-align">{{$f->fid}}</td>
            <td class="center-align">{{$f->name}}</td>
            <td class="center-align">{{$f->branch}}</td>
            <td class="center-align">{{$f->email}}</td>
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