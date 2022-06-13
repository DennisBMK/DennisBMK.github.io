//Function that controls Motiware work section
function motiwareOpenFunction() {
    document.getElementById("motiware").innerHTML = 'Motiware GUI <br> <br> This was an idea to develop an application that could notify me to make sure i would do the task i had set it up to. The main idea was to insert a task and a timeframe of how long i wanted to do that task, the software should then push notifications about it. <br> <a href="../software/Motiware.zip" download>Download</a> <br> <a onclick="motiwareCloseFunction()">Read less</a>';
}
function motiwareCloseFunction() {
    document.getElementById("motiware").innerHTML = 'Motiware GUI <a onclick="motiwareOpenFunction()">Read more</a>';
}
//Function that controls IOT Lamp work section
function IOTLampOpenFunction() {
    document.getElementById("IOTLamp").innerHTML = 'IoT Lamp <br> <br> I had for a long time wanted to create a lamp i could control through Wi-Fi, a lot like other commercial IoT products out in the market. I started by controlling an NodeMCU to turn on or off one single light LED, when i got that under control i researched how to control a LED-strip through the Blynk application. Now because i had it all working through Blynk i wanted to get it to work without an application which would enable me to controle it through a normal browser. <a onclick="IOTLampCloseFunction()">Read less</a>';
}
function IOTLampCloseFunction() {
    document.getElementById("IOTLamp").innerHTML = 'IoT Lamp <a onclick="IOTLampOpenFunction()">Read more</a>';
}
//Function that controls UniInstaller work section
function uniinstallerOpenFunction() {
    document.getElementById("UniInstaller").innerHTML = "UniInstaller <br> <br> The UniInstaller app is simply an installer, that can be customized to install different kind of software. I wanted to make this UniInstaller because i'm making different kinds of software and an easy installer is a priority. <br> <a href='../software/UniInstaller/UniInstaller.exe' download>Download</a> <br> <a onclick='uniinstallerCloseFunction()'>Read less</a>";
}
function uniinstallerCloseFunction() {
    document.getElementById("UniInstaller").innerHTML = 'UniInstaller <a onclick="uniinstallerOpenFunction()">Read more</a>';
}
//Function that controls Yfinance work section
function YfinanceOpenFunction() {
    document.getElementById("Yfinance").innerHTML = "Yfinance-StockBot <br> <br> When i started the stockbot project my intention was to make a stock trading Machine Learning to trade my stocks. I got it to a point where it was a stock information software and then left it, i might start developing it again some day but for now it is just an stock informer. <br> <a href='../software/Yfinance/Yfinance-StockBot.py' download>Download</a> <br> <a onclick='YfinanceCloseFunction()'>Read less</a>";
}
function YfinanceCloseFunction() {
    document.getElementById("Yfinance").innerHTML = 'Yfinance-StockBot <a onclick="YfinanceOpenFunction()">Read more</a>';
}
//Function that controls CryptoUpdater work section
function CryptoUpdaterOpenFunction() {
    document.getElementById("CryptoUpdater").innerHTML = "CryptoUpdater <br> <br> Much like Yfinance this python script gets the current value but its cryptocurrencies instead of stocks. The main cryptocurrencies it gets information about is Bitcoin and Ethereum, which by January 2021 is the most popular ones. <br> <a href='../software/CryptoUpdater/CryptoUpdater.py' download>Download</a> <br> <a onclick='CryptoUpdaterCloseDAFunction()'>Læs mindre</a>";
}
function CryptoUpdaterCloseDAFunction() {
    document.getElementById("CryptoUpdater").innerHTML = 'CryptoUpdater <a onclick="CryptoUpdaterOpenFunction()">Read more</a>';
}

// The equivallent functions in danish are listed beneath

function motiwareOpenDAFunction() {
    document.getElementById("motiware").innerHTML = 'Motiware GUI <br> <br> This was an idea to develop an application that could notify me to make sure i would do the task i had set it up to. The main idea was to insert a task and a timeframe of how long i wanted to do that task, the software should then push notifications about it. <br> <a href="../software/Motiware.zip" download>Download</a> <br> <a onclick="motiwareCloseDAFunction()">Læs mindre</a>';
}
function motiwareCloseDAFunction() {
    document.getElementById("motiware").innerHTML = 'Motiware GUI <a onclick="motiwareOpenDAFunction()">Læs mere</a>';
}
//Function that controls IOT Lamp work section
function IOTLampOpenDAFunction() {
    document.getElementById("IOTLamp").innerHTML = 'IoT Lamp <br> <br> I had for a long time wanted to create a lamp i could control through Wi-Fi, a lot like other commercial IoT products out in the market. I started by controlling an NodeMCU to turn on or off one single light LED, when i got that under control i researched how to control a LED-strip through the Blynk application. Now because i had it all working through Blynk i wanted to get it to work without an application which would enable me to controle it through a normal browser. <a onclick="IOTLampCloseDAFunction()">Læs mindre</a>';
}
function IOTLampCloseDAFunction() {
    document.getElementById("IOTLamp").innerHTML = 'IoT Lamp <a onclick="IOTLampOpenDAFunction()">Læs mere</a>';
}
//Function that controls UniInstaller work section
function uniinstallerOpenDAFunction() {
    document.getElementById("UniInstaller").innerHTML = "UniInstaller <br> <br> The UniInstaller app is simply an installer, that can be customized to install different kind of software. I wanted to make this UniInstaller because i'm making different kinds of software and an easy installer is a priority. <br> <a href='../software/UniInstaller/UniInstaller.exe' download>Download</a> <br> <a onclick='uniinstallerCloseDAFunction()'>Læs mindre</a>";
}
function uniinstallerCloseDAFunction() {
    document.getElementById("UniInstaller").innerHTML = 'UniInstaller <a onclick="uniinstallerOpenDAFunction()">Læs mere</a>';
}
//Function that controls Yfinance work section
function YfinanceOpenDAFunction() {
    document.getElementById("Yfinance").innerHTML = "Yfinance-StockBot <br> <br> When i started the stockbot project my intention was to make a stock trading Machine Learning to trade my stocks. I got it to a point where it was a stock information software and then left it, i might start developing it again some day but for now it is just an stock informer. <br> <a href='../software/Yfinance/Yfinance-StockBot.py' download>Download</a> <br> <a onclick='YfinanceCloseDAFunction()'>Læs mindre</a>";
}
function YfinanceCloseDAFunction() {
    document.getElementById("Yfinance").innerHTML = 'Yfinance-StockBot <a onclick="YfinanceOpenDAFunction()">Læs mere</a>';
}
//Function that controls CryptoUpdater work section
function CryptoUpdaterOpenDAFunction() {
    document.getElementById("CryptoUpdater").innerHTML = "CryptoUpdater <br> <br> Much like Yfinance this python script gets the current value but its cryptocurrencies instead of stocks. The main cryptocurrencies it gets information about is Bitcoin and Ethereum, which by January 2021 is the most popular ones. <br> <a href='../software/CryptoUpdater/CryptoUpdater.py' download>Download</a> <br> <a onclick='CryptoUpdaterCloseDAFunction()'>Læs mindre</a>";
}
function CryptoUpdaterCloseDAFunction() {
    document.getElementById("CryptoUpdater").innerHTML = 'CryptoUpdater <a onclick="CryptoUpdaterOpenDAFunction()">Læs mere</a>';
}