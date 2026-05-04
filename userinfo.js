async function userinfo(str) {
    try {
        //Get user data from database
        const response = await fetch('userinfo.php');
        if (!response.ok) throw new Error('Network response was not ok');
        const data = await response.json(); // Parses JSON response from PHP
        console.log(data);

        //document.getElementById("usertxt").innerHTML = `${data.fun}`;
  
        // Instead of a while loop, JS typically uses forEach for arrays
        data.forEach(user => {
            const div = document.createElement('div');
            div.innerHTML = `<strong>${user.name}</strong> - ${user.email}`;
            container.appendChild(div);
        });



    } catch (error) {
        console.error('Fetch Error: ', error);
    }
}