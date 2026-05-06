async function userinfo(str) {
    try {
        let data = new URLSearchParams();
        data.append(`q`, str);
        console.log(data);

        const options = {
            method: `GET`,
            body: data
        };
        //Get user data from database
        const response = await fetch('userinfo.php',options);
        if (!response.ok) throw new Error('Network response was not ok');
        const data = await response.json(); // Parses JSON response from PHP
        console.log(data);

        //document.getElementById("usertxt").innerHTML = `${data.fun}`;
  
        // Instead of a while loop, JS typically uses forEach for arrays
        /*data.forEach(user => {
            const div = document.createElement('div');
            div.innerHTML = `<strong>${user.name}</strong> - ${user.email}`;
            container.appendChild(div);
        });*/



    } catch (error) {
        console.error('Fetch Error: ', error);
    }
}