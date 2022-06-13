import time
from datetime import datetime
import cryptocompare
import os

# libraries
import matplotlib.pyplot as plt
import matplotlib.animation as animation
from matplotlib import style
import numpy as np
import os
from forex_python.converter import CurrencyRates

# get path of python file https://stackoverflow.com/questions/5137497/find-current-directory-and-files-directory
myDir = os.path.dirname(os.path.realpath(__file__))

style.use('fivethirtyeight')

'''
c = CurrencyRates()

new_Curr = c.get_rate('USD', 'DKK')
'''

i=int(0)

# Live update plot found at https://pythonprogramming.net/python-matplotlib-live-updating-graphs/
fig = plt.figure()
ax1 = fig.add_subplot(1,1,1)

xar = []
yar = []

def animate(i, xar, yar):

    btc = cryptocompare.get_price('BTC',curr='USD')
    btcusd = btc['BTC']
    my_BTC = round(btcusd['USD'])

    now = datetime.now()
    date_time = now.strftime("%d/%m/%Y @ %H:%M:%S")
    
    i=int(i+1)
    
    #Anvendes til at bestemme hvor mange dele x ticks indeles i.
    if i >=20:
        if (i % 2):
            j=int(i/4)
        else:
            j=int((i-1)/4)
    else:
        j=2

    xar.append(date_time)
    yar.append(my_BTC)
    #yar.append(my_BTC * new_Curr)

    ax1.clear()
    ax1.plot(xar,yar)
    
    # Format plot
    plt.xticks(xar[::j], rotation=45, ha='right')
    plt.subplots_adjust(bottom=0.30)
    plt.title('BTC Price in USD')
    plt.xlabel('Time')
    #Pause before next pull
    plt.pause(20)


ani = animation.FuncAnimation(fig, animate, fargs=(xar, yar), interval=1000)
plt.show()