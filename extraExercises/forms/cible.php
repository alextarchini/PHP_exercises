<p>Bonjour !</p>

<p>I know your name. Your name is  <?php echo htmlspecialchars($_POST['name']); ?> !</p>
<!-- htmlspecialchars: preents users from injecting JS code and messing page -->

<p>
These are your comments: <?php echo $_POST["message"]; ?>
</p>

<p>
You are from: <?php echo $_POST['choice']; ?>
</p>

<p>
You want to eat: <?php echo $_POST['food']; ?>
</p>


<p>
You like chips: <?php echo $_POST['frites']; ?>
</p>

<p>
You agree the conditions: <?php echo $_POST['case']; ?>
</p>

<!-- hidden value -->
<?php echo $_POST['name']; ?>



<p> If you want to change the info, <a href='form.php'>Click here </a>
 to go back the page form.php
</p>