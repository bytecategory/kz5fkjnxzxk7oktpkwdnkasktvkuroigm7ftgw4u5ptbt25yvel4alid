#!/bin/bash
FILE="new.blackip.txt"
while I= read -r ip
do
    ufw deny from "I"
done < "FILE"

