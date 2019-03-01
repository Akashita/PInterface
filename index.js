get_module();

function add_module(){
  let name = $("#add_module_name").val();
  let description = $("#add_module_description").val();
  let command = $("#add_module_command").val();
  let parameter = $("#add_module_parameter").is(":checked");
  let color = $("#add_module_select_color").val();
  $.post('send_module.php',{name:name, description:description, command:command, parameter:parameter, color:color}, function(data){
    $("#add_module_name").val(''); //On reinitialise les champs
    $("#add_module_description").val('');
    $("#add_module_command").val('');
    $("#add_module_parameter").val('');
    $("#add_module_select_color").val('');
    get_module();
    add_mod_off();
  });
return false;
}


function get_module(){
  $.post('get_module.php',function(data){
    $('#main').html(data);
  });
}

function modify_module(id){
  let name = $("#modify_module_name").val();
  let description = $("#modify_module_description").val();
  let command = $("#modify_module_command").val();
  let parameter = $("#modify_module_parameter").is(":checked");
  let color = $("#modify_module_select_color").val();
  $.post('modify_module.php',{id:id, name:name, description:description, command:command, parameter:parameter, color:color}, function(data){
    console.log(data);
    $("#modify_module_name").val(''); //On reinitialise les champs
    $("#modify_module_description").val('');
    $("#modify_module_command").val('');
    $("#modify_module_parameter").val('');
    $("#modify_module_select_color").val('');
    get_module();
    modify_mod_off();
  });
return false;
}

function delete_module(id){
  //Posibilité de rajouter une anim ... a voir
  $.post('delete_module.php',{id:id},function(){
    get_module();
  });
}

function modify_mod_on(id){

//  $.post('modify_module.php',{id:id, name:name, description:description, command:command, parameter:parameter, color:color}, function(data){
//    $("#modify_module_name").val(''); //On reinitialise les champs
//    $("#modify_module_description").val('');
//    $("#modify_module_command").val('');
//    $("#modify_module_parameter").val('');
//    $("#modify_module_select_color").val('');
//  });
  $("#modify_module_menu").css({"display" : 'flex'});
  $("#modify_module_menu").animate({opacity : '1'});
}

function modify_mod_off(){
  $("#modify_module_menu").animate({opacity : '0'});
  setTimeout(function(){
    $("#modify_module_menu").css({"display" : 'none'});
  }, 1000);
}


function add_mod_on(){
  $("#add_module_menu").css({"display" : 'flex'});
  $("#add_module_menu").animate({opacity : '1'});
}

function add_mod_off(){
  $("#add_module_menu").animate({opacity : '0'});
  setTimeout(function(){
    $("#add_module_menu").css({"display" : 'none'});
  }, 1000)
}

function settings_on(){
  $("#settings_menu").css({"display" : 'flex'});
  $("#settings_menu").animate({opacity : '1'});
}

function settings_off(){
  $("#settings_menu").animate({opacity : '0'});
  setTimeout(function(){
    $("#settings_menu").css({"display" : 'none'});
  }, 1000)
}
