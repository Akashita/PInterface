$(document).ready(function(){
  get_module();
  $("#add_module_form").submit(function(){
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
    });
  return false;
  });
  function get_module(){
    $.post('get_module.php',function(data){
      $('#main').html(data);
    });
  }
});
