let x;
                        
setInterval(async function getData() {
    try {
        const response = await fetch('presult.php');
        if (!response.ok) throw new Error('Network response was not ok');
        const data = await response.json(); // Parses JSON response from PHP
        console.log(data);
                    
        x = `${data.tvoc}`;

        } catch (error) {
            console.error('Fetch error:', error);
        }

        if (x >= 1000) {
            document.getElementById("alert").style.display = "";
        }
        else {
            document.getElementById("alert").style.display = "none";
        }
},2000);
                            