let user = {
    "name": "Dawg",
    "food": "apple",
    "color": "blue"
}


fetch("test.php", {
    "method": "POST",
    "headers": {
        "Content-Type": "application/json; charset=utf-8"
        },
        "body": JSON.stringify(user)
}).then(function(response){
    return response.json();
}).then(function(data){
    console.log(data);
}) 