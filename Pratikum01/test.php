<!DOCTYPE html>
<html>
<head>
<title>E-Voting System</title>
<style>
body {
    background-color: #f2f2f2;
    font-family: Arial, Helvetica, sans-serif;
}

.header {
    background-color: #f44336;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}

.navbar {
    overflow: hidden;
    background-color: #f44336;
    padding: 10px;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 10px 10px;
    text-decoration: none;
}

.navbar a:hover {
    background-color: #ddd;
    color: black;
}

.navbar a.active {
    background-color: #4CAF50;
    color: white;
}

.content {
    padding: 16px;
}

.row {
    display: flex;
    flex-wrap: wrap;
    padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
    flex: 25%;
    max-width: 25%;
    padding: 0 4px;
}

.column img {
    margin-top: 8px;
    vertical-align: middle;
    width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
    .column {
        flex: 50%;
        max-width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        flex: 100%;
        max-width: 100%;
    }
}
</style>
</head>
<body>

<div class="header">
  <h1>E-Voting System</h1>
</div>

<div class="navbar">
  <a href="index.php">Home</a>
  <a href="candidates.php">Candidates</a>
  <a href="voting.php" class="active">Voting</a>
  <a href="results.php">Results</a>
</div>

<div class="content">
  <h2>Voting</h2>
  <p>Please select your candidate and click the Vote button.</p>

<?php
// Connect to MySQL
$conn = mysqli_connect("localhost", "root", "", "evoting");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the candidates from the database
$sql = "SELECT * FROM candidates";
$result = mysqli_query($conn, $sql);

// Loop through the candidates
while ($row = mysqli_fetch_array($result)) {
    ?>
    <div class="row">
      <div class="column">
        <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>" style="width:100%">
        <h3><?php echo $row['name']; ?></h3>
        <form action="vote.php" method="post">
          <input type="hidden" name="candidate_id" value="<?php echo $row['id']; ?>">
          <input type="submit" name="vote" value="Vote">
        </form>
      </div>
    </div>
    <?php
}

// Close the connection
mysqli_close($conn);
?>

</div>

</body>
</html>