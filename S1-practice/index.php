<?php
echo '<style>';
?>
<?php
    include "./style.css";
?>
<?php
echo '</style>';
?>
</style>


<form action="result.php" method="post">
    <label for="">Name</label>
    <input class="fullname" type="text" name="fullname" id="">
    <br>
    <br>
    <label for="">Club you want to apply</label>
    <select class="club" name="club">
        <option value="football Club">Football Club</option>
        <option value="Robotic Club">Robotic Club</option>
        <option value="Swimming Club">Swimming Club</option>
        <option value="Running Club">RunningClub</option>
    </select>
    <br>
    <br>
    <label for="">Be time for you</label>
    <input class="Satuday" type="radio" name="time" id="" value="Satuday Mornings"> <label for="">Satuday Mornings</label>
    <input type="radio" name="time" id=""> <label for="" value="Satuday Afternoons">Satuday Afternoons</label><br>
    <input class="SundayMorning" type="radio" name="time" id="" value="Sunday Mornings"> <label for="">Sunday Mornings</label>
    <br>
    
    <label for="">Your skills </label>
    <table class="checkbox">

    <tbody>

      <tr>
        <td><input type="checkbox" name="checkbox1" value="the best coder">The best coder</td>
        <td><input type="checkbox" name="checkbox2" value="good in arts">Good in arts</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="checkbox3" value="a super star">A super star</td>
        <td><input type="checkbox" name="checkbox4" value="a crazy dancer">A crazy dancer</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="checkbox5" value="singer" >Singer</td>
        <td><input type="checkbox" name="checkbox6" value="good in design">Good in design</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="checkbox7" value="the best eater">The best eater</td>
        <td><input type="checkbox" name="checkbox8" value="good in speeches">Good in speeches</td>
      </tr>

    </tbody>
  </table>

    <button class="button" type="submit">Send</button>
</form>