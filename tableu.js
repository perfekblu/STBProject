        let myTable = document.querySelector('#table');

        const data = [
            { name: 'Rahul', age: 25, city: 'New Delhi' },
            { name: 'Vijay', age: 30, city: 'Muzaffarpur' },
            { name: 'Gaurav', age: 22, city: 'Noida' },
        ];

        function createTable(){
            let table = document.createElement('table');
            

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