# https://towardsdatascience.com/free-stock-data-for-python-using-yahoo-finance-api-9dafd96cad2e
import time
import yfinance as yf
import matplotlib.pyplot as plt
import seaborn

# https://stackoverflow.com/questions/23102833/how-to-scrape-a-website-which-requires-login-using-python-and-beautifulsoup
import mechanize
from bs4 import BeautifulSoup
#import urllib2
import urllib.request as urllib2 
#import cookielib
import http.cookiejar as cookielib

'''def login():
    

    cj = cookielib.CookieJar()
    br = mechanize.Browser()
    br.set_cookiejar(cj)
    br.open("https://www.saxotrader.com/Login/da")

    br.select_form(nr=0)
    br.form['field_userid'] = 'YourID'
    br.form['field_password'] = 'YourPSWD'
    br.submit()

    print (br.response().read())

    if new_url == "https://www.saxotrader.com/d#":
        #Do this
        print(br.form['field_userid'])
    elif new_url == "https://www.saxotrader.com/d/trading/open-positions":
        #Do this
        #Find
        print(br.form['field_userid'])'''
'''
    URL = 'https://www.saxotrader.com/Login/da'

    req = Request(URL , headers={'User-Agent': 'Mozilla/5.0'})

    webpage = urlopen(req).read()
    page_soup = soup(webpage, "html.parser")

    user = int(12717730)
    password = str(28859199Dd)

    user_elem = page_soup.find_all('input', class_='trackClicks a-page-link human-ref')
    pass_elem = page_soup.find_all('input', class_='trackClicks a-page-link human-ref')
    login_elem = page_soup.find_all('input', class_='trackClicks a-page-link human-ref')'''


#def analyze(ticker):

    # get stock data
    # find their value in 1, 3 and 5 years
    # choose the stock with most value
    # if valuable enough buy stock

# get stock info
while True:
    #American stocks
    msft = yf.Ticker("MSFT")
    tsla = yf.Ticker("TSLA")
    goog = yf.Ticker("GOOG")

    #Danish stocks
    danske = yf.Ticker("DANSKE.CO")
    vestas = yf.Ticker("VWS.CO")
    maersk = yf.Ticker("MAERSK-B.CO")
    carls = yf.Ticker("CARL-B.CO") 
    
    print('Microsoft stock info:        Tesla stock info:       Google stock info:')
    print('Ask                          Ask                     Ask')
    print(str(msft.info['ask']) + '                     ' + str(tsla.info['ask']) + '                   ' + str(goog.info['ask']))
    print('Bid                          Bid                     Bid')
    print(str(msft.info['bid']) + '                     ' + str(tsla.info['bid']) + '                   ' + str(goog.info['bid']))
    print('\n')

    print('Danske Bank stock info:      Vestas stock info:      Mærsk stock info:')
    print('Ask                          Ask                     Ask')
    print(str(danske.info['ask']) + '                       ' + str(vestas.info['ask']) + '                 ' + str(maersk.info['ask']))
    print('Bid                          Bid                     Bid')
    print(str(danske.info['bid']) + '                       ' + str(vestas.info['bid']) + '                 ' + str(maersk.info['bid']))
    print('\n')

    """
    print('Microsoft stock info:')
    print('Ask')
    print(msft.info['ask'])
    print('Bid')
    print(msft.info['bid'])
    print('\n')

    print('Tesla stock info:')
    print('Ask')
    print(tsla.info['ask'])
    print('Bid')
    print(tsla.info['bid'])
    print('\n')

    print('Google stock info:')
    print('Ask')
    print(goog.info['ask'])
    print('Bid')
    print(goog.info['bid'])
    print('\n')

    print('Danske Bank stock info:')
    print('Ask')
    print(danske.info['ask'])
    print('Bid')
    print(danske.info['bid'])
    print('\n')

    print('Vestas stock info:')
    print('Ask')
    print(vestas.info['ask'])
    print('Bid')
    print(vestas.info['bid'])
    print('\n')

    print('Mærsk stock info:')
    print('Ask')
    print(maersk.info['ask'])
    print('Bid')
    print(maersk.info['bid'])
    print('\n')"""

    print('Carlsberg stock info:')
    print('Ask')
    print(carls.info['ask'])
    print('Bid')
    print(carls.info['bid'])
    print('\n')

    time.sleep(30)

# get historical market data
#hist = msft.history(period="5d")

# Plot everything by leveraging the very powerful matplotlib package
#hist['Close'].plot(figsize=(16, 9))

# Download stock data then export as CSV
#data_df = yf.download("AAPL AMZN FB GOOG TSLA", start="2020-02-01", end="2020-03-20")
#data_df.to_csv('aapl.csv')