<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PInterface</title>
  <link rel="stylesheet" href="style/nav.css">
  <link rel="stylesheet" href="style/main.css">
  <link rel="stylesheet" href="style/footer.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="index.js"></script>
</head>
<body>
  <!-- Main page -->
  <div id="main_page">
    <nav>
      <div id="nav_buttons">
        <img src="img/logo.png" alt="logo" id="nav_logo"/>
        <div class="nav_button">
          HOME
        </div>
        <div class="nav_button" id="yolo">
          ABOUT
        </div>
      </div>
      <div id="settings_buttons">
        <div id="goto_settings_buttons">
          <img id="goto_settings_logo" src="img/settings.png" alt="settings" />
          SETTINGS
        </div>
      </div>
    </nav>
    <main id="main">
      <!-- PHP generated -->
    </main>
    <footer>
      <div id="footer_content">
        <ul>
          <li>
            Github : www.github.io.....
          </li>
          <li>
            Documentation : www.github.io.....
          </li>
          <li>
            Licence : http://www.gnu.org/licenses/gpl-3.0.html
          </li>
        </ul>
        <div class="vertical_line"></div>
        <ul>
          <li>
            Created by Swan and Gaby Launay
          <li>
            akashita@protonmail.com
          </li>
          <li>
            gaby...@mail.com
          </li>
        </ul>
      </div>
    </footer>
  </div>
  <!-- Add module popup -->
  <div id="add_module_menu" class="pop_module_menu" style="display: none;">
    <div>
      <form method="post" id="add_module_form" class="pop_module_form">
        <div id="close_module_window" class="pop_module_window">
          X
        </div>
        <ul id="add_module_list" class="pop_module_list">
          <li>
            <div class="pop_module_title">Add a module to the main page</div>
          </li>
          <li>
            <input type="text" placeholder="Module name" id="add_module_name" class="pop_module_name"/>
          </li>
          <li>
            <input type="text" placeholder="Description" id="add_module_description" class="pop_module_description"/>
          </li>
          <li>
            <input type="text" placeholder="Enter a command" id="add_module_command" class="pop_module_command"/>
          </li>
          <li>
            <div class="pop_module_title">
              Enable parameter input
            </div>
            <input type="checkbox" id="add_module_parameter" value="true" class="switch" class="pop_module_parameter"/>
          </li>
          <li>
            <div class="pop_module_title">
              Choose the module color
            </div>
            <div id="add_module_select_color_container" class="pop_module_select_color_container">
              <input type="color" id="add_module_select_color" class="pop_module_select_color" value="#FFFFFF"/>
            </div>
          </li>
        </ul>
        <div id="add_module_submit" class="pop_module_submit" value=""></div>
      </form>
    </div>
  </div>
  <!-- modify module popup -->
  <div id="modify_module_menu" class="pop_module_menu" style="display: none;">
    <div>
      <form method="post" id="modify_module_form" class="pop_module_form">
        <div id="modify_module_window" class="pop_module_window" >
          X
        </div>
        <ul id="modify_module_list" class="pop_module_list">
          <li>
            <div class="modify_module_title" class="pop_module_title">Modify a module in the main page</div>
          </li>
          <li>
            <input type="text" placeholder="Module name" id="modify_module_name" class="pop_module_name"/>
          </li>
          <li>
            <input type="text" placeholder="Description" id="modify_module_description" class="pop_module_description"/>
          </li>
          <li>
            <input type="text" placeholder="Enter a command" id="modify_module_command" class="pop_module_command"/>
          </li>
          <li>
            <div class="modify_module_title" class="pop_module_title">
              Enable parameter input
            </div>
            <input type="checkbox" id="modify_module_parameter" class="pop_module_parameter switch"/>
          </li>
          <li>
            <div class="modify_module_title" class="pop_module_title">
              Choose the module color
            </div>
            <div id="modify_module_select_color_container" class="pop_module_select_color_container">
              <input type="color" id="modify_module_select_color" class="pop_module_select_color" value="#FFFFFF"/>
            </div>
          </li>
        </ul>
        <div id="modify_module_submit" class="pop_module_submit" value=""></div>
      </form>
    </div>
  </div>
  <!-- Settings popup -->
  <div id="settings_menu">
    <div id="settings_window">
      <div id="close_settings_window">X</div>
      <ul id="settings_list">
        <li id="settings_title">
          Settings
        </li>
      </ul>
    </div>
  </div>
  <div id="loader">
    <div id="loader_info">WARNING : This website needs JavaScript to work, so if you get stuck on this page please check if your browser supports JavaScript.</div>
    <div id="wheel">
  </div>
</body>
</html>
