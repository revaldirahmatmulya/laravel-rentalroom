from pyA20.gpio import gpio
from pyA20.gpio import port
from time import sleep
import sys

def toggle_gpio(pa_number):
    gpio.init()
    gpio.setcfg(pa_number, gpio.OUTPUT)

    gpio.output(pa_number, gpio.LOW)
    sleep(1)
    gpio.output(pa_number, gpio.HIGH)


# Ambil argumen PA yang dikirim dari Laravel
pa_number = sys.argv[1]

# Panggil fungsi toggle_gpio() dengan argumen PA yang diterima
toggle_gpio(pa_number)

