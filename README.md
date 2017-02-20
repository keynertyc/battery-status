## Battery Status

Steps:

1. `git clone git@github.com:keynertyc/battery-status.git`
2. cd battery-status
3. Edit variables in batteryStatus.php:

- $to
- $headers

4. Edit your crontab, example:

`* * * * * /usr/bin/php /Users/Keyner/battery-status/batteryStatus.php`
    
Enjoy & Share
