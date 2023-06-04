
<!DOCTYPE html>
<html>
  <head>
    <title>simple calculator</title>
  </head>
  <body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <label for="num1">frist number:</label>
      <input type="text" id="num1" name="num1"><br><br>
      <label for="num2">Second number:</label>
      <input type="text" id="num2" name="num2"><br><br>
      <label for="operator">operator:</label>
      <select id="operator" name="operator">
        <option value="+">sum</option>
        <option value="-">minus</option>
        <option value="*">multiplication</option>
        <option value="/">Division</option>
      </select><br><br>
      <input type="submit" value="calculation">
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];

        switch ($operator) {
          case "+":
            $result = $num1 + $num2;
            break;
          case "-":
            $result = $num1 - $num2;
            break;
          case "*":
            $result = $num1 * $num2;
            break;
          case "/":
            $result = $num1 / $num2;
            break;
          default:
            echo "The operator is invalid";
        }

        echo "<h2>Result:</h2>";
        echo "<p>$num1 $operator $num2 = $result</p>";
      }
    ?>
  </body>
</html>
