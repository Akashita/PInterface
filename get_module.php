<?php
  $database = new SQLite3("data/db.sqlite");
  $database->exec("CREATE TABLE IF NOT EXISTS modules (id INTEGER PRIMARY KEY, name varchar(255), description varchar(255), command varchar(255), parameter boolean, color character)");
  $result = $database->query('SELECT * FROM modules');
  while ($row = $result->fetchArray()){ //Tant qu'il reste des lignes
?>
<div class="color_container" style="background-color: <?php echo($row['color']) ?>;">
   <div class="module" id="<?php echo($row['id']); ?>">
       <div class="more_button">
         <div class="action_popup">
           <div class="actions">
             <div class="action_modify action_common">
               Modify
             </div>
             <div class="action_delete action_common">
               Delete
             </div>
           </div>
         </div>
         <div class="more_button_common more_1"></div>
         <div class="more_button_common more_2"></div>
         <div class="more_button_common more_3"></div>
       </div>
       <div class="black_blur"></div>
       <div class="module_title">
  <?php echo($row['name']); ?>
       </div>
       <div class="module_description">
  <?php echo($row['description']); ?>
       </div>
       <ul>
         <li>
           <input type="button" name="Execute" value="Execute" />
         </li>
  <?php
  if($row['parameter']){ ?>
         <li>
           <input type="text" placeholder="Parameter" class="module_parameter" />
         </li>
  <?php } ?>
       </ul>
     </div>
   </div>

<?php } ?>

<div id="button_add_module"></div>
