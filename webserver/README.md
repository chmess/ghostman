Manage your "ghostman" web server.
![WebMonitor.png](https://github.com/chmess/ghostman/blob/master/webserver/WebMonitor.png?raw=true)

Step 1
------
Setup Cron Job

'*/10 * * * * /bin/bash /home/ghost/ghostman/webserver/scripts/cron.sh'

Make sure to set the correct path to the 'cron.sh' file based on your setup.


Step 2
------
Firewall

The webserver comes with a basic built-in firewall. You can configure it inside the '/webserver/' directory.
'hosts.allow' file

* Add one IP Address per line to whitelist
* DEFAULT POLICY = DENY
* Set hosts.allow file to empty to change DEFAULY POLICY = ALLOW


Step 3
------
Start the web-server!

usage: './webserver <command> [<hostname>:<port>]'

Available commands:

  start     Starts built-in web server server on specified hostname:port, default is 0.0.0.0:8080  
  stop      Stops the built-in web server
  restart   Stops and Starts on previously specified hostname:port
  status    Status of the process
