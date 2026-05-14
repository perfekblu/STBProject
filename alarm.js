let x;
let y;
                        
setInterval(async function getData() {
    try {
        //Get TVOC value from database
        const response = await fetch('presult.php');
        if (!response.ok) throw new Error('Network response was not ok');
        const data = await response.json(); // Parses JSON response from PHP
        console.log(data);
                    
        x = `${data.tvoc}`; //Assign value to var
        y = `${data.lcap}`;

    } catch (error) {
        console.error('Fetch error:', error);
    }

    //Display alarm popup if TVOC > 1000PPB
    if (x >= 1000) {
        document.getElementById("tvoc.alert").style.display = "";
    }
    else {
        document.getElementById("tvoc.alert").style.display = "none";
    }

    //Display alarm popup if trash FULL
    if (y == true) {
        document.getElementById("lid.alert").style.display = "";
    }
    else {
        document.getElementById("lid.alert").style.display = "none";
    }
},2000); //Poll every 2s to check TVOC

