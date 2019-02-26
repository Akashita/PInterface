
$("#button_add_module").click(function(){
  $("#add_module_menu").css({"display" : 'flex'});
  $("#add_module_menu").animate({opacity : '1'});
});

$("#close_module_window").click(function(){
  $("#add_module_menu").animate({opacity : '0'});
  setTimeout(function(){
    $("#add_module_menu").css({"display" : 'none'});
  }, 1000)
})

$("#settings_buttons").click(function(){
  $("#settings_menu").css({"display" : 'flex'});
  $("#settings_menu").animate({opacity : '1'});
});

$("#close_settings_window").click(function(){
  $("#settings_menu").animate({opacity : '0'});
  setTimeout(function(){
    $("#settings_menu").css({"display" : 'none'});
  }, 1000)
})
