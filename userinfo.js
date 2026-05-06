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
        const response = await fetch('userinfo.php',options);
        if (!response.ok) throw new Error('Network response was not ok');
        const data = await response.json(); // Parses JSON response from PHP
        console.log(data);

        //document.getElementById("usertxt").innerHTML = `${data.fun}`;
  
        function createTable(){
            let table = document.createElement('table');
            table.setAttribute('border', '1');

            let headerRow = document.createElement('tr');
            Object.keys(data[0]).forEach(key => {
                let th = document.createElement('th');
                th.appendChild(document.createTextNode(key));
                headerRow.appendChild(th);
            });
            table.appendChild(headerRow);


            data.forEach(item => {
                let row = document.createElement('tr');

                Object.values(item).forEach(value => {
                    let td = document.createElement('td');
                    td.appendChild(document.createTextNode(value));
                    row.appendChild(td);
                });
                table.appendChild(row);
            });

            document.body.appendChild(table);
        }

        createTable();


    } catch (error) {
        console.error('Fetch Error: ', error);
    }
}