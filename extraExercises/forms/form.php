
<h2> Pls fill in the form below</h2>

<form action="form.php" method='post'>

<!-- field -->
<p>
    <label for="name">Name: </label>
    <input type="text" name="name" value="" />
</p>


<!-- drop-down list -->
<p> Which of our restaurants did you visit?
<select name="choice" id="">
    <option name="BG">BG</option>
    <option name="BE" selected="selected">BE</option>
    <option name="UK">UK</option>
</select>

</p>

<!-- checkboxes -->
<p> Which menu did you eat?
<input type="checkbox" name="food" value="lunch" id="lunch"/> <label for="lunch">Lunch menu</label>
<input type="checkbox" name="food" value="dinner" id="dinner" /> <label for="dinner">Dinner menu</label>
</p>

<!-- radio buttons -->
<p>
Did you enjoy your experience visiting our restaurant?
<input type="radio" name="enjoy" value="yes" checked="checked" /> <label for="oui">Oui</label>
<input type="radio" name="enjoy" value="no" /> <label for="non">Non</label>
</p>

<!-- text box -->
<label for="message">Do you want to leave us comments?</label> <br>
<textarea name="message" id="" cols="30" rows="10">
Your message here...
</textarea> <br>

<!-- checkbox -->
<input type="checkbox" name="case" id="case"/>
<label for="case">I agree to the terms and conditions</label>



<!-- hidden values -->
<input type="hidden" name="pseudo" value="Alex21"/>

<!-- SUBMIT all data -->
<p>
<input type="submit" value="Submit" checked="checked">
</p>
</form>

