## piDisplay

### About

A project initially created to display and rotate through three sets of Logic Monitor graphs on a Raspberry Pi 4B driving three displays. One of which included a DisplayLink dock, the automatic configuration of which is also supported by this script if the `displaylink` service and `evdi` driver  are present.

Due to the performance penalties of making a Pi4 try to Ctrl+Tab 15+ URL's between three attached displays the script has since grown to support any Linux distribution which can start a graphical session and launch the script with it. This has been tested with Xfce4 on LightDM however shouldn't mind any X11 DM/WM as it does most of its manipulation with xdotool & xrandr which work anywhere.

### Features

* Timestampped logging to help with any debugging.
* Automated display-server restarts when it notices the active display count has changed.
* Login page detection for the first URL in an array for automated login handling. Currently supports LogicMonitor.
  * Because the login process for LM is generic alike many other implementations this function will soon be broadened to support *most* login pages (Where the page loads with the cursor ready to type into the username field).
  
#### Arguments & Configuration

`-keepres` / `-noreschange`

* Prevents the script from changing the display resolutions for testing scenarios.

`-nokill` / `-keepx`

* Prevents the script from restarting the display-manager service for testing scenarios.

`-dry`

* Implies `-keepres` and `-keepx`


  
#### Usage

The script can be started manually with a valid `config.json` which can be referenced from the `config.json.sample` provided.


##### Automated Usage

Install your favourite display-manager and configure a unprivileged user account for auto-login to your favourite Window Manager. Add this script as a startup parameter.


