#!/bin/bash


for i in `ls -l | grep -E 'Ch|App' | awk '{print $NF}'`
do
    dir=${i}
    cd ${dir}
    for j in `ls *.php`
    do
        file=${j}
        sed -i 's@?>@@' ${file}
    done
    cd ..
done