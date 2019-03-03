

$(document).ready(function(){

  //===============================================
  // Events (Start)
  //===============================================

  $("#loader_container").animate({opacity : '0'});
  setTimeout(function(){
    $("#loader_container").css({"display" : 'none'});
  }, 500);
  get_module(); //Add all modules to the main page (+ the add_mod button)


//Add a module to the main page | WARNING: dynamically generated
  $("main").on('click', '#button_add_module', add_mod_on);
  //See -> https://stackoverflow.com/questions/6658752/click-event-doesnt-work-on-dynamically-generated-elements
  $("#close_module_window").click(add_mod_off);
  $("#add_module_submit").click(add_module);


//Modify a module
  $("main").on('click', '.action_modify', function(){
    let id = $(this).closest('.module').attr('id');
    modify_mod_on(id);
    $("#modify_module_window").click(modify_mod_off);
    $("#modify_module_submit").on('click', {id:id}, modify_module);
  });


//Delete a module
  $("main").on('click', '.action_delete', function(){
    let id = $(this).closest('.module').attr('id');
    delete_module(id);
  });

//Display settings
  $("#goto_settings_buttons").click(settings_on);
  $("#close_settings_window").click(settings_off);

//Close error POPUP
  $("#close_error").click(error_off);

//===============================================
// Events (End)
// Functions (Start)
//===============================================

//Get and generate all modules
  function get_module(){
    $.post('get_module.php',function(data){
      $('#main').html(data);
    });
  }


//Add a module to the database, and reload the main page
  function add_module(){
    let name = $("#add_module_name").val();
    let description = $("#add_module_description").val();
    let command = $("#add_module_command").val();
    let parameter = $("#add_module_parameter").is(":checked");
    let color = $("#add_module_select_color").val();
    $.post('send_module.php',{name:name, description:description, command:command, parameter:parameter, color:color}, function(data){
      error_on(data);
      $("#add_module_name").val('');
      $("#add_module_description").val('');
      $("#add_module_command").val('');
      $("#add_module_select_color").val('#FFFFFF');
      get_module(); //Refresh the modules on the main page
      add_mod_off(); //The popup menu disappear
    });
  return false;
  }


//Modify the module in the database, then reload the main page
  function modify_module(ident){
    let name = $("#modify_module_name").val();
    let description = $("#modify_module_description").val();
    let command = $("#modify_module_command").val();
    let parameter = $("#modify_module_parameter").is(":checked");
    let color = $("#modify_module_select_color").val();
    id = ident.data.id;
    $.post('modify_module.php',{id:id, name:name, description:description, command:command, parameter:parameter, color:color}, function(data){
      error_on(data);
      $("#modify_module_name").val('');
      $("#modify_module_description").val('');
      $("#modify_module_command").val('');
      $("#modify_module_select_color").val('#FFFFFF');
      get_module(); //Refresh the modules on the main page
      modify_mod_off(); //The popup menu disappear
    });
  return false;
  }


//Simply delete a module from the database, then refresh the modules on the main page
  function delete_module(id){
    $.post('delete_module.php',{id:id},function(id){
      $("#"+id).parent().animate({opacity : '0'});
      setTimeout(function(){
        get_module();
      }, 500)
    });
  }


//Display the modify module popup menu, and get all prefill all inputs with
//all old values from the database
  function modify_mod_on(id){
    $.post('get_module_to_modify.php',{id:id}, function(data){
      //error(data); Error to add
      let module_content = JSON.parse(data);
      $("#modify_module_name").val(module_content[1]);
      $("#modify_module_description").val(module_content[2]);
      $("#modify_module_command").val(module_content[3]);
      if(module_content[4] === "true"){
        $('#modify_module_parameter').prop('checked', true);
      } else{
        $('#modify_module_parameter').prop('checked', false);
      }
      $("#modify_module_select_color").val(module_content[5]);
    });
    $("#modify_module_menu").css({"display" : 'flex'});
    $("#modify_module_menu").animate({opacity : '1'});
  }


//The modify module popup menu disappear
  function modify_mod_off(){
    $("#modify_module_menu").animate({opacity : '0'});
    setTimeout(function(){
      $("#modify_module_menu").css({"display" : 'none'});
    }, 500);
  }


//The add module popup menu disappear
  function add_mod_off(){
    $("#add_module_menu").animate({opacity : '0'});
    setTimeout(function(){
      $("#add_module_menu").css({"display" : 'none'});
    }, 500)
  }


//The add module popup menu appear
  function add_mod_on(){
    $("#add_module_menu").css({"display" : 'flex'});
    $("#add_module_menu").animate({opacity : '1'});
  }


//See above
  function settings_off(){
    $("#settings_menu").animate({opacity : '0'});
    setTimeout(function(){
      $("#settings_menu").css({"display" : 'none'});
    }, 500)
  }

//See above
  function settings_on(){
    $("#settings_menu").css({"display" : 'flex'});
    $("#settings_menu").animate({opacity : '1'});
  }

  function error_on(data){
    if(data){
      $("#error_container").animate({top : '5px'});
      $("#error_container").css({"display" : 'flex'});
      $("#error").text(data);
    }
  }

  function error_off(data){
    $("#error_container").animate({top : '-200px'});
    setTimeout(function(){
      $("#error_container").css({"display" : 'none'});
    }, 500)
    $("#error").text();
  }



//===============================================
// Functions (End)
//===============================================

});
