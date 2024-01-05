<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>YouEvent</title>
</head>

<body>
    <?php
    include_once "includes/dash.php";
    ?>

    <section class="container-fluid p-0">
        <div class="container rounded-pill py-4 mt-5 col-11">
            <div class="container  text-dark col-10">
                <h2>Welcome<span class="ms-2"></span></h2>
                <hr class="col-3">
            </div>
        </div>
        <div class="d-flex flex-column align-items-center container-fluid">
            <div class="container-fluid col-3 text-danger pb-3">
                <h2>Sales graph</h2>
            </div>
            <hr class="col-6">
            <div class="d-flex container-fluid">
                <div class="container col-5 bg-dark rounded" style="box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;">
                    <canvas id="upndownchart"></canvas>
                </div>
                <div class="container col-5 bg-dark rounded" style="box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;">
                    <canvas id="doughnutchart"></canvas>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('upndownchart').getContext('2d');

        var lineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Event1', 'Event2', 'Event3', 'Event4', 'Event5'],
                datasets: [{
                    label: 'Line Chart',
                    data: [10, 20, 15, 25, 30],
                    borderColor: 'lightblue',
                    borderWidth: 2
                }]
            }
        });

        var cxt = document.getElementById('doughnutchart').getContext('2d');

        var barChart = new Chart(cxt, {
            type: 'bar',
            data: {
                labels: ['teckt1', 'teckt2', 'teckt3'],
                datasets: [{
                    label: 'Bar Chart',
                    data: [12, 19, 3],
                    backgroundColor: 'lightblue',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
