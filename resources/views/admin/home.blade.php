<div class="row card-panel white hoverable" id="chart"></div>

<div class="row">
    <div class="col s12 m4">
        <div class="card-panel white hoverable">
            <p class="flow-text center-align">Students Registered<br>4903</p>
        </div>
    </div>
    <div class="col s12 m4">
        <div class="card-panel white hoverable">
            <p class="flow-text center-align">Teachers Registered<br>85</p>
        </div>
    </div>
    <div class="col s12 m4">
        <div class="card-panel white hoverable">
            <p class="flow-text center-align">Courses Running<br>245</p>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#chart').insertFusionCharts({
        type: 'column2d',
        width: '100%',
        height: '350',
        dataFormat: 'json',
        dataSource: {
            chart: {
                caption: 'Test Chart',
                subCaption: 'Abhinav Mathur',
                exportEnabled: '1',
                numberPrefix: '₹',
                theme: 'zune',
            },
            
            data: [
                {
                    label: "Bakersfield Central",
                    value: "880000"
                },
                
                {
                    label: "Garden Groove harbour",
                    value: "730000"
                },
                
                {
                    label: "Los Angeles Topanga",
                    value: "590000"
                },
                
                {
                    label: "Compton-Rancho Dom",
                    value: "520000"
                },
                
                {
                    label: "Daly City Serramonte",
                    value: "330000"
                }
            ]
        }
    });
</script>