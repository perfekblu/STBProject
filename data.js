setInterval(async function getData() {
    try {
        //Get data sensor from database
        const response = await fetch('presult.php');
        if (!response.ok) throw new Error('Network response was not ok');
        const data = await response.json(); // Parses JSON response from PHP
        console.log(data);

        //Assign data to Element to be displayed
        document.getElementById('temp').innerHTML = `${data.temperature}°C`;
        document.getElementById('hum').innerHTML = `${data.humidity}%`;
        document.getElementById('gas').innerHTML = `${data.gas}PPM`;
        document.getElementById('tvoc').innerHTML = `${data.tvoc}PPB`;
        document.getElementById('aqi').innerHTML = `${data.aqi}`;
        document.getElementById('cap').innerHTML = `${data.capacity}%`;
        document.getElementById('time').innerHTML = `Created at: ${data.created_at}`;
        console.log("allo");
    } catch (error) {
        console.error('Fetch error:', error);
    }
},2000); //Refresh with new value every 2s

