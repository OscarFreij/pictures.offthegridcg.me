var listOfCells = Array();
var interval = 100;

document.getElementsByClassName('grid')[0].childNodes.forEach(element => {
    if (element.nodeType == Node.ELEMENT_NODE)
    {
        listOfCells.push(element);
    }
});

var loop = setInterval(() => {
    var allLoaded = true;
    listOfCells.forEach(element => {
        if (element.children[0].complete)
        {
            element.children[1].style.opacity = "0";
        }
        else
        {
            element.children[1].style.opacity = "1";
            allLoaded = false;
        }
    }); 
    if (allLoaded)
    {
        clearInterval(loop);
    }
}, interval);