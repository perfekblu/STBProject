let x;
                        
setInterval(async function getData() {
    try {
        const response = await fetch('presult.php');
        if (!response.ok) throw new Error('Network response was not ok');
        const data = await response.json(); // Parses JSON response from PHP
        console.log(data);

        document.getElementById('temp').innerHTML = `${data.temperature}°C`;
        document.getElementById('hum').innerHTML = `${data.humidity}%`;
        document.getElementById('gas').innerHTML = `${data.gas}PPM`;
        document.getElementById('tvoc').innerHTML = `${data.tvoc}PPB`;
        document.getElementById('aqi').innerHTML = `${data.aqi}`;
        document.getElementById('cap').innerHTML = `${data.capacity}%`;
        document.getElementById('time').innerHTML = `Created at: ${data.created_at}`;
                    
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