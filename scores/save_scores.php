<?PHP
$assgn=$_POST['Assgn'];
$name=$_POST['Name'];
$student=$_POST['StudentID'];
$score=$_POST['Score'];
$test=$_POST['TestID'];

$period=$_POST['Period'];
 
//write to test-$test-scores.csv in same directory of script on web server. Usually C:\xampp\htdocs on Xampp windows.
 
$line=array($assgn, $period, $name,$student,$score);
$handle = fopen("test-$test-scores.csv", "a");
fputcsv($handle,$line);
fclose($handle);
?>