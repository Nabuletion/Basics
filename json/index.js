var xyz = new XMLHttpRequest();
xyz.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        var result = JSON.parse(xyz.responseText);
        var output = '';
        for (var i = 0; i < result.length; i++) {
            output += '<tr><td>' + i + '</td><td>' + result[i].region + '</td><td>' + result[i].name.common + '</td><td>' + result[i].flag +
                '</td><td>' + result[i].capital + '</td></tr>';

        }
        document.getElementById('itm').innerHTML = output;
    }
};
xyz.open("GET", "countries.json", true);
xyz.send();