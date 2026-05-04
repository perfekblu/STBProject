async function userinfo(str) {
    try {
        //Get user data from database
        const response = await fetch('fun.php');
        if (!response.ok) throw new Error('Network response was not ok');
        const data = await response.json(); // Parses JSON response from PHP
        console.log(data);

        document.getElementById("usertxt").innerHTML = `${data}`;



    } catch (error) {
        console.error('Fetch Error: ', error);
    }
}