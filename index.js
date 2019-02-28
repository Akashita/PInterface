
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
