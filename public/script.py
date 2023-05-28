from pyA20.gpio import gpio
from pyA20.gpio import port
from time import sleep

gpio.init()
gpio.setcfg(port.PA7, gpio.OUTPUT)

while True:
    gpio.output(port.PA7, gpio.HIGH)
    sleep(1)
    gpio.output(port.PA7, gpio.LOW)
    sleep(1)
