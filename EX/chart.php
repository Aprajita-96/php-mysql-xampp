<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css" integrity="sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="container">
    <div class="card">
        <div class="card-body">
            <canvas id="PieChart" width="120%" height="50"></canvas>
        </div>
    </div>
</div>
<?php
    $female_count=getCountByGender("F");
    $male_count=getCountByGender("M");
?>
<script>
    var ctx= document.getElementById("PieChart");
    console.log(ctx)
    var mypiechart=new Chart(ctx, {
        type:'pie',
        data:{
            labels:["Female","Male"],
            datasets:[{
                // data:[100,50],
                data: [<?php echo $female_count;?>,<?php echo $male_count;?>],
                backgroundColor:['red','green']
            }]
        }
    })
</script>



