
<!DOCTYPE html>
<html>
  <head>
    <title>ماشین حساب</title>
  </head>
  <body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <label for="num1">عدد اول:</label>
      <input type="text" id="num1" name="num1"><br><br>
      <label for="num2">عدد دوم:</label>
      <input type="text" id="num2" name="num2"><br><br>
      <label for="operator">عملگر:</label>
      <select id="operator" name="operator">
        <option value="+">جمع</option>
        <option value="-">تفریق</option>
        <option value="*">ضرب</option>
        <option value="/">تقسیم</option>
      </select><br><br>
      <input type="submit" value="محاسبه">
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
            echo "عملگر نامعتبر";
        }

        echo "<h2>نتیجه:</h2>";
        echo "<p>$num1 $operator $num2 = $result</p>";
      }
    ?>
  </body>
</html>
