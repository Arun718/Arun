#!/usr/bin/env python
import RPi.GPIO as gp
import time
def fun():
  gp.setmode(gp.BCM)
  gp.setup(27,gp.IN)
  input = gp.input(27)
  if(gp.input(27)):
    print "1"
  else:
    print "0"

fun()
