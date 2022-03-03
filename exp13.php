<html>
<body bgcolor="lightblue">
<?php
$name=["sachin","rohit","virat","sanju","kl rahul","dhoni","aswin","bumra","shami","siraj","jadeja"];
echo "team india";
echo"<table border='1px'>
<tr>
<th>sl no.</th>
<th>players</th>
</tr>";
for($i=0;$i<11;$i++)
{
$sl=$i+1;
echo "<tr><th>$sl</th>
<th>$name[$i]</th>
</tr>";
}
echo "</table>"
?>
</body>
</html>
