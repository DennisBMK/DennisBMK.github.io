//Function that controls Frontend Dev service section
function frontendOpenFunction() {
    document.getElementById("frontend").innerHTML = "Frontend Development <br> <br> Since i studied at the HTX High-school i have been a little hooked on making software products. Some of the stuff i enjoy is a beautiful designed website therefor i like to design in CSS with animations combined with JavaScript. My personal website where you're reading this is a great example of the developing i can make. <br><br> <b>Price:</b> 60.00 €/hr <br> <a onclick='frontendCloseFunction()'>Read less</a>";
}
function frontendCloseFunction() {
    document.getElementById("frontend").innerHTML = 'Frontend Development <a onclick="frontendOpenFunction()">Read more</a>';
}
//Function that controls Backend Dev service section
function backendOpenFunction() {
    document.getElementById("backend").innerHTML = "Backend Development <br> <br> Backend is also something i really enjoy to make sure a website have great user features with an database as MySQL. I've developed with PHP and JavaScript but my strongest side of these two is at PHP as that's the one i have most experience with. <br><br> <b>Price:</b> 60.00 €/hr <br> <a onclick='backendCloseFunction()'>Read less</a>";
}
function backendCloseFunction() {
    document.getElementById("backend").innerHTML = 'Backend Development <a onclick="backendOpenFunction()">Read more</a>';
}
//Function that controls 3D-Printing service section
function printingOpenFunction() {
    document.getElementById("printing").innerHTML = "3D-Printing <br> <br> A couple of years ago i bought a 3D printer i have played around with since to try and optimize. I can do prototypes with it. <br><br> <b>Price:</b> 2.00 €/cm&sup3 <br><a href='https://www.makexyz.com/printer/dennis73'>See my service at MakeXYZ<a><br><a onclick='printingCloseFunction()'>Read less</a>";
}
function printingCloseFunction() {
    document.getElementById("printing").innerHTML = '3D-Printing <a onclick="printingOpenFunction()">Read more</a>';
}
//Function that controls CAD designing service section
function cadOpenFunction() {
    document.getElementById("cad").innerHTML = "CAD designing <br> <br> I've made a lot of designs in CAD designing software like SolidWorks and Inventor. If you need some parts designed i can do it but my rate is without the CAD software license meaning you have to provide the CAD software you want me to use. <br><br> <b>Price:</b> 80.00 €/hr <br> <a onclick='cadCloseFunction()'>Read less</a>";
}
function cadCloseFunction() {
    document.getElementById("cad").innerHTML = 'CAD designing <a onclick="cadOpenFunction()">Read more</a>';
}