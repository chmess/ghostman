#!/bin/bash

GHOSTMAN_PATH=/home/ghost/ghostman
GHOST_PATH=/home/ghost/ghostcore
HTML_PATH=$GHOSTMAN_PATH/webserver/public_html

"$GHOSTMAN_PATH"/bin/ghostman.sh status |grep -v version |grep -v chainz > "$HTML_PATH"/ghostman-status.tmp
"$GHOST_PATH"/ghost-cli getwalletinfo | grep watchonly |grep -v version >> "$HTML_PATH"/ghostman-status.tmp
"$GHOSTMAN_PATH"/bin/ghostman.sh stakingnode stats |grep -v version >> "$HTML_PATH"/ghostman-status.tmp
