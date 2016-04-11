<table class="highlight">
    <thead>
        <th class="center-align">No.</th>
        <th class="center-align">Code</th>
        <th class="center-align">Name</th>
        <th class="center-align">Description</th>
        <th class="center-align">Semester(s)</th>
        <th class="center-align">Branch(es)</th>
        <th class="center-align"></th>
    </thead>
    <tbody>
    @foreach($co as $c)
        <tr>
            <td class="center-align">#1</td>
            <td class="center-align">{{$c->code}}</td>
            <td class="center-align">{{$c->name}}</td>
            <td class="center-align">{{$c->desc}}</td>
            <td class="center-align">{{$c->sem}}</td>
            <td class="center-align">{{$c->branch}}</td>
            <td class="center-align">
                <a class=" btn-flat btn-floating btn-waves orange">
                    <i class="material-icons">more_horiz</i>
                </a>
            </td>
        </tr>
        <tr class="hide">
            <td colspan="7">Heloow</td>
        </tr>
    @endforeach
    </tbody>
</table>