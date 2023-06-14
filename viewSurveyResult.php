<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>View Survey</title>
</head>

<body>

    <p>
        Total number of survey: <?php 
        include ("stat.php");
        echo $output ?></br>
        Average age: <?php 
        include ("stat.php");
        echo $average ?></br>
        Oldest person who participated in survey: <?php 
        include ("stat.php");
        echo $maxValue ?></br>
        Youngest person who participated in survey: <?php 
        include ("stat.php");
        echo $minValue ?></br></br>
        Percentage of people who like Pizza: <?php 
        include ("stat.php");
        echo $pizza ?></br>
        Percentage of people who like Pasta: <?php 
        include ("stat.php");
        echo $pasta ?></br>
        Percentage of people who like Pap and Wors: <?php 
        include ("stat.php");
        echo $pap ?></br></br>
        People like to eat out: <?php 
        include ("stat.php");
        echo $eatout ?></br>
        People like to watch movie: <?php 
        include ("stat.php");
        echo $watchmovies ?></br>
        People like to watch TV: <?php 
        include ("stat.php");
        echo $watchtv ?></br>
        People like to listen to the radio: <?php 
        include ("stat.php");
        echo $radio ?>

    </p>

    <button class="ok" onclick="backToHome()">OK</button>
</body>

<script>
function backToHome() {
    window.location.href = "index.html";
}
</script>

<style>
.ok {
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    display: flex;


}
</style>

</html>