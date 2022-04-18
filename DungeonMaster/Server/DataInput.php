<?php
include('/var/www/html/Server/LoginRedirect.php');
?>


<html>

  <head lang='en'>
    <meta charset='utf-8'>
  </head>

  <body>
    <header>
    </header>

    <select name='itemList' id='itemList'>
      <option>Status Types</option>
      <option>Skills</option>
      <option>Classes</option>
      <option>Feats</option>
      <option>Spells</option>
      <option>Abilities</option>
      <option>Items</option>
      <option>Creatures</option>
      <option>Templates</option>
      <option>Races</option>
    </select>

    <p id='name'>Name</p>
    <input type='text' class='status' id='Name' name='Name' maxlength="128">

    <p id='type'>Type</p>
    <input type='text' class='status' id='Type' name='Type' maxlength="64">

    <p id='description'>Description</p>
    <textarea class='status' id='Description' name='Description' maxLength='1024'></textarea>

  </body>
</html>
