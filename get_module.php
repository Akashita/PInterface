<?php
  $file = fopen('data/modules.csv', 'r');
  $file_content = array();

  while(! feof($file)){
    $file_content[] = fgetcsv($file);
  }
  fclose($file);
    foreach ($file_content as $module) {
      if(!empty($module)){
?>
   <div class="module">
     <div class="more_button">
       <div class="action_popup">
         <div class="actions">
           <div class="action_modify action_common" onclick="modify_mod_on(<?php echo($module[0]); ?>)">
             Modify
           </div>
           <div class="action_delete action_common" onclick="delete_module(<?php echo($module[0]); ?>)">
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
<?php echo($module[1]); ?>
     </div>
     <div class="module_description">
<?php echo($module[2]); ?>
     </div>
     <ul>
       <li>
         <input type="button" name="Execute" value="Execute" />
       </li>
<?php
if($module[4] == "true"){ ?>
       <li>
         <input type="text" placeholder="Parameter" />
       </li>
<?php } ?>
     </ul>
   </div>

<?php }} ?>

<div id="button_add_module" onclick="add_mod_on()"></div>