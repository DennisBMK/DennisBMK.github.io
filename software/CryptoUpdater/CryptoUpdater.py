import time
from datetime import datetime
import cryptocompare

while True:
    btc = cryptocompare.get_price('BTC',curr='USD')
    btcusd = btc['BTC']
    eth = cryptocompare.get_price('ETH',curr='USD')
    ethusd = eth['ETH']

    now = datetime.now()

    print("Updated at:", now)

    print("BTC in USD: ", btcusd['USD'])

    print("ETH in USD: ", ethusd['USD'])

    time.sleep(15)