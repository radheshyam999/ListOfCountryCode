//  function LoadDoc(){
// var xmlhttpR = new XMLHttpRequest();
// xmlhttpR.open(GET,code.json) = function(){
// xmlhttpR.onload()
// }
 
// }



function loadDoc () { // decalered function here
    var x = " ";
    var CraetRow = document.getElementById("acessData");
    var xhttp = new XMLHttpRequest(); // initliz  here xmlhttp for acessing this is a javascript  api
    xhttp.onreadystatechange = function () { // i am exsesing that api here //
        if (xhttp.readyState == 4 && xhttp.status == 200) {  // checking it is every thing is ok 
            object = JSON.parse(xhttp.response);   // json parasing here 
           

            gettingIdHere = document.getElementById("demo");
           
                 //CreatTable();   
            for (let i = 0; i <= object.length; i++) {
                rowCraeted = CraetRow.insertRow(i);
                CreatedCell1 = rowCraeted.insertCell(0);
                CreatedCell2 = rowCraeted.insertCell(1);
                CreatedCell3 = rowCraeted.insertCell(2);
                CreatedCell4 = rowCraeted.insertCell(3);
                CreatedCell1.innerHTML = object[i].name;
                CreatedCell2.innerHTML = object[i].flag;
                CreatedCell3.innerHTML = object[i].code;
                CreatedCell4.innerHTML = object[i].dial_code;
                // gettingIdHere.innerHTML += object[i].name + "<br>" + object[i].flag + "<x>" + object[i].code + "<r>" + object[i].dial_code;
        }
     
    
        }
            
    };
        xhttp.open("GET", "js/code.json", true); // method using for acessing file and using method
        xhttp.send();  // xssing data
    }
    
             
             
        
      