async function userinfo(str) {
    try {
        //Get user data from database
        const response = await fetch('fun.php?q='+str,true);
        if (!response.ok) throw new Error('Network response was not ok');
        const data = await response.text(); // Parses JSON response from PHP
        console.log(data);



    } catch (error) {
        console.error('Fetch Error: ', error);
    }
}