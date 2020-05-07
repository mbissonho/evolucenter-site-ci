#! /bin/bash

wget https://github.com/bcit-ci/CodeIgniter/archive/3.1.11.zip
unzip 3.1.11.zip
cp -R CodeIgniter-3.1.11/system/ .
rm -rf CodeIgniter-3.1.11/ 3.1.11.zip*
