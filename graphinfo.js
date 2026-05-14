async function userinfo(str) {
    try {
        let dataq = new URLSearchParams();
        dataq.append(`q`, str);
        console.log(dataq);

        const options = {
            method: `POST`,
            body: dataq
        };
        //Get user data from database
        const response = await fetch('graphselect.php',options);
        if (!response.ok) throw new Error('Network response was not ok');
        let data = await response.json(); // Parses JSON response from PHP
        console.log(data);

        //document.getElementById("usertxt").innerHTML = `${data.fun}`;
  



    } catch (error) {
        console.error('Fetch Error: ', error);
    }
    
}