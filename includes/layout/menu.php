
<div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="../../images/logo.jpg" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span><?php
			   echo $login_session['email']; // needs editing
			?></span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">Accounts</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
              <a href="../../includes/login/logout.php" style="text-decoration:none;"><li class="mdl-menu__item">Logout</li></a>
            </ul>
          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800" id="nav-menu">
          <a class="mdl-navigation__link" href="../../v1/web/homePage.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Home</a>
          
          
          <a class="mdl-navigation__link" href="../../v1/web/userPage.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">person_pin</i>User</a>
          <a class="mdl-navigation__link" href="../../v1/web/newComerPage.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">person_add</i>New Comers</a>
          <a class="mdl-navigation__link" href="../../v1/web/visitationPage.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">drive_eta</i>Visitations</a>
		  <a class="mdl-navigation__link" href="../../v1/web/reportPage.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">book</i>Report</a>
          <a class="mdl-navigation__link" href="../../v1/web/aboutPage.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">info_outline</i>About</a>
          <a class="mdl-navigation__link" href="http://pcnlekki.tk" target="_blank"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">language</i>Visit Website</a>
          <div class="mdl-layout-spacer"></div>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i></a>
        </nav>
      </div>
