#!/bin/bash
 
# --- name of the ZIP file (should be adjusted)
zip_file="bge_kleider.zip"
 
# --- get path of current script directory
script_dir=$(dirname $0)
 
# --- change in current script directory e.g. cause user and script directory mosstly different
cd ${script_dir}
 
# --- remove previous ZIP file
rm -f ${zip_file}
 
# create ZIP file and exclude .git .DS_Store plus the shell script self
zip -r ${zip_file} . -x "./.git/*" "./.DS_Store" "./createZip4WP.command"
