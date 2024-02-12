## piDisplay

### About

A project initially created to display and rotate through three sets of Logic Monitor graphs on a Raspberry Pi 4B driving three displays. One of which included a DisplayLink dock, the automatic configuration of which is also supported by this script if the `displaylink` service and `evdi` driver  are present.

Due to the performance penalties of making a Pi4 try to Ctrl+Tab 15+ URL's between three attached displays the script has since grown to support any Linux distribution which can start a graphical session and launch the script with it. This has been tested with Xfce4 on LightDM however shouldn't mind any X11 DM/WM as it does most of its manipulation with xdotool & xrandr which work anywhere.

### Features

* Easy to manage configuration with a sample file to get started.
* Automated restarts of the display-server service (if permitted) when a change in display count or death of a chromium instance are detected.
* Generic login page detection with an easy to follow config.json.sample for configuring one or more displays and additional site login page titles for automatic login handling.
* Flags for debugging, development and testing.
  
#### Arguments & Configuration

`-keepres` / `-noreschange`

* Prevents the script from changing the display resolutions for testing scenarios.

`-nokill` / `-keepx`

* Prevents the script from restarting the display-manager service for testing scenarios.

`-dry`

* Implies `-keepres` and `-keepx`

`-debug`

* Causes the script to log more noise for debugging purposes
  
#### Usage

The script can be started manually with a valid `config.json` which can be referenced from the `config.json.sample` provided.

If a particular page title has been configured for automatic login but has not got credentials set the script will fall back to the indexed display's credentials for that URL and once more to the global credentials in that order when more specific credentials have not been set.

##### Automated Usage

Install your favourite display-manager and configure a unprivileged user account for auto-login to your favourite Window Manager. Add this script to the user's graphical startup list or elsewhere.


