<html><head>
<script type="text/javascript">
function startTime()
{
var d= new Date();
var h= d.getHours();
var m= d.getMinutes();
var s= d.getSeconds();
document.getElementById("txt").innerHTML= h+" : "+m+" : "+s;
setTimeout('startTime()', 1000);
}<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript">
        function startTime() {
            var d = new Date();
            var h = d.getHours();
            var m = d.getMinutes();
            var s = d.getSeconds();
            h = addZeroPrefix(h);
            m = addZeroPrefix(m);
            s = addZeroPrefix(s);
            document.getElementById("localTime").innerHTML = h + " : " + m + " : " + s;
            setTimeout(startTime, 1000);
        }

        function addZeroPrefix(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
    </script>
    <style type="text/css">
        h1 {
            font-size: 70px;
        }
    </style>
</head>
<body bgcolor="#39067" text="white" onload="startTime()">
    <br>
    <h1 align="center">The time from the local system is:
        <span id="localTime"></span>
    </h1>
    </br>
    </br>
    </br>
    </br>
    <?php
    $today = date("H:i:s"); // 17:16:18
    ?>
    <h1 align="center">
        <?php echo "The time from the server is " . date("h:i:sa"); ?>
    </h1>
</body>
</html>

</script>
<style type="text/css">
h1 
{
font-size: 70px;
}
</style></head>
<body bgcolor = "#39067" text="white" onload="startTime()">
<br>
<h1 align= "center"> The time from the local system is: 
<span id= "txt"></span>
</h1>
</body>
</html>
</br>
</br></br></br>
<?php
$today = date("H:i:s"); // 17:16:18
?>
 <!DOCTYPE html>
<html>
<body>
<h1 align= "center">
<?php echo "The time from the server is " . date("h:i:sa");?>
</h1>
</body>
</html>